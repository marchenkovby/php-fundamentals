<?php

function debug($data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function registration(): bool
{
    global $pdo;

    $login = !empty($_POST['login']) ? trim($_POST['login']) :  '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) :  '';

    if (empty($login) || empty($pass)) {
        $_SESSION['errors'] = 'Name or pass are required';
        return false;
    }

    $res = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login = ?");
    $res->execute([$login]);
    if ($res->fetchColumn()) {
        $_SESSION['errors'] = 'Name use';
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $res = $pdo->prepare("INSERT INTO users (login, pass) VALUES (?, ?)");
    if($res->execute([$login, $pass])) {
        $_SESSION['success'] = 'Registration OK';
        return true;
    } else {
        $_SESSION['errors'] = 'Registration not OK';
        return false;
    }


}

function login(): bool
{
    global $pdo;

    $login = !empty($_POST['login']) ? trim($_POST['login']) :  '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) :  '';

    if (empty($login) || empty($pass)) {
        $_SESSION['errors'] = 'Name or pass are required';
        return false;
    }

    $res = $pdo->prepare("SELECT * FROM users WHERE login = ?");
    $res->execute([$login]);

    if (!$user = $res->fetch()) {
        $_SESSION['errors'] = 'Name or pass with errors';
        return false;
    }

    if (!password_verify($pass, $user['pass'])) {
        $_SESSION['errors'] = 'Name or pass with errors';
        return false;

    } else {
        $_SESSION['success'] = 'Authorization OK';
        $_SESSION['user']['name'] = $user['login'];
        $_SESSION['user']['id'] = $user['id'];
        return true;
    }
}

function save_message(): bool
{
    global $pdo;

    $message = !empty($_POST['message']) ? trim($_POST['message']) : '';

    if (!isset($_SESSION['user']['name'])) {
        $_SESSION['errors'] = 'Authorization required';
        return false;
    }

    if (empty($message)) {
        $_SESSION['errors'] = 'Text message empty';
        return false;
    }

    $res = $pdo->prepare(("INSERT INTO messages (name, message) VALUES (?, ?)"));
    if ($res->execute([$_SESSION['user']['name'], $message])) {
        $_SESSION['success'] = 'Message add';
        return true;
    } else {
        $_SESSION['errors'] = 'Error';
        return false;
    }
}

function get_messages(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM messages");
    return $res->fetchAll();
}

