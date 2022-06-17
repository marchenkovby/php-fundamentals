<?php error_reporting(-1);

echo "<select>";
$year = 1990;
while ($year <= 2021) {
    echo "<option>{$year}</option>";
    $year++;
}
echo "<select>";