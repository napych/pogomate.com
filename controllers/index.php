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

    protected function serviceJsAction()
    {
        $this->putExpires(86400);

        $this->outputType = 'application/javascript';
        $this->output =
            file_get_contents(__DIR__ . '/../htdocs/js/service.js')
            . "\nappService.build='" . Envi\Version::getBuild(true) . "';"
            . "\nappService.cacheName='PoGoMate-' + appService.build;";
    }

}
