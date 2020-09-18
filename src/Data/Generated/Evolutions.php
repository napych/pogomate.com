<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias;

class Evolutions
{
    const FIELD_PARENT = 'from';
    const FIELD_CANDY = 'candy';
    const FIELD_WALKED = 'walk';
    const FIELD_BUDDY = 'buddy';
    const FIELD_DAY = 'day';
    const FIELD_NIGHT = 'night';
    const FIELD_PRIORITY = 'priority';
    const FIELD_TRADED = 'traded';
    const FIELD_ITEM = 'item';
    const FIELD_LURE = 'lure';
    const FIELD_MALE = 'male';
    const FIELD_FEMALE = 'female';
      
    const EVOLUTIONS = [
        Pokemon::IVYSAUR => [
            self::FIELD_PARENT => Pokemon::BULBASAUR,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VENUSAUR => [
            self::FIELD_PARENT => Pokemon::IVYSAUR,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CHARMELEON => [
            self::FIELD_PARENT => Pokemon::CHARMANDER,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CHARIZARD => [
            self::FIELD_PARENT => Pokemon::CHARMELEON,
            self::FIELD_CANDY => 100
        ],
        Pokemon::WARTORTLE => [
            self::FIELD_PARENT => Pokemon::SQUIRTLE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::BLASTOISE => [
            self::FIELD_PARENT => Pokemon::WARTORTLE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::METAPOD => [
            self::FIELD_PARENT => Pokemon::CATERPIE,
            self::FIELD_CANDY => 12
        ],
        Pokemon::BUTTERFREE => [
            self::FIELD_PARENT => Pokemon::METAPOD,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KAKUNA => [
            self::FIELD_PARENT => Pokemon::WEEDLE,
            self::FIELD_CANDY => 12
        ],
        Pokemon::BEEDRILL => [
            self::FIELD_PARENT => Pokemon::KAKUNA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PIDGEOTTO => [
            self::FIELD_PARENT => Pokemon::PIDGEY,
            self::FIELD_CANDY => 12
        ],
        Pokemon::PIDGEOT => [
            self::FIELD_PARENT => Pokemon::PIDGEOTTO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::RATICATE => [
            self::FIELD_PARENT => Pokemon::RATATTA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FEAROW => [
            self::FIELD_PARENT => Pokemon::SPEAROW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ARBOK => [
            self::FIELD_PARENT => Pokemon::EKANS,
            self::FIELD_CANDY => 50
        ],
        Pokemon::RAICHU => [
            self::FIELD_PARENT => Pokemon::PIKACHU,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SANDSLASH => [
            self::FIELD_PARENT => Pokemon::SANDSHREW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::NIDORINA => [
            self::FIELD_PARENT => Pokemon::NIDORAN_F,
            self::FIELD_CANDY => 25
        ],
        Pokemon::NIDOQUEEN => [
            self::FIELD_PARENT => Pokemon::NIDORINA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::NIDORINO => [
            self::FIELD_PARENT => Pokemon::NIDORAN_M,
            self::FIELD_CANDY => 25
        ],
        Pokemon::NIDOKING => [
            self::FIELD_PARENT => Pokemon::NIDORINO,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CLEFABLE => [
            self::FIELD_PARENT => Pokemon::CLEFAIRY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::NINETALES => [
            self::FIELD_PARENT => Pokemon::VULPIX,
            self::FIELD_CANDY => 50
        ],
        Pokemon::WIGGLYTUFF => [
            self::FIELD_PARENT => Pokemon::JIGGLYPUFF,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOLBAT => [
            self::FIELD_PARENT => Pokemon::ZUBAT,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CROBAT => [
            self::FIELD_PARENT => Pokemon::GOLBAT,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GLOOM => [
            self::FIELD_PARENT => Pokemon::ODDISH,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VILEPLUME => [
            self::FIELD_PARENT => Pokemon::GLOOM,
            self::FIELD_CANDY => 100
        ],
        Pokemon::BELLOSSOM => [
            self::FIELD_PARENT => Pokemon::GLOOM,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::PARASECT => [
            self::FIELD_PARENT => Pokemon::PARAS,
            self::FIELD_CANDY => 50
        ],
        Pokemon::VENOMOTH => [
            self::FIELD_PARENT => Pokemon::VENONAT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUGTRIO => [
            self::FIELD_PARENT => Pokemon::DIGLETT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PERSIAN => [
            self::FIELD_PARENT => Pokemon::MEOWTH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOLDUCK => [
            self::FIELD_PARENT => Pokemon::PSYDUCK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PRIMEAPE => [
            self::FIELD_PARENT => Pokemon::MANKEY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ARCANINE => [
            self::FIELD_PARENT => Pokemon::GROWLITHE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::POLIWHIRL => [
            self::FIELD_PARENT => Pokemon::POLIWAG,
            self::FIELD_CANDY => 25
        ],
        Pokemon::POLIWRATH => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL,
            self::FIELD_CANDY => 100
        ],
        Pokemon::POLITOED => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL,
            self::FIELD_ITEM => 'ITEM_KINGS_ROCK',
            self::FIELD_CANDY => 100
        ],
        Pokemon::KADABRA => [
            self::FIELD_PARENT => Pokemon::ABRA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ALAKAZAM => [
            self::FIELD_PARENT => Pokemon::KADABRA,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::MACHOKE => [
            self::FIELD_PARENT => Pokemon::MACHOP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MACHAMP => [
            self::FIELD_PARENT => Pokemon::MACHOKE,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::WEEPINBELL => [
            self::FIELD_PARENT => Pokemon::BELLSPROUT,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VICTREEBEL => [
            self::FIELD_PARENT => Pokemon::WEEPINBELL,
            self::FIELD_CANDY => 100
        ],
        Pokemon::TENTACRUEL => [
            self::FIELD_PARENT => Pokemon::TENTACOOL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GRAVELER => [
            self::FIELD_PARENT => Pokemon::GEODUDE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GOLEM => [
            self::FIELD_PARENT => Pokemon::GRAVELER,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::RAPIDASH => [
            self::FIELD_PARENT => Pokemon::PONYTA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SLOWBRO => [
            self::FIELD_PARENT => Pokemon::SLOWPOKE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SLOWKING => [
            self::FIELD_PARENT => Pokemon::SLOWPOKE,
            self::FIELD_ITEM => 'ITEM_KINGS_ROCK',
            self::FIELD_CANDY => 50
        ],
        Pokemon::MAGNETON => [
            self::FIELD_PARENT => Pokemon::MAGNEMITE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MAGNEZONE => [
            self::FIELD_PARENT => Pokemon::MAGNETON,
            self::FIELD_CANDY => 100,
            self::FIELD_LURE => 'ITEM_TROY_DISK_MAGNETIC'
        ],
        Pokemon::DODRIO => [
            self::FIELD_PARENT => Pokemon::DODUO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DEWGONG => [
            self::FIELD_PARENT => Pokemon::SEEL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MUK => [
            self::FIELD_PARENT => Pokemon::GRIMER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CLOYSTER => [
            self::FIELD_PARENT => Pokemon::SHELLDER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HAUNTER => [
            self::FIELD_PARENT => Pokemon::GASTLY,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GENGAR => [
            self::FIELD_PARENT => Pokemon::HAUNTER,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::STEELIX => [
            self::FIELD_PARENT => Pokemon::ONIX,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 50
        ],
        Pokemon::HYPNO => [
            self::FIELD_PARENT => Pokemon::DROWZEE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KINGLER => [
            self::FIELD_PARENT => Pokemon::KRABBY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ELECTRODE => [
            self::FIELD_PARENT => Pokemon::VOLTORB,
            self::FIELD_CANDY => 50
        ],
        Pokemon::EXEGGUTOR => [
            self::FIELD_PARENT => Pokemon::EXEGGCUTE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MAROWAK => [
            self::FIELD_PARENT => Pokemon::CUBONE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LICKILICKY => [
            self::FIELD_PARENT => Pokemon::LICKITUNG,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::WEEZING => [
            self::FIELD_PARENT => Pokemon::KOFFING,
            self::FIELD_CANDY => 50
        ],
        Pokemon::RHYDON => [
            self::FIELD_PARENT => Pokemon::RHYHORN,
            self::FIELD_CANDY => 25
        ],
        Pokemon::RHYPERIOR => [
            self::FIELD_PARENT => Pokemon::RHYDON,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::BLISSEY => [
            self::FIELD_PARENT => Pokemon::CHANSEY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::TANGROWTH => [
            self::FIELD_PARENT => Pokemon::TANGELA,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SEADRA => [
            self::FIELD_PARENT => Pokemon::HORSEA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::KINGDRA => [
            self::FIELD_PARENT => Pokemon::SEADRA,
            self::FIELD_ITEM => 'ITEM_DRAGON_SCALE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SEAKING => [
            self::FIELD_PARENT => Pokemon::GOLDEEN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::STARMIE => [
            self::FIELD_PARENT => Pokemon::STARYU,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SCIZOR => [
            self::FIELD_PARENT => Pokemon::SCYTHER,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 50
        ],
        Pokemon::ELECTIVIRE => [
            self::FIELD_PARENT => Pokemon::ELECTABUZZ,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::MAGMORTAR => [
            self::FIELD_PARENT => Pokemon::MAGMAR,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::GYARADOS => [
            self::FIELD_PARENT => Pokemon::MAGIKARP,
            self::FIELD_CANDY => 400
        ],
        Pokemon::VAPOREON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::JOLTEON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FLAREON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ESPEON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25,
            self::FIELD_WALKED => 10,
            self::FIELD_BUDDY => true,
            self::FIELD_DAY => true,
            self::FIELD_PRIORITY => 100
        ],
        Pokemon::UMBREON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25,
            self::FIELD_WALKED => 10,
            self::FIELD_BUDDY => true,
            self::FIELD_NIGHT => true,
            self::FIELD_PRIORITY => 100
        ],
        Pokemon::LEAFEON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25,
            self::FIELD_LURE => 'ITEM_TROY_DISK_MOSSY',
            self::FIELD_PRIORITY => 200
        ],
        Pokemon::GLACEON => [
            self::FIELD_PARENT => Pokemon::EEVEE,
            self::FIELD_CANDY => 25,
            self::FIELD_LURE => 'ITEM_TROY_DISK_GLACIAL',
            self::FIELD_PRIORITY => 200
        ],
        Pokemon::PORYGON2 => [
            self::FIELD_PARENT => Pokemon::PORYGON,
            self::FIELD_ITEM => 'ITEM_UP_GRADE',
            self::FIELD_CANDY => 25
        ],
        Pokemon::OMASTAR => [
            self::FIELD_PARENT => Pokemon::OMANYTE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KABUTOPS => [
            self::FIELD_PARENT => Pokemon::KABUTO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DRAGONAIR => [
            self::FIELD_PARENT => Pokemon::DRATINI,
            self::FIELD_CANDY => 25
        ],
        Pokemon::DRAGONITE => [
            self::FIELD_PARENT => Pokemon::DRAGONAIR,
            self::FIELD_CANDY => 100
        ],
        Pokemon::BAYLEEF => [
            self::FIELD_PARENT => Pokemon::CHIKORITA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MEGANIUM => [
            self::FIELD_PARENT => Pokemon::BAYLEEF,
            self::FIELD_CANDY => 100
        ],
        Pokemon::QUILAVA => [
            self::FIELD_PARENT => Pokemon::CYNDAQUIL,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TYPHLOSION => [
            self::FIELD_PARENT => Pokemon::QUILAVA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CROCONAW => [
            self::FIELD_PARENT => Pokemon::TOTODILE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FERALIGATR => [
            self::FIELD_PARENT => Pokemon::CROCONAW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::FURRET => [
            self::FIELD_PARENT => Pokemon::SENTRET,
            self::FIELD_CANDY => 25
        ],
        Pokemon::NOCTOWL => [
            self::FIELD_PARENT => Pokemon::HOOTHOOT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LEDIAN => [
            self::FIELD_PARENT => Pokemon::LEDYBA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ARIADOS => [
            self::FIELD_PARENT => Pokemon::SPINARAK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LANTURN => [
            self::FIELD_PARENT => Pokemon::CHINCHOU,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PIKACHU => [
            self::FIELD_PARENT => Pokemon::PICHU,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CLEFAIRY => [
            self::FIELD_PARENT => Pokemon::CLEFFA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::JIGGLYPUFF => [
            self::FIELD_PARENT => Pokemon::IGGLYBUFF,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TOGETIC => [
            self::FIELD_PARENT => Pokemon::TOGEPI,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TOGEKISS => [
            self::FIELD_PARENT => Pokemon::TOGETIC,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::XATU => [
            self::FIELD_PARENT => Pokemon::NATU,
            self::FIELD_CANDY => 50
        ],
        Pokemon::FLAAFFY => [
            self::FIELD_PARENT => Pokemon::MAREEP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::AMPHAROS => [
            self::FIELD_PARENT => Pokemon::FLAAFFY,
            self::FIELD_CANDY => 100
        ],
        Pokemon::AZUMARILL => [
            self::FIELD_PARENT => Pokemon::MARILL,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SKIPLOOM => [
            self::FIELD_PARENT => Pokemon::HOPPIP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::JUMPLUFF => [
            self::FIELD_PARENT => Pokemon::SKIPLOOM,
            self::FIELD_CANDY => 100
        ],
        Pokemon::AMBIPOM => [
            self::FIELD_PARENT => Pokemon::AIPOM,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SUNFLORA => [
            self::FIELD_PARENT => Pokemon::SUNKERN,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::YANMEGA => [
            self::FIELD_PARENT => Pokemon::YANMA,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::QUAGSIRE => [
            self::FIELD_PARENT => Pokemon::WOOPER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HONCHKROW => [
            self::FIELD_PARENT => Pokemon::MURKROW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::MISMAGIUS => [
            self::FIELD_PARENT => Pokemon::MISDREAVUS,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::FORRETRESS => [
            self::FIELD_PARENT => Pokemon::PINECO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GLISCOR => [
            self::FIELD_PARENT => Pokemon::GLIGAR,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::GRANBULL => [
            self::FIELD_PARENT => Pokemon::SNUBBULL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::WEAVILE => [
            self::FIELD_PARENT => Pokemon::SNEASEL,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::URSARING => [
            self::FIELD_PARENT => Pokemon::TEDDIURSA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MAGCARGO => [
            self::FIELD_PARENT => Pokemon::SLUGMA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PILOSWINE => [
            self::FIELD_PARENT => Pokemon::SWINUB,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MAMOSWINE => [
            self::FIELD_PARENT => Pokemon::PILOSWINE,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::OCTILLERY => [
            self::FIELD_PARENT => Pokemon::REMORAID,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HOUNDOOM => [
            self::FIELD_PARENT => Pokemon::HOUNDOUR,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DONPHAN => [
            self::FIELD_PARENT => Pokemon::PHANPY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PORYGON_Z => [
            self::FIELD_PARENT => Pokemon::PORYGON2,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::HITMONLEE => [
            self::FIELD_PARENT => Pokemon::TYROGUE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::HITMONCHAN => [
            self::FIELD_PARENT => Pokemon::TYROGUE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::HITMONTOP => [
            self::FIELD_PARENT => Pokemon::TYROGUE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::JYNX => [
            self::FIELD_PARENT => Pokemon::SMOOCHUM,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ELECTABUZZ => [
            self::FIELD_PARENT => Pokemon::ELEKID,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MAGMAR => [
            self::FIELD_PARENT => Pokemon::MAGBY,
            self::FIELD_CANDY => 25
        ],
        Pokemon::PUPITAR => [
            self::FIELD_PARENT => Pokemon::LARVITAR,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TYRANITAR => [
            self::FIELD_PARENT => Pokemon::PUPITAR,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GROVYLE => [
            self::FIELD_PARENT => Pokemon::TREECKO,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SCEPTILE => [
            self::FIELD_PARENT => Pokemon::GROVYLE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::COMBUSKEN => [
            self::FIELD_PARENT => Pokemon::TORCHIC,
            self::FIELD_CANDY => 25
        ],
        Pokemon::BLAZIKEN => [
            self::FIELD_PARENT => Pokemon::COMBUSKEN,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MARSHTOMP => [
            self::FIELD_PARENT => Pokemon::MUDKIP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SWAMPERT => [
            self::FIELD_PARENT => Pokemon::MARSHTOMP,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MIGTYENA => [
            self::FIELD_PARENT => Pokemon::POOCHYENA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LINOONE => [
            self::FIELD_PARENT => Pokemon::ZIGZAGOON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SILCOON => [
            self::FIELD_PARENT => Pokemon::WURMPLE,
            self::FIELD_CANDY => 12
        ],
        Pokemon::CASCOON => [
            self::FIELD_PARENT => Pokemon::WURMPLE,
            self::FIELD_CANDY => 12
        ],
        Pokemon::BEAUTIFLY => [
            self::FIELD_PARENT => Pokemon::SILCOON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUSTOX => [
            self::FIELD_PARENT => Pokemon::CASCOON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LOMBRE => [
            self::FIELD_PARENT => Pokemon::LOTAD,
            self::FIELD_CANDY => 25
        ],
        Pokemon::LUDICOLO => [
            self::FIELD_PARENT => Pokemon::LOMBRE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::NUZLEAF => [
            self::FIELD_PARENT => Pokemon::SEEDOT,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SHIFTRY => [
            self::FIELD_PARENT => Pokemon::NUZLEAF,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SWELLOW => [
            self::FIELD_PARENT => Pokemon::TAILLOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PELIPPER => [
            self::FIELD_PARENT => Pokemon::WINGULL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KIRLIA => [
            self::FIELD_PARENT => Pokemon::RALTS,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GALLADE => [
            self::FIELD_PARENT => Pokemon::KIRLIA,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100,
            self::FIELD_MALE => true
        ],
        Pokemon::GARDEVOIR => [
            self::FIELD_PARENT => Pokemon::KIRLIA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MASQUERAIN => [
            self::FIELD_PARENT => Pokemon::SURSKIT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BRELOOM => [
            self::FIELD_PARENT => Pokemon::SHROOMISH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::VIGOROTH => [
            self::FIELD_PARENT => Pokemon::SLAKOTH,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SLAKING => [
            self::FIELD_PARENT => Pokemon::VIGOROTH,
            self::FIELD_CANDY => 100
        ],
        Pokemon::NINJASK => [
            self::FIELD_PARENT => Pokemon::NINCADA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LOUDRED => [
            self::FIELD_PARENT => Pokemon::WHISMUR,
            self::FIELD_CANDY => 12
        ],
        Pokemon::EXPLOUD => [
            self::FIELD_PARENT => Pokemon::LOUDRED,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HARIYAMA => [
            self::FIELD_PARENT => Pokemon::MAKUHITA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MARILL => [
            self::FIELD_PARENT => Pokemon::AZURILL,
            self::FIELD_CANDY => 25
        ],
        Pokemon::PROBOPASS => [
            self::FIELD_PARENT => Pokemon::NOSEPASS,
            self::FIELD_CANDY => 50,
            self::FIELD_LURE => 'ITEM_TROY_DISK_MAGNETIC'
        ],
        Pokemon::DELCATTY => [
            self::FIELD_PARENT => Pokemon::SKITTY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LAIRON => [
            self::FIELD_PARENT => Pokemon::ARON,
            self::FIELD_CANDY => 25
        ],
        Pokemon::AGGRON => [
            self::FIELD_PARENT => Pokemon::LAIRON,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MEDICHAM => [
            self::FIELD_PARENT => Pokemon::MEDITITE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MANELECTRIC => [
            self::FIELD_PARENT => Pokemon::ELECTRIKE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ROSERADE => [
            self::FIELD_PARENT => Pokemon::ROSELIA,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SWALOT => [
            self::FIELD_PARENT => Pokemon::GULPIN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SHARPEDO => [
            self::FIELD_PARENT => Pokemon::CARAVANHA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::WAILORD => [
            self::FIELD_PARENT => Pokemon::WAILMER,
            self::FIELD_CANDY => 400
        ],
        Pokemon::CAMERUPT => [
            self::FIELD_PARENT => Pokemon::NUMEL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GRUMPIG => [
            self::FIELD_PARENT => Pokemon::SPOINK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::VIBRAVA => [
            self::FIELD_PARENT => Pokemon::TRAPINCH,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FLYGON => [
            self::FIELD_PARENT => Pokemon::VIBRAVA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CACTURNE => [
            self::FIELD_PARENT => Pokemon::CACNEA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ALTARIA => [
            self::FIELD_PARENT => Pokemon::SWABLU,
            self::FIELD_CANDY => 400
        ],
        Pokemon::WHISCASH => [
            self::FIELD_PARENT => Pokemon::BARBOACH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CRAWDAUNT => [
            self::FIELD_PARENT => Pokemon::CORPHISH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CLAYDOL => [
            self::FIELD_PARENT => Pokemon::BALTOY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CRADILY => [
            self::FIELD_PARENT => Pokemon::LILEEP,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ARMALDO => [
            self::FIELD_PARENT => Pokemon::ANORITH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MILOTIC => [
            self::FIELD_PARENT => Pokemon::FEEBAS,
            self::FIELD_CANDY => 100,
            self::FIELD_WALKED => 20
        ],
        Pokemon::BANETTE => [
            self::FIELD_PARENT => Pokemon::SHUPPET,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUSCLOPS => [
            self::FIELD_PARENT => Pokemon::DUSKULL,
            self::FIELD_CANDY => 25
        ],
        Pokemon::DUSKNOIR => [
            self::FIELD_PARENT => Pokemon::DUSCLOPS,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::WOBBUFFET => [
            self::FIELD_PARENT => Pokemon::WYNAUT,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FROSLASS => [
            self::FIELD_PARENT => Pokemon::SNORUNT,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100,
            self::FIELD_FEMALE => true
        ],
        Pokemon::GLALIE => [
            self::FIELD_PARENT => Pokemon::SNORUNT,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SEALEO => [
            self::FIELD_PARENT => Pokemon::SPHEAL,
            self::FIELD_CANDY => 25
        ],
        Pokemon::WALREIN => [
            self::FIELD_PARENT => Pokemon::SEALEO,
            self::FIELD_CANDY => 100
        ],
        Pokemon::HUNTAIL => [
            self::FIELD_PARENT => Pokemon::CLAMPERL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOREBYSS => [
            self::FIELD_PARENT => Pokemon::CLAMPERL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SHELGON => [
            self::FIELD_PARENT => Pokemon::BAGON,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SALAMENCE => [
            self::FIELD_PARENT => Pokemon::SHELGON,
            self::FIELD_CANDY => 100
        ],
        Pokemon::METANG => [
            self::FIELD_PARENT => Pokemon::BELDUM,
            self::FIELD_CANDY => 25
        ],
        Pokemon::METAGROSS => [
            self::FIELD_PARENT => Pokemon::METANG,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GROTLE => [
            self::FIELD_PARENT => Pokemon::TURTWIG,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TORTERRA => [
            self::FIELD_PARENT => Pokemon::GROTLE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MONFERNO => [
            self::FIELD_PARENT => Pokemon::CHIMCHAR,
            self::FIELD_CANDY => 25
        ],
        Pokemon::INFERNAPE => [
            self::FIELD_PARENT => Pokemon::MONFERNO,
            self::FIELD_CANDY => 100
        ],
        Pokemon::PRINPLUP => [
            self::FIELD_PARENT => Pokemon::PILUP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::EMPOLEON => [
            self::FIELD_PARENT => Pokemon::PRINPLUP,
            self::FIELD_CANDY => 100
        ],
        Pokemon::STARAVIA => [
            self::FIELD_PARENT => Pokemon::STARLY,
            self::FIELD_CANDY => 25
        ],
        Pokemon::STARAPTOR => [
            self::FIELD_PARENT => Pokemon::STARAVIA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::BIBAREL => [
            self::FIELD_PARENT => Pokemon::BIDOOF,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KRICKETUNE => [
            self::FIELD_PARENT => Pokemon::KRICKETOT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LUXIO => [
            self::FIELD_PARENT => Pokemon::SHINX,
            self::FIELD_CANDY => 25
        ],
        Pokemon::LUXRAY => [
            self::FIELD_PARENT => Pokemon::LUXIO,
            self::FIELD_CANDY => 100
        ],
        Pokemon::ROSELIA => [
            self::FIELD_PARENT => Pokemon::BUDEW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::RAMPARDOS => [
            self::FIELD_PARENT => Pokemon::CRANIDOS,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BASTIODON => [
            self::FIELD_PARENT => Pokemon::SHIELDON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_PLANT => [
            self::FIELD_PARENT => Pokemon::BURMY | FormsAlias::BURMY_PLANT,
            self::FIELD_CANDY => 50,
            self::FIELD_FEMALE => true
        ],
        Pokemon::MOTHIM => [
            self::FIELD_PARENT => Pokemon::BURMY | FormsAlias::BURMY_SANDY,
            self::FIELD_CANDY => 50,
            self::FIELD_MALE => true
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH => [
            self::FIELD_PARENT => Pokemon::BURMY | FormsAlias::BURMY_TRASH,
            self::FIELD_CANDY => 50,
            self::FIELD_FEMALE => true
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_SANDY => [
            self::FIELD_PARENT => Pokemon::BURMY | FormsAlias::BURMY_SANDY,
            self::FIELD_CANDY => 50,
            self::FIELD_FEMALE => true
        ],
        Pokemon::VESPIQUEN => [
            self::FIELD_PARENT => Pokemon::COMBEE,
            self::FIELD_CANDY => 50,
            self::FIELD_FEMALE => true
        ],
        Pokemon::FLOATZEL => [
            self::FIELD_PARENT => Pokemon::BUZIEL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CHERRIM | FormsAlias::CHERRIM_OVERCAST => [
            self::FIELD_PARENT => Pokemon::CHERUBI,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY => [
            self::FIELD_PARENT => Pokemon::CHERUBI,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GASTRODON | FormsAlias::GASTRODON_EAST_SEA => [
            self::FIELD_PARENT => Pokemon::SHELLOS | FormsAlias::SHELLOS_EAST_SEA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GASTRODON | FormsAlias::GASTRODON_WEST_SEA => [
            self::FIELD_PARENT => Pokemon::SHELLOS | FormsAlias::SHELLOS_WEST_SEA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DRIFBLIM => [
            self::FIELD_PARENT => Pokemon::DRIFLOON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LOPUNNY => [
            self::FIELD_PARENT => Pokemon::BUNEARY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PURUGLY => [
            self::FIELD_PARENT => Pokemon::GLAMEOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CHIMECHO => [
            self::FIELD_PARENT => Pokemon::CHINGLING,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SKUNTANK => [
            self::FIELD_PARENT => Pokemon::STUNKY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BRONZONG => [
            self::FIELD_PARENT => Pokemon::BRONZOR,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SUDOWOODO => [
            self::FIELD_PARENT => Pokemon::BONSLY,
            self::FIELD_CANDY => 50,
            self::FIELD_WALKED => 15
        ],
        Pokemon::MR_MIME => [
            self::FIELD_PARENT => Pokemon::MIME_JR,
            self::FIELD_CANDY => 50,
            self::FIELD_WALKED => 15
        ],
        Pokemon::CHANSEY => [
            self::FIELD_PARENT => Pokemon::HAPPINY,
            self::FIELD_CANDY => 25,
            self::FIELD_WALKED => 15
        ],
        Pokemon::GABITE => [
            self::FIELD_PARENT => Pokemon::GIBLE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GARCHOMP => [
            self::FIELD_PARENT => Pokemon::GABITE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SNORLAX => [
            self::FIELD_PARENT => Pokemon::MUNCHLAX,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LUCARIO => [
            self::FIELD_PARENT => Pokemon::RIOLU,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HIPPOWDON => [
            self::FIELD_PARENT => Pokemon::HIPPOPOTAS,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DRAPION => [
            self::FIELD_PARENT => Pokemon::SKORUPI,
            self::FIELD_CANDY => 50
        ],
        Pokemon::TOXICROAK => [
            self::FIELD_PARENT => Pokemon::CROAGUNK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LUMINEON => [
            self::FIELD_PARENT => Pokemon::FINNEON,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MANTINE => [
            self::FIELD_PARENT => Pokemon::MANTYKE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ABOMASNOW => [
            self::FIELD_PARENT => Pokemon::SNOVER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SERVINE => [
            self::FIELD_PARENT => Pokemon::SNIVY,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SERPERIOR => [
            self::FIELD_PARENT => Pokemon::SERVINE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::PIGNITE => [
            self::FIELD_PARENT => Pokemon::TEPIG,
            self::FIELD_CANDY => 25
        ],
        Pokemon::EMBOAR => [
            self::FIELD_PARENT => Pokemon::PIGNITE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::DEWOTT => [
            self::FIELD_PARENT => Pokemon::OSHAWOTT,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SAMUROTT => [
            self::FIELD_PARENT => Pokemon::DEWOTT,
            self::FIELD_CANDY => 100
        ],
        Pokemon::WATCHDOG => [
            self::FIELD_PARENT => Pokemon::PATRAT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::HERDIER => [
            self::FIELD_PARENT => Pokemon::LILLIPUP,
            self::FIELD_CANDY => 25
        ],
        Pokemon::STOUTLAND => [
            self::FIELD_PARENT => Pokemon::HERDIER,
            self::FIELD_CANDY => 100
        ],
        Pokemon::LIEPARD => [
            self::FIELD_PARENT => Pokemon::PURROLIN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SIMISAGE => [
            self::FIELD_PARENT => Pokemon::PANSAGE,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::SMISEAR => [
            self::FIELD_PARENT => Pokemon::PANSEAR,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::SMIPOUR => [
            self::FIELD_PARENT => Pokemon::PANPOUR,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::MUSHARNA => [
            self::FIELD_PARENT => Pokemon::MUNNA,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::TRANQUILL => [
            self::FIELD_PARENT => Pokemon::PIDOVE,
            self::FIELD_CANDY => 12
        ],
        Pokemon::UNFEZANT => [
            self::FIELD_PARENT => Pokemon::TRANQUILL,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ZEBSTRIKA => [
            self::FIELD_PARENT => Pokemon::BLITZLE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BOLDORE => [
            self::FIELD_PARENT => Pokemon::ROGGENROLA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GIGALITH => [
            self::FIELD_PARENT => Pokemon::BOLDORE,
            self::FIELD_CANDY => 200,
            self::FIELD_TRADED => true
        ],
        Pokemon::SWOOBAT => [
            self::FIELD_PARENT => Pokemon::WOOBAT,
            self::FIELD_CANDY => 50,
            self::FIELD_WALKED => 1
        ],
        Pokemon::EXCADRILL => [
            self::FIELD_PARENT => Pokemon::DRILBUR,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GURDURR => [
            self::FIELD_PARENT => Pokemon::TIMBURR,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CONKELDURR => [
            self::FIELD_PARENT => Pokemon::GURDURR,
            self::FIELD_CANDY => 200,
            self::FIELD_TRADED => true
        ],
        Pokemon::PALPITOAD => [
            self::FIELD_PARENT => Pokemon::TYMPOLE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SEISMITOAD => [
            self::FIELD_PARENT => Pokemon::PALPITOAD,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SWADLOON => [
            self::FIELD_PARENT => Pokemon::SEWADDLE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::LEVANNY => [
            self::FIELD_PARENT => Pokemon::SWADLOON,
            self::FIELD_CANDY => 100
        ],
        Pokemon::WHIRLIPEDE => [
            self::FIELD_PARENT => Pokemon::VENIPEDE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SCOLIPEDE => [
            self::FIELD_PARENT => Pokemon::WHIRLIPEDE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::WHIMSICOTT => [
            self::FIELD_PARENT => Pokemon::COTTONEE,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::LILLIGANT => [
            self::FIELD_PARENT => Pokemon::PETILIL,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::KROKOROK => [
            self::FIELD_PARENT => Pokemon::SANDILE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::KROOKODILE => [
            self::FIELD_PARENT => Pokemon::KROKOROK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD => [
            self::FIELD_PARENT => Pokemon::DARUMAKA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CRUSTLE => [
            self::FIELD_PARENT => Pokemon::DWEBBLE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SCRAFTY => [
            self::FIELD_PARENT => Pokemon::SCRAGGY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::COFAGRIGUS => [
            self::FIELD_PARENT => Pokemon::YAMASK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CARRACOSTA => [
            self::FIELD_PARENT => Pokemon::TIRTOUGA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ARCHEOPS => [
            self::FIELD_PARENT => Pokemon::ARCHEN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GARBODOR => [
            self::FIELD_PARENT => Pokemon::TRUBBISH,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ZOROARK => [
            self::FIELD_PARENT => Pokemon::ZORUA,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CINCCINO => [
            self::FIELD_PARENT => Pokemon::MINCCINO,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOTHORITA => [
            self::FIELD_PARENT => Pokemon::GOTHITA,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GOTHITELLE => [
            self::FIELD_PARENT => Pokemon::GOTHORITA,
            self::FIELD_CANDY => 100
        ],
        Pokemon::DUOSION => [
            self::FIELD_PARENT => Pokemon::SOLOSIS,
            self::FIELD_CANDY => 25
        ],
        Pokemon::REUNICLUS => [
            self::FIELD_PARENT => Pokemon::DUOSION,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SWANNA => [
            self::FIELD_PARENT => Pokemon::DUCKLETT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::VANILLISH => [
            self::FIELD_PARENT => Pokemon::VANILLITE,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VANILLUXE => [
            self::FIELD_PARENT => Pokemon::VANILLISH,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SPRING => [
            self::FIELD_PARENT => Pokemon::DEERLING | FormsAlias::DEERLING_SPRING,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SUMMER => [
            self::FIELD_PARENT => Pokemon::DEERLING | FormsAlias::DEERLING_SUMMER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_AUTUMN => [
            self::FIELD_PARENT => Pokemon::DEERLING | FormsAlias::DEERLING_AUTUMN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_WINTER => [
            self::FIELD_PARENT => Pokemon::DEERLING | FormsAlias::DEERLING_WINTER,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ESCAVALIER => [
            self::FIELD_PARENT => Pokemon::KARRABLAST,
            self::FIELD_CANDY => 200,
            self::FIELD_TRADED => true
        ],
        Pokemon::AMOONGUSS => [
            self::FIELD_PARENT => Pokemon::FOONGUS,
            self::FIELD_CANDY => 50
        ],
        Pokemon::JELLICENT | FormsAlias::JELLICENT_MALE => [
            self::FIELD_PARENT => Pokemon::FRILLISH | FormsAlias::FRILLISH_MALE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::JELLICENT | FormsAlias::JELLICENT_FEMALE => [
            self::FIELD_PARENT => Pokemon::FRILLISH | FormsAlias::FRILLISH_FEMALE,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GALVANTULA => [
            self::FIELD_PARENT => Pokemon::JOLTIK,
            self::FIELD_CANDY => 50
        ],
        Pokemon::FERROTHORN => [
            self::FIELD_PARENT => Pokemon::FERROSEED,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KLANG => [
            self::FIELD_PARENT => Pokemon::KLINK,
            self::FIELD_CANDY => 25
        ],
        Pokemon::KLINKLANG => [
            self::FIELD_PARENT => Pokemon::KLANG,
            self::FIELD_CANDY => 100
        ],
        Pokemon::ELEKTRIK => [
            self::FIELD_PARENT => Pokemon::TYNAMO,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ELEKTROSS => [
            self::FIELD_PARENT => Pokemon::ELEKTRIK,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::BEHEEYEM => [
            self::FIELD_PARENT => Pokemon::ELGYEM,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LAMPENT => [
            self::FIELD_PARENT => Pokemon::LITWICK,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CHANDELURE => [
            self::FIELD_PARENT => Pokemon::LAMPENT,
            self::FIELD_ITEM => 'ITEM_GEN5_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::FRAXURE => [
            self::FIELD_PARENT => Pokemon::AXEW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::HAXORUS => [
            self::FIELD_PARENT => Pokemon::FRAXURE,
            self::FIELD_CANDY => 100
        ],
        Pokemon::BEARTIC => [
            self::FIELD_PARENT => Pokemon::CUBCHOO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ACCELGOR => [
            self::FIELD_PARENT => Pokemon::SHELMET,
            self::FIELD_CANDY => 200,
            self::FIELD_TRADED => true
        ],
        Pokemon::MIENSHAO => [
            self::FIELD_PARENT => Pokemon::MIENFOO,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOLURK => [
            self::FIELD_PARENT => Pokemon::GOLETT,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BISHARP => [
            self::FIELD_PARENT => Pokemon::PAWNIARD,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BRAVIARY => [
            self::FIELD_PARENT => Pokemon::RUFFLET,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MANDIBUZZ => [
            self::FIELD_PARENT => Pokemon::VULLABY,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ZWELIOUS => [
            self::FIELD_PARENT => Pokemon::DEINO,
            self::FIELD_CANDY => 25
        ],
        Pokemon::HYDREIGON => [
            self::FIELD_PARENT => Pokemon::ZWELIOUS,
            self::FIELD_CANDY => 100
        ],
        Pokemon::VOLCARONA => [
            self::FIELD_PARENT => Pokemon::LARVESTA,
            self::FIELD_CANDY => 400
        ],
        Pokemon::QUILLADIN => [
            self::FIELD_PARENT => Pokemon::CHESPIN
        ],
        Pokemon::CHESNAUGHT => [
            self::FIELD_PARENT => Pokemon::QUILLADIN
        ],
        Pokemon::BRAIXEN => [
            self::FIELD_PARENT => Pokemon::FENNEKIN
        ],
        Pokemon::DELPHOX => [
            self::FIELD_PARENT => Pokemon::BRAIXEN
        ],
        Pokemon::FROGADIER => [
            self::FIELD_PARENT => Pokemon::FROAKIE
        ],
        Pokemon::GRENINJA | FormsAlias::GRENINJA_NORMAL => [
            self::FIELD_PARENT => Pokemon::FROGADIER
        ],
        Pokemon::DIGGERSBY => [
            self::FIELD_PARENT => Pokemon::BUNNELBY
        ],
        Pokemon::FLETCHINDER => [
            self::FIELD_PARENT => Pokemon::FLETCHLING
        ],
        Pokemon::TALONFLAME => [
            self::FIELD_PARENT => Pokemon::FLETCHINDER
        ],
        Pokemon::SPEWPA => [
            self::FIELD_PARENT => Pokemon::SCATTERBUG
        ],
        Pokemon::VIVILLON | FormsAlias::VIVILLON_MEADOW => [
            self::FIELD_PARENT => Pokemon::SPEWPA
        ],
        Pokemon::PYROAR | FormsAlias::PYROAR_MALE => [
            self::FIELD_PARENT => Pokemon::LITLEO
        ],
        Pokemon::PYROAR | FormsAlias::PYROAR_FEMALE => [
            self::FIELD_PARENT => Pokemon::LITLEO
        ],
        Pokemon::FLOETTE => [
            self::FIELD_PARENT => Pokemon::FLABEBE
        ],
        Pokemon::FLORGES => [
            self::FIELD_PARENT => Pokemon::FLOETTE
        ],
        Pokemon::GOGOAT => [
            self::FIELD_PARENT => Pokemon::SKIDDO
        ],
        Pokemon::PANGORO => [
            self::FIELD_PARENT => Pokemon::PANCHAM
        ],
        Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_MALE => [
            self::FIELD_PARENT => Pokemon::ESPURR
        ],
        Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_FEMALE => [
            self::FIELD_PARENT => Pokemon::ESPURR
        ],
        Pokemon::DOUBLADE => [
            self::FIELD_PARENT => Pokemon::HONEDGE
        ],
        Pokemon::AEGISLASH | FormsAlias::AEGISLASH_SHIELD => [
            self::FIELD_PARENT => Pokemon::DOUBLADE
        ],
        Pokemon::AROMATISSE => [
            self::FIELD_PARENT => Pokemon::SPIRITZEE
        ],
        Pokemon::SLURPUFF => [
            self::FIELD_PARENT => Pokemon::SWIRLIX
        ],
        Pokemon::MALAMAR => [
            self::FIELD_PARENT => Pokemon::INKAY
        ],
        Pokemon::BARBARACLE => [
            self::FIELD_PARENT => Pokemon::BINACLE
        ],
        Pokemon::DRAGALGE => [
            self::FIELD_PARENT => Pokemon::SKRELP
        ],
        Pokemon::CLAWITZER => [
            self::FIELD_PARENT => Pokemon::CLAUNCHER
        ],
        Pokemon::HELIOLISK => [
            self::FIELD_PARENT => Pokemon::HELIOPTILE
        ],
        Pokemon::TYRANTRUM => [
            self::FIELD_PARENT => Pokemon::TYRUNT
        ],
        Pokemon::AURORUS => [
            self::FIELD_PARENT => Pokemon::AMAURA
        ],
        Pokemon::SLIGGOO => [
            self::FIELD_PARENT => Pokemon::GOOMY
        ],
        Pokemon::GOODRA => [
            self::FIELD_PARENT => Pokemon::SLIGGOO
        ],
        Pokemon::TREVEANT => [
            self::FIELD_PARENT => Pokemon::PHANTUMP
        ],
        Pokemon::GOURGEIST => [
            self::FIELD_PARENT => Pokemon::PUMPKABOO
        ],
        Pokemon::AVALUGG => [
            self::FIELD_PARENT => Pokemon::BERGMITE
        ],
        Pokemon::NOIVERN => [
            self::FIELD_PARENT => Pokemon::NOIBAT
        ],
        Pokemon::DARTRIX => [
            self::FIELD_PARENT => Pokemon::ROWLET
        ],
        Pokemon::DECIDUEYE => [
            self::FIELD_PARENT => Pokemon::DARTRIX
        ],
        Pokemon::TORRACAT => [
            self::FIELD_PARENT => Pokemon::LITTEN
        ],
        Pokemon::INCINEROAR => [
            self::FIELD_PARENT => Pokemon::TORRACAT
        ],
        Pokemon::BRIONNE => [
            self::FIELD_PARENT => Pokemon::POPPLIO
        ],
        Pokemon::PRIMARINA => [
            self::FIELD_PARENT => Pokemon::BRIONNE
        ],
        Pokemon::TRUMBEAK => [
            self::FIELD_PARENT => Pokemon::PIKIPEK
        ],
        Pokemon::TOUCANNON => [
            self::FIELD_PARENT => Pokemon::TRUMBEAK
        ],
        Pokemon::GUMSHOOS => [
            self::FIELD_PARENT => Pokemon::YUNGOOS
        ],
        Pokemon::CHARJABUG => [
            self::FIELD_PARENT => Pokemon::GRUBBIN
        ],
        Pokemon::VIKAVOLT => [
            self::FIELD_PARENT => Pokemon::CHARJABUG
        ],
        Pokemon::CRABOMINABLE => [
            self::FIELD_PARENT => Pokemon::CRABAWLER
        ],
        Pokemon::RIBOMBEE => [
            self::FIELD_PARENT => Pokemon::CUTIEFLY
        ],
        Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDDAY => [
            self::FIELD_PARENT => Pokemon::ROCKRUFF
        ],
        Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDNIGHT => [
            self::FIELD_PARENT => Pokemon::ROCKRUFF
        ],
        Pokemon::LYCANROC | FormsAlias::LYCANROC_DUSK => [
            self::FIELD_PARENT => Pokemon::ROCKRUFF
        ],
        Pokemon::TOXAPEX => [
            self::FIELD_PARENT => Pokemon::MAREANIE
        ],
        Pokemon::MUDSDALE => [
            self::FIELD_PARENT => Pokemon::MUDBRAY
        ],
        Pokemon::ARAQUANID => [
            self::FIELD_PARENT => Pokemon::DEWPIDER
        ],
        Pokemon::LURANTIS => [
            self::FIELD_PARENT => Pokemon::FOMANTIS
        ],
        Pokemon::SHIINOTIC => [
            self::FIELD_PARENT => Pokemon::MORELULL
        ],
        Pokemon::SALAZZLE => [
            self::FIELD_PARENT => Pokemon::SALANDIT
        ],
        Pokemon::BEWEAR => [
            self::FIELD_PARENT => Pokemon::STUFFUL
        ],
        Pokemon::STEENEE => [
            self::FIELD_PARENT => Pokemon::BOUNSWEET
        ],
        Pokemon::TSAREENA => [
            self::FIELD_PARENT => Pokemon::STEENEE
        ],
        Pokemon::GOLISOPOD => [
            self::FIELD_PARENT => Pokemon::WIMPOD
        ],
        Pokemon::PALOSSAND => [
            self::FIELD_PARENT => Pokemon::SANDYGAST
        ],
        Pokemon::SILVALLY => [
            self::FIELD_PARENT => Pokemon::TYPE_NULL
        ],
        Pokemon::HAKAMO_O => [
            self::FIELD_PARENT => Pokemon::JANGMO_O
        ],
        Pokemon::KOMMO_O => [
            self::FIELD_PARENT => Pokemon::HAKAMO_O
        ],
        Pokemon::COSMOEM => [
            self::FIELD_PARENT => Pokemon::COSMOG
        ],
        Pokemon::SOLGALEO => [
            self::FIELD_PARENT => Pokemon::COSMOEM
        ],
        Pokemon::LUNALA => [
            self::FIELD_PARENT => Pokemon::COSMOEM
        ],
        Pokemon::NAGANADEL => [
            self::FIELD_PARENT => Pokemon::POIPOLE
        ],
        Pokemon::MELMETAL => [
            self::FIELD_PARENT => Pokemon::MELTAN,
            self::FIELD_CANDY => 400
        ],
        Pokemon::THWACKEY => [
            self::FIELD_PARENT => Pokemon::GROOKEY
        ],
        Pokemon::RILLABOOM => [
            self::FIELD_PARENT => Pokemon::THWACKEY
        ],
        Pokemon::RABOOT => [
            self::FIELD_PARENT => Pokemon::SCORBUNNY
        ],
        Pokemon::CINDERACE => [
            self::FIELD_PARENT => Pokemon::RABOOT
        ],
        Pokemon::DRIZZILE => [
            self::FIELD_PARENT => Pokemon::SOBBLE
        ],
        Pokemon::INTELEON => [
            self::FIELD_PARENT => Pokemon::DRIZZILE
        ],
        Pokemon::GREEDENT => [
            self::FIELD_PARENT => Pokemon::SKWOVET
        ],
        Pokemon::CORVISQUIRE => [
            self::FIELD_PARENT => Pokemon::ROOKIDEE
        ],
        Pokemon::CORVIKNIGHT => [
            self::FIELD_PARENT => Pokemon::CORVISQUIRE
        ],
        Pokemon::DOTTLER => [
            self::FIELD_PARENT => Pokemon::BLIPBUG
        ],
        Pokemon::ORBEETLE => [
            self::FIELD_PARENT => Pokemon::DOTTLER
        ],
        Pokemon::THIEVUL => [
            self::FIELD_PARENT => Pokemon::NICKIT
        ],
        Pokemon::ELDEGOSS => [
            self::FIELD_PARENT => Pokemon::GOSSIFLEUR
        ],
        Pokemon::DUBWOOL => [
            self::FIELD_PARENT => Pokemon::WOOLOO
        ],
        Pokemon::DREDNAW => [
            self::FIELD_PARENT => Pokemon::CHEWTLE
        ],
        Pokemon::BOLTUND => [
            self::FIELD_PARENT => Pokemon::YAMPER
        ],
        Pokemon::CARKOL => [
            self::FIELD_PARENT => Pokemon::ROLYCOLY
        ],
        Pokemon::COALOSSAL => [
            self::FIELD_PARENT => Pokemon::CARKOL
        ],
        Pokemon::FLAPPLE => [
            self::FIELD_PARENT => Pokemon::APPLIN
        ],
        Pokemon::APPLETUN => [
            self::FIELD_PARENT => Pokemon::APPLIN
        ],
        Pokemon::SANDACONDA => [
            self::FIELD_PARENT => Pokemon::SILICOBRA
        ],
        Pokemon::BARRASKEWDA => [
            self::FIELD_PARENT => Pokemon::ARROKUDA
        ],
        Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_LOW => [
            self::FIELD_PARENT => Pokemon::TOXEL
        ],
        Pokemon::CENTISKORCH => [
            self::FIELD_PARENT => Pokemon::SIZZLIPEDE
        ],
        Pokemon::GRAPPLOCT => [
            self::FIELD_PARENT => Pokemon::CLOBBOPUS
        ],
        Pokemon::POLTEAGEIST => [
            self::FIELD_PARENT => Pokemon::SINISTEA
        ],
        Pokemon::HATTREM => [
            self::FIELD_PARENT => Pokemon::HATENNA
        ],
        Pokemon::HATTERENE => [
            self::FIELD_PARENT => Pokemon::HATTREM
        ],
        Pokemon::MORGREM => [
            self::FIELD_PARENT => Pokemon::IMPIDIMP
        ],
        Pokemon::GRIMMSNARL => [
            self::FIELD_PARENT => Pokemon::MORGREM
        ],
        Pokemon::ALCREMIE | FormsAlias::ALCREMIE_VANILLA => [
            self::FIELD_PARENT => Pokemon::MILCERY
        ],
        Pokemon::FROSMOTH => [
            self::FIELD_PARENT => Pokemon::SNOM
        ],
        Pokemon::COPPERAJAH => [
            self::FIELD_PARENT => Pokemon::CUFANT
        ],
        Pokemon::DRAKLOAK => [
            self::FIELD_PARENT => Pokemon::DREEPY
        ],
        Pokemon::DRAGAPULT => [
            self::FIELD_PARENT => Pokemon::DRAKLOAK
        ],
        Pokemon::URSHIFU | FormsAlias::URSHIFU_SINGLE => [
            self::FIELD_PARENT => Pokemon::KUBFU
        ],
        Pokemon::URSHIFU | FormsAlias::URSHIFU_RAPID => [
            self::FIELD_PARENT => Pokemon::KUBFU
        ],
        Pokemon::RATICATE | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::RATATTA | Mods::ALOLAN,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SANDSLASH | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::SANDSHREW | Mods::ALOLAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::NINETALES | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::VULPIX | Mods::ALOLAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUGTRIO | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::DIGLETT | Mods::ALOLAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PERSIAN | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::MEOWTH | Mods::ALOLAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PERRSERKER => [
            self::FIELD_PARENT => Pokemon::MEOWTH | Mods::GALARIAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GRAVELER | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::GEODUDE | Mods::ALOLAN,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GOLEM | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::GRAVELER | Mods::ALOLAN,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::RAPIDASH | Mods::GALARIAN => [
            self::FIELD_PARENT => Pokemon::PONYTA | Mods::GALARIAN
        ],
        Pokemon::SLOWBRO | Mods::GALARIAN => [
            self::FIELD_PARENT => Pokemon::SLOWPOKE | Mods::GALARIAN
        ],
        Pokemon::MUK | Mods::ALOLAN => [
            self::FIELD_PARENT => Pokemon::GRIMER | Mods::ALOLAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LINOONE | Mods::GALARIAN => [
            self::FIELD_PARENT => Pokemon::ZIGZAGOON | Mods::GALARIAN,
            self::FIELD_CANDY => 25
        ],
        Pokemon::OBSTAGOON => [
            self::FIELD_PARENT => Pokemon::LINOONE | Mods::GALARIAN,
            self::FIELD_CANDY => 100
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD | Mods::GALARIAN => [
            self::FIELD_PARENT => Pokemon::DARUMAKA | Mods::GALARIAN,
            self::FIELD_CANDY => 50
        ],
        Pokemon::IVYSAUR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::BULBASAUR | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::IVYSAUR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::BULBASAUR | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VENUSAUR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::IVYSAUR | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::VENUSAUR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::IVYSAUR | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CHARMELEON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CHARMANDER | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::CHARMELEON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CHARMANDER | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CHARIZARD | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CHARMELEON | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::CHARIZARD | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CHARMELEON | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::WARTORTLE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SQUIRTLE | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::WARTORTLE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SQUIRTLE | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::BLASTOISE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::WARTORTLE | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::BLASTOISE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::WARTORTLE | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::KAKUNA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::WEEDLE | Mods::PURIFIED,
            self::FIELD_CANDY => 10
        ],
        Pokemon::KAKUNA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::WEEDLE | Mods::SHADOW,
            self::FIELD_CANDY => 12
        ],
        Pokemon::BEEDRILL | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KAKUNA | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::BEEDRILL | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KAKUNA | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::RATICATE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::RATATTA | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::RATICATE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::RATATTA | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ARBOK | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::EKANS | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::ARBOK | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::EKANS | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::SANDSLASH | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SANDSHREW | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::SANDSLASH | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SANDSHREW | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::NIDORINA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::NIDORAN_F | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::NIDORINA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::NIDORAN_F | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::NIDOQUEEN | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::NIDORINA | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::NIDOQUEEN | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::NIDORINA | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::NIDORINO | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::NIDORAN_M | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::NIDORINO | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::NIDORAN_M | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::NIDOKING | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::NIDORINO | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::NIDOKING | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::NIDORINO | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::NINETALES | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::VULPIX | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::NINETALES | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::VULPIX | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOLBAT | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ZUBAT | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::GOLBAT | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ZUBAT | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::CROBAT | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GOLBAT | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::CROBAT | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GOLBAT | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GLOOM | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ODDISH | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::GLOOM | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ODDISH | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VILEPLUME | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GLOOM | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::BELLOSSOM | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GLOOM | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::VILEPLUME | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GLOOM | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::BELLOSSOM | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GLOOM | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_SUN_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::VENOMOTH | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::VENONAT | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::VENOMOTH | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::VENONAT | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUGTRIO | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DIGLETT | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::DUGTRIO | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DIGLETT | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PERSIAN | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MEOWTH | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::PERSIAN | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MEOWTH | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GOLDUCK | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::PSYDUCK | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::GOLDUCK | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::PSYDUCK | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ARCANINE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GROWLITHE | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::ARCANINE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GROWLITHE | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::POLIWHIRL | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::POLIWAG | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::POLIWHIRL | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::POLIWAG | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::POLIWRATH | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::POLITOED | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_KINGS_ROCK',
            self::FIELD_CANDY => 90
        ],
        Pokemon::POLIWRATH | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::POLITOED | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::POLIWHIRL | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_KINGS_ROCK',
            self::FIELD_CANDY => 100
        ],
        Pokemon::KADABRA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ABRA | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::KADABRA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ABRA | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::ALAKAZAM | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KADABRA | Mods::PURIFIED,
            self::FIELD_CANDY => 90,
            self::FIELD_TRADED => true
        ],
        Pokemon::ALAKAZAM | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KADABRA | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MACHOKE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MACHOP | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::MACHOKE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MACHOP | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MACHAMP | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MACHOKE | Mods::PURIFIED,
            self::FIELD_CANDY => 90,
            self::FIELD_TRADED => true
        ],
        Pokemon::MACHAMP | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MACHOKE | Mods::SHADOW,
            self::FIELD_CANDY => 100,
            self::FIELD_TRADED => true
        ],
        Pokemon::WEEPINBELL | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::BELLSPROUT | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::WEEPINBELL | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::BELLSPROUT | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::VICTREEBEL | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::WEEPINBELL | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::VICTREEBEL | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::WEEPINBELL | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GRAVELER | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GEODUDE | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::GRAVELER | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GEODUDE | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GOLEM | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GRAVELER | Mods::PURIFIED,
            self::FIELD_CANDY => 90,
            self::FIELD_TRADED => true
        ],
        Pokemon::GOLEM | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GRAVELER | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MAGNETON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MAGNEMITE | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::MAGNETON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MAGNEMITE | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::MAGNEZONE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MAGNETON | Mods::PURIFIED,
            self::FIELD_CANDY => 90,
            self::FIELD_LURE => 'ITEM_TROY_DISK_MAGNETIC'
        ],
        Pokemon::MAGNEZONE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MAGNETON | Mods::SHADOW,
            self::FIELD_CANDY => 100,
            self::FIELD_LURE => 'ITEM_TROY_DISK_MAGNETIC'
        ],
        Pokemon::MUK | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GRIMER | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::MUK | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GRIMER | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::CLOYSTER | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SHELLDER | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::CLOYSTER | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SHELLDER | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::STEELIX | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ONIX | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 45
        ],
        Pokemon::STEELIX | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ONIX | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 50
        ],
        Pokemon::HYPNO | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DROWZEE | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::HYPNO | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DROWZEE | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::KINGLER | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KRABBY | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::KINGLER | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KRABBY | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::EXEGGUTOR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::EXEGGCUTE | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::EXEGGUTOR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::EXEGGCUTE | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::MAROWAK | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CUBONE | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::MAROWAK | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CUBONE | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::WEEZING | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KOFFING | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::WEEZING | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KOFFING | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::RHYDON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::RHYHORN | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::RHYDON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::RHYHORN | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::RHYPERIOR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::RHYDON | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::RHYPERIOR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::RHYDON | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SCIZOR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SCYTHER | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 45
        ],
        Pokemon::SCIZOR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SCYTHER | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_METAL_COAT',
            self::FIELD_CANDY => 50
        ],
        Pokemon::ELECTIVIRE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ELECTABUZZ | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::ELECTIVIRE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ELECTABUZZ | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::MAGMORTAR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MAGMAR | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::MAGMORTAR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MAGMAR | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::GYARADOS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MAGIKARP | Mods::PURIFIED,
            self::FIELD_CANDY => 360
        ],
        Pokemon::GYARADOS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MAGIKARP | Mods::SHADOW,
            self::FIELD_CANDY => 400
        ],
        Pokemon::PORYGON2 | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::PORYGON | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_UP_GRADE',
            self::FIELD_CANDY => 22
        ],
        Pokemon::PORYGON2 | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::PORYGON | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_UP_GRADE',
            self::FIELD_CANDY => 25
        ],
        Pokemon::OMASTAR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::OMANYTE | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::OMASTAR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::OMANYTE | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DRAGONAIR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DRATINI | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::DRAGONAIR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DRATINI | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::DRAGONITE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DRAGONAIR | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::DRAGONITE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DRAGONAIR | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::FLAAFFY | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MAREEP | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::FLAAFFY | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MAREEP | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::AMPHAROS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::FLAAFFY | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::AMPHAROS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::FLAAFFY | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::HONCHKROW | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MURKROW | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::HONCHKROW | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MURKROW | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::MISMAGIUS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MISDREAVUS | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::MISMAGIUS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MISDREAVUS | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::FORRETRESS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::PINECO | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::FORRETRESS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::PINECO | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GLISCOR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GLIGAR | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::GLISCOR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GLIGAR | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::WEAVILE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SNEASEL | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::WEAVILE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SNEASEL | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::HOUNDOOM | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::HOUNDOUR | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::HOUNDOOM | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::HOUNDOUR | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::PORYGON_Z | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::PORYGON2 | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::PORYGON_Z | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::PORYGON2 | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::PUPITAR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::LARVITAR | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::PUPITAR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::LARVITAR | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TYRANITAR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::PUPITAR | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::TYRANITAR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::PUPITAR | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MARSHTOMP | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MUDKIP | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::MARSHTOMP | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MUDKIP | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SWAMPERT | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MARSHTOMP | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::SWAMPERT | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MARSHTOMP | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::LINOONE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::ZIGZAGOON | Mods::PURIFIED,
            self::FIELD_CANDY => 50
        ],
        Pokemon::LINOONE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::ZIGZAGOON | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::NUZLEAF | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SEEDOT | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::NUZLEAF | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SEEDOT | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SHIFTRY | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::NUZLEAF | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::SHIFTRY | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::NUZLEAF | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::KIRLIA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::RALTS | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::KIRLIA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::RALTS | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GALLADE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KIRLIA | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90,
            self::FIELD_MALE => true
        ],
        Pokemon::GARDEVOIR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::KIRLIA | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::GALLADE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KIRLIA | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100,
            self::FIELD_MALE => true
        ],
        Pokemon::GARDEVOIR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::KIRLIA | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SHARPEDO | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CARAVANHA | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::SHARPEDO | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CARAVANHA | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::VIBRAVA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::TRAPINCH | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::VIBRAVA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::TRAPINCH | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::FLYGON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::VIBRAVA | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::FLYGON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::VIBRAVA | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::CACTURNE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CACNEA | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::CACTURNE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CACNEA | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::BANETTE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SHUPPET | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::BANETTE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SHUPPET | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::DUSCLOPS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DUSKULL | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::DUSCLOPS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DUSKULL | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::DUSKNOIR | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::DUSCLOPS | Mods::PURIFIED,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 90
        ],
        Pokemon::DUSKNOIR | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::DUSCLOPS | Mods::SHADOW,
            self::FIELD_ITEM => 'ITEM_GEN4_EVOLUTION_STONE',
            self::FIELD_CANDY => 100
        ],
        Pokemon::SHELGON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::BAGON | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::SHELGON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::BAGON | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::SALAMENCE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SHELGON | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::SALAMENCE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SHELGON | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::METANG | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::BELDUM | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::METANG | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::BELDUM | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::METAGROSS | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::METANG | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::METAGROSS | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::METANG | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::GROTLE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::TURTWIG | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::GROTLE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::TURTWIG | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::TORTERRA | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GROTLE | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::TORTERRA | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GROTLE | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::MONFERNO | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::CHIMCHAR | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::MONFERNO | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::CHIMCHAR | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::INFERNAPE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::MONFERNO | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::INFERNAPE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::MONFERNO | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::SKUNTANK | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::STUNKY | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::SKUNTANK | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::STUNKY | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::GABITE | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GIBLE | Mods::PURIFIED,
            self::FIELD_CANDY => 22
        ],
        Pokemon::GABITE | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GIBLE | Mods::SHADOW,
            self::FIELD_CANDY => 25
        ],
        Pokemon::GARCHOMP | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::GABITE | Mods::PURIFIED,
            self::FIELD_CANDY => 90
        ],
        Pokemon::GARCHOMP | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::GABITE | Mods::SHADOW,
            self::FIELD_CANDY => 100
        ],
        Pokemon::HIPPOWDON | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::HIPPOPOTAS | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::HIPPOWDON | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::HIPPOPOTAS | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ],
        Pokemon::ABOMASNOW | Mods::PURIFIED => [
            self::FIELD_PARENT => Pokemon::SNOVER | Mods::PURIFIED,
            self::FIELD_CANDY => 45
        ],
        Pokemon::ABOMASNOW | Mods::SHADOW => [
            self::FIELD_PARENT => Pokemon::SNOVER | Mods::SHADOW,
            self::FIELD_CANDY => 50
        ]
    ];
}