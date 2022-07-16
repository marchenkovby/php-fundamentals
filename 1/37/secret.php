<?php

error_reporting(-1);

session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout') {
    unset($_SESSION['auth']);
    $_SESSION['res'] = 'You logout';
    header("location: index.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret page</title>
</head>
<body>

<h1>This page view authorization users</h1>

<?php if (!empty($_SESSION['auth'])): ?>
    <p><a href="?do=logout">Logout</a></p>
<?php else: ?>
    <h2>You are not authorized</h2>
<?php endif; ?>

<ul>
    <li><a href="index.php">Index page</a></li>
</ul>

<?php

if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}

?>

</body>
</html>
