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
            Pokemon::SIRFETCH_D,
            Pokemon::SWAMPERT,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::CRESSELIA,
            Pokemon::SNORLAX,
            Pokemon::LICKILICKY,
        ],
        'Tier 2' => [
            Pokemon::ESCAVALIER,
            Pokemon::SCRAFTY,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::TOGEKISS,
            Pokemon::ABOMASNOW,
            Pokemon::ZANGOOSE,
            Pokemon::SHIFTRY,
            Pokemon::CHARIZARD,
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
            Pokemon::STEELIX,
        ],
        'Tier 2.5' => [
            Pokemon::VENUSAUR,
            Pokemon::DRAPION,
            Pokemon::FLYGON,
            Pokemon::WHISCASH,
            Pokemon::WIGGLYTUFF,
            Pokemon::JIRACHI,
            Pokemon::DRIFBLIM,
            Pokemon::GARCHOMP,
            Pokemon::TOXICROAK,
            Pokemon::SUICUNE,
            Pokemon::MELMETAL,
            Pokemon::CONKELDURR,
            Pokemon::SEISMITOAD,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
            Pokemon::OBSTAGOON,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::HO_OH,
            Pokemon::REGICE,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::POLITOED,
            Pokemon::DRAGONITE,
            Pokemon::CLOYSTER,
            Pokemon::AMPHAROS,
            Pokemon::UMBREON,
            Pokemon::URSARING,
            Pokemon::MACHAMP,
            Pokemon::PRIMEAPE,
            Pokemon::KINGDRA,
        ]
    ];
}
