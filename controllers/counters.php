<?php

namespace Controller;

use Difra\View\HttpError;
use Pogo\Pokemon\Types;

class Counters extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Pokémon Go raid counters search strings generator');
        $this->setDescription('Pokémon Go Counters search strings generator');
        $this->setKeywords('pókemon go, team rocket, raid boss, search string, best counters');
        $this->putExpires(86400);

        $node = $this->root->appendChild($this->xml->createElement('page-counters'));
        Types::getTypesXML($node, true);
        $node->setAttribute('type1', $_GET['type1'] ?? '');
        $node->setAttribute('type2', $_GET['type2'] ?? '');
        $node->setAttribute('attack1', $_GET['attack1'] ?? '');
        $node->setAttribute('attack2', $_GET['attack2'] ?? '');

        $types = [];
        if (!empty($_GET['type1']) || !empty($_GET['type2'])) {
            $counters = new \Pogo\Mate\Counters;
            if (!empty($_GET['type1'])) {
                $types[] = $_GET['type1'];
            }
            if (!empty($_GET['type2']) && (!isset($_GET['type1']) || $_GET['type1'] !== $_GET['type2'])) {
                $types[] = $_GET['type2'];
            }
            try {
                $counters->addTypes($types);
            } catch (\Exception $e) {
                throw new HttpError(404);
            }
            $attacks = [];
            if (!empty($_GET['attack1'])) {
                $attacks[] = $_GET['attack1'];
            }
            if (!empty($_GET['attack2']) && (!isset($_GET['attack1']) || $_GET['attack1'] !== $_GET['attack2'])) {
                $attacks[] = $_GET['attack2'];
            }
            try {
                $counters->addAttackTypes($attacks);
            } catch (\Exception) {
                throw new \Exception(404);
            }
            $typeStr = implode('/', $types);
            if (!empty($attacks)) {
                $typeStr .= ' type with ' . implode('/', $attacks) . ' attacks';
            }
            $this->setTitle('Pokémon counters for ' . $typeStr);
            $this->setDescription(
                'Pokémon Go Counters search string for ' . $typeStr
            );
            $this->setKeywords(
                implode('/', $types) . ' counters, '
                . 'what counters ' . implode('/', $types) .', '
                . $this->getKeywords());
            $subNode = $counters->getXML($node, true);
            $subNode->setAttribute('typeStr', $typeStr);
        }
    }
}
