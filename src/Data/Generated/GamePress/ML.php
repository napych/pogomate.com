<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class ML {
    const DESCRIPTION = 'GamePress Master League';
    
    const TIERS = [
        'Tier 1' => [
            Pokemon::KYOGRE,
            Pokemon::GROUDON,
            Pokemon::DIALGA,
            Pokemon::TOGEKISS,
        ],
        'Tier 1.5' => [
            Pokemon::SNORLAX,
            Pokemon::PALKIA,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::MELMETAL,
            Pokemon::ZEKROM,
        ],
        'Tier 2' => [
            Pokemon::DRAGONITE,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL,
            Pokemon::LUGIA,
            Pokemon::METAGROSS,
            Pokemon::GARCHOMP,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
        ],
        'Tier 2.5' => [
            Pokemon::MACHAMP,
            Pokemon::MAGNEZONE,
            Pokemon::MAMOSWINE | Mods::SHADOW,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::GOODRA,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::RESHIRAM,
            Pokemon::HYDREIGON,
            Pokemon::CONKELDURR,
            Pokemon::EXCADRILL,
            Pokemon::DARKRAI,
            Pokemon::HEATRAN,
            Pokemon::RHYPERIOR,
            Pokemon::MAMOSWINE,
            Pokemon::HO_OH,
            Pokemon::GYARADOS,
            Pokemon::ZAPDOS,
            Pokemon::MEW,
            Pokemon::RAIKOU,
            Pokemon::SUICUNE,
            Pokemon::LATIOS,
            Pokemon::TYRANITAR,
            Pokemon::SWAMPERT,
            Pokemon::HARIYAMA,
            Pokemon::REGIROCK,
            Pokemon::REGICE,
        ],
    ];
}