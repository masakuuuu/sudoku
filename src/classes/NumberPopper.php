<?php

namespace Sudoku\Classes;

class NumberPopper
{
    public array $numberList;

    function __construct(
        public int $startNum = 1,
        public int $endNum = 9
    )
    {
        foreach (range($this->startNum, $this->endNum) as $number) {
            $this->numberList[] = $number;
        }
        shuffle($this->numberList);
    }

    public function popNumber(): int
    {
        return array_pop($this->numberList);
    }
}
