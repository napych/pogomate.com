<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Mods;
use Pogo\Pokemon;

class UL
{
    const DESCRIPTION = 'GamePress Ultra League';

    const TIERS = [
        'Tier 1' => [
            Pokemon::REGISTEEL,
            Pokemon::GIRATINA | Mods::FORM2
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
            Pokemon::GIRATINA | Mods::FORM1,
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
            Pokemon::MEWTWO | Mods::FORM2,
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
