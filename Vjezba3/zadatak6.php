<?php

  abstract class Animal {

    public function __construct($ime, $vrsta){
      $this->ime = $ime;
      $this->vrsta = $vrsta;
      self::provjera();
      echo "<constructor<br />";
      echo 'Ime: '.$this->ime.' Vrsta: ', $vrsta.'<br />';
      //$this->provjera();
    }

    private function provjera(){
      if ($vrsta != 'konj' || $vrsta != 'pas'){
        echo "<br />Pogreška! Životinja nije konj ili pas!<br";
        echo $ime, $vrsta.'<br />';
      }
    }

      abstract function avgSpeed($vrijeme,$udaljenost);
  }

class Zivotinja extends Animal
{
    function avgSpeed($vrijeme, $udaljenost){


    }

}

$pas1 = new Zivotinja("Micko", "pas");
$pas2 = new Zivotinja("Dogica", "pas");
$macka1 = new Zivotinja("Musa", "macka");
$konj1 = new Zivotinja("Spidko", "konj");

?>
