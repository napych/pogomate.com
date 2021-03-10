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
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
            Pokemon::ABOMASNOW,
            Pokemon::JELLICENT,
            Pokemon::STUNFISK | Mods::GALARIAN,
            Pokemon::ABOMASNOW | Mods::SHADOW,
        ],
        'Tier 1.5' => [
            Pokemon::SKARMORY | Mods::SHADOW,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::CRESSELIA,
            Pokemon::SIRFETCH_D,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::SWAMPERT,
            Pokemon::SKARMORY,
            Pokemon::SNORLAX,
            Pokemon::LICKILICKY,
        ],
        'Tier 2' => [
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::NINETALES | Mods::ALOLAN,
            Pokemon::ESCAVALIER,
            Pokemon::SCRAFTY,
            Pokemon::GALVANTULA,
            Pokemon::CHARIZARD,
            Pokemon::POLIWRATH | Mods::SHADOW,
            Pokemon::TALONFLAME,
            Pokemon::TOGEKISS,
            Pokemon::CHARIZARD,
            Pokemon::DRIFBLIM,
            Pokemon::BLASTOISE,
            Pokemon::SHIFTRY,
            Pokemon::UMBREON,
            Pokemon::TYPHLOSION,
            Pokemon::MEGANIUM,
            Pokemon::ARTICUNO,
            Pokemon::LAPRAS,
            Pokemon::GYARADOS,
            Pokemon::GENGAR,
            Pokemon::POLIWRATH,
            Pokemon::PRIMEAPE,
            Pokemon::CLEFABLE,
            Pokemon::ZANGOOSE,
        ],
        'Tier 2.5' => [
            Pokemon::VENUSAUR,
            Pokemon::WIGGLYTUFF,
            Pokemon::REGICE,
            Pokemon::CONKELDURR,
            Pokemon::WHISCASH,
            Pokemon::FLYGON,
            Pokemon::SEISMITOAD,
            Pokemon::MELMETAL,
            Pokemon::HO_OH,
            Pokemon::DRAPION,
            Pokemon::SUICUNE,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
            Pokemon::KINGDRA,
            Pokemon::OBSTAGOON,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::TOXICROAK,
            Pokemon::POLITOED,
            Pokemon::AMPHAROS,
            Pokemon::MEW,
            Pokemon::DRAGONITE,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::CLOYSTER,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::MACHAMP,
            Pokemon::JIRACHI,
        ]
    ];
}
