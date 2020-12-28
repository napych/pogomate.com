<?php

namespace Controller;

use Difra\Controller;
use Difra\Param\AnyString;
use Difra\View\HttpError;

class Move extends Controller
{
    protected function indexAction(AnyString $link)
    {
        $moves = \Pogo\Pokemon\Move::getByLink($link->val());
        if (empty($moves)) {
            throw new HttpError(404);
        }
        $pageNode = $this->root->appendChild($this->xml->createElement('page-move'));
        foreach ($moves as $move) {
            $move->getXML($pageNode, true, true);
        }
    }
}