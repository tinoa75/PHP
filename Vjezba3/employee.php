<?php

  namespace Person;
  include "persons.php";

  class Employee extends Person{
        public static $salary = 0;

      public function __construct($ime, $prezime, $salary){
        parent:: __construct ($ime, $prezime);
        $this->salary = $salary;
        echo "<constructor Employee<br />";

      }

        public function salary(){

        }

      public function __toString()
      {
        return "Ime " . $this->ime . "<br>Prezime: " . $this->prezime. "<br>Placa: " . $this->salary.'<br><br><br>';

      }

  }

  $osoba1 = new Employee("Tino", "Andrijic", 8000);

echo $osoba1;

  echo "Pozvano iz employee.php - Namespace: ".__NAMESPACE__;
?>
