<?php

namespace Roman;
use Roman\Storages\IBoardStorage;
use Roman\Boards\IBoard;

class Game
{
    /** @var  IBoard */
    protected $board;

    /** @var  IBoardStorage */
    protected $boardStorage;

    public function __construct(IBoard $board, IBoardStorage $boardStorage)
    {
        $this->board = $board;
        $this->boardStorage = $boardStorage;
    }

    public function save()
    {
        $this->boardStorage->save($this->board);
    }

    public function load($id)
    {
        $this->board->setState($this->boardStorage->load($id));
    }

    /**
     * @return IBoard
     */
    public function getBoard()
    {
        return $this->board;
    }

    public function setBoard(IBoard $board)
    {
        $this->board = $board;
    }

    /**
     * @return IBoardStorage
     */
    public function getBoardStorage()
    {
        return $this->boardStorage;
    }

    public function setBoardStorage(IBoardStorage $boardStorage)
    {
        $this->boardStorage = $boardStorage;
    }

}
