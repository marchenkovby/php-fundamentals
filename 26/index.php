<?php error_reporting(-1);

// User-defined functions

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

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

// function get_count(...$arr)
// {
//     $qty = 0;
//     foreach ($arr as $k) {
//         $qty += $k;
//     }
//     return $qty;
// }

// echo get_count($arr);
// echo '<br>';
// echo get_count($goods);

function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);