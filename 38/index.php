<?php

error_reporting(-1);

/*setcookie('test1', 'test1', path: '/');
setcookie('test2', 'test2', ['path' => '/']);
setcookie('test3', 'test3', ['path' => '/', 'expires' => time() + 10]);
setcookie('test4', 'test2', path: '/', expires_or_options: time() + 3600);*/

/*setcookie('test1', 'test1', time() - 3600);
setcookie('test3', '', time() - 3600);

var_dump($_COOKIE);*/

if (isset($_GET['do']) && $_GET['do'] = 'reset') {
    setcookie('count', '', time() - 3600, '/');
    header('Location: index.php');
    exit;
}

isset($_COOKIE['count']) ? setcookie('count', ++$_COOKIE['count'], time() + 3600, '/') : setcookie('count', 1, time() + 3600, '/');

echo "You visit pages: " . ($_COOKIE['count'] ?? 1);

echo '<p><a href="?do=reset">Reset</a></p>';
