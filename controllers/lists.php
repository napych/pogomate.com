<?php

declare(strict_types=1);

namespace Controller;

class Lists extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->putExpires(86400);

        $this->setTitle('Pokémon Go search strings');
        $this->setDescription('Pokémon Go search strings for finding all pokémon matching various lists');
        $this->setKeywords('pokémon go, gamepress, tier list, search strings, top attackers, battle league');

        $node = $this->root->appendChild($this->xml->createElement('page-lists'));
        \Pogo\Lists::getListsXML(node: $node, addNode: false, withStrings: true, withSubLists: true);
    }
}
