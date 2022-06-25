<?php error_reporting(-1);

$result = exec("/bin/ping -c 1 -W 1 google.by"); 
echo "result=".$result."\n";