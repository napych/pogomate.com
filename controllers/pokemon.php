<?php

declare(strict_types=1);

namespace Controller;

use Difra\Debugger;
use Difra\Param\AnyString;
use Difra\View;
use Difra\View\HttpError;
use Pogo\Mate\Leagues;
use Pogo\Mate\Rank;
use Pogo\Mate\Rank\Calc;
use Pogo\Mate\Stats;
use Pogo\Mate\Level;
use Pogo\Pokemon\Mods;

/**
 * /pokemon controller
 */
class Pokemon extends \Difra\Controller
{
    /**
     * @param \Difra\Param\AnyString|null $link
     * @throws \Difra\View\HttpError
     */
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

    /**
     * Add search form
     */
    private function searchForm()
    {
        $this->setTitle('Pokémon search');
        $this->setDescription('Search for a pokémon to find out what\'s it useful for');
        $this->setKeywords('pokémon go, useful pokémon, pokémon list, tier list, pokémon species');

        $this->root->appendChild($this->xml->createElement('page-pokemon-search'));
    }

    /**
     * @param string $name
     * @throws \Difra\View\HttpError
     */
    private function pokemon(string $name)
    {
        // old links correction
        if (str_contains($name, '_')) {
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
            $keywords[] = 'mythical pokémon';
        } elseif ($legendary) {
            $this->setDescription($commonName . ' legendary pokémon information');
            $keywords[] = 'legendary pokémon';
        } else {
            $this->setDescription($commonName . ' pokémon information');
        }

        $this->setKeywords(
            implode(', ', $keywords) . ', attacker tier list, PVP tiers, top PVP, defenders, top by type'
        );

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
                    if ($reason['type'] === Leagues::GL || $reason['type'] === Leagues::UL) {
                        Rank::getBestXML(node: $reasonNode, pokemon: $reason['evolve'] ?? $pokemon, league: $reason['type'], addNode: false);
                    }
                    foreach ($reason as $k => $v) {
                        switch ($k) {
                            case 'evolve':
                                $evoPoke = \Pogo\Pokemon::get($v);
                                $evoPoke->getXML($reasonNode, 'evolve');
                                break;
                            default:
                                $reasonNode->setAttribute($k, $v ?? '');
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

    protected function testAction()
    {
        $pokemon = \Pogo\Pokemon::get(\Pogo\Pokemon::RAICHU | \Pogo\Pokemon\Mods::ALOLAN);
        $matches = [];
        for ($attack = 0; $attack <= 15; $attack++) {
            for ($defense = 0; $defense <= 15; $defense++) {
                for ($stamina = 0; $stamina <= 15; $stamina++) {
                    $level = $matchedLevel = 0;
                    $cp = $matchedCP = 0;
                    while ($cp <= 1500) {
                        $matchedLevel = $level;
                        $matchedCP = $cp;
                        if ($matchedLevel == 50) {
                            break;
                        }
                        $level += .5;
                        $cp = Stats::getCP($pokemon, $attack, $defense, $stamina, $level);
                    }
                    $prod = Calc::getStatProduct($pokemon, $attack, $defense, $stamina, $matchedLevel);
                    $matches[] = [$attack, $defense, $stamina, $matchedLevel, $matchedCP, $prod];
                }
            }
        }
        usort(
            $matches,
            function ($v1, $v2) {
                return $v2[5] <=> $v1[5];
            }
        );
        foreach ($matches as $match) {
            echo "$match[0]/$match[1]/$match[2] L:$match[3] CP:$match[4] SP:$match[5]<br/>\n";
        }
    }
}
