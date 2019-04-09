<?php
$a=10;
$b=0;

try{

    if ($b==0.0) {
    throw new Exception("Exception - Dijeljenje s nulom ");

    }else{
        $c = $a / $b;
    }
}
catch (Exception $error) {
    echo $error->getMessage();
}


try{
    $c=$a/$b;
}
catch(Throwable $t){
    printf("Type: %s<br>", get_class($t));
    printf("Message: %s<br>", $t->getMessage());
}
?>
