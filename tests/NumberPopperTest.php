<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sudoku\Classes\NumberPopper;

final class NumberPopperTest extends TestCase
{
    public function testNumberList(): void
    {
        $numberPopper = new NumberPopper(1,9);

        $this->assertSame(9, count($numberPopper->numberList));
        $this->assertTrue(in_array(1, $numberPopper->numberList));
        $this->assertTrue(in_array(3, $numberPopper->numberList));
        $this->assertTrue(in_array(9, $numberPopper->numberList));
        $this->assertFalse(in_array(10, $numberPopper->numberList));
    }

    public function testPopNumber(): void
    {
        $numberPopper = new NumberPopper(1,9);
        $this->assertSame(9, count($numberPopper->numberList));

        $popNumber = $numberPopper->popNumber();
        $this->assertTrue(1 <= $popNumber && 9 >= $popNumber);
        $this->assertSame(8, count($numberPopper->numberList));
    }
}