<?php error_reporting(-1);

// User-defined functions

function sum($a, $b, ...$nums)
{
    $res = $a + $b;
    
    foreach($nums as $num) {
        $res += $num;
    }
    echo $res;
}

sum(1, 2, 5, 6,);