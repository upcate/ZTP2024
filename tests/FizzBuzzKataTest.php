<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\FizzBuzzKata;

class FizzBuzzKataTest extends TestCase
{
    /**
     * @param int $index
     * @param string $expectedNumber
     * @return void
     * @dataProvider dataProviderForTest
     */
    public function testFizzBuzzKata(int $index, string $expectedNumber)
    {

        //given

        $fizzBuzzKata = new FizzBuzzKata();

        //when

        $fizzBuzzKata->fizzBuzz();

        //then

        $actualNumber = $fizzBuzzKata->getValue($index);
        $this->assertSame($expectedNumber, $actualNumber);

    }

    public function dataProviderForTest(): \Generator
    {

        yield 'should return 1 for index 0' => [
            'index' => 0,
            'expectedNumber' => '1'
        ];
        yield 'should return 2 for index 1' => [
            'index' => 1,
            'expectedNumber' => '2'
        ];
        yield 'should return 51 for index 50' => [
            'index' => 50,
            'expectedNumber' => '51'
        ];
        yield 'should return 100 for index 99' => [
            'index' => 99,
            'expectedNumber' => '100'
        ];
        yield 'should return "Fizz" for index 2' => [
            'index' => 2,
            'expectedNumber' => 'Fizz'
        ];
        yield 'should return "Fizz" for index 11' => [
            'index' => 11,
            'expectedNumber' => 'Fizz'
        ];
        yield 'should return "Fizz" for index 98' => [
            'index' => 98,
            'expectedNumber' => 'Fizz'
        ];
        yield 'should return "Fizz" for index 56' => [
            'index' => 56,
            'expectedNumber' => 'Fizz'
        ];

    }
}
