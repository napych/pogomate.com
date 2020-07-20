<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Mods;
use Pogo\Pokemon;

class UL
{
    const DESCRIPTION = 'GamePress Ultra League';
    const RANKS = [
        'Tier 1' => [Pokemon::REGISTEEL, Pokemon::GIRATINA],
        'Tier 1.5' => [
            Pokemon::SWAMPERT,
            Pokemon::MUK,
            Pokemon::SNORLAX,
            Pokemon::CRESSELIA,
            Pokemon::LICKILICKY
        ],
        'Tier 2' => [
            Pokemon::SHIFTRY,
            Pokemon::ESCAVALIER,
            Pokemon::SCRAFTY,
            Pokemon::GIRATINA,
            Pokemon::UXIE,
            Pokemon::TOGEKISS,
            Pokemon::ZANGOOSE,
            Pokemon::CHARIZARD,
            Pokemon::BLASTOISE,
            Pokemon::STEELIX,
            Pokemon::TYPHLOSION,
            Pokemon::MEGANIUM,
            Pokemon::MEW,
            Pokemon::ARTICUNO,
            Pokemon::LAPRAS,
            Pokemon::GYARADOS,
            Pokemon::POLIWRATH,
            Pokemon::CLEFABLE,
            Pokemon::SIRFETCH_D
        ],
        'Tier 2.5' => [
            Pokemon::VENUSAUR,
            Pokemon::SUICUNE,
            Pokemon::OBSTAGOON,
            Pokemon::MEWTWO,
            Pokemon::SEISMITOAD,
            Pokemon::CONKELDURR,
            Pokemon::MELMETAL,
            Pokemon::TOXICROAK,
            Pokemon::DRAPION,
            Pokemon::GARCHOMP,
            Pokemon::DRIFBLIM,
            Pokemon::JIRACHI,
            Pokemon::REGICE,
            Pokemon::WIGGLYTUFF,
            Pokemon::WHISCASH,
            Pokemon::FLYGON,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::DRAGONITE,
            Pokemon::CLOYSTER,
            Pokemon::PRIMEAPE,
            Pokemon::MACHAMP,
            Pokemon::KINGDRA,
            Pokemon::URSARING,
            Pokemon::UMBREON,
            Pokemon::POLITOED
        ]
    ];
}
