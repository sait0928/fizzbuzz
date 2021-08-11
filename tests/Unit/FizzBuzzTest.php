<?php

namespace Tests\Unit;

use App\FizzBuzz\FizzBuzz;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 数字を1から順番に出力(): void
    {
        $sut = new FizzBuzz();
    }

    // 数字が3で割り切れる時は「Fizz」を出力
    // 数字が5で割り切れる時は「Buzz」を出力
    // 数字が3でも5でも割り切れる時は「FizzBuzz」を出力
}
