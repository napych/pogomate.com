<?php

namespace Controller;

class Cleanup extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Cleanup');
        $node = $this->root->appendChild($this->xml->createElement('page-cleanup'));
        $lists = \Pogo\Data\Lists::getAll();
        $all = new \Pogo\Strings();
        $all->addLists($lists);

        $node->setAttribute('cleanup', '!4*&cp0-1999&!shiny&!lucky&!legendary&!mythical&!@special&' . $all->getExcludeString());
    }
}