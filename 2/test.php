<?php

$a = true;
$b = true;

$c = true;
$d = false;

if ($a or $b) {
    echo 'OK<br>';
} else {
    echo 'NO<br>';
}

if ($c xor $d) {
    echo 'OK<br>';
} else {
    echo 'NO<br>;
}