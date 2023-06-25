<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sudoku\Classes\Cell;

final class CellTest extends TestCase
{
    public function testCell(): void
    {
        $cell = new Cell();
        $cell->number = 1;
        $cell->row = 3;
        $cell->column = 2;

        $this->assertSame(1, $cell->number);
        $this->assertSame(3, $cell->row);
        $this->assertSame(2, $cell->column);
    }
}