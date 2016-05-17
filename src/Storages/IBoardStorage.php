<?php

namespace Roman\Storages;
use Roman\Boards\IBoard;

interface IBoardStorage
{
    public function save(IBoard $board);
    public function load($id);
}