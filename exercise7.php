<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class Beverage
{
    private $color;
    private $price;
    private $temperature;
    private static $address = "Melkmarkt 9, 2000 Antwerpen";

    public function __construct (string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is $this->temperature and $this->color.";
    }

    public static function getAddress() {
        return self::$address;
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

echo Beverage::getAddress() . "<br>";
echo Beer::getAddress();