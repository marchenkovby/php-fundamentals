<?php error_reporting(-1);

// Arrays

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// for ($i = 0; $i <= 10; $i++) {
//     if ($nums[$i] % 2) {
//         continue;
//     }
//     echo $nums[$i] . "<br>";
// }

for ($i = 0; $i <= 10; $i++) {
    if (!($nums[$i] % 2)) {
        echo $nums[$i] . "<br>";
    }
}