<?php

// $тест = 1;

$title = 'Lesson 4!';
$winniethepooh = 'Hello, I am Winnie!';
$winniethepooh = "Hello, I'm Winnie!";
// Backslash
$winniethepooh = "Hello, I'm Winnie. \"Stroke with quotes\"";

$fruit = 'orange';
//$winnie_the_pooh = "Hello, I'm Winnie. I have 1 $fruit";

$winnie_the_pooh = "Hello, I am Winnie. I have 1 $fruits";


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
<p><?= $winnie_the_pooh; ?></p>
</body>
</html>