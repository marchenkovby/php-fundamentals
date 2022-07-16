<?php error_reporting(-1);

function debug($data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВ первых строках своего пистма...";

$str = 'Hello';
$substr = 'l';

function str_count($str, $substr)
{
    return substr_count($str, $substr);
}

//echo str_count($str, $substr);

function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}

//var_dump(no_space(' Hello, world! '));

function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);
    return (int) implode('', $digits);
}

echo var_dump(max_number(123));
