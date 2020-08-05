<?php

namespace Controller;

use Pogo\Data\Types;

class Counters extends \Difra\Controller
{
    protected function indexAction()
    {
        $node = $this->root->appendChild($this->xml->createElement('page-counters'));
        $counters = new \Pogo\Counters;
        $counters->addTypes(Types::FIRE);
        $node->setAttribute('test', $counters->getString());
    }
}