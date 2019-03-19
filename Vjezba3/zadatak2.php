<?php
interface TalkInterface {
  public function Talk();
  public function Eat();
}

class Dog implements TalkInterface {

}

class Cat implements TalkInterface {

}

class Horse implements TalkInterface {

}


/*
REZULTAT: Fatal error: Class Dog contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods
(TalkInterface::Talk, TalkInterface::Eat) in /Users/totohost/Development/Web/PHP/Web programiranje na strani
poslužitelja/Vjezba3/vjezba3.php on line 7
*/

?>
