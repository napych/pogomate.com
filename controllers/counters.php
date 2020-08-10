<?php

namespace Controller;

use Difra\View\HttpError;
use Pogo\Data\Types;

class Counters extends \Difra\Controller
{
    protected function indexAction()
    {
        $node = $this->root->appendChild($this->xml->createElement('page-counters'));
        Types::getTypesXML($node, true);
        $node->setAttribute('type1', $_GET['type1'] ?? '');
        $node->setAttribute('type2', $_GET['type2'] ?? '');
        $this->setTitle('Counters');
        $types = [];
        if (!empty($_GET['type1']) || !empty($_GET['type2'])) {
            $counters = new \Pogo\Counters;
            if (!empty($_GET['type1'])) {
                $types[] = $_GET['type1'];
            }
            if (!empty($_GET['type2'])) {
                $types[] = $_GET['type2'];
            }
            try {
                $counters->addTypes($types);
            } catch (\Exception $e) {
                throw new HttpError(404);
            }
            $this->setTitle('Counters for ' . implode('/', $types));
            $counters->getXML($node, true);
        }
    }
}