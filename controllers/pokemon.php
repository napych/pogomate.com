<?php

namespace Controller;

use Difra\Param\AnyString;
use Difra\View;
use Difra\View\HttpError;

class Pokemon extends \Difra\Controller
{
    protected function indexAction(AnyString $name = null)
    {
        $this->putExpires(86400);

        // search form
        if (!$name) {
            $this->searchForm();
        } else {
            $this->pokemon($name->val());
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
        // pokemon page
        $pokemon = \Pogo\Pokemon::getByLink($name);
        if (empty($pokemon)) {
            throw new HttpError(404);
        }
        if ($name !== $pokemon->getLinkName()) {
            View::redirect($this->getUri() . '/' . $pokemon->getLinkName()); // fix link
        }

        $this->setTitle($pokemon->getShortName() . ' pokémon');
        $this->setDescription($pokemon->getShortName() . ' pokémon information');
        $this->setKeywords('pokémon go, ' . $pokemon->getShortName() . ' pokémon, tier list, pokémon usefulness, pvp, pve, pokémon species');

        $node = $this->root->appendChild($this->xml->createElement('page-pokemon'));
        $pokemon->getXML($node, false);

        $pokemon->getFamilyXML($node, false);

        // load reasons
        $all = new \Pogo\Mate\Strings();
        $all->addLists(\Pogo\Lists::getAll());
        $reasons = $all->getReasons($pokemon->getPokedexId());
        foreach ($reasons as $entry) {
            $pokeNode = $entry['pokemon']->getXML($node, true);
            foreach ($entry['reasons'] as $reason) {
                $reasonNode = $pokeNode->appendChild($this->xml->createElement('reason'));
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
