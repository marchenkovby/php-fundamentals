<?php error_reporting(-1);

// Types

// NULL
// NULL if:
// - $a = null;
// - $a
// - unset()
$price = 10;
//var_dump($price);


// Operators

// Ternary operator "?:"
//$light = 'green';

//if ($light == 'green') {
//    echo 'You can go now';
//} else {
//    echo 'You can\'t go now';
//}

//echo ($light == 'green') ? 'You can go now' : 'You can\'t go now';

//echo $price ? $price : 'unknown price';

//echo $price ?: 'unknown price';
echo $price >= 10 ?: 'unknown price';
