<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct (string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is $this->temperature and $this->color.";
    }
}

class Beer extends Beverage
{
    protected $name;
    protected $alcoholPercentage;

    public function __construct (string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcohol() {
        return $this->alcoholPercentage;
    }

    public function getColor() {
        return $this->color;
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcohol() . "<br>";

echo $duvel->getColor() . "<br>";

echo $duvel->getInfo();