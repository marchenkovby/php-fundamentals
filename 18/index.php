<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// switch

$i = 3;

// if ($i == 1) {
//     echo 1;
// } elseif ($i == 2) {
//     echo 2;
// } elseif ($i == 3) {
//     echo 3;
// } elseif ($i == 4) {
//     echo 4;
// } else {
//     echo 5;
// }

switch ($i) {
    case 1:
        echo 1;
        //break;
    case 2:
        echo 2;
        //break;
    case 3:
        echo 3;
        //break;
    case 4:
        echo 4;
        break;
    default:
        echo 5;
}