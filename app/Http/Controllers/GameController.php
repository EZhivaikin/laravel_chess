<?php

namespace App\Http\Controllers;

use App\Engine\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function newGame()
    {
        $game = new Game();
        return $game->newGame();
    }

    public function move(Request $request, $game_id)
    {
        $game = new Game();
        $game->getGameBoardById($game_id);

        $move = $request->json()->all();
        return array('piece'=>'Pawn', 'from'=>$move['from'], 'to'=>$move['to']);
    }

    public function getBoardState(Request $request, $game_id)
    {
        $game = new Game();
        return $game->getGameBoardById($game_id);
    }
}
