<?php

error_reporting(-1);

require_once 'classes/Car.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car();
$car1->color = 'black';
$car1->brand = 'volvo';


$car2 = new Car();
$car2->color = 'black';
$car2->brand = 'bmw';

echo $car1->getCarInfo();
echo $car2->getCarInfo();
