<?php

namespace Roman\Boards;
use Roman\Figures\Figure;

class CheckMateBoard implements IBoard
{
    protected $x;
    protected $y;
    protected $state = [];
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function add(Figure $figure)
    {
        if ($this->canPlace($figure->x, $figure->y)) {
            $this->state[$figure->x][$figure->y] = $figure;
            return true;
        }
        return false;
    }

    public function remove($x, $y)
    {
        if ($this->isFieldFree($x, $y)) {
            return false;
        }
        unset($this->state[$x][$y]);
        return true;
    }

    private function canPlace($x, $y)
    {
        if ($this->isFieldFree($x, $y)) {
            return true;
        }
        return false;
    }

    private function isFieldFree($x, $y)
    {
        if (!empty($this->state[$x][$y])) {
            return false;
        }
        return true;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(array $state)
    {
        $this->state = $state;
    }

    public function moveFigure($fromX, $fromY, $toX, $toY)
    {
        if ($this->isFieldFree($fromX, $fromY)) {
            return false;
        }
        /** @var  $figure Figure */
        $figure = $this->state[$fromX][$fromY];
        if (!$figure->canMove($fromX, $fromY, $toX, $toY)) {
            return false;
        }

        unset($this->state[$fromX][$fromY]);
        $this->state[$toX][$toY] = $figure;
        return true;
    }

}
