<?php error_reporting(-1);

//psalm.dev

// User-defined functions

// function sum($a, $b, ...$nums)
// {
//     $res = $a + $b;
    
//     foreach($nums as $num) {
//         $res += $num;
//     }
//     echo $res;
// }

// sum(1, 2, 5, 6,);

/* function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test(); */

/* function sum(int $a, int $b, int $c)
{
    echo $a + $b + $c;
}

sum(1, 2.5, 3); */

/* function sum(int $a, int $b, int $c)
{
    return $a + $b + $c;
}

echo $res = sum(1 ,2.7, 3); */

//var_dump($res);

/* function sum($a, $b, $c): int
{
    return $a + $b + $c;
}

sum(1, 2.5, 3); */


/* function sum($a, $b, $c): float
{
    return $a + $b + $c;
}

echo sum(1, 2.5, 3); */

function sum($term1, $term2, $factor)
{
    return ($term1 + $term2) * $factor;
}

echo sum(1, 2, 3);