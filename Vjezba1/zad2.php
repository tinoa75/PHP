<?php
/**
 * Vjezba 1, Tino Andrijic, 1.3.2019.
 * Klase i funkcije
 */


    function sum($a,$b) {
        nType($a+$b);
        return $a+$b;
    }
    function nType($c){
      if ($c % 2 != 0) {
          print "Neparan broj<br  >";
      } else {
            print "Paran broj<br  >";
        }


}


print sum(12,4)."<br>";
print sum(11,2)."<br>";
?>
