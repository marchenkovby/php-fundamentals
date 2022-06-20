<?php error_reporting(-1);

// User-defined functions

// function test() 
// {
//     echo '<p>Hello, World</p>';
// }

// test();
// test();
// test();


function hello($x) // argument or parametr
{
    echo "<p>Hello, {$x}</p>";
}

$name = 'Jonh';
hello($name);