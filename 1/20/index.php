<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// match

$i = 3;

//$res = match ($i) {
//    1 => 'One',
//    2 => 'Two',
//    3 => 'Three',
//    4 => 'Four',
//    5 => 'Five'
//};

//$res = match ($i) {
//    1, 2, 3 => 'Var < 4',
//    4 => 'Four',
//    default => 'Var > 4'
//};

$grade = 10;
//$res = match (true) {
//    $grade >= 10 => 'excellenet',
//    $grade >= 7 => 'good',
//    $grade >= 4 => 'bad',
//    default => 'very bad'
//};

$res = match (true) {
    $grade >= 10 && $grade < 13 => 'excellenet',
    $grade >= 7  && $grade < 10 => 'good',
    $grade >= 4  && $grade < 7 => 'bad',
    default => 'very bad'
};

echo $res;
