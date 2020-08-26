<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Lists;
use Pogo\Data\Mods;
use Pogo\Pokemon;

class PVE
{
    const DESCRIPTION = 'GamePress Attackers Tier List';

    const TIERS = [
        'Tier 1' => [
            // S++
            Pokemon::MEWTWO | Mods::SHADOW,
            // S++
            Pokemon::SALAMENCE | Mods::SHADOW,
            Pokemon::METAGROSS | Mods::SHADOW,
            Pokemon::MACHAMP | Mods::SHADOW,
            // S
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::RAIKOU | Mods::SHADOW,
            // R1
            Pokemon::RAMPARDOS,
            Pokemon::LUCARIO,
            Pokemon::ZEKROM,
            Pokemon::RESHIRAM,
            Pokemon::WEAVILE | Mods::SHADOW,
            Pokemon::TYRANITAR | Mods::SHADOW,
            Pokemon::MOLTRES | Mods::SHADOW
        ],
        'Tier 1.5' => [
            Pokemon::MEWTWO,
            Pokemon::GARDEVOIR | Mods::SHADOW,
//            Pokemon::MEWTWO | Mods::SHADOW,
            Pokemon::ELECTIVIRE | Mods::SHADOW,
            Pokemon::MAGNEZONE | Mods::SHADOW,
            Pokemon::ENTEI | Mods::SHADOW,
            Pokemon::TORTERRA | Mods::SHADOW,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::ZAPDOS | Mods::SHADOW,
            Pokemon::SALAMENCE,
            Pokemon::CHANDELURE,
            Pokemon::CONKELDURR,
            Pokemon::GIRATINA | Mods::FORM1,
            Pokemon::DARKRAI,
            Pokemon::RHYPERIOR,
            Pokemon::RAYQUAZA,
            Pokemon::KYOGRE,
//            Pokemon::SALAMENCE | Mods::SHADOW,
        ],
        'Tier 2' => [
            Pokemon::MACHAMP,
            Pokemon::GENGAR,
            Pokemon::RAIKOU,
            Pokemon::METAGROSS,
            Pokemon::ELECTIVIRE,
            Pokemon::MAMOSWINE,
            Pokemon::DARMANITAN | Mods::GALARIAN,
            Pokemon::CHARIZARD | Mods::SHADOW,
            Pokemon::ALAKAZAM | Mods::SHADOW,
            Pokemon::GYARADOS | Mods::SHADOW
        ],
        'Tier 2.5' => [
            Pokemon::KINGLER,
            Pokemon::MOLTRES,
            Pokemon::DIALGA,
            Pokemon::PALKIA,
            Pokemon::ROSERADE,
            Pokemon::EXCADRILL,
            Pokemon::TERRAKION,
            Pokemon::BANETTE | Mods::SHADOW,
            Pokemon::VICTREEBEL | Mods::SHADOW,
            Pokemon::ARCANINE | Mods::SHADOW,
            Pokemon::EXEGGUTOR | Mods::SHADOW
        ],
        'Tier 3' => [
            Pokemon::DRAGONITE,
            Pokemon::TYRANITAR,
            Pokemon::BLAZIKEN,
            Pokemon::SWAMPERT,
            Pokemon::GARCHOMP,
            Pokemon::DARMANITAN,
            Pokemon::HAXORUS,
            Pokemon::GALLADE | Mods::SHADOW,
            Pokemon::MAGMORTAR | Mods::SHADOW
        ],
        'Tier 3.5' => [
            Pokemon::ZAPDOS,
            Pokemon::ENTEI,
            Pokemon::GARDEVOIR,
            Pokemon::BRELOOM,
            Pokemon::LATIOS,
            Pokemon::GROUDON,
            Pokemon::WEAVILE,
            Pokemon::MAGNEZONE,
            Pokemon::HYDREIGON,
            Pokemon::LANDORUS | Mods::FORM2,
            Pokemon::PINSIR | Mods::SHADOW,
            Pokemon::SCIZOR | Mods::SHADOW,
            Pokemon::HOUNDOOM | Mods::SHADOW
        ],
        'Tier 4' => [
            Pokemon::VENUSAUR,
            Pokemon::HEATRAN,
            Pokemon::OMASTAR | Mods::SHADOW,
            Pokemon::PORYGON_Z | Mods::SHADOW,
            Pokemon::CACTURNE | Mods::SHADOW,
            Pokemon::SHARPEDO | Mods::SHADOW,
            Pokemon::SHIFTRY | Mods::SHADOW,
            Pokemon::BLASTOISE | Mods::SHADOW,
            Pokemon::FLYGON | Mods::SHADOW,
            Pokemon::SCYTHER | Mods::SHADOW,
            Pokemon::GENESECT,
            Pokemon::KYUREM,
            Pokemon::GLACEON,
            Pokemon::CHARIZARD,
            Pokemon::TOGEKISS,
            Pokemon::TANGROWTH,
            Pokemon::HONCHKROW,
            Pokemon::TORTERRA,
            Pokemon::EMPOLEON,
            Pokemon::HARIYAMA,
            Pokemon::SCEPTILE,
            Pokemon::ESPEON,
            Pokemon::FERALIGATR,
            Pokemon::GYARADOS,
            Pokemon::ALAKAZAM,
            Pokemon::ABSOL | Mods::SHADOW
        ]
    ];
}