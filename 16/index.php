<?php error_reporting(-1);


// Task 1
echo "<select>";
$year = 1990;
while ($year <= 2021) {
    echo "<option>{$year}</option>";
    $year++;
}
echo "<select>";

// Task 2
echo "<table border=\"1\" width=\"100%\">";

$x = 1;
while ($x < 10) {
    echo "<tr>";
    $y = 1;
    while ($y < 10) {
        echo "<td>" . $x * &y . "</td>";
        $y++;
    }
    echo "</tr>";
    $x++''
}

echo "</table>";