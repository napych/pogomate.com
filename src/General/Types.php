<?php

namespace Pogo\General;

use Pogo\Data\PHP\TypeEffectiveness;

class Types
{
    const FAIRY = 'Fairy';
    const STEEL = 'Steel';
    const DARK = 'Dark';
    const DRAGON = 'Dragon';
    const GHOST = 'Ghost';
    const ROCK = 'Rock';
    const BUG = 'Bug';
    const PSYCHIC = 'Psychic';
    const FLYING = 'Flying';
    const GROUND = 'Ground';
    const POISON = 'Poison';
    const FIGHTING = 'Fighting';
    const ICE = 'Ice';
    const GRASS = 'Grass';
    const ELECTRIC = 'Electric';
    const WATER = 'Water';
    const FIRE = 'Fire';
    const NORMAL = 'Normal';

    const TYPE_ENUM = [
        self::BUG,
        self::DARK,
        self::DRAGON,
        self::ELECTRIC,
        self::FIGHTING,
        self::FIRE,
        self::FLYING,
        self::GHOST,
        self::GRASS,
        self::GROUND,
        self::FAIRY,
        self::ICE,
        self::NORMAL,
        self::POISON,
        self::PSYCHIC,
        self::ROCK,
        self::STEEL,
        self::WATER
    ];

    /**
     * Get types list as XML
     * @param \DOMElement|\DOMNode $node
     * @param string|bool $addNode
     * @return \DOMElement|\DOMNode
     */
    public static function getTypesXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('types'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        foreach (TypeEffectiveness::EFFECTIVENESS as $type => $stuff) {
            /** @var \DOMElement $typeNode */
            $typeNode = $node->appendChild($node->ownerDocument->createElement('type'));
            $typeNode->setAttribute('name', $type);
        }
        return $node;
    }

    /**
     * Check if type is valid
     * @param string $type
     * @return bool
     */
    public static function isValidType(string $type): bool
    {
        return in_array($type, self::TYPE_ENUM);
    }

    /**
     * Get constant name from value (for code generation)
     * @param string $type
     * @return string|null
     */
    public static function getConst(string $type): ?string
    {
        static $typeConst = null;
        if ($typeConst) {
            return $typeConst[$type] ?? null;
        }
        $reflection = new \ReflectionClass('\\Pogo\\General\\Types');
        $constants = $reflection->getConstants();
        $typeConst = [];
        foreach ($constants as $name => $value) {
            if (in_array($value, self::TYPE_ENUM)) {
                $typeConst[$value] = $name;
            }
        }
        return $typeConst[$type] ?? null;
    }
}
