<?php

namespace Pogo\Data;

use Pogo\Data\Result\Moves;

class Result
{
    /** @var Moves */
    public $moves = null;

    public function __construct()
    {
        $this->moves = new Moves();
    }
}