<?php

namespace Sudoku;

use Sudoku\Classes\CellCreate;

include_once ("./../vendor/autoload.php");

$sudoku = new CellCreate();
echo json_encode($sudoku->cells);
