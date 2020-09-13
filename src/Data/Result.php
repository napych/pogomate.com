<?php

namespace Pogo\Data;

use Pogo\Data\Result\Moves;
use Pogo\Data\Result\Pokemon;

class Result
{
    /** @var Moves */
    public $moves = null;
    /** @var Pokemon */
    public $pokemon = null;

    public function __construct()
    {
        $this->moves = new Moves();
        $this->pokemon = new Pokemon();
    }
}