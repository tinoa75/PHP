<?php

class Car {
    protected $price;
    protected $discount;

    public function __construct() {
    }

    public function __get($prop) {
        return $this->$prop;
    }
    public function __set($prop, $val) {
        if ($prop == "price" || $prop == "discount") {
            $this->$prop = $val;
        }
    }
}

$car = new Car;
$car->price = 1000;
$car->discount = 10;
echo $car->price . "<br>";
echo $car->discount . "<br>";

?>
