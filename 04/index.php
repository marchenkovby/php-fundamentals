<?php

// $тест = 1;

$title = 'Lesson 4!';
$winniethepooh = 'Hello, I am Winnie!';
$winniethepooh = "Hello, I'am Winnie!";
// Backslash
$winniethepooh = "Hello, I'am Winnie. \"Stroke with quotes\"";

$fruit = 'orange';
$winnie_the_pooh = "{$fruit}";

// camelCase (JavaScript)
// $winnieThePooh

//$winnie_the_pooh

/*
Vars:
$a-b...
$abc1

$_
$_abc1
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
<?php $title = 'Lesson 4'; ?>
<h1><?= $title; ?></h1>
<p><?= $winniethepooh; ?></p>
</body>
</html>