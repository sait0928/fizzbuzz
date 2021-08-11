<?php

namespace Tests\Unit;

use App\FizzBuzz\FizzBuzz;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 指定された数値を文字列化して返す(): void
    {
        $sut = new FizzBuzz();
        $this->assertSame('1', $sut->execute(1));
        $this->assertSame('2', $sut->execute(2));
        $this->assertSame('4', $sut->execute(4));
    }

    /** @test */
    public function 指定された数値が3で割り切れる時は「Fizz」を出力(): void
    {
        $sut = new FizzBuzz();
        $this->assertSame('Fizz', $sut->execute(3));
        $this->assertSame('Fizz', $sut->execute(6));
        $this->assertSame('Fizz', $sut->execute(9));
    }

    /** @test */
    public function 指定された数値が5で割り切れる時は「Buzz」を出力(): void
    {
        $sut = new FizzBuzz();
        $this->assertSame('Buzz', $sut->execute(5));
        $this->assertSame('Buzz', $sut->execute(10));
        $this->assertSame('Buzz', $sut->execute(20));
    }

    /** @test */
    public function 指定された数値が3でも5でも割り切れる時は「FizzBuzz」を出力(): void
    {
        $sut = new FizzBuzz();
        $this->assertSame('FizzBuzz', $sut->execute(15));
        $this->assertSame('FizzBuzz', $sut->execute(30));
        $this->assertSame('FizzBuzz', $sut->execute(45));
    }
}
