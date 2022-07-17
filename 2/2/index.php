<?php

error_reporting(-1);

require_once 'classes/Car.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

debug($car1);

$car1->color = 'black';
$car1->brand = 'volvo';
$car1->speed = '180';
$car1->year = 2018;
$car1->colour = 'red';

$car2->color = 'white';
$car2->brand = 'bmw';
$car2->speed = '200';

//debug($car1);
//debug($car2);

echo "<h3>My auto:</h3>
Brand: $car1->brand<br>
Color: $car1->color<br>
Wheels: {$car1->wheels}<br>
Year: {$car1->year}<br>
Speed: {$car1->speed}<br>";

