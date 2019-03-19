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
  public function Talk(){
  }
  public function Eat(){
  }
}


/*
REZULTAT: prazna stranica, nema prikaza greške
*/

?>
