<?php error_reporting(-1);

// Arrays

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// for ($i = 0; $i <= 10; $i++) {
//     if ($nums[$i] % 2) {
//         continue;
//     }
//     echo $nums[$i] . "<br>";
// }

// for ($i = 0; $i <= 10; $i++) {
//     if (!($nums[$i] % 2)) {
//         echo $nums[$i] . "<br>";
//     }
// }

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10
    ],
    [
        'title' => 'Sony',
        'price' => 120,
        'qty' => 7
    ],
    [
        'title' => 'LG',
        'price' => 105,
        'qty' => 15
    ]
];

for ($i = 0; $i <= 2; $i++) {
   echo "Title: {$goods[$i]['title']} <br>";
   echo "Price: {$goods[$i]['price']} <br>";
   echo "Qty: {$goods[$i]['qty']} <br>";
   echo '<hr>';
}