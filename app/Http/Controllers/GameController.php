<?php

namespace App\Http\Controllers;

use App\Engine\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function newGame()
    {
        $game = new Game();
        return $game->newGame()->toJson();
    }

    public function move(Request $request, $from, $to)
    {

    }

    public function getBoardState(Request $request, $game_id)
    {

    }
}
