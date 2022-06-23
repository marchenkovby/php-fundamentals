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

function get_count(...$arr)
{
    // $qty = 0;
    foreach ($arr as $k => $v) {
        echo $arr[$k] . '<br>';
    }
    //var_dump($arr);
}

get_count($arr);