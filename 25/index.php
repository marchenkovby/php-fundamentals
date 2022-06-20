<?php error_reporting(-1);

// User-defined functions

function sum(...$nums)
{
    $res = 0;
    foreach($nums as $num) {
        $res += $num;
    }
    echo $res;
}

sum(1, 2, 3, 4, 5,);