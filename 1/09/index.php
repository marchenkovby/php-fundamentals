<?php error_reporting(-1);

//$a = 2 + 3 * 5; // 17
//$a = (2 + 3) * 5; // 25
//$a = 2 + (3 * 5); // 17

//$a = $b = $c // $a = ($b=$c)

// Combined operator
//$a = 2;
//$a = $a + 3; // 5
//$a += 3;
//$a -= 3; // $a = $a - 3; 
// */ %

//$a = 2;
//$a = $a + (3 * 5); // 17
//$a += 3 * 5;
//var_dump($a);

// Assigment by value
// $a = 3;
// $b = $a;

// var_dump($a, $b);

// $a = 5;

// var_dump($a, $b);

// Assigment by referance
$a = 3;
$b =& $a;

var_dump($a, $b);

$a = 5;

var_dump($a, $b);