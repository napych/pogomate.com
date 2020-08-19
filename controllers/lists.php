<?php

namespace Controller;

class Lists extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Pokémon Go tier lists search strings');
        $this->setDescription('Use search strings to find all matching pokémon');
        $this->setKeywords('pokémon go, gamepress, tier list, search strings');

        $node = $this->root->appendChild($this->xml->createElement('page-lists'));
        $lists = \Pogo\Data\Lists::getAll();
        foreach ($lists as $name => $list) {
            $single = new \Pogo\Strings();
            $single->addList($list);
            $listNode = $node->appendChild($this->xml->createElement('list'));
            $listNode->setAttribute('name', $name);
            $listNode->setAttribute('string', $single->getIncludeString());
        }
    }
}