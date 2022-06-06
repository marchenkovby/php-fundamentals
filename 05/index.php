<?php error_reporting(-1); 

// First version declaration const
define("CONST_1", "value 1");

echo CONST_1;

// Second version declaration const
// Only top page
const CONST_2 = "value 2";

var_dump(CONST_2);

const NAME = 'Jonh';

//echo "Hello, NAME";
//echo "Hello, $NAME";
//echo "Hello, {NAME}";

// WARNING. CONST not change!
//define("CONST_1", "new value 1");

// Can't override
//$this = 'Test';

var_dump(get_defined_constants());