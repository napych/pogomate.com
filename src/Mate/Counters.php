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

    protected $attackEffect = [];
    protected $defenseEffect = [];

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
    protected $bestEffect = 0;

    /**
     * Fill best and good attacks
     */
    protected function fillAttacks()
    {
        if ($this->bestAttacks !== null || $this->goodAttacks !== null) {
            return;
        }

        // get attack effectiveness for every attack type
        $this->attackEffect = [];
        foreach (Types::TYPE_ENUM as $attackType) {
            $this->attackEffect[$attackType] = 1;
        }
        foreach ($this->bossTypes as $bossType) {
            foreach (TypeEffectiveness::EFFECTIVENESS as $attackType => $effectivenessData) {
                $this->attackEffect[$attackType] *= $effectivenessData[$bossType] ?? 1;
            }
        }

        // find out best and good attacks
        $this->bestEffect = 0;
        $this->bestAttacks = [];
        $this->goodAttacks = [];
        foreach ($this->attackEffect as $attackType => $effectiveness) {
            if ($effectiveness > $this->bestEffect) {
                $this->bestEffect = $effectiveness;
                $this->bestAttacks = [$attackType];
            } elseif ($effectiveness === $this->bestEffect) {
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

    protected function fillDefense()
    {
        if (!empty($this->defenseEffect) || empty($this->bossAttacks)) {
            return;
        }
        foreach ($this->bossAttacks as $attackN => $bossAttack) {
            foreach (Types::TYPE_ENUM as $type1) {
                $effect1 = TypeEffectiveness::EFFECTIVENESS[$bossAttack][$type1];
                foreach (Types::TYPE_ENUM as $type2) {
                    if ($type1 === $type2) {
                        $this->defenseEffect[$type1][$type2][$attackN] = $effect1;
                        continue;
                    }
                    $effect2 = TypeEffectiveness::EFFECTIVENESS[$bossAttack][$type2];
                    $this->defenseEffect[$type1][$type2][$attackN] = $effect1 * $effect2;
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
     * @return Pokemon[][]
     */
    protected function getSuggestions(): array
    {
        $this->fillAttacks();
        $this->fillBadTypes();

        $this->fillDefense();
        $suggestions = [];

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
                $type2 = $pokemon->getType2() ?: $type1;
                $defEffects = [];
                for ($i = 0; $i < sizeof($this->defenseEffect[$type1][$type2]); $i++) {
                    if (($effect = $this->defenseEffect[$type1][$type2][$i]) > 1 && $grade === 'good') {
                        continue 2;
                    }
                    $defEffects[$i] = ['type' => $this->bossAttacks[$i], 'effect' => round($effect, 3)];
                }
                $suggestion = [
                    'pokemon' => $pokemon,
                    'attack' => [
                        'grade' => $grade,
                        'type' => $type,
                        'effect' => round($this->attackEffect[$type], 3),
                    ],
                    'defense' => $defEffects
                ];
                $suggestions[] = $suggestion;
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
            $node->setAttribute('frontEffect', $this->bestEffect);
        }
        $node->setAttribute('team', $this->getGoodAttacksString() . $this->getBadTypesString());

        $suggestions = $this->getSuggestions();
        if (!empty($suggestions)) {
            $suggestionsNode = $node->appendChild($node->ownerDocument->createElement('suggestions'));
            foreach ($suggestions as $suggestion) {
                $suggestionNode = $suggestion['pokemon']->getXML($suggestionsNode, 'suggestion', false);
                $attackNode = $suggestionNode->appendChild($suggestionNode->ownerDocument->createElement('attack'));
                foreach ($suggestion['attack'] as $k => $v) {
                    $attackNode->setAttribute($k, $v);
                }
                foreach ($suggestion['defense'] as $defense) {
                    $defenseNode = $suggestionNode->appendChild($suggestionNode->ownerDocument->createElement('defense'));
                    foreach ($defense as $k => $v) {
                        $defenseNode->setAttribute($k, $v);
                    }
                }
            }
        }

        return $node;
    }
}
