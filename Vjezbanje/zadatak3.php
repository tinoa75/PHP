<?php

include "zadatak2.php";

class NoLimit extends Math {
    public function check($a) {
        return true;
    }
}

$noLimit = new NoLimit;
echo $noLimit->mno(4,5) . "<br>";
echo $noLimit->mno(12,0) . "<br>";
echo $noLimit->div(200,5) . "<br>";

?>
