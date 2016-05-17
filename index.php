<?php

require 'vendor/autoload.php';

use Roman\Boards\CheckMateBoard;
use Roman\Storages\FileBoardStorage;
use Roman\Game;
use Roman\Figures\FigureFactory;

$board = new CheckMateBoard(10, 10);
$game = new Game($board, new FileBoardStorage());
$game->getBoard()->add(FigureFactory::create('king', 1, 4));
$game->getBoard()->moveFigure(1, 4, 2, 5);
$game->save();