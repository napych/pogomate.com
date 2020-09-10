<?php

namespace Controller;

class Lists extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->putExpires(86400);

        $this->setTitle('Pokémon Go tier lists search strings');
        $this->setDescription('Use search strings to find all matching pokémon');
        $this->setKeywords('pokémon go, gamepress, tier list, search strings');

        $node = $this->root->appendChild($this->xml->createElement('page-lists'));
        \Pogo\Data\Lists::getAllXML($node, false, true);
    }
}
