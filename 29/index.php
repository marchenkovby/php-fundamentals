<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

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

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2021,
    'speed' => 220,
    'wheels' => 4,
];

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];

// echo count($goods, 1);

// debug(array_count_values($nums)e);

// var_dump(array_key_exists('brand', $car));

// var_dump(in_array(2021, $car));

// var_dump(array_search(3, $nums));

debug($array_keys($car));