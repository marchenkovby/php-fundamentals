<?php error_reporting(-1);

// Task 1

// Seconds in an hour
$hour = 60 * 60;

// Seconds in a day
$day = $hour * 24;

// Seconds in a week
$week = $day * 7;

//echo $hour  . PHP_EOL .  $day  . PHP_EOL . $week  . PHP_EOL;
var_dump($hour, $day, $week);


// Task 2

$x = 60;

//// Seconds in an hour
//$x *= 60;
//echo $x . PHP_EOL;
//
//// Seconds in a day
//$x *= 24;
//echo $x  . PHP_EOL;
//
//// Seconds in a week
//$x *= 7;
//echo $x  . PHP_EOL;

var_dump($x *= 60, $x *= 24, $x *= 7);
