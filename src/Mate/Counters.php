<?php

namespace Pogo\Mate;

use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Manual\PokemonList;
use Pogo\Lists\Gamepress\Top;
use Pogo\Pokemon;
use Pogo\Pokemon\Types;
use Pogo\Data\Generated\TypeEffectiveness;

class Counters
{
    protected $bossAttacks = [];
    protected $bossTypes = [];

    /**
     * Add attack type(s)
     * @param string|string[] $attackTypes
     * @throws \Exception
     */
    public function addAttackTypes($attackTypes)
    {
        if (is_array($attackTypes)) {
            foreach ($attackTypes as $attackType) {
                $this->addAttackTypes($attackType);
            }
            return;
        }
        if (!Types::isValidType($attackTypes)) {
            throw new \Exception('Invalid attack type: ' . $attackTypes);
        }
        $this->bossAttacks[] = $attackTypes;
    }

    /**
     * Add pokemon type(s)
     * @param string|string[] $types
     * @throws \Exception
     */
    public function addTypes($types)
    {
        if (is_array($types)) {
            foreach ($types as $type) {
                $this->addTypes($type);
            }
            return;
        }
        if (!Types::isValidType($types)) {
            throw new \Exception('Wrong type: ' . $types);
        }
        $this->bossTypes[] = $types;
    }

    protected $bestAttacks = null;
    protected $goodAttacks = null;
    protected $bestAttacksString = null;
    protected $goodAttacksString = null;

    /**
     * Fill best and good attacks
     */
    protected function fillAttacks()
    {
        if ($this->bestAttacks !== null || $this->goodAttacks !== null) {
            return;
        }

        // get attack effectiveness for every attack type
        $attacks = [];
        foreach (Types::TYPE_ENUM as $attackType) {
            $attacks[$attackType] = 1;
        }
        foreach ($this->bossTypes as $bossType) {
            foreach (TypeEffectiveness::EFFECTIVENESS as $attackType => $effectivenessData) {
                $attacks[$attackType] *= $effectivenessData[$bossType] ?? 1;
            }
        }

        // find out best and good attacks
        $bestEffect = 0;
        $this->bestAttacks = [];
        $this->goodAttacks = [];
        foreach ($attacks as $attackType => $effectiveness) {
            if ($effectiveness > $bestEffect) {
                $bestEffect = $effectiveness;
                $this->bestAttacks = [$attackType];
            } elseif ($effectiveness === $bestEffect) {
                $this->bestAttacks[] = $attackType;
            }
            if ($effectiveness > 1) {
                $this->goodAttacks[] = $attackType;
            }
        }

        if ($this->bestAttacks === $this->goodAttacks) {
            $this->bestAttacks = [];
        }
        if (empty($this->goodAttacks)) {
            $this->goodAttacks = $this->bestAttacks;
            $this->bestAttacks = [];
        }
    }

    public function getBestAttacksString()
    {
        if ($this->bestAttacksString !== null) {
            return $this->bestAttacksString;
        }
        $this->fillAttacks();
        if (!empty($this->bestAttacks)) {
            return $this->bestAttacksString =
                '@1' . implode(',@1', $this->bestAttacks)
                . '&@2' . implode(',@2', $this->bestAttacks)
                . ',@3' . implode(',@3', $this->bestAttacks);
        } else {
            return $this->bestAttacksString = '';
        }
    }

    public function getGoodAttacksString()
    {
        if ($this->goodAttacksString !== null) {
            return $this->goodAttacksString;
        }
        $this->fillAttacks();
        if (!empty($this->goodAttacks)) {
            return $this->goodAttacksString =
                '@1' . implode(',@1', $this->goodAttacks)
                . '&@2' . implode(',@2', $this->goodAttacks)
                . ',@3' . implode(',@3', $this->goodAttacks);
        } else {
            return $this->goodAttacksString = '';
        }
    }

    protected $badTypes = null;

    protected function fillBadTypes(): void
    {
        if ($this->badTypes !== null) {
            return;
        }
        if (empty($this->bossAttacks)) {
            $this->bossAttacks = $this->bossTypes;
        }

        $this->badTypes = [];
        foreach ($this->bossAttacks as $n => $bossAttack) {
            foreach (Types::TYPE_ENUM as $pokemonType) {
                $effectiveness = TypeEffectiveness::EFFECTIVENESS[$bossAttack][$pokemonType] ?? 1;
                if ($effectiveness > 1) {
                    $skip = [];
                    foreach (Types::TYPE_ENUM as $pokemonType2) {
                        $effectiveness2 = TypeEffectiveness::EFFECTIVENESS[$bossAttack][$pokemonType2] ?? 1;
                        if ($effectiveness * $effectiveness2 <= 1) {
                            $skip[] = $pokemonType2;
                        }
                    }
                    if (isset($this->badTypes[$pokemonType])) {
                        $this->badTypes[$pokemonType] = array_intersect($this->badTypes[$pokemonType], $skip);
                    } else {
                        $this->badTypes[$pokemonType] = $skip;
                    }
                }
            }
        }
    }

    /**
     * Get search string
     * @return string
     */
    public function getBadTypesString()
    {
        $this->fillBadTypes();
        if (empty($this->badTypes)) {
            return '';
        }

        $badTypesString = '';
        foreach ($this->badTypes as $badType => $skip) {
            $badTypesString .= '&!' . $badType;
            if (!empty($skip)) {
                $badTypesString .= ',' . implode(',', $skip);
            }
        }
        return $badTypesString;
    }

    /**
     * @return Pokemon[]
     */
    protected function getSuggestions(): array
    {
        $this->fillAttacks();
        $this->fillBadTypes();

        $suggestions = ['best' => [], 'good' => []];

        foreach (Top::TIERS as $type => $list) {
            if (in_array($type, $this->bestAttacks)) {
                $grade = 'best';
            } elseif (in_array($type, $this->goodAttacks)) {
                $grade = 'good';
            } else {
                continue;
            }
            foreach ($list as $code) {
                $pokemon = Pokemon::get($code);
                $type1 = $pokemon->getType1();
                $type2 = $pokemon->getType2();
                if (isset($this->badTypes[$type1]) && (!$type2 || !in_array($type2, $this->badTypes[$type1]))) {
                    continue;
                }
                if ($type2 && isset($this->badTypes[$type2]) && !in_array($type1, $this->badTypes[$type2])) {
                    continue;
                }
                $suggestions[$grade][] = $pokemon;
            }
        }

        return $suggestions;
    }

    /**
     * Get search string as XML
     * @param \DOMNode|\DOMElement $node
     * @param bool|string $addNode
     * @return \DOMElement|\DOMNode
     */
    public function getXML(
        $node,
        $addNode = false
    ) {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('counters'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        if ($front = $this->getBestAttacksString()) {
            $node->setAttribute('front', $front);
        }
        $node->setAttribute('team', $this->getGoodAttacksString() . $this->getBadTypesString());

        $suggestions = $this->getSuggestions();
        if (!empty($suggestions['best'])) {
            $suggestionsNode = $node->appendChild($node->ownerDocument->createElement('suggestions'));
            $suggestionsNode->setAttribute('set', 'best');
            foreach ($suggestions['best'] as $suggestion) {
                $suggestion->getXML($suggestionsNode, true, false);
            }
        }
        if (!empty($suggestions['good'])) {
            $suggestionsNode = $node->appendChild($node->ownerDocument->createElement('suggestions'));
            $suggestionsNode->setAttribute('set', 'good');
            foreach ($suggestions['good'] as $suggestion) {
                $suggestion->getXML($suggestionsNode, true, false);
            }
        }

        return $node;
    }
}
