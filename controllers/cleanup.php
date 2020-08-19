<?php

namespace Controller;

class Cleanup extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Pokémon storage cleanup search strings');
        $this->setDescription('Use a search string to clean up your pokémon storage fast');
        $this->setKeywords('pokémon go, pogo tools, pokémon cleanup, storage cleanup, search strings');

        $node = $this->root->appendChild($this->xml->createElement('page-cleanup'));
        $lists = \Pogo\Data\Lists::getAll();
        $all = new \Pogo\Strings();
        $all->addLists($lists);

        $node->setAttribute('cleanup', '!4*&cp0-1999&!shiny&!lucky&!legendary&!mythical&!@special&' . $all->getExcludeString());
    }
}