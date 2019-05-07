<?php
class Math {
    public function mul($a, $b) {
        try {
            if (!self::is_intab($a, $b)) {
                throw new Exception("Parametri moraju biti integer!");
            }
            if (self::is_zero($b)) {
                throw new Exception("Drugi parametar ne smije biti 0!");
            }
            return $a * $b;
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public final function div($a, $b) {
        try {
            if (!self::is_intab($a, $b)) {
                throw new Exception("Parametri moraju biti integer!");
            }
            if (self::is_zero($b)) {
                throw new Exception("Drugi parametar ne smije biti 0!");
            }
            if (!$this->check($a)) {
                throw new Exception("Prvi parametar mora biti veći od 10 i manji od 100.");
            }
            return floor($a / $b);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
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
echo $math->mul(4,5) . "<br>";
echo $math->mul(12,0) . "<br>";
echo $math->div(200,50) . "<br>";
echo $math->div(50,20) . "<br>";

?>
