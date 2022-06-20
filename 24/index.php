<?php error_reporting(-1);

// User-defined functions

// function test() 
// {
//     echo '<p>Hello, World</p>';
// }

// test();
// test();
// test();


function hello($name = 'guest') // argument or parametr
{
    echo "<p>Hello, {$name}</p>";
}

hello();