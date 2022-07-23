<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public static $countCar = 0;

    public function __construct($color, $wheels = 4, $speed = 180, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$countCar++;
    }

    public static function getCount()
    {
    
    }

    public function getCarInfo()
    {
        return "<h3>My auto:</h3>
            Brand: {$this->brand}<br>
            Color: {$this->color}<br>
            Wheels: {$this->wheels}<br>
            Speed: {$this->speed}<br>";
    }
}

