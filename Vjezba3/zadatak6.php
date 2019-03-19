<?php

  abstract class Animal {

    public function __construct($ime, $vrsta){
      $this->ime = $ime;
      $this->vrsta = $vrsta;
      $this->Provjera();
      self::provjera();
      echo "<constructor<br />";
      echo 'Ime: '.$this->ime.' Vrsta: ', $vrsta.'<br />';
      $this->provjera();
    }

    private function Provjera(){
      if ($this->vrsta != 'konj' && $this->vrsta != 'pas'){
        echo "<br />Pogreška! Životinja nije konj ili pas!<br";
        echo $ime, $vrsta.'<br />';
      }
    }
  }




?>
