<?php error_reporting(-1);

// User-defined functions


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,]

function get_count(...$arr)
{
    $qty = 0;
    foreach ($arr as $k => $v) {
        $qty++
    }
    return $qty;
}