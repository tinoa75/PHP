<?php
interface TalkInterface {
  const fastest = "Horse";

  public function Talk();
  public function Eat();
}

class Dog implements TalkInterface {
  public function Talk(){
  }
  public function Eat(){
  }
  const fastest = "Dog";
}

class Cat implements TalkInterface {
  public function Talk(){
  }
  public function Eat(){
  }
}

class Horse implements TalkInterface {
  public function Talk(){
  }
  public function Eat(){
  }
}

/*
REZULTAT:
Fatal error: Cannot inherit previously-inherited or override constant fastest
 from interface TalkInterface in /Users/totohost/Development/Web/PHP/Web programiranje
 na strani poslužitelja/Vjezba3/zadatak5.php on line 9
*/

?>
