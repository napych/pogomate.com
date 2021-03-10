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
            Pokemon::KYOGRE,
            Pokemon::GROUDON,
            Pokemon::DIALGA,
            Pokemon::TOGEKISS
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
            Pokemon::MEWTWO,
            Pokemon::LUGIA,
            Pokemon::METAGROSS,
            Pokemon::GARCHOMP,
            Pokemon::MEWTWO | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
        ],
        'Tier 2.5' => [
            Pokemon::MACHAMP,
            Pokemon::LATIOS,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::RESHIRAM,
            Pokemon::HYDREIGON,
            Pokemon::CONKELDURR,
            Pokemon::EXCADRILL,
            Pokemon::DARKRAI,
            Pokemon::HEATRAN,
            Pokemon::MAMOSWINE,
            Pokemon::RHYPERIOR,
            Pokemon::LUCARIO,
            Pokemon::MAGNEZONE,
            Pokemon::REGICE,
            Pokemon::TYRANITAR,
            Pokemon::GYARADOS,
            Pokemon::ZAPDOS,
            Pokemon::MEW,
            Pokemon::REGIROCK,
            Pokemon::SUICUNE,
            Pokemon::RAIKOU,
            Pokemon::HO_OH,
            Pokemon::SWAMPERT,
            Pokemon::HARIYAMA,
            Pokemon::MACHAMP | Mods::SHADOW,
        ]
    ];
}
