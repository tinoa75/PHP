<?php

  abstract class Animal {

    public function __construct($ime, $vrsta){
      $this->ime = $ime;
      $this->vrsta = $vrsta;
      $this->Provjera();
      //self::provjera();
      echo "<constructor Animal<br />";
      echo 'Ime: '.$this->ime.' Vrsta: ', $vrsta.'<br />';

    }

    private function Provjera(){
      if ($this->vrsta != 'konj' && $this->vrsta != 'pas'){
        echo "<br />Pogreška! Životinja nije konj ili pas!<br";
        echo $ime, $vrsta.'<br />';
      }
    }

      abstract function avgSpeed($vrijeme,$udaljenost);
  }

class RaceAnimal extends Animal
{
  public static $najbrzaZivotinja = '';
  public static $najbrziRezultat = 0;

  public function __construct($ime, $vrsta, $vrijeme, $udaljenost){
    parent:: __construct ($ime, $vrsta);
    self ::avgSpeed($vrijeme, $udaljenost);
    //echo "<constructor Zivotinja<br />";
    //echo 'Ime: '.$this->ime.' Vrsta: ', $vrsta.'<br />';
  }

  public function avgSpeed($vrijeme, $udaljenost) {
      $avgSpeed = round($udaljenost/$vrijeme,2);

        if($avgSpeed > self:: $najbrziRezultat){
          self::$najbrzaZivotinja = $this->ime;
          self::$najbrziRezultat = $avgSpeed;
        }
      return $this->ime.': '.$avgSpeed.' km/h<br>';
    }
}

?>
