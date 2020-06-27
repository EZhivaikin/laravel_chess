<?php

namespace App\Engine\Piece;

class Pawn extends Piece
{
    protected function move($cell)
    {
        // TODO: Implement move() method.
    }

    protected function getPossibleMoves()
    {
        // TODO: Implement getPossibleMoves() method.
    }

    public function __toString()
    {
        return get_class($this);
    }

    public function __serialize()
    {
        return [get_class($this)];
    }
}
