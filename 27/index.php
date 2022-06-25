<?php error_reporting(-1);

$host="192.168.0.104";

exec("ping -c 4 " . $host, $output, $result);

print_r($output);

if ($result == 0)

echo "Ping successful!";

else

echo "Ping unsuccessful!";