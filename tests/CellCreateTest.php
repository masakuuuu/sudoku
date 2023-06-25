<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Sudoku\Classes\CellCreate;

final class CellCreateTest extends TestCase
{
    public function testCellCreate(): void
    {
        $cellCreate = new CellCreate();
        $this->assertSame(81, count($cellCreate->cells));
        $this->assertTrue(1 <= $cellCreate->cells[0]->number);
        $this->assertTrue(9 >= $cellCreate->cells[0]->number);
        $this->assertTrue(1 <= $cellCreate->cells[5]->number);
        $this->assertTrue(9 >= $cellCreate->cells[78]->number);
        $this->assertTrue(1 <= $cellCreate->cells[2]->number);
        $this->assertTrue(9 >= $cellCreate->cells[64]->number);
    }
}