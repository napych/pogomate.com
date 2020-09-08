<?php

namespace Pogo\Data;

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

    const DOUBLE = 1.6;
    const HALF = 1 / self::DOUBLE;
    const RESISTANCE = 1 / self::DOUBLE / self::DOUBLE;

    const EFFECTIVENESS = [
        self::BUG => [
            self::DARK => self::DOUBLE,
            self::GRASS => self::DOUBLE,
            self::PSYCHIC => self::DOUBLE,

            self::FIGHTING => self::HALF,
            self::FIRE => self::HALF,
            self::FLYING => self::HALF,
            self::FAIRY => self::HALF,
            self::GHOST => self::HALF,
            self::POISON => self::HALF,
            self::STEEL => self::HALF
        ],
        self::DARK => [
            self::GHOST => self::DOUBLE,
            self::PSYCHIC => self::DOUBLE,

            self::DARK => self::HALF,
            self::FIGHTING => self::HALF,
            self::FAIRY => self::HALF
        ],
        self::DRAGON => [
            self::DRAGON => self::DOUBLE,

            self::STEEL => self::HALF,

            self::FAIRY => self::RESISTANCE
        ],
        self::ELECTRIC => [
            self::FLYING => self::DOUBLE,
            self::WATER => self::DOUBLE,

            self::DRAGON => self::HALF,
            self::ELECTRIC => self::HALF,
            self::GRASS => self::HALF,

            self::GROUND => self::RESISTANCE
        ],
        self::FAIRY => [
            self::DARK => self::DOUBLE,
            self::DRAGON => self::DOUBLE,
            self::FIGHTING => self::DOUBLE,

            self::FIRE => self::HALF,
            self::POISON => self::HALF,
            self::STEEL => self::HALF
        ],
        self::FIGHTING => [
            self::DARK => self::DOUBLE,
            self::ICE => self::DOUBLE,
            self::NORMAL => self::DOUBLE,
            self::ROCK => self::DOUBLE,
            self::STEEL => self::DOUBLE,

            self::BUG => self::HALF,
            self::FAIRY => self::HALF,
            self::FLYING => self::HALF,
            self::POISON => self::HALF,
            self::PSYCHIC => self::HALF,

            self::GHOST => self::RESISTANCE
        ],
        self::FIRE => [
            self::BUG => self::DOUBLE,
            self::GRASS => self::DOUBLE,
            self::ICE => self::DOUBLE,
            self::STEEL => self::DOUBLE,

            self::DRAGON => self::HALF,
            self::FIRE => self::HALF,
            self::ROCK => self::HALF,
            self::WATER => self::HALF
        ],
        self::FLYING => [
            self::BUG => self::DOUBLE,
            self::FIGHTING => self::DOUBLE,
            self::GRASS => self::DOUBLE,

            self::ELECTRIC => self::HALF,
            self::ROCK => self::HALF,
            self::STEEL => self::HALF
        ],
        self::GHOST => [
            self::GHOST => self::DOUBLE,
            self::PSYCHIC => self::DOUBLE,

            self::DARK => self::HALF,

            self::NORMAL => self::RESISTANCE
        ],
        self::GRASS => [
            self::GROUND => self::DOUBLE,
            self::ROCK => self::DOUBLE,
            self::WATER => self::DOUBLE,

            self::BUG => self::HALF,
            self::DRAGON => self::HALF,
            self::FIRE => self::HALF,
            self::FLYING => self::HALF,
            self::GRASS => self::HALF,
            self::POISON => self::HALF,
            self::STEEL => self::HALF
        ],
        self::GROUND => [
            self::ELECTRIC => self::DOUBLE,
            self::FIRE => self::DOUBLE,
            self::POISON => self::DOUBLE,
            self::ROCK => self::DOUBLE,
            self::STEEL => self::DOUBLE,

            self::BUG => self::HALF,
            self::GRASS => self::HALF,

            self::FLYING => self::RESISTANCE
        ],
        self::ICE => [
            self::DRAGON => self::DOUBLE,
            self::FLYING => self::DOUBLE,
            self::GRASS => self::DOUBLE,
            self::GROUND => self::DOUBLE,

            self::FIRE => self::HALF,
            self::ICE => self::HALF,
            self::STEEL => self::HALF,
            self::WATER => self::HALF
        ],
        self::NORMAL => [
            self::ROCK => self::HALF,
            self::STEEL => self::HALF,

            self::GHOST => self::RESISTANCE
        ],
        self::POISON => [
            self::GRASS => self::DOUBLE,
            self::FAIRY => self::DOUBLE,

            self::GHOST => self::HALF,
            self::GROUND => self::HALF,
            self::POISON => self::HALF,
            self::ROCK => self::HALF,

            self::STEEL => self::RESISTANCE
        ],
        self::PSYCHIC => [
            self::FIGHTING => self::DOUBLE,
            self::POISON => self::DOUBLE,

            self::PSYCHIC => self::HALF,
            self::STEEL => self::HALF,

            self::DARK => self::RESISTANCE
        ],
        self::ROCK => [
            self::BUG => self::DOUBLE,
            self::FIRE => self::DOUBLE,
            self::FLYING => self::DOUBLE,
            self::ICE => self::DOUBLE,

            self::FIGHTING => self::HALF,
            self::GROUND => self::HALF,
            self::STEEL => self::HALF
        ],
        self::STEEL => [
            self::FAIRY => self::DOUBLE,
            self::ICE => self::DOUBLE,
            self::ROCK => self::DOUBLE,

            self::ELECTRIC => self::HALF,
            self::FIRE => self::HALF,
            self::STEEL => self::HALF,
            self::WATER => self::HALF
        ],
        self::WATER => [
            self::FIRE => self::DOUBLE,
            self::GROUND => self::DOUBLE,
            self::ROCK => self::DOUBLE,

            self::DRAGON => self::HALF,
            self::GRASS => self::HALF,
            self::WATER => self::HALF
        ]
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
        foreach (self::EFFECTIVENESS as $type => $stuff) {
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
}
