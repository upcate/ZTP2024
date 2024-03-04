<?php

namespace App;

class FizzBuzzKata
{

    private array $result = [];

    public function fizzBuzz(): void
    {

        for ($i = 0; $i < 100; ++$i) {

            if (($i + 1) % 3 == 0) {
                $this->result[$i] = 'Fizz';
            } else {
                $this->result[$i] = (string) $i + 1;
            }

    }

        $this->result = range(1, 100);
    }

    public function getValue(?int $index): string
    {

        return (string) $this->result[$index];

    }
}
