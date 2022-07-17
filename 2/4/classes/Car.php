<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo()
    {
        return "<h3>My auto:</h3>
            Brand: {$this->brand}<br>
            Color: {$this->color}<br>
            Wheels: {$this->wheels}<br>
            Speed: {$this->speed}<br>";
    }
}
