<?php error_reporting(-1);

// Control structures (Управляющие конструкции)

// continue and break

// continue

// $i = 1;
// while ($i < 10) {
//     if (!($i % 2)) {
//         $i++;
//         continue;
//     }
//     echo "{$i}<br>";
//     $i++;
// }

// for ($i = 0; $i <= 20; $i++) {
//     if ($i % 2) {
//        continue;
//     }
//     echo "{$i}<br>";
// }

//$a = 3;
//$b = 5;
//var_dump($a, $b);
//echo "<br>";
//
//$b = $a + $b; // 8
//$a = $b - $a; // 5
//$a = $a - $b; // 5
//var_dump($a, $b);

//echo "<table border=\"1\" width=\"100%\">";
//for ($x = 1; $x < 10; $x++) {
//    echo "<tr>";
//    for ($y = 1; $y < 10; $y++) {
//        if ($y == 5) {
//            continue 2;
//        }
//        echo "<td>{$y}</td>";
//    }
//    echo "</tr>";
//}
//echo "</table>";

$i = 1;
while (true) {
    echo "$i";
    if ($i == 5) {
        echo "<--- number found";
        break;
    }
    echo "<br>";
    $i++;
}
