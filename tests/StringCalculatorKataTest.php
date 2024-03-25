<?php

namespace Test;

use App\StringCalculator;
use http\Exception\UnexpectedValueException;
use PHPUnit\Framework\TestCase;

class StringCalculatorKataTest extends TestCase
{
    /**
     * @dataProvider dataProviderForTestAdd
     */
    public function testAdd(string $numbers, int $expected)
    {
        //given
        $calculator = new StringCalculator();
        // when
        $actual = $calculator->add($numbers);
        //then
        $this -> assertSame($expected, $actual);
    }

    public function dataProviderForTestAdd(): \Generator
    {
        yield 'should return 0 for 0' => [
            'numbers' => '0',
            'expected' => 0
        ];
        yield 'should return 0 for ""' => [
            'numbers' => '""',
            'expected' => 0
        ];
        yield 'should return 2 for 2' => [
            'numbers' => '2',
            'expected' => 2
        ];
        yield 'should return 3 for `1,2`' => [
            'numbers' => '1,2',
            'expected' => 3
        ];
        yield 'should return 10 for `3,7`' => [
            'numbers' => '3,7',
            'expected' => 10
        ];
        yield 'should return 21 for `3,7,11`' => [
            'numbers' => '3,7,11',
            'expected' => 21
        ];
        yield 'should return 6 for `1,2,3`' => [
            'numbers' => '1,2,3',
            'expected' => 6
        ];
        yield 'should return 10 for `1,2,3,4`' => [
            'numbers' => '1,2,3,4',
            'expected' => 10
        ];
        yield 'should return 3 for `1\n2`' => [
            'numbers' => '1\n2',
            'expected' => 3
        ];
        yield 'should return 6 for `1\n2\n3`' => [
            'numbers' => '1\n2\n3',
            'expected' => 6
        ];
        yield 'should return 6 for `1\n2,3`' => [
            'numbers' => '1\n2,3',
            'expected' => 6
        ];
        yield 'should return 6 for `1,2\n3`' => [
            'numbers' => '1,2\n3',
            'expected' => 6
        ];

    }
    /**
     * @dataProvider dataProviderForTestAddWithException
     */
    public function AddWithException(string $numbers, string $expectedException)
    {

        //given
        $calculator = new StringCalculator();
        //when
        $actual = $calculator->add($numbers);
        //then
        $this->expectException($expectedException);
    }

    public function dataProviderForTestAddWithException(): \Generator
    {

        yield 'should throw UnexpectedValueException for `1,\n`' => [
            'numbers' => '1,\n',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `1\n,`' => [
            'numbers' => '1\n,',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `1\n\n`' => [
            'numbers' => '1\n\n',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `1,,`' => [
            'numbers' => '1,,',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `1,,2`' => [
            'numbers' => '1,,2',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `1\n\n2`' => [
            'numbers' => '1\n\n2',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `,,1`' => [
            'numbers' => ',,1',
            'expectedException' => \UnexpectedValueException::class
        ];
        yield 'should throw UnexpectedValueException for `\n\n1`' => [
            'numbers' => '\n\n1',
            'expectedException' => \UnexpectedValueException::class
        ];
    }
}
