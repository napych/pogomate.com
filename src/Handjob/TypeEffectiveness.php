<?php

namespace Pogo\Handjob;

use Pogo\General\Types;

/** @deprecated */
class TypeEffectiveness
{
    const DOUBLE = 1.6;
    const HALF = 1 / self::DOUBLE;
    const RESISTANCE = 1 / self::DOUBLE / self::DOUBLE;

    const EFFECTIVENESS = [
        Types::BUG => [
            Types::DARK => self::DOUBLE,
            Types::GRASS => self::DOUBLE,
            Types::PSYCHIC => self::DOUBLE,

            Types::FIGHTING => self::HALF,
            Types::FIRE => self::HALF,
            Types::FLYING => self::HALF,
            Types::FAIRY => self::HALF,
            Types::GHOST => self::HALF,
            Types::POISON => self::HALF,
            Types::STEEL => self::HALF
        ],
        Types::DARK => [
            Types::GHOST => self::DOUBLE,
            Types::PSYCHIC => self::DOUBLE,

            Types::DARK => self::HALF,
            Types::FIGHTING => self::HALF,
            Types::FAIRY => self::HALF
        ],
        Types::DRAGON => [
            Types::DRAGON => self::DOUBLE,

            Types::STEEL => self::HALF,

            Types::FAIRY => self::RESISTANCE
        ],
        Types::ELECTRIC => [
            Types::FLYING => self::DOUBLE,
            Types::WATER => self::DOUBLE,

            Types::DRAGON => self::HALF,
            Types::ELECTRIC => self::HALF,
            Types::GRASS => self::HALF,

            Types::GROUND => self::RESISTANCE
        ],
        Types::FAIRY => [
            Types::DARK => self::DOUBLE,
            Types::DRAGON => self::DOUBLE,
            Types::FIGHTING => self::DOUBLE,

            Types::FIRE => self::HALF,
            Types::POISON => self::HALF,
            Types::STEEL => self::HALF
        ],
        Types::FIGHTING => [
            Types::DARK => self::DOUBLE,
            Types::ICE => self::DOUBLE,
            Types::NORMAL => self::DOUBLE,
            Types::ROCK => self::DOUBLE,
            Types::STEEL => self::DOUBLE,

            Types::BUG => self::HALF,
            Types::FAIRY => self::HALF,
            Types::FLYING => self::HALF,
            Types::POISON => self::HALF,
            Types::PSYCHIC => self::HALF,

            Types::GHOST => self::RESISTANCE
        ],
        Types::FIRE => [
            Types::BUG => self::DOUBLE,
            Types::GRASS => self::DOUBLE,
            Types::ICE => self::DOUBLE,
            Types::STEEL => self::DOUBLE,

            Types::DRAGON => self::HALF,
            Types::FIRE => self::HALF,
            Types::ROCK => self::HALF,
            Types::WATER => self::HALF
        ],
        Types::FLYING => [
            Types::BUG => self::DOUBLE,
            Types::FIGHTING => self::DOUBLE,
            Types::GRASS => self::DOUBLE,

            Types::ELECTRIC => self::HALF,
            Types::ROCK => self::HALF,
            Types::STEEL => self::HALF
        ],
        Types::GHOST => [
            Types::GHOST => self::DOUBLE,
            Types::PSYCHIC => self::DOUBLE,

            Types::DARK => self::HALF,

            Types::NORMAL => self::RESISTANCE
        ],
        Types::GRASS => [
            Types::GROUND => self::DOUBLE,
            Types::ROCK => self::DOUBLE,
            Types::WATER => self::DOUBLE,

            Types::BUG => self::HALF,
            Types::DRAGON => self::HALF,
            Types::FIRE => self::HALF,
            Types::FLYING => self::HALF,
            Types::GRASS => self::HALF,
            Types::POISON => self::HALF,
            Types::STEEL => self::HALF
        ],
        Types::GROUND => [
            Types::ELECTRIC => self::DOUBLE,
            Types::FIRE => self::DOUBLE,
            Types::POISON => self::DOUBLE,
            Types::ROCK => self::DOUBLE,
            Types::STEEL => self::DOUBLE,

            Types::BUG => self::HALF,
            Types::GRASS => self::HALF,

            Types::FLYING => self::RESISTANCE
        ],
        Types::ICE => [
            Types::DRAGON => self::DOUBLE,
            Types::FLYING => self::DOUBLE,
            Types::GRASS => self::DOUBLE,
            Types::GROUND => self::DOUBLE,

            Types::FIRE => self::HALF,
            Types::ICE => self::HALF,
            Types::STEEL => self::HALF,
            Types::WATER => self::HALF
        ],
        Types::NORMAL => [
            Types::ROCK => self::HALF,
            Types::STEEL => self::HALF,

            Types::GHOST => self::RESISTANCE
        ],
        Types::POISON => [
            Types::GRASS => self::DOUBLE,
            Types::FAIRY => self::DOUBLE,

            Types::GHOST => self::HALF,
            Types::GROUND => self::HALF,
            Types::POISON => self::HALF,
            Types::ROCK => self::HALF,

            Types::STEEL => self::RESISTANCE
        ],
        Types::PSYCHIC => [
            Types::FIGHTING => self::DOUBLE,
            Types::POISON => self::DOUBLE,

            Types::PSYCHIC => self::HALF,
            Types::STEEL => self::HALF,

            Types::DARK => self::RESISTANCE
        ],
        Types::ROCK => [
            Types::BUG => self::DOUBLE,
            Types::FIRE => self::DOUBLE,
            Types::FLYING => self::DOUBLE,
            Types::ICE => self::DOUBLE,

            Types::FIGHTING => self::HALF,
            Types::GROUND => self::HALF,
            Types::STEEL => self::HALF
        ],
        Types::STEEL => [
            Types::FAIRY => self::DOUBLE,
            Types::ICE => self::DOUBLE,
            Types::ROCK => self::DOUBLE,

            Types::ELECTRIC => self::HALF,
            Types::FIRE => self::HALF,
            Types::STEEL => self::HALF,
            Types::WATER => self::HALF
        ],
        Types::WATER => [
            Types::FIRE => self::DOUBLE,
            Types::GROUND => self::DOUBLE,
            Types::ROCK => self::DOUBLE,

            Types::DRAGON => self::HALF,
            Types::GRASS => self::HALF,
            Types::WATER => self::HALF
        ]
    ];
}