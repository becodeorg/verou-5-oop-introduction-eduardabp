<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    private $color;
    private $price;
    private $temperature;

    public function __construct (string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor(string $newColor) {
        $this->color = $newColor;
    }
}

class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;

    public function __construct (string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcohol() {
        return $this->alcoholPercentage;
    }

    public function beerInfo() {
        return "Hi, I'm $this->name and have an alcochol percentage of $this->alcoholPercentage% and I have a " . parent::getColor() . " color.";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcohol() . "<br>";

echo $duvel->getColor() . "<br>";

echo $duvel->getInfo() . "<br>";

$duvel->setColor("light");

echo $duvel->getColor() . "<br>";

echo $duvel->beerInfo();