<?php

namespace Pogo\Data\Gamepress;

use MongoDB\BSON\Type;
use Pogo\Data\Types;
use Pogo\Pokemon;

class Top
{
    const DESCRIPTION = 'GamePress top non-legendary attackers';

    const TIERS = [
        Types::BUG => [
            Pokemon::SCIZOR,
            Pokemon::PINSIR
        ],
        Types::DARK => [
            Pokemon::HYDREIGON,
            Pokemon::TYRANITAR,
            Pokemon::WEAVILE
        ],
        Types::DRAGON => [
            Pokemon::SALAMENCE,
            Pokemon::DRAGONITE,
            Pokemon::GARCHOMP
        ],
        Types::ELECTRIC => [
            Pokemon::ELECTIVIRE,
            Pokemon::MAGNEZONE
        ],
        Types::FAIRY => [
            Pokemon::GARDEVOIR
        ],
        Types::FIGHTING => [
            Pokemon::LUCARIO,
            Pokemon::CONKELDURR,
            Pokemon::MACHAMP
        ],
        Types::FIRE => [
            Pokemon::CHANDELURE,
            Pokemon::BLAZIKEN
        ],
        Types::FLYING => [
            Pokemon::HONCHKROW
        ],
        Types::GHOST => [
            Pokemon::CHANDELURE,
            Pokemon::GENGAR
        ],
        Types::GRASS => [
            Pokemon::ROSERADE,
            Pokemon::SCEPTILE
        ],
        Types::GROUND => [
            Pokemon::EXCADRILL
        ],
        Types::ICE => [
            Pokemon::MAMOSWINE
        ],
        Types::NORMAL => [
        ],
        Types::POISON => [
            Pokemon::ROSERADE
        ],
        Types::PSYCHIC => [
            Pokemon::ALAKAZAM,
            Pokemon::ESPEON
        ],
        Types::ROCK => [
            Pokemon::RAMPARDOS,
            Pokemon::TYRANITAR,
            Pokemon::RHYPERIOR
        ],
        Types::STEEL => [
            Pokemon::METAGROSS,
            Pokemon::EXCADRILL
        ],
        Types::WATER => [
            Pokemon::KINGLER,
            Pokemon::SWAMPERT
        ],
    ];
}
