<?php

namespace Roman\Figures;

abstract class Figure
{
    public $x;
    public $y;
    public $name;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    abstract function canMove($fromX, $fromY, $toX, $toY);

    public function __toString()
    {
        return $this->name;
    }
}