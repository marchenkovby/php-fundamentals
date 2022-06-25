<?php error_reporting(-1);

$result = exec("/bin/ping google.by"); 
echo "result=".$result."\n";