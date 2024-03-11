<?php

namespace App;

class FizzBuzzKata
{

    private array $result = [];

    public function fizzBuzz(): void
    {

        for ($i = 0; $i < 100; ++$i) {

            if (($i + 1) % 3 == 0 && ($i + 1) % 5 == 0) {
                $this->result[$i] = 'FizzBuzz';
            } elseif (($i + 1) % 3 == 0) {
                $this->result[$i] = 'Fizz';
            } elseif (($i + 1) % 5 == 0) {
                $this->result[$i] = 'Buzz';
            } else {
                $this->result[$i] = (string) ($i + 1);
            }
        }

        $this->result = range(1, 100);
    }

    public function getValue(?int $index): string
    {

        if (($index + 1) % 3 == 0 && ($index + 1) % 5 == 0) {
            return 'FizzBuzz';
        } elseif (($index + 1) % 3 == 0) {
            return 'Fizz';
        } elseif (($index + 1) % 5 == 0) {
            return 'Buzz';
        }
        return (string) $this->result[$index];

    }
}
