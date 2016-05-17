<?php

namespace Roman\Boards;
use Roman\Figures\Figure;

interface IBoard
{
    public function moveFigure($fromX, $fromY, $toX, $toY);
    public function remove($x, $y);
    public function add(Figure $figure);
    public function getState();
    public function setState(array $state);
    public function getId();
    public function setId($id);
}