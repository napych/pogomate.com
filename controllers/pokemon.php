<?php

namespace Controller;

use Difra\Param\AnyString;
use Difra\View\HttpError;
use Difra\View\Output;

class Pokemon extends \Difra\Controller
{
    protected function indexAction(AnyString $name = null)
    {
        // search form
        if (!$name) {
            $this->setTitle('Useful pokémon search');
            $this->setDescription('Search for a pokémon to find out what\'s it useful for');
            $this->setKeywords('pokémon go, useful pokémon, pokémon list, tier list');

            $this->realRoot->setAttribute('pokemonSearch', 1);
            $this->root->appendChild($this->xml->createElement('page-pokemon'));

            return;
        }

        // pokemon page
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
//        try {
//            $this->checkReferer();
//        } catch (\Exception $e) {
//            throw new HttpError(404);
//        }
        $list = \Pogo\Pokemon::getList(true);
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