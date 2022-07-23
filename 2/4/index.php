<?php

error_reporting(-1);

require_once 'classes/Car.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car('black', 4, 180, 'volvo');
//$car2 = new Car('black', 4, 180, 'bmv');

echo $car1->getCarInfo();
$car1->getLorem();
debug($car1);
