<?php

namespace Pogo\Data\Result;

use Pogo\Data\Result\Moves;
use Pogo\Data\Result\Pokemon;
use Pogo\Data\Result\Types;

class All
{
    /** @var Moves */
    public $moves = null;
    /** @var Pokemon */
    public $pokemon = null;
    /** @var Types */
    public $types = null;

    public function __construct()
    {
        $this->moves = new Moves();
        $this->pokemon = new Pokemon();
        $this->types = new Types();
    }

    public function writePHP()
    {
        $this->types->writePHP();
        $this->moves->writePHP();
        $this->pokemon->writePHP();
    }
}
