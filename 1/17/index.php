<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// Loop: for

// for ($i = 0; $i < 10; $i++) {
//     echo $i;
// }

// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

// for ($i = 20; $i >= 1; $i--) {
//     echo "{$i}<br>";
// }

// echo "<select>";
// $year = 1900;
// while ($year <= 2021) {
//     echo "<option>{$year}</option>";
//     $year++;
// }
// echo "<select>";

echo "<select>";
for ($year = 1900; $year<= 2021; $year++) {
    echo "<option>{$year}</option>";
}
echo "<select>";

// echo "<table border=\"1\" width=\"100%\">";
// $x = 1;
// while ($x < 10) {
//     echo "<tr>";
//     $y = 1;
//     while ($y < 10) {
//         echo "<td>{$y}*{$x} = " . $y * $x . "</td>";
//         $y++;
//     }
//     echo "</tr>";
//     $x++;
// }
// echo "</table>";

echo "<table border=\"1\" width=\"100%\">";
for ($x = 1; $x < 10; $x++) {
    echo "<tr>";
    for ($y = 1; $y < 10; $y++) {
        echo "<td>{$y}*{$x} = " . $y * $x . "</td>";
    }
    echo "</tr>";
}
echo "</table>";