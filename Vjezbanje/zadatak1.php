<?php

class Foo {

  public function __construct() {
    echo "Klasa Foo() je instancirana!"."<br><br>";
  }
}


class User {

  public function introduce($a) {

    return "Welcome ".$a. "!";
  }


}

$test = New Foo;
$user = New User;
echo $user->introduce("Mate");



?>
