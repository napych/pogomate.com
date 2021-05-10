<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;
use Pogo\Pokemon\Types;

class Top
{
    const DESCRIPTION = 'GamePress Top By Type';
    
    const TIERS = [
        Types::BUG => [
            Pokemon::BEEDRILL | Mods::MEGA,
            Pokemon::PINSIR | Mods::SHADOW,
            Pokemon::SCIZOR | Mods::SHADOW,
            Pokemon::GENESECT | FormsAlias::GENESECT_NORMAL,
            Pokemon::SCYTHER | Mods::SHADOW,
            Pokemon::PINSIR,
            Pokemon::ESCAVALIER,
            Pokemon::SCIZOR,
            Pokemon::YANMEGA,
            Pokemon::HERACROSS,
        ],
        Types::DARK => [
            Pokemon::HOUNDOOM | Mods::MEGA,
            Pokemon::TYRANITAR | Mods::SHADOW,
            Pokemon::WEAVILE | Mods::SHADOW,
            Pokemon::DARKRAI,
            Pokemon::GYARADOS | Mods::MEGA,
            Pokemon::GENGAR | Mods::MEGA,
            Pokemon::HOUNDOOM | Mods::SHADOW,
            Pokemon::HYDREIGON,
            Pokemon::TYRANITAR,
            Pokemon::ABSOL | Mods::SHADOW,
            Pokemon::WEAVILE,
        ],
        Types::DRAGON => [
            Pokemon::SALAMENCE | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::CHARIZARD | Mods::MEGA_X,
            Pokemon::RAYQUAZA,
            Pokemon::PALKIA,
            Pokemon::SALAMENCE,
            Pokemon::GARCHOMP,
            Pokemon::ZEKROM,
            Pokemon::DIALGA,
            Pokemon::RESHIRAM,
            Pokemon::DRAGONITE,
        ],
        Types::ELECTRIC => [
            Pokemon::RAIKOU | Mods::SHADOW,
            Pokemon::ELECTIVIRE | Mods::SHADOW,
            Pokemon::ZAPDOS | Mods::SHADOW,
            Pokemon::MANELECTRIC | Mods::MEGA,
            Pokemon::AMPHAROS | Mods::MEGA,
            Pokemon::ZEKROM,
            Pokemon::MAGNEZONE | Mods::SHADOW,
            Pokemon::THUNDURUS | FormsAlias::THUNDURUS_THERIAN,
            Pokemon::RAIKOU,
            Pokemon::ZAPDOS,
            Pokemon::ELECTIVIRE,
            Pokemon::MAGNEZONE,
        ],
        Types::FAIRY => [
            Pokemon::GARDEVOIR | Mods::SHADOW,
            Pokemon::TOGEKISS,
            Pokemon::GARDEVOIR,
            Pokemon::GRANBULL,
        ],
        Types::FIGHTING => [
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::LUCARIO,
            Pokemon::CONKELDURR,
            Pokemon::MACHAMP,
            Pokemon::HARIYAMA,
            Pokemon::BRELOOM,
            Pokemon::ALAKAZAM | Mods::SHADOW,
            Pokemon::GALLADE | Mods::SHADOW,
            Pokemon::BLAZIKEN,
        ],
        Types::FIRE => [
            Pokemon::CHARIZARD | Mods::MEGA_Y,
            Pokemon::CHARIZARD | Mods::MEGA_X,
            Pokemon::ENTEI | Mods::SHADOW,
            Pokemon::RESHIRAM,
            Pokemon::MOLTRES | Mods::SHADOW,
            Pokemon::HOUNDOOM | Mods::MEGA,
            Pokemon::CHARIZARD | Mods::SHADOW,
            Pokemon::ARCANINE | Mods::SHADOW,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD,
            Pokemon::ENTEI,
            Pokemon::MOLTRES,
            Pokemon::MAGMORTAR | Mods::SHADOW,
            Pokemon::HEATRAN,
            Pokemon::SALAMENCE | Mods::SHADOW,
            Pokemon::CHANDELURE,
            Pokemon::BLAZIKEN,
        ],
        Types::FLYING => [
            Pokemon::MOLTRES | Mods::SHADOW,
            Pokemon::PIDGEOT | Mods::MEGA,
            Pokemon::MOLTRES,
            Pokemon::HO_OH,
            Pokemon::RAYQUAZA,
            Pokemon::LUGIA,
            Pokemon::HONCHKROW,
            Pokemon::BRAVIARY,
            Pokemon::STARAPTOR,
            Pokemon::UNFEZANT,
            Pokemon::TORNADUS | FormsAlias::TORNADUS_INCARNATE,
        ],
        Types::GHOST => [
            Pokemon::GENGAR | Mods::MEGA,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::CHANDELURE,
            Pokemon::GENGAR,
            Pokemon::BANETTE | Mods::SHADOW,
            Pokemon::MISMAGIUS | Mods::SHADOW,
        ],
        Types::GRASS => [
            Pokemon::VENUSAUR | Mods::MEGA,
            Pokemon::TORTERRA | Mods::SHADOW,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::EXEGGUTOR | Mods::SHADOW,
            Pokemon::VICTREEBEL | Mods::SHADOW,
            Pokemon::ROSERADE,
            Pokemon::TANGROWTH,
            Pokemon::VENUSAUR,
            Pokemon::SHIFTRY | Mods::SHADOW,
        ],
        Types::GROUND => [
            Pokemon::MAMOSWINE | Mods::SHADOW,
            Pokemon::GROUDON,
            Pokemon::GARCHOMP,
            Pokemon::RHYPERIOR,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::EXCADRILL,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::FLYGON | Mods::SHADOW,
        ],
        Types::ICE => [
            Pokemon::MAMOSWINE | Mods::SHADOW,
            Pokemon::ABOMASNOW | Mods::MEGA,
            Pokemon::WEAVILE | Mods::SHADOW,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD | Mods::GALARIAN,
            Pokemon::MAMOSWINE,
            Pokemon::GLACEON,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
            Pokemon::WEAVILE,
            Pokemon::ABOMASNOW | Mods::SHADOW,
            Pokemon::ARTICUNO | Mods::SHADOW,
            Pokemon::PORYGON_Z | Mods::SHADOW,
        ],
        Types::POISON => [
            Pokemon::BEEDRILL | Mods::MEGA,
            Pokemon::GENGAR | Mods::MEGA,
            Pokemon::VICTREEBEL | Mods::SHADOW,
            Pokemon::VILEPLUME | Mods::SHADOW,
            Pokemon::ROSERADE,
        ],
        Types::PSYCHIC => [
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL,
            Pokemon::METAGROSS | Mods::SHADOW,
            Pokemon::ALAKAZAM | Mods::SHADOW,
            Pokemon::EXEGGUTOR | Mods::SHADOW,
            Pokemon::GALLADE | Mods::SHADOW,
            Pokemon::GARDEVOIR | Mods::SHADOW,
            Pokemon::LATIOS,
            Pokemon::ESPEON,
        ],
        Types::ROCK => [
            Pokemon::TYRANITAR | Mods::SHADOW,
            Pokemon::RHYPERIOR,
            Pokemon::RAMPARDOS,
            Pokemon::TERRAKION,
            Pokemon::AERODACTYL | Mods::SHADOW,
            Pokemon::TYRANITAR,
            Pokemon::OMASTAR | Mods::SHADOW,
            Pokemon::GIGALITH,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::AERODACTYL,
        ],
        Types::STEEL => [
            Pokemon::METAGROSS | Mods::SHADOW,
            Pokemon::METAGROSS,
            Pokemon::DIALGA,
            Pokemon::GENESECT | FormsAlias::GENESECT_NORMAL,
            Pokemon::EXCADRILL,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::BISHARP,
        ],
        Types::WATER => [
            Pokemon::BLASTOISE | Mods::MEGA,
            Pokemon::GYARADOS | Mods::MEGA,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::KYOGRE,
            Pokemon::GYARADOS | Mods::SHADOW,
            Pokemon::SWAMPERT,
            Pokemon::KINGLER,
            Pokemon::FERALIGATR,
            Pokemon::EMPOLEON,
            Pokemon::BLASTOISE | Mods::SHADOW,
            Pokemon::GYARADOS,
        ],
        Types::NORMAL => [
            Pokemon::REGIGIGAS,
            Pokemon::PORYGON_Z | Mods::SHADOW,
        ],
    ];
}