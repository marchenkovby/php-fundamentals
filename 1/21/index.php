<?php error_reporting(-1);

// Arrays

//// 1 version
//$arr1 = array();
//
//// 2 version
//$arr2 = [];

//var_dump($arr1, $arr2);

//$arr1 = [
//    1 => 'Petrov',
//    3 => 'Petrov',
//];
//
////var_dump($arr1);
//
//$arr1[5] = 'Sidorov';
//$arr1[5] =  'Doe';
//
//echo '<pre>' . print_r($arr1, 1) . '</pre>';
//echo $arr1['5'];
//
//echo $arr1{1};

// associative arrays
//$goods = [
//    [
//        'title' => 'Nokia',
//        'price' => 100,
//        'qty' => 5
//    ],
//    [
//        'title' => 'Samsung',
//        'price' => 70,
//        'qty' => 1
//    ]
//];
//
//echo $goods[0]['title'];

//echo '<pre>' . print_r($goods, 1) . '</pre>';

//$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//for ($i = 1; $i < 51; $i++ ) {
//    $nums[] = $i;
//}
//echo '<pre>' . print_r($nums, 1) . '</pre>';

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
    ]
];

for ($i = 0; $i <= 1; $i++ ){
    echo 'Title: ' . $goods[$i]['title'] . '<br>';
    echo 'Price: ' . $goods[$i]['price'] . '<br>';
    echo 'Qty: ' . $goods[$i]['qty'] . '<br>';
    echo '<hr>';
}
