<?php error_reporting(-1);

// Arrays

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, ];

//for ($i = 0; $i <= 9; $i++) {
//    echo $nums[$i] . '<br>';
//}

//$i = 0;
//while ($i <= 9) {
//    echo $nums[$i] . '<br>';
//    $i++;
//}

// foreach

//foreach ($nums as $k => $v) {
//    echo " Key: $k, Value: $v <br>";
//}

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 5
    ],
    [
        'title' => 'Samsung',
        'price' => 70,
        'qty' => 1
    ],
    [
        'title' => 'LG',
        'price' => 73,
        'qty' => 3
    ]
];

//foreach ($goods as $good) {
//    echo "Title: {$good['title']} <br>";
//    echo "Price: {$good['price']} <br>";
//    echo "Qty: {$good['qty']} <br>";
//    echo '<hr>';
//}

//for ($i = 0; $i <= 1; $i++ ){
//    //$goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
//    $goods[$i]['price'] *= 2;
//}

foreach ($goods as &$good) {
    $good['price'] *= 2;
}

echo '<pre>' . print_r($goods, 1) . '</pre>';
