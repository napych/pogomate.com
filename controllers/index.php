<?php

namespace Controller;

use Difra\Envi;
use Difra\View;

class Index extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->root->appendChild($this->xml->createElement('page-index'));
    }
}