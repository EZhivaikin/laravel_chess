<?php


namespace App\Engine;

use App\Engine\Board;

class Game
{
    public function start()
    {
        $board = new Board();

    }

    public function newGame()
    {
        $board = new Board();
        $board->fillBoard();
        return $board->getState();
    }
}




