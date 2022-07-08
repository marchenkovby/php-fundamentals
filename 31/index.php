<?php error_reporting(-1);

function debug($data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('@Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВ первых строках своего пистма...";

echo strlen($str2);
