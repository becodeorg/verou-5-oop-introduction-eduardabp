<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
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
}

const barname = 'Het Vervolg';
echo barname . "<br>";

class Beer extends Beverage
{

    private $name;
    private $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcohol() {
        return $this->alcoholPercentage;
    }

    public function getBarname()
    {
        return barname;
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getBarname();