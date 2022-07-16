<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];

// 1
function user_count(array $arr): int
{   
    $cnt = 0;
    foreach ($arr as $value) {
        $cnt++;
    }
    return $cnt;
}

//echo user_count($nums);
// echo count($nums);


// 2
function sum_array(array $arr)
{   $qty = 0;
    foreach ($arr as $key => $value) {
        $qty += $value;
    }
    return $qty;
}

echo sum_array($nums);
//echo array_sum($nums); 


// 3
function test()
{   
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i; // array_push($arr, $i)
    }
    return $arr;
}

//debug(test());
debug(range(1, 100));

