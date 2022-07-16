<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// Language constructs (языковые конструкции): echo, print, list(), array(), eval()

// echo ( string ...$expressions ) : void - пустота, ничего не возвращает

// print ( string $expression ) : int

//echo 'Test 1', 'Test 2', 'Test 3';

//print 'Test 1'; // print ('Test 1');

//var_dump(print 'test');
// var_dump(echo 'test'); // parse error

$light = 'yellow';

//if ($light == 'green') {
//    echo 'You can go now';
//} else {
//    echo 'You can\'t go now';
//}

if ($light == 'green') {
    echo 'You can go now';
} elseif ($light == 'yellow') { // иначе если
    echo 'Get yeady';
    if (2 > 3) {
        echo '2 > 3';
    }
    else {
        echo '2 < 3';
    }
} else {
    echo 'You can\'t go now';
}

// It's better to use these control structure "elseif"
