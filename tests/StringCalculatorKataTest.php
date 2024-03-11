<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\StringCalculator;

class StringCalculatorKataTest extends TestCase
{

    public function testAdd()
    {

        //given

        $calculator = new StringCalculator();
        $expected = 0;

        //when

        $actual = $calculator->add("");

        //add

        $this->assertSame($expected, $actual);

    }
}
