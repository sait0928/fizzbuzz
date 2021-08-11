<?php


namespace App\FizzBuzz;


class FizzBuzz
{
    public function execute(int $i): string
    {
        if ($i === 3) {
            return 'Fizz';
        }

        return (string)$i;
    }
}
