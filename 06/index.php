<?php error_reporting(-1);

// PHP - dynamic typing
// bool - the simplest data type

// Const true case-insensitive
//$bool = TRUE;
//$bool = True;
$bool = true;
$bool2 = false;

//var_dump($bool2);

// true = 1
// false = empty line
//echo $bool2;

//var_dump((boolean)0, (bool)'', (bool)123);

// int or integer
$int1 = 0;
$int2 = 1;

//var_dump($int1, $int2);
//var_dump(PHP_INT_MAX);
//var_dump(9223372036854775808);

//var_dump((int)"Hello");
//var_dump((int)"10"); // Numeric string
//var_dump((int)"     10    "); // Numeric string with spaces
//var_dump((int)"123Hello"); // Prefix numeric string
//var_dump((int)"     123Hello   "); // Prefix numeric string with spaces
//var_dump((int)"Hello123"); // Non-numeric string

//var_dump("10" + 20); // 30
//var_dump("10str" + 20); // 30 with warning (non-critical error)
//var_dump("str10" + 20); // Function not exec (critical error)

$floats = 1_234.567; // Separator only . (dot), no , (comma)

//var_dump(123 + 10.2);

var_dump(0.1 + 0.2); // float(0.30000000000000004)

var_dump((0.1 * 10 + 0.2 * 10) / 10); // float(0.3)
