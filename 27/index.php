<?php error_reporting(-1);

function get_table($tr, $td) 
{
    $table = '<table border=\"1\" width=\"100%\">';
    for ($x = 1; $x <= $tr; $x++) {
        $table .= "<tr>";
        for ($y = 1; $y <= $td; $y++) {
            $table .= "<td>{$y}*{$x} = " . $y * $x . "</td>";
        }
        $table .= "</tr>";
    }
    return $table;
}

echo get_table(5, 7);