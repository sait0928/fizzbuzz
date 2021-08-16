<?php


namespace App\FizzBuzz;

use App\Exceptions\FizzBuzzException;


class FizzBuzz
{
    public function execute(int $i): string
    {
        if ($i <= 0) {
            throw new FizzBuzzException();
        }

        if ($i % 3 === 0 && $i % 5 === 0) {
            return 'FizzBuzz';
        }

        if ($i % 5 === 0) {
            return 'Buzz';
        }

        if ($i % 3 === 0) {
            return 'Fizz';
        }

        return (string)$i;
    }
}
