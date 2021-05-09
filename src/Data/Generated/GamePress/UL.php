<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class UL {
    const DESCRIPTION = 'GamePress Ultra League';
    
    const TIERS = [
        'Tier 1' => [
            Pokemon::REGISTEEL,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
            Pokemon::ABOMASNOW,
            Pokemon::JELLICENT | FormsAlias::JELLICENT_MALE,
            Pokemon::STUNFISK | Mods::GALARIAN,
            Pokemon::ABOMASNOW | Mods::SHADOW,
        ],
        'Tier 1.5' => [
            Pokemon::SKARMORY | Mods::SHADOW,
            Pokemon::SNORLAX,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::SWAMPERT,
            Pokemon::SKARMORY,
            Pokemon::LICKILICKY,
            Pokemon::CRESSELIA,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::SIRFETCH_D,
        ],
        'Tier 2' => [
            Pokemon::CHARIZARD | Mods::SHADOW,
            Pokemon::ESCAVALIER,
            Pokemon::SCRAFTY,
            Pokemon::POLIWRATH | Mods::SHADOW,
            Pokemon::TALONFLAME,
            Pokemon::AROMATISSE,
            Pokemon::NINETALES | Mods::ALOLAN,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::GALVANTULA,
            Pokemon::CHARIZARD,
            Pokemon::TOGEKISS,
            Pokemon::BLASTOISE,
            Pokemon::DRIFBLIM,
            Pokemon::ZANGOOSE,
            Pokemon::SHIFTRY,
            Pokemon::UMBREON,
            Pokemon::TYPHLOSION,
            Pokemon::ARTICUNO,
            Pokemon::LAPRAS,
            Pokemon::GYARADOS,
            Pokemon::GENGAR,
            Pokemon::POLIWRATH,
            Pokemon::PRIMEAPE,
            Pokemon::CLEFABLE,
            Pokemon::BRONZONG,
        ],
        'Tier 2.5' => [
            Pokemon::VENUSAUR,
            Pokemon::MELMETAL,
            Pokemon::ALTARIA,
            Pokemon::WHISCASH,
            Pokemon::REGICE,
            Pokemon::JIRACHI,
            Pokemon::DRAPION,
            Pokemon::TOXICROAK,
            Pokemon::CONKELDURR,
            Pokemon::HO_OH,
            Pokemon::SEISMITOAD,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
            Pokemon::OBSTAGOON,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::POLITOED | Mods::SHADOW,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::FLYGON,
            Pokemon::DRAGONITE,
            Pokemon::SUICUNE,
            Pokemon::KINGDRA,
            Pokemon::MACHAMP,
            Pokemon::CLOYSTER,
            Pokemon::MEGANIUM,
            Pokemon::AMPHAROS,
            Pokemon::MEW,
            Pokemon::POLITOED,
        ],
    ];
}