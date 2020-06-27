<?php

namespace App\Engine;

use App\Engine\Piece\Bishop;
use App\Engine\Piece\King;
use App\Engine\Piece\Knight;
use App\Engine\Piece\Pawn;
use App\Engine\Piece\Queen;
use App\Engine\Piece\Rook;

class Board
{
    const WHITE = 'W';
    const BLACK = 'B';
    private $state;
    private $turn;
    public function getState()
    {
        return $this->state;
    }


    public function fillBoard()
    {
        for ($letter = 'a'; $letter <= 'h'; $letter++) {
            $this->state[$letter] = array_fill(0, 8, null);
        }

        # place Pawns
        for ($letter = 'a'; $letter <= 'h'; $letter++) {
            $this->state[$letter][1] = new Pawn(self::WHITE);
            $this->state[$letter][6] = new Pawn(self::BLACK);
        }

        $this->state['a'][0] = new Rook(self::WHITE);
        $this->state['b'][0] = new Knight(self::WHITE);
        $this->state['c'][0] = new Bishop(self::WHITE);
        $this->state['d'][0] = new Queen(self::WHITE);
        $this->state['e'][0] = new King(self::WHITE);
        $this->state['f'][0] = new Bishop(self::WHITE);
        $this->state['g'][0] = new Knight(self::WHITE);
        $this->state['h'][0] = new Rook(self::WHITE);

        $this->state['a'][7] = new Rook(self::BLACK);
        $this->state['b'][7] = new Knight(self::BLACK);
        $this->state['c'][7] = new Bishop(self::BLACK);
        $this->state['d'][7] = new King(self::BLACK);
        $this->state['e'][7] = new Queen(self::BLACK);
        $this->state['f'][7] = new Bishop(self::BLACK);
        $this->state['g'][7] = new Knight(self::BLACK);
        $this->state['h'][7] = new Rook(self::BLACK);

    }
}
