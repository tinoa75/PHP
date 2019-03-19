<?php
interface TalkInterface {
  public function Talk();
  public function Eat();
}

class Dog implements TalkInterface {
  public function Talk(){
  }
  public function Eat(){
  }
}

class Cat implements TalkInterface {
  public function Talk(){
  }
  public function Eat(){
  }
}

class Horse implements TalkInterface {
  public function Eat(){
  }
}


/*
REZULTAT:
Fatal error: Class Horse contains 1 abstract method and must therefore be declared abstract or implement the
remaining methods (TalkInterface::Talk) in /Users/totohost/Development/Web/PHP/Web 
programiranje na strani poslužitelja/Vjezba3/zadatak3.php on line 21
*/

?>
