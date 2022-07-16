<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

error_reporting(-1);

$db = mysqli_connect('localhost', 'root', 'root', 'world') or die('Error connection');

//$res = mysqli_query($db, "SELECT `Code`, `Name` FROM `country` LIMIT 10");

//debug(mysqli_fetch_all($res, MYSQLI_ASSOC));

//debug(mysqli_fetch_assoc($res));

/*while ($row = mysqli_fetch_assoc($res)) {
    echo "Code country: {$row['Code']}, Country: {$row['Name']}<br>";
}*/

$name = "Kuznecov";
$age = 25;
//$name = mysqli_real_escape_string($db ,$name);
//$res = mysqli_query($db, "INSERT INTO `test` (name) VALUES ('$name')");

//$query = sprintf("INSERT INTO `test` (name, age) VALUES ('%s', %d)", mysqli_real_escape_string($db, $name), (int)$age);

//var_dump(mysqli_query($db, $query));

//$query = sprintf("UPDATE test SET name = '%s', age = %d WHERE id = 3",
//    mysqli_real_escape_string($db, $name),
//    (int)$age);
//
//var_dump(mysqli_query($db, $query));

$query = "DELETE FROM test WHERE id = 3";

var_dump(mysqli_query($db, $query));
