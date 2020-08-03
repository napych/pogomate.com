<?php

namespace Controller;

class Counters extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->root->appendChild($this->xml->createElement('page-counters'));
    }
}