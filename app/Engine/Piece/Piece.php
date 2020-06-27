<?php

namespace App\Engine\Piece;

abstract class Piece
{
    protected $position;
    protected $team;
    protected $left = true;

    abstract protected function move($cell);
    abstract protected function getPossibleMoves();

    function __construct($team)
    {
        $this->team = $team;
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
