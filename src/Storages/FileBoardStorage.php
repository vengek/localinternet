<?php

namespace Roman\Storages;
use Roman\Boards\IBoard;

class FileBoardStorage implements IBoardStorage
{
    const EXT = '.txt';

    public function save(IBoard $board)
    {
        $board->setId(uniqid());
        file_put_contents($board->getId() . self::EXT, json_encode($board->getState()));
    }

    public function load($id)
    {
        return json_decode(file_get_contents($id . self::EXT));
    }

}