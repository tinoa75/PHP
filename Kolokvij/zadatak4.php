<?php

Class Car  {

    protected $price = 1000;
    protected $discount = 10;

    public function __construct() 
        { 
           
        } 

    function __get($var){
        return $this->$var;

    }

    public function __set($name, $value){
        
       
        switch($name)
        {
            case "price":
                echo 'Set $price to '.$value ."</br>";
                $this->price = $value;
                $this->name = $name;
                break;
            case "discount":
                echo 'Set $discount to '.$value."</br>";
                $this->discount = $value;
                $this->name = $name;
            break;
         
        }
    }
        //$this->$discount=$b;
    }

    function price()
    {

        return $this->$price;

    }
   

   

$car = New Car();
//echo $car->print();
$car->price = 1000;
$car->discount = 10;


?>