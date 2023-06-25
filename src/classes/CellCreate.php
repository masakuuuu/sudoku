<?php

namespace Sudoku\Classes;

use Sudoku\Classes\Cell;
use Sudoku\Classes\NumberPopper;

class CellCreate
{
    public array $cells;

    function __construct(
        readonly int $rowLimit = 9,
        readonly int $columnLimit = 9
    )
    {
        $this->addCell();
        $this->setCellRow();
        $this->setCellColumn();
        $this->setCellNumber();
    }

    private function addCell(): void
    {
        $createLimit = $this->rowLimit * $this->columnLimit;
        for ($i = 0; $i < $createLimit; $i++) {
            $this->cells[] = new Cell();
        }
    }

    private function setCellRow(): void
    {
        $rowNum = 1;
        foreach ($this->cells as $cell) {
            $cell->row = $rowNum;
            $rowNum++;
            if ($rowNum > $this->rowLimit) {
                $rowNum = 1;
            }
        }
    }

    public function setCellColumn(): void
    {
        $columnNum = 1;
        foreach ($this->cells as $cell) {
            $cell->column = $columnNum;
            $columnNum++;
            if ($columnNum > $this->columnLimit) {
                $columnNum = 1;
            }
        }
    }

    private function setCellNumber(): void
    {
        foreach ($this->cells as $cell) {
            $numberPopper = new NumberPopper();
            while ($numberPopper->numberList) {
                $cell->number = $numberPopper->popNumber();
            }
        }
    }
}