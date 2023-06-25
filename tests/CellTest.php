<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sudoku\Classes\Cell;

final class CellTest extends TestCase
{
    public function testCell(): void
    {
        $cell = new Cell(1, 3, 2);
        $this->assertSame(1, $cell->number);
        $this->assertSame(3, $cell->row);
        $this->assertSame(2, $cell->column);
    }
}