<?php

namespace Pogo\Data;

use Pogo\Pokemon;

class Top10
{
    const DESCRIPTION = 'Top attackers by @JaceMakings';
    const LISTS = [
        'Bug' => [
            Pokemon::GENESECT,
            Pokemon::SCIZOR,
            Pokemon::ESCAVALIER,
            Pokemon::PINSIR,
            Pokemon::YANMEGA,
            Pokemon::HERACROSS,
//            Pokemon::DURANT,
//            Pokemon::SCYTHER,
//            Pokemon::ACCELGOR,
        ],
        'Dark' => [
            Pokemon::DARKRAI,
            Pokemon::HYDREIGON,
            Pokemon::WEAVILE,
            Pokemon::TYRANITAR,
            Pokemon::HOUNDOOM,
//            Pokemon::HONCHKROW,
//            Pokemon::ABSOL,
//            Pokemon::MUK,
//            Pokemon::SHIFTRY,
//            Pokemon::RESHIRAM
        ],
        'Dragon' => [
            Pokemon::RAYQUAZA,
            Pokemon::DIALGA,
            Pokemon::ZEKROM,
            Pokemon::PALKIA,
            Pokemon::GARCHOMP,
            Pokemon::SALAMENCE,
            Pokemon::DRAGONITE,
            Pokemon::HAXORUS,
            Pokemon::RESHIRAM,
            Pokemon::LATIOS
        ],
        'Electric' => [
            Pokemon::ZEKROM,
            Pokemon::RAIKOU,
            Pokemon::ELECTIVIRE,
            Pokemon::MAGNEZONE,
            Pokemon::ZAPDOS,
//            Pokemon::LUXRAY,
//            Pokemon::MEWTWO,
//            Pokemon::DEOXYS,
//            Pokemon::JOLTEON,
//            Pokemon::THUNDURUS
        ],
        'Fairy' => [
            Pokemon::GARDEVOIR,
            Pokemon::TOGEKISS,
            Pokemon::GRANBULL,
            Pokemon::BEARTIC,
            Pokemon::CLEFABLE,
//            Pokemon::ALAKAZAM,
//            Pokemon::DONPHAN,
//            Pokemon::URSARING,
//            Pokemon::ROSERADE,
//            Pokemon::NINETALES
        ],
        'Fighting' => [
            Pokemon::LUCARIO,
            Pokemon::CONKELDURR,
            Pokemon::MACHAMP,
            Pokemon::BRELOOM,
            Pokemon::HARIYAMA,
            Pokemon::BLAZIKEN,
            Pokemon::HERACROSS,
            Pokemon::SIRFETCH_D,
//            Pokemon::TOXICROAK,
//            Pokemon::REGIGIGAS
        ],
        'Fire' => [
            Pokemon::RESHIRAM,
            Pokemon::CHANDELURE,
            Pokemon::DARMANITAN,
            Pokemon::MOLTRES,
            Pokemon::ENTEI,
            Pokemon::HEATRAN,
            Pokemon::BLAZIKEN,
//            Pokemon::CHARIZARD,
//            Pokemon::FLAREON,
//            Pokemon::MONFERNO
        ],
        'Flying' => [
            Pokemon::MOLTRES,
            Pokemon::RAYQUAZA,
            Pokemon::HONCHKROW,
            Pokemon::TORNADUS,
            Pokemon::UNFEZANT,
//            Pokemon::ZAPDOS,
//            Pokemon::LUGIA,
//            Pokemon::HOOH,
//            Pokemon::YANMEGA,
//            Pokemon::TOGEKISS
        ],
        'Ghost' => [
            Pokemon::DARKRAI,
            Pokemon::GIRATINA,
            Pokemon::MEWTWO,
            Pokemon::CHANDELURE,
            Pokemon::GENGAR,
//            Pokemon::RAIKOU,
//            Pokemon::BANETTE,
//            Pokemon::MISMAGIUS,
//            Pokemon::DRIFBLIM,
//            Pokemon::ALAKAZAM
        ],
        'Grass' => [
            Pokemon::ROSERADE,
            Pokemon::SCEPTILE,
            Pokemon::TANGROWTH,
            Pokemon::VENUSAUR,
            Pokemon::LEAFEON,
            Pokemon::BRELOOM,
            Pokemon::TORTERRA,
            Pokemon::EXEGGUTOR,
            Pokemon::EXEGGUTOR | Mods::ALOLAN,
            Pokemon::SIMISAGE
        ],
        'Ground' => [
            Pokemon::GROUDON,
            Pokemon::EXCADRILL,
            Pokemon::GARCHOMP,
            Pokemon::RHYPERIOR,
            Pokemon::LANDORUS | Mods::FORM2,
            Pokemon::RHYDON,
            Pokemon::GOLURK,
            Pokemon::DONPHAN,
            Pokemon::MAMOSWINE,
            Pokemon::GOLEM
        ],
        'Ice' => [
            Pokemon::MAMOSWINE,
            Pokemon::MEWTWO,
            Pokemon::GLACEON,
            Pokemon::WEAVILE,
//            Pokemon::JYNX,
//            Pokemon::KYOGRE,
//            Pokemon::VANILLISH,
//            Pokemon::BEARTIC,
//            Pokemon::KYUREM
        ],
        'Poison' => [
            Pokemon::ROSERADE,
            Pokemon::GENGAR,
            Pokemon::TOXICROAK,
            Pokemon::VICTREEBEL,
            Pokemon::SCOLIPEDE,
            Pokemon::VILEPLUME,
//            Pokemon::MUK,
//            Pokemon::SKUNTANK
        ],
        'Psychic' => [
            Pokemon::MEWTWO,
            Pokemon::LATIOS,
            Pokemon::METAGROSS,
            Pokemon::ESPEON,
//            Pokemon::ALAKAZAM,
//            Pokemon::EXEGGUTOR,
//            Pokemon::GALLADE,
//            Pokemon::GARDEVOIR,
//            Pokemon::AZELF,
//            Pokemon::LATIAS
        ],
        'Rock' => [
            Pokemon::RAMPARDOS,
            Pokemon::RHYPERIOR,
            Pokemon::TERRAKION,
            Pokemon::TYRANITAR,
            Pokemon::GIGALITH,
            Pokemon::AERODACTYL,
//            Pokemon::LANDORUS,
//            Pokemon::RESHIRAM,
//            Pokemon::OMASTAR,
//            Pokemon::GOLEM
        ],
        'Steel' => [
            Pokemon::METAGROSS,
            Pokemon::DIALGA,
            Pokemon::GENESECT,
            Pokemon::EXCADRILL,
//            Pokemon::JIRACHI,
//            Pokemon::SCIZOR,
//            Pokemon::DURANT,
//            Pokemon::HEATRAN,
//            Pokemon::AGGRON,
//            Pokemon::EMPOLEON
        ],
        'Water' => [
            Pokemon::KYOGRE,
            Pokemon::KINGLER,
            Pokemon::SWAMPERT,
            Pokemon::FERALIGATR,
            Pokemon::EMPOLEON,
            Pokemon::GYARADOS,
//            Pokemon::CRAWDAUNT,
//            Pokemon::PALKIA,
//            Pokemon::HAXORUS,
//            Pokemon::SAMUROTT
        ]
    ];
}