<?php

namespace Pogo\Data\Parser\Result;

class All
{
    const PHP_PATH = __DIR__ . '/../../Generated/';
    /** @var Moves */
    public $moves = null;
    /** @var Pokemon */
    public $pokemon = null;
    /** @var Types */
    public $types = null;
    /** @var Links */
    public $links = null;

    public function __construct()
    {
        $this->moves = new Moves();
        $this->pokemon = new Pokemon();
        $this->types = new Types();
        $this->links = new Links();
    }

    public function writePHP()
    {
        $this->types->writePHP();
        $this->moves->writePHP();
        $this->pokemon->writePHP();
        $this->links->writePHP();
    }
}
