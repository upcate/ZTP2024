<?php

namespace App;

class StringCalculator
{

    public function add(string $numbers): int
    {
        $addends = $this->parseInput($numbers);

        return array_sum($addends);
    }

    private function parseInput(string $numbers): array
    {

        if (!preg_match('/^(\d+((,|\\\n)\d+)*)?$/', $numbers)) {
            throw new \UnexpectedValueException('Invalid Input');
        }

        $normalizedInput = preg_replace('/\\\n/', ',', $numbers);
        $addends= explode(',', $normalizedInput);

        return array_map(fn ($item) => (int) $item, $addends);

    }
}
