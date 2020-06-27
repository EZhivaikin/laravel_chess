<?php


namespace App\Engine;

use App\Engine\Board;

class Game
{

    public function newGame()
    {
        $board = new Board();
        $board->fillBoard();
        # here must be some save board/game logic
        return array('game_id'=>1);
    }

    public function getGameBoardById($id)
    {
        $board = new Board();
        $board->fillBoard();
        return $board->getState();
    }
}




