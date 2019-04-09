<?php
class Test {
    function __construct($input) {
      var_dump($input);
         if ($input === 1) self::doSomething();
         else print 'Not true!';
    }
}
$input = '1';
$test = new Test($input);
?>
