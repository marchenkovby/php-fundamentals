<?php

error_reporting(-1);

session_start();

$login = 'admin';
$password = '$2y$10$4gkqsB3g9yOzo9HM98N1k.w/MfCzlffA01F9qhTj4aQYuad/M1Msm';


if(!empty($_POST)) {
    if ($_POST['login'] == $login && password_verify($_POST['password'], $password)) {
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Success';
        header("Location: secret.php");
        exit;
    } else {
        $_SESSION['res'] = 'Error';
        header("Location: index.php");
        die;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index page</title>
</head>
<body>

<h1>This page view all users</h1>

<ul>
    <li><a href="secret.php">Secret page</a></li>
</ul>

<?php

if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}

?>

<form method="post">
    Login: <input type="text" name="login">
    Password: <input type="password" name="password">
    <button>Login</button>
</form>

</body>
</html>
