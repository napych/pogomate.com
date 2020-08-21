<?php

namespace Controller;

use Difra\Envi;
use Difra\View;

class Index extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->putExpires(86400);

        $this->root->appendChild($this->xml->createElement('page-index'));
    }
}