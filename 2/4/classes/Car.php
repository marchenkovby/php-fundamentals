<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

/*    public function __construct($color, $wheels = 4, $speed = 180, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        echo __METHOD__ . '<br>';
    }*/

    public function Car($color, $wheels = 4, $speed = 180, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
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

14:46
