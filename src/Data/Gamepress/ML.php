<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Pokemons;

class ML
{
    const DESCRIPTION = 'GamePress Master League';
    const RANKS = [
        'Tier 1' => [Pokemons::GROUDON, Pokemons::DIALGA, Pokemons::TOGEKISS],
        'Tier 1.5' => [Pokemons::SNORLAX, Pokemons::KYOGRE, Pokemons::PALKIA, Pokemons::GIRATINA, Pokemons::GARCHOMP, Pokemons::GIRATINA, Pokemons::ZEKROM],
        'Tier 2' => [Pokemons::DRAGONITE, Pokemons::MEWTWO, Pokemons::MEW, Pokemons::LUGIA, Pokemons::SWAMPERT, Pokemons::METAGROSS, Pokemons::MELMETAL, Pokemons::HYDREIGON],
        'Tier 2.5' => [
            Pokemons::MACHAMP,
            Pokemons::LATIOS,
            Pokemons::LANDORUS,
            Pokemons::RESHIRAM,
            Pokemons::CONKELDURR,
            Pokemons::DARKRAI,
            Pokemons::HEATRAN,
            Pokemons::MAMOSWINE,
            Pokemons::RHYPERIOR,
            Pokemons::MAGNEZONE,
            Pokemons::LUCARIO,
            Pokemons::GYARADOS,
            Pokemons::REGICE,
            Pokemons::ZAPDOS,
            Pokemons::REGIROCK,
            Pokemons::HARIYAMA,
            Pokemons::TYRANITAR,
            Pokemons::SUICUNE,
            Pokemons::RAIKOU
        ]
    ];
}