<?php

namespace Controller;

use Difra\Debugger;
use Difra\Param\AnyString;
use Difra\View;
use Difra\View\HttpError;

class Pokemon extends \Difra\Controller
{
    protected function indexAction(AnyString $link = null)
    {
        $this->putExpires(86400);

        // search form
        if (!$link) {
            $this->searchForm();
        } else {
            $this->pokemon($link->val());
        }
    }

    private function searchForm()
    {
        $this->setTitle('Pokémon search');
        $this->setDescription('Search for a pokémon to find out what\'s it useful for');
        $this->setKeywords('pokémon go, useful pokémon, pokémon list, tier list, pokémon species');

        $this->root->appendChild($this->xml->createElement('page-pokemon-search'));
    }

    private function pokemon(string $name)
    {
        // old links correction
        if (strpos($name, '_') !== false) {
            View::redirect($this->getUri() . '/' . str_replace('_', '-', $name), true);
        }

        // pokemon page
        $pokemonList = \Pogo\Pokemon::getFormsByLink($name);
        if (empty($pokemonList)) {
            throw new HttpError(404);
        }

        $commonName = reset($pokemonList)->getShortName();
        $this->setTitle($commonName . ' pokémon');

        $keywords = ['pokémon go'];
        $mythical = $legendary = false;
        foreach ($pokemonList as $pokemon) {
            $keywords[] = $pokemon->getName();
            if ($pokemon->isLegendary()) {
                $legendary = true;
            }
            if ($pokemon->isMythical()) {
                $mythical = true;
            }
        }
        if ($mythical) {
            $this->setDescription($commonName . ' mythical pokémon information');
            $keywords[] = 'mytical pokémon';
        } elseif ($legendary) {
            $this->setDescription($commonName . ' legendary pokémon information');
            $keywords[] = 'legendary pokémon';
        } else {
            $this->setDescription($commonName . ' pokémon information');
        }

        $this->setKeywords(implode(', ', $keywords) . ', attacker tier list, PVP tiers, top PVP, defenders, top by type');

        $node = $this->root->appendChild($this->xml->createElement('page-pokemon'));
        $node->setAttribute('name', $commonName);

        $all = new \Pogo\Mate\Strings();
        $all->addLists(\Pogo\Lists::getAll());

        foreach ($pokemonList as $pokemon) {
            $pokemonNode = $pokemon->getXML($node, true, true);

            $pokemon->getFamilyXML($pokemonNode, false);

            // load reasons
            $reasons = $all->getReasons($pokemon);
            if (!empty($reasons)) {
                foreach ($reasons as $reason) {
                    $reasonNode = $pokemonNode->appendChild($this->xml->createElement('reason'));
                    foreach ($reason as $k => $v) {
                        switch ($k) {
                            case 'evolve':
                                \Pogo\Pokemon::get($v)->getXML($reasonNode, 'evolve');
                                break;
                            default:
                                $reasonNode->setAttribute($k, $v);
                        }
                    }
                }
            }
        }
    }

//    protected function listAction()
//    {
//        $this->setTitle('Useful pokémon list');
//        $this->setDescription('Check pokémon to find out what\'s it useful for');
//        $this->setKeywords('pokémon go, useful pokémon, pokémon list, tier list');
//
//        $node = $this->root->appendChild($this->xml->createElement('page-pokemon-list'));
//
//        $lists = \Pogo\Data\Lists::getAll();
//        $all = new \Pogo\Strings();
//        $all->addLists($lists);
//
//        $reasons = $all->getReasons();
//        foreach ($reasons as $name => $reasonList) {
//            $reasonNode = $node->appendChild($this->xml->createElement('reasons'));
//            $reasonNode->setAttribute('name', $name);
//            foreach ($reasonList as $reasonEntry) {
//                $entryNode = $reasonNode->appendChild($this->xml->createElement('reason'));
//                $entryNode->setAttribute('text', $reasonEntry);
//            }
//        }
//    }

    protected function listJsAction()
    {
        $this->putExpires(86400);

        $list = \Pogo\Pokemon::getList();
        $json = [];
        foreach ($list as $pokemon) {
            $shortName = $pokemon->getShortName();
            $data = ['name' => $shortName];
            $linkName = $pokemon->getLinkName();
            if ($linkName !== $shortName) {
                $data['link'] = $linkName;
            }
            $json[$pokemon->getCode()] = $data;
        }
        $this->outputType = 'application/javascript';
        $this->output = 'const searchList = ' . json_encode($json);
    }
}
