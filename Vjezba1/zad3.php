<?php
/**
 * Vjezba 1, Tino Andrijic, 1.3.2019.
 * Klase i funkcije
 */

 class MatematickeOperacije{

     public function sum($a,$b) {
         nType($a+$b);
         return $a+$b;
     }
     function substract ($a, $b){
         return $a-$b;
     }
     function multiply ($a,$b){
         return $a*$b;
     }
     function divide ($a, $b){
        if ($b==0) return 'Ne može sa nulom';
         return $a/$b;
     }

   }

  $mat = new MatematickeOperacije();
  print $mat->divide(5,0);
