<?php

namespace Person;

  abstract class Person {

    protected $ime;
    protected $prezime;

    public function __construct($ime, $prezime){
      $this->ime = $ime;
      $this->prezime = $prezime;
      $this->salary();
      //self::provjera();
      //echo "Constructor Person<br />";

    }

    public function __toString(){
      echo 'Ime: '.$this->ime.' Prezime: ', $prezime.'<br />';

    }

    abstract function salary();
    }


?>
