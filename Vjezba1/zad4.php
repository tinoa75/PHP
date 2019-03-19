<?php
/**
 * Vjezba 1, Tino Andrijic, 1.3.2019.
 * Klase i funkcije
 */

 class MatematickeOperacije{

     public function sum($a,$b) {
        $zbroj = $a+$b;
        print $a.'+'.$b.' = '.$zbroj.'<br>';
        print $this->parnost($zbroj);
     }
     public function parnost($c){
       if ($c % 2 != 0) {
           print "Neparan broj<br  >";
       } else {
             print "Paran broj<br  >";
         }
     }
  }



  $mat = new MatematickeOperacije();
  print $mat->sum(5,25);
    print $mat->sum(15,24);
