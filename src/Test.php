<?php

namespace Dinard\Composer;

class Test
{
  public static function sayHello($name = '') {
    echo "Hello" . ($name? ', ' . $name: '');
  }
}
