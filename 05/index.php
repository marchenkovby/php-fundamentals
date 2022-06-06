<?php error_reporting(-1); 

// WARNING. CONST not change!

// First version declaration const
define("CONST_1", "value 1");

echo CONST_1;

// Second version declaration const
// Only top page
const CONST_2 = 'value 2';

var_dump(CONST_2);

?>
