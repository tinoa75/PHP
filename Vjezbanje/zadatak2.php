<?php
class Math {
    public function mno($a, $b) {
        if (!self::is_intab($a, $b)) {
            return "Parametri moraju biti integer!";
        }
        if (self::is_zero($b)) {
            return "Drugi parametar ne smije biti 0!";
        }
        return $a * $b;
    }
    public final function div($a, $b) {
        if (!self::is_intab($a, $b)) {
            return "Parametri moraju biti integer!";
        }
        if (self::is_zero($b)) {
            return "Drugi parametar ne smije biti 0!";
        }
        if (!$this->check($a)) {
            return "Prvi parametar mora biti veći od 10 i manji od 100.";
        }
        return floor($a / $b);
    }
    protected function is_zero($b) {
        return $b == 0;
    }
    protected function is_intab($a, $b) {
        return is_integer($a) && is_integer($b);
    }
    public function check($a) {
        return ($a > 10 && $a < 100);
    }
}

$math = new Math;
echo $math->mno(4,5) . "<br>";
echo $math->mno(12,0) . "<br>";
echo $math->div(200,50) . "<br>";

?>
