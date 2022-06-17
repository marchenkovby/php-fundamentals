<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// Loop: While

// CRTL + SHIFT + ENTER
// $i = 1;
// while ($i <= 1000) {
//     echo "{$i}<br>";
//     $i = $i + 1; // $i++ or $i += 1;
// }

echo "<table border=\"1\" wdth=\"100%\">";

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
        $td = 1;
        while ($td <= 20) {
            echo "<td>{$td}</td>";
            $td++;
        }
    echo "</tr>";
    $tr++;
}

echo "</table>"