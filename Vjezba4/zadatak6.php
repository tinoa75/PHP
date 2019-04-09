<?php

function doSomething()
{

}


class Test {
    function __construct($input) {
          var_dump($input);
          if ($input === '1') doSomething();
          else print 'Not true!';
    }
}
$input = '1';
$test = new Test($input);
?>
