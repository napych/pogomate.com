<?php

namespace Pogo\Mate;

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

    /**
     * Get search string
     * @return array
     */
    public function getStrings()
    {
        if (empty($this->bossAttacks)) {
            $this->bossAttacks = $this->bossTypes;
        }

        $attacks = [];
        foreach (Types::TYPE_ENUM as $attackType) {
            $attacks[$attackType] = 1;
        }
        foreach ($this->bossTypes as $bossType) {
            foreach (TypeEffectiveness::EFFECTIVENESS as $attackType => $effectivenessData) {
                $attacks[$attackType] *= $effectivenessData[$bossType] ?? 1;
            }
        }
        $bestEffect = 0;
        $bestAttacks = [];
        $goodAttacks = [];
        foreach ($attacks as $attackType => $effectiveness) {
            if ($effectiveness > $bestEffect) {
                $bestEffect = $effectiveness;
                $bestAttacks = [$attackType];
            } elseif ($effectiveness === $bestEffect) {
                $bestAttacks[] = $attackType;
            }
            if ($effectiveness > 1) {
                $goodAttacks[] = $attackType;
            }
        }
        $bestAttacksString = '@1' . implode(',@1', $bestAttacks) . '&@2' . implode(',@2', $bestAttacks) . ',@3' . implode(',@3', $bestAttacks);
        if (empty($goodAttacks)) {
            $goodAttacksString = $bestAttacksString;
            $bestAttacksString = '';
        } else {
            $goodAttacksString = '@1' . implode(',@1', $goodAttacks) . '&@2' . implode(',@2', $goodAttacks) . ',@3' . implode(',@3', $goodAttacks);
            if ($goodAttacksString === $bestAttacksString) {
                $bestAttacksString = '';
            }
        }


        $badTypes = [];
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
                    if (isset($badTypes[$pokemonType])) {
                        $badTypes[$pokemonType] = array_intersect($badTypes[$pokemonType], $skip);
                    } else {
                        $badTypes[$pokemonType] = $skip;
                    }
                }
            }
        }
//        $goodTypes = array_unique($goodTypes);
        if (!empty($badTypes)) {
            $badTypesString = '';
            foreach ($badTypes as $badType => $skip) {
                $badTypesString .= '&!' . $badType;
                if (!empty($skip)) {
                    $badTypesString .= ',' . implode(',', $skip);
                }
            }
        } else {
            $badTypesString = '';
        }
        return [
            'front' => $bestAttacksString,
            'team' => $goodAttacksString . $badTypesString
        ];
    }

    /**
     * Get search string as XML
     * @param \DOMNode|\DOMElement $node
     * @param bool|string $addNode
     * @return \DOMElement|\DOMNode
     */
    public
    function getXML(
        $node,
        $addNode = false
    ) {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('counters'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        $data = $this->getStrings();
        if (!empty($data['front'])) {
            $node->setAttribute('front', $data['front']);
        }
        $node->setAttribute('team', $data['team']);
        return $node;
    }
}
