<?php error_reporting(-1);

function debug($data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script>";
$str4 = "Привет!\nВ первых строках своего пистма...";

// echo strlen($str);
// echo mb_strlen($str2, 'UTF-8');

//$data = explode(', ', $str2);
//debug($data);

//echo implode(', ', $data);

// echo htmlspecialchars($str3, ENT_QUOTES, double_encode: false);
// echo htmlentities($str3, double_encode: false);

//echo ltrim($str);
//echo rtrim($str);
//echo trim($str, '');

//echo nl2br($str4, false);

//debug(str_split($str, 3));

//var_dump(substr($str, -7, 5));
//var_dump(substr($str, -7, 5));
