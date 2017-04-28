<?php

namespace Fahmiardi\Support\Test;

use Fahmiardi\Support\Str;

class LimiterTest extends \PHPUnit_Framework_TestCase
{
  public function testWordsLimiter()
  {
    $words = "Nettter, content focused platform for reading and writing";
    $limitWords = Str::words_limiter($words, 4, '');
    $expectedResult = "Nettter, content focused platform";

    $this->assertEquals($limitWords, $expectedResult);
  }
}