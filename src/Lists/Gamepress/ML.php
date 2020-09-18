<?php

namespace Pogo\Lists\Gamepress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class ML
{
    const DESCRIPTION = 'GamePress Master League';
    const TIERS = [
        'Tier 1' => [
            Pokemon::GROUDON,
            Pokemon::DIALGA,
            Pokemon::TOGEKISS
        ],
        'Tier 1.5' => [
            Pokemon::SNORLAX,
            Pokemon::KYOGRE,
            Pokemon::PALKIA,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
            Pokemon::GARCHOMP,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::ZEKROM
        ],
        'Tier 2' => [
            Pokemon::DRAGONITE,
            Pokemon::MEWTWO,
            Pokemon::MEW,
            Pokemon::LUGIA,
            Pokemon::SWAMPERT,
            Pokemon::METAGROSS,
            Pokemon::MELMETAL,
            Pokemon::HYDREIGON,
            Pokemon::DRAGONITE | Mods::SHADOW,
        ],
        'Tier 2.5' => [
            Pokemon::MACHAMP,
            Pokemon::REGICE,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::RESHIRAM,
            Pokemon::CONKELDURR,
            Pokemon::DARKRAI,
            Pokemon::HEATRAN,
            Pokemon::MAMOSWINE,
            Pokemon::RHYPERIOR,
            Pokemon::MAGNEZONE,
            Pokemon::LUCARIO,
            Pokemon::LATIOS,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::REGIROCK,
            Pokemon::ZAPDOS,
            Pokemon::HARIYAMA,
            Pokemon::TYRANITAR,
            Pokemon::SUICUNE,
            Pokemon::RAIKOU,
            Pokemon::GYARADOS,
        ]
    ];
}
