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
