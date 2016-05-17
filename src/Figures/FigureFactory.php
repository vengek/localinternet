<?php

namespace Roman\Figures;

use Roman\Exceptions\FigureNotFoundException;

class FigureFactory
{
    /**
     * @param $type
     * @param $x
     * @param $y
     * @return Figure
     */
    public static function create($type, $x, $y)
    {
        try {
            $figure = 'Roman\Figures\Figure' . ucfirst($type);
            if (!class_exists($figure)) {
                throw new FigureNotFoundException('Такой фигуры не существует');
            }
            return new $figure($x, $y);
        } catch (FigureNotFoundException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}