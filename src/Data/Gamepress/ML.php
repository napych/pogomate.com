<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Pokemon;

class ML
{
    const DESCRIPTION = 'GamePress Master League';
    const RANKS = [
        'Tier 1' => [Pokemon::GROUDON, Pokemon::DIALGA, Pokemon::TOGEKISS],
        'Tier 1.5' => [Pokemon::SNORLAX, Pokemon::KYOGRE, Pokemon::PALKIA, Pokemon::GIRATINA, Pokemon::GARCHOMP, Pokemon::GIRATINA, Pokemon::ZEKROM],
        'Tier 2' => [Pokemon::DRAGONITE, Pokemon::MEWTWO, Pokemon::MEW, Pokemon::LUGIA, Pokemon::SWAMPERT, Pokemon::METAGROSS, Pokemon::MELMETAL, Pokemon::HYDREIGON],
        'Tier 2.5' => [
            Pokemon::MACHAMP,
            Pokemon::LATIOS,
            Pokemon::LANDORUS,
            Pokemon::RESHIRAM,
            Pokemon::CONKELDURR,
            Pokemon::DARKRAI,
            Pokemon::HEATRAN,
            Pokemon::MAMOSWINE,
            Pokemon::RHYPERIOR,
            Pokemon::MAGNEZONE,
            Pokemon::LUCARIO,
            Pokemon::GYARADOS,
            Pokemon::REGICE,
            Pokemon::ZAPDOS,
            Pokemon::REGIROCK,
            Pokemon::HARIYAMA,
            Pokemon::TYRANITAR,
            Pokemon::SUICUNE,
            Pokemon::RAIKOU
        ]
    ];
}