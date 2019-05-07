<?php

class Math {

    public function mnozenje($prvi, $drugi) {
        
        if (!self::is_int($prvi, $drugi)) {
            return "Nisu integeri";
        }
        
        if (self::is_zero($drugi)) {
            return "Drugi ne smi bit nula";
        }

        return $prvi * $drugi;
    }
   

    public function dijeljenje($prvi, $drugi) {
        if (!self::is_int($prvi, $drugi)) {
            return "moraju biti integer";
        }

        if (self::is_zero($drugi)) {
         return "varijabla mora biti nula";
        }
      
        return floor($prvi / $drugi);
    }
    
    protected function is_zero($drugi) {
        return $drugi == 0;
    }
    protected function is_int($prvi, $drugi) {
        return is_integer($prvi) && is_integer($drugi);
    }
    
}
$mat = new Math;

echo $mat->mnozenje(3.4,9) . "<br><br>";
echo $mat->mnozenje(162,3) . "<br><br>";
echo $mat->mnozenje(50,0) . "<br><br>";
echo $mat->dijeljenje(110,30) . "<br><br>";
echo $mat->dijeljenje(2000,30) . "<br><br>";
?>