<?php error_reporting(-1);

////Logical operators
/// Logical operators are not case-sensitive: AND = and = And and etc

//// Logical operator And: "&&" ("and")
//// True if both vars are true
//$a = (3 == 3) && (3 < 2); // true && false
//var_dump($a); // false
//
//// Logical operator "and" has lower priority
//// assigment operator "="
//$a = (3 == 3) and (3 < 2); // true && false
//var_dump($a); // true
//
//
//// Logical operator Or: "||" ("or")
//$a = (2 == 3) || (3 > 2); // false || true
//var_dump($a); // true
//
//// Logical operator "or" has lower priority
//// assigment operator "="
//$a = (2 == 3) or (3 > 2); // false || true
//var_dump($a); // false

//// It's better to use these logical operators: "&&" and "||"
//
//// Logical operator Not: "!"
//var_dump(2 > 3); // false
//var_dump(!(2 > 3)); // true



//// String operators
//
//// String operator Concatenation: (".")
//
//echo "<p>Hello 1</p>" . PHP_EOL . "<p>Hello 2</p>" . PHP_EOL;

//$name= 'Jonh';
//
//echo 'Hello, ' . $name;

//$hi = 'Hello, ';
//echo $hi .= 'world!';
