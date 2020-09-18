<?php

namespace Pogo\Lists\Gamepress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class UL
{
    const DESCRIPTION = 'GamePress Ultra League';

    const TIERS = [
        'Tier 1' => [
            Pokemon::REGISTEEL,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED
        ],
        'Tier 1.5' => [
            Pokemon::SWAMPERT,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::CRESSELIA,
            Pokemon::SNORLAX,
            Pokemon::LICKILICKY,
        ],
        'Tier 2' => [
            Pokemon::CHARIZARD,
            Pokemon::ESCAVALIER,
            Pokemon::SCRAFTY,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::UXIE,
            Pokemon::TOGEKISS,
            Pokemon::ZANGOOSE,
            Pokemon::SHIFTRY,
            Pokemon::STEELIX,
            Pokemon::BLASTOISE,
            Pokemon::TYPHLOSION,
            Pokemon::MEGANIUM,
            Pokemon::MEW,
            Pokemon::ARTICUNO,
            Pokemon::LAPRAS,
            Pokemon::GYARADOS,
            Pokemon::GENGAR,
            Pokemon::POLIWRATH,
            Pokemon::CLEFABLE,
            Pokemon::SIRFETCH_D
        ],
        'Tier 2.5' => [
            Pokemon::VENUSAUR,
            Pokemon::FLYGON,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::OBSTAGOON,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
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
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::SUICUNE,
            Pokemon::CLOYSTER,
            Pokemon::PRIMEAPE,
            Pokemon::MACHAMP,
            Pokemon::DRAGONITE,
            Pokemon::KINGDRA,
            Pokemon::URSARING,
            Pokemon::POLITOED,
            Pokemon::UMBREON,
        ]
    ];
}
