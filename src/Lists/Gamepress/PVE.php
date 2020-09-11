<?php

namespace Pogo\Lists\Gamepress;

use Pogo\Handjob\Mods;
use Pogo\Pokemon;

class PVE
{
    const DESCRIPTION = 'GamePress Attackers';

    const TIERS = [
        'Tier 1' => [
            // S++
            Pokemon::MEWTWO | Mods::SHADOW,
            // S++
            Pokemon::METAGROSS | Mods::SHADOW,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::SALAMENCE | Mods::SHADOW,
            // S
            Pokemon::RAIKOU | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
            // R1
            Pokemon::RAMPARDOS,
            Pokemon::LUCARIO,
            Pokemon::RHYPERIOR,
            Pokemon::ZEKROM,
            Pokemon::RESHIRAM,
            Pokemon::WEAVILE | Mods::SHADOW,
            Pokemon::TYRANITAR | Mods::SHADOW,
            Pokemon::MOLTRES | Mods::SHADOW,
            Pokemon::SWAMPERT | Mods::SHADOW,
        ],
        'Tier 2' => [
            Pokemon::MEWTWO,
            Pokemon::SALAMENCE,
            Pokemon::KYOGRE,
            Pokemon::RAYQUAZA,
            Pokemon::DARKRAI,
            Pokemon::GIRATINA | Mods::FORM1,
            Pokemon::CONKELDURR,
            Pokemon::CHANDELURE,
            Pokemon::ZAPDOS | Mods::SHADOW,
            Pokemon::MAGNEZONE | Mods::SHADOW,
            Pokemon::ELECTIVIRE | Mods::SHADOW,
        ],
        'Tier 3' => [
            Pokemon::MACHAMP,
            Pokemon::GENGAR,
            Pokemon::RAIKOU,
            Pokemon::METAGROSS,
            Pokemon::PALKIA,
            Pokemon::GARCHOMP,
            Pokemon::MAMOSWINE,
            Pokemon::DARMANITAN | Mods::GALARIAN,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::TORTERRA | Mods::SHADOW,
            Pokemon::GYARADOS | Mods::SHADOW,
            Pokemon::ENTEI | Mods::SHADOW,
        ],
        'Tier 4' => [
            Pokemon::KINGLER,
            Pokemon::MOLTRES,
            Pokemon::DRAGONITE,
            Pokemon::SWAMPERT,
            Pokemon::DIALGA,
            Pokemon::ROSERADE,
            Pokemon::ELECTIVIRE,
            Pokemon::TERRAKION,
            Pokemon::CHARIZARD | Mods::SHADOW,
            Pokemon::ALAKAZAM | Mods::SHADOW,
            Pokemon::EXEGGUTOR | Mods::SHADOW,
        ],
        'Tier 5' => [
            Pokemon::ZAPDOS,
            Pokemon::ENTEI,
            Pokemon::BLAZIKEN,
            Pokemon::GROUDON,
            Pokemon::WEAVILE,
            Pokemon::EXCADRILL,
            Pokemon::DARMANITAN,
            Pokemon::HAXORUS,
            Pokemon::HYDREIGON,
            Pokemon::GARDEVOIR | Mods::SHADOW,
        ],
        'Tier 6' => [
            Pokemon::FERALIGATR,
            Pokemon::TYRANITAR,
            Pokemon::GARDEVOIR,
            Pokemon::HARIYAMA,
            Pokemon::LATIOS,
            Pokemon::EMPOLEON,
            Pokemon::MAGNEZONE,
            Pokemon::TANGROWTH,
            Pokemon::HEATRAN,
            Pokemon::LANDORUS | Mods::FORM2,
            Pokemon::GALLADE | Mods::SHADOW,
        ],
        'Tier 7' => [
            Pokemon::VENUSAUR,
            Pokemon::KYUREM,
            Pokemon::MISMAGIUS | Mods::SHADOW,
            Pokemon::SHIFTRY | Mods::SHADOW,
            Pokemon::ARCANINE | Mods::SHADOW,
            Pokemon::VICTREEBEL | Mods::SHADOW,
            Pokemon::HOUNDOOM | Mods::SHADOW,
            Pokemon::BANETTE | Mods::SHADOW,
            Pokemon::GENESECT,
            Pokemon::GLACEON,
            Pokemon::CHARIZARD,
            Pokemon::TOGEKISS,
            Pokemon::HONCHKROW,
            Pokemon::TORTERRA,
            Pokemon::BRELOOM,
            Pokemon::SCEPTILE,
            Pokemon::ESPEON,
            Pokemon::GYARADOS,
            Pokemon::ALAKAZAM,
            Pokemon::MAGMORTAR | Mods::SHADOW,

//            Pokemon::OMASTAR | Mods::SHADOW,
//            Pokemon::PORYGON_Z | Mods::SHADOW,
//            Pokemon::CACTURNE | Mods::SHADOW,
//            Pokemon::SHARPEDO | Mods::SHADOW,
//            Pokemon::BLASTOISE | Mods::SHADOW,
//            Pokemon::FLYGON | Mods::SHADOW,
//            Pokemon::SCYTHER | Mods::SHADOW,
//            Pokemon::ABSOL | Mods::SHADOW,
//            Pokemon::PINSIR | Mods::SHADOW,
//            Pokemon::SCIZOR | Mods::SHADOW,
        ]
    ];
}
