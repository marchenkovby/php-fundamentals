<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    const TEST_CAR = 'Protype';
    const TEST_CAR_SPEED = 300;

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
        return self::$countCar;
    }

    public function Test()
    {
        echo 'Hello, World!';
    }

    public function getCarInfo()
    {
        return "<h3>My auto:</h3>
            Brand: {$this->brand}<br>
            Color: {$this->color}<br>
            Wheels: {$this->wheels}<br>
            Speed: {$this->speed}<br>";
    }

    public function getProtype()
    {
        return "<h3>My test auto:</h3>
            Name: "  . self::TEST_CAR . "<br>
            Speed: "  . self::TEST_CAR_SPEED . "<br>";
    }
}

