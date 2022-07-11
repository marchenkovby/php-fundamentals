<?php

error_reporting(-1);

session_start();

//var_dump($_SESSION);

if (!empty($_SESSION['count'])) {
    echo "Visits page: {$_SESSION['count']}";
}

?>

<a href="index.php">index.php</a>
