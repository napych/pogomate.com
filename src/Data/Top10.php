<?php

namespace Pogo\Data;

class Top10
{
    const DESCRIPTION = 'Top10 by @JaceMakings';
    const LISTS = [
        'Bug' => [
            Pokemons::GENESECT,
            Pokemons::SCIZOR,
            Pokemons::ESCAVALIER,
            Pokemons::PINSIR,
            Pokemons::YANMEGA,
            Pokemons::HERACROSS,
            Pokemons::DURANT,
            Pokemons::SCYTHER,
            Pokemons::ACCELGOR,
        ],
        'Dark' => [
            Pokemons::DARKRAI,
            Pokemons::HYDREIGON,
            Pokemons::WEAVILE,
            Pokemons::TYRANITAR,
            Pokemons::HOUNDOOM,
            Pokemons::HONCHKROW,
            Pokemons::ABSOL,
            Pokemons::MUK,
            Pokemons::SHIFTRY,
            Pokemons::RESHIRAM
        ],
        'Dragon' => [
            Pokemons::RAYQUAZA,
            Pokemons::DIALGA,
            Pokemons::ZEKROM,
            Pokemons::PALKIA,
            Pokemons::GARCHOMP,
            Pokemons::SALAMENCE,
            Pokemons::DRAGONITE,
            Pokemons::HAXORUS,
            Pokemons::RESHIRAM,
            Pokemons::LATIOS
        ],
        'Electric' => [
            Pokemons::ZEKROM,
            Pokemons::RAIKOU,
            Pokemons::ELECTIVIRE,
            Pokemons::MAGNEZONE,
            Pokemons::ZAPDOS,
            Pokemons::LUXRAY,
            Pokemons::MEWTWO,
            Pokemons::DEOXYS,
            Pokemons::JOLTEON,
            Pokemons::THUNDURUS
        ],
        'Fairy' => [
            Pokemons::GARDEVOIR,
            Pokemons::TOGEKISS,
            Pokemons::GRANBULL,
            Pokemons::BEARTIC,
            Pokemons::CLEFABLE,
            Pokemons::ALAKAZAM,
            Pokemons::DONPHAN,
            Pokemons::URSARING,
            Pokemons::ROSERADE,
            Pokemons::NINETALES
        ],
        'Fighting' => [
            Pokemons::LUCARIO,
            Pokemons::CONKELDURR,
            Pokemons::MACHAMP,
            Pokemons::BRELOOM,
            Pokemons::HARIYAMA,
            Pokemons::BLAZIKEN,
            Pokemons::HERACROSS,
            Pokemons::SIRFETCH_D,
            Pokemons::TOXICROAK,
            Pokemons::REGIGIGAS
        ],
        'Fire' => [
            Pokemons::RESHIRAM,
            Pokemons::CHANDELURE,
            Pokemons::DARMANITAN,
            Pokemons::MOLTRES,
            Pokemons::ENTEI,
            Pokemons::HEATRAN,
            Pokemons::BLAZIKEN,
            Pokemons::CHARIZARD,
            Pokemons::FLAREON,
            Pokemons::MONFERNO
        ],
        'Flying' => [
            Pokemons::MOLTRES,
            Pokemons::RAYQUAZA,
            Pokemons::HONCHKROW,
            Pokemons::TORNADUS,
            Pokemons::UNFEZANT,
            Pokemons::ZAPDOS,
            Pokemons::LUGIA,
            Pokemons::HOOH,
            Pokemons::YANMEGA,
            Pokemons::TOGEKISS
        ],
        'Ghost' => [
            Pokemons::DARKRAI,
            Pokemons::GIRATINA,
            Pokemons::MEWTWO,
            Pokemons::CHANDELURE,
            Pokemons::GENGAR,
            Pokemons::RAIKOU,
            Pokemons::BANETTE,
            Pokemons::MISMAGIUS,
            Pokemons::DRIFBLIM,
            Pokemons::ALAKAZAM
        ],
        'Grass' => [
            Pokemons::ROSERADE,
            Pokemons::SCEPTILE,
            Pokemons::TANGROWTH,
            Pokemons::VENUSAUR,
            Pokemons::LEAFEON,
            Pokemons::BRELOOM,
            Pokemons::TORTERRA,
            Pokemons::EXEGGUTOR,
            Pokemons::EXEGGUTOR,
            Pokemons::SIMISAGE
        ],
        'Ground' => [
            Pokemons::GROUDON,
            Pokemons::EXCADRILL,
            Pokemons::GARCHOMP,
            Pokemons::RHYPERIOR,
            Pokemons::LANDORUS,
            Pokemons::RHYDON,
            Pokemons::GOLURK,
            Pokemons::DONPHAN,
            Pokemons::MAMOSWINE,
            Pokemons::GOLEM
        ],
        'Ice' => [
            Pokemons::MAMOSWINE,
            Pokemons::MEWTWO,
            Pokemons::GLACEON,
            Pokemons::WEAVILE,
            Pokemons::JYNX,
            Pokemons::KYOGRE,
            Pokemons::VANILLISH,
            Pokemons::BEARTIC,
            Pokemons::KYUREM
        ],
        'Poison' => [Pokemons::ROSERADE, Pokemons::GENGAR, Pokemons::TOXICROAK, Pokemons::VICTREEBEL, Pokemons::SCOLIPEDE, Pokemons::VILEPLUME, Pokemons::MUK, Pokemons::SKUNTANK],
        'Psychic' => [
            Pokemons::MEWTWO,
            Pokemons::LATIOS,
            Pokemons::METAGROSS,
            Pokemons::ESPEON,
            Pokemons::ALAKAZAM,
            Pokemons::EXEGGUTOR,
            Pokemons::GALLADE,
            Pokemons::GARDEVOIR,
            Pokemons::AZELF,
            Pokemons::LATIAS
        ],
        'Rock' => [
            Pokemons::RAMPARDOS,
            Pokemons::RHYPERIOR,
            Pokemons::TERRAKION,
            Pokemons::TYRANITAR,
            Pokemons::GIGALITH,
            Pokemons::AERODACTYL,
            Pokemons::LANDORUS,
            Pokemons::RESHIRAM,
            Pokemons::OMASTAR,
            Pokemons::GOLEM
        ],
        'Steel' => [
            Pokemons::METAGROSS,
            Pokemons::DIALGA,
            Pokemons::GENESECT,
            Pokemons::EXCADRILL,
            Pokemons::JIRACHI,
            Pokemons::SCIZOR,
            Pokemons::DURANT,
            Pokemons::HEATRAN,
            Pokemons::AGGRON,
            Pokemons::EMPOLEON
        ],
        'Water' => [
            Pokemons::KYOGRE,
            Pokemons::KINGLER,
            Pokemons::SWAMPERT,
            Pokemons::FERALIGATR,
            Pokemons::EMPOLEON,
            Pokemons::GYARADOS,
            Pokemons::CRAWDAUNT,
            Pokemons::PALKIA,
            Pokemons::HAXORUS,
            Pokemons::SAMUROTT
        ]
    ];
}