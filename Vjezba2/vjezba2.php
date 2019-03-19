<?php
/**
 * Vjezba 2, Tino Andrijic, 8.3.2019.
 * Klase i funkcije II
 */

class Osoba {
  protected $id;
  protected $ime;
  protected $visina;
  public static $brojOsoba = 0;

  function __construct() {
    $this->id = rand(1000, 1000000);
    print 'ID osobe '.$this->id.' je dodjeljen.<br>';
    Osoba::$brojOsoba++;
  }

  function __destruct() {
    print 'Objekt'.$this->ime.' je unisten.<br>';
  }

  function __get($svojstvo){
    print 'Pristup protected svojstvu: '.$svojstvo.'<br>';
    return $this->$svojstvo;

  }

  function __set($svojstvo, $vrijednost){
    switch($property) {
        case 'ime':
          $this->ime = $vrijednost;
          break;
        case 'visina':
          $this->visina = $vrijednost;
          break;
        default:
          print $svojstvo . ' nije pronadjeno/a!';
    }
    print 'Postavljanje '.$svojstvo.' na vrijednost '.$vrijednost.' <br>';
  }
}

$osobaJedan = new Osoba();
$osobaJedan->ime = 'Tino';
$osobaJedan->visina = '1,82m';
print $osobaJedan->ime.' je '.$osobaJedan->visina.' visok/a.<br><br />';

$osobaDva = new Osoba();
$osobaDva->ime = 'Marko';
$osobaDva->visina = '1,80m';
print $osobaDva->ime.' je '.$osobaDva->visina.' visok/a.<br><br />';

vardump($osobaDva instanceof Osoba);

print '<br><br>Broj kreiranih osoba je: '.Osoba::$brojOsoba.' <br><br>';
?>
