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

// 1
function get_count(array $arr): int
{
    $qty = 0;
    foreach ($arr as $k) {
        $qty++;
    }
    return $qty;
}

echo get_count($arr);
echo '<br>';
echo get_count($goods);

// 2 

function get_table($tr, $td) 
{
    $table = 'echo "<table border=\"1\" width=\"100%\">';
    for ($x = 1; $x < $tr; $x++) {
        $table .= "<tr>";
        for ($y = 1; $y < $td; $y++) {
            $table .= "<td>{$y}*{$x} = " . $y * $x . "</td>";
        }
        $table .= "</tr>";
    }
    return $table;
}

echo get_table(5, 5);