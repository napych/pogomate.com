<?php

namespace Controller;

use Difra\Controller;
use Difra\Param\AnyString;
use Difra\View;
use Difra\View\HttpError;
use Pogo\Data\Generated\MoveUsers;

class Move extends Controller
{
    protected function indexAction(AnyString $link)
    {
        View::addExpires(31536000); // 1y
        $moves = \Pogo\Pokemon\Move::getByLink($link->val());
        if (empty($moves)) {
            throw new HttpError(404);
        }
        $pageNode = $this->root->appendChild($this->xml->createElement('page-move'));
        foreach ($moves as $move) {
            $moveNode = $move->getXML($pageNode, true, true);
            if (!empty(MoveUsers::MOVES[$move->getId()])) {
                foreach (MoveUsers::MOVES[$move->getId()] as $user) {
                    $pokemon = \Pogo\Pokemon::get($user);
                    if ($pokemon->isPurified()) {
                        continue;
                    }
                    $pokemon->getXML($moveNode, true, false);
                }
            }
        }
    }
}