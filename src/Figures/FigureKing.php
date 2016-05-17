<?php

namespace Roman\Figures;

class FigureKing extends Figure
{
    public function __construct($x, $y)
    {
        parent::__construct($x, $y);
        $this->name = 'King';
    }

    public function canMove($fromX, $fromY, $toX, $toY)
    {
        //TODO
        return true;
    }
}