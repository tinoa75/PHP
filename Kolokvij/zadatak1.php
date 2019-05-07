<?php

Class Foo {
    public function __construct(){
        echo "Klasa Foo() je instancirana!.</br></br>";
    }

} 

Class User {

    public function Introduce($ime){
        return "Welcome ".$ime."!  </br></br></br>";
    }


}


$foo = new Foo();
$user = new User();

echo $user->introduce("Mate");

?>
