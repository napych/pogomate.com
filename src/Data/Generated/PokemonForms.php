<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias;

class PokemonForms
{
    const FORMS = [
        Pokemon::BULBASAUR => [
            Pokemon::BULBASAUR,
            Pokemon::BULBASAUR | Mods::PURIFIED,
            Pokemon::BULBASAUR | Mods::SHADOW,
        ],
        Pokemon::IVYSAUR => [
            Pokemon::IVYSAUR,
            Pokemon::IVYSAUR | Mods::PURIFIED,
            Pokemon::IVYSAUR | Mods::SHADOW,
        ],
        Pokemon::VENUSAUR => [
            Pokemon::VENUSAUR,
            Pokemon::VENUSAUR | Mods::MEGA,
            Pokemon::VENUSAUR | Mods::PURIFIED | Mods::MEGA,
            Pokemon::VENUSAUR | Mods::PURIFIED,
            Pokemon::VENUSAUR | Mods::SHADOW,
        ],
        Pokemon::CHARMANDER => [
            Pokemon::CHARMANDER,
            Pokemon::CHARMANDER | Mods::PURIFIED,
            Pokemon::CHARMANDER | Mods::SHADOW,
        ],
        Pokemon::CHARMELEON => [
            Pokemon::CHARMELEON,
            Pokemon::CHARMELEON | Mods::PURIFIED,
            Pokemon::CHARMELEON | Mods::SHADOW,
        ],
        Pokemon::CHARIZARD => [
            Pokemon::CHARIZARD,
            Pokemon::CHARIZARD | Mods::MEGA_X,
            Pokemon::CHARIZARD | Mods::MEGA_Y,
            Pokemon::CHARIZARD | Mods::PURIFIED | Mods::MEGA_X,
            Pokemon::CHARIZARD | Mods::PURIFIED | Mods::MEGA_Y,
            Pokemon::CHARIZARD | Mods::PURIFIED,
            Pokemon::CHARIZARD | Mods::SHADOW,
        ],
        Pokemon::SQUIRTLE => [
            Pokemon::SQUIRTLE,
            Pokemon::SQUIRTLE | Mods::PURIFIED,
            Pokemon::SQUIRTLE | Mods::SHADOW,
        ],
        Pokemon::WARTORTLE => [
            Pokemon::WARTORTLE,
            Pokemon::WARTORTLE | Mods::PURIFIED,
            Pokemon::WARTORTLE | Mods::SHADOW,
        ],
        Pokemon::BLASTOISE => [
            Pokemon::BLASTOISE,
            Pokemon::BLASTOISE | Mods::MEGA,
            Pokemon::BLASTOISE | Mods::PURIFIED | Mods::MEGA,
            Pokemon::BLASTOISE | Mods::PURIFIED,
            Pokemon::BLASTOISE | Mods::SHADOW,
        ],
        Pokemon::CATERPIE => [
            Pokemon::CATERPIE,
        ],
        Pokemon::METAPOD => [
            Pokemon::METAPOD,
        ],
        Pokemon::BUTTERFREE => [
            Pokemon::BUTTERFREE,
        ],
        Pokemon::WEEDLE => [
            Pokemon::WEEDLE,
            Pokemon::WEEDLE | Mods::PURIFIED,
            Pokemon::WEEDLE | Mods::SHADOW,
        ],
        Pokemon::KAKUNA => [
            Pokemon::KAKUNA,
            Pokemon::KAKUNA | Mods::PURIFIED,
            Pokemon::KAKUNA | Mods::SHADOW,
        ],
        Pokemon::BEEDRILL => [
            Pokemon::BEEDRILL,
            Pokemon::BEEDRILL | Mods::MEGA,
            Pokemon::BEEDRILL | Mods::PURIFIED | Mods::MEGA,
            Pokemon::BEEDRILL | Mods::PURIFIED,
            Pokemon::BEEDRILL | Mods::SHADOW,
        ],
        Pokemon::PIDGEY => [
            Pokemon::PIDGEY,
        ],
        Pokemon::PIDGEOTTO => [
            Pokemon::PIDGEOTTO,
        ],
        Pokemon::PIDGEOT => [
            Pokemon::PIDGEOT,
            Pokemon::PIDGEOT | Mods::MEGA,
        ],
        Pokemon::RATATTA => [
            Pokemon::RATATTA,
            Pokemon::RATATTA | Mods::ALOLAN,
            Pokemon::RATATTA | Mods::PURIFIED,
            Pokemon::RATATTA | Mods::SHADOW,
        ],
        Pokemon::RATICATE => [
            Pokemon::RATICATE,
            Pokemon::RATICATE | Mods::ALOLAN,
            Pokemon::RATICATE | Mods::PURIFIED,
            Pokemon::RATICATE | Mods::SHADOW,
        ],
        Pokemon::SPEAROW => [
            Pokemon::SPEAROW,
        ],
        Pokemon::FEAROW => [
            Pokemon::FEAROW,
        ],
        Pokemon::EKANS => [
            Pokemon::EKANS,
            Pokemon::EKANS | Mods::PURIFIED,
            Pokemon::EKANS | Mods::SHADOW,
        ],
        Pokemon::ARBOK => [
            Pokemon::ARBOK,
            Pokemon::ARBOK | Mods::PURIFIED,
            Pokemon::ARBOK | Mods::SHADOW,
        ],
        Pokemon::PIKACHU => [
            Pokemon::PIKACHU,
        ],
        Pokemon::RAICHU => [
            Pokemon::RAICHU,
            Pokemon::RAICHU | Mods::ALOLAN,
        ],
        Pokemon::SANDSHREW => [
            Pokemon::SANDSHREW,
            Pokemon::SANDSHREW | Mods::ALOLAN,
            Pokemon::SANDSHREW | Mods::PURIFIED,
            Pokemon::SANDSHREW | Mods::SHADOW,
        ],
        Pokemon::SANDSLASH => [
            Pokemon::SANDSLASH,
            Pokemon::SANDSLASH | Mods::ALOLAN,
            Pokemon::SANDSLASH | Mods::PURIFIED,
            Pokemon::SANDSLASH | Mods::SHADOW,
        ],
        Pokemon::NIDORAN_F => [
            Pokemon::NIDORAN_F,
            Pokemon::NIDORAN_F | Mods::PURIFIED,
            Pokemon::NIDORAN_F | Mods::SHADOW,
        ],
        Pokemon::NIDORINA => [
            Pokemon::NIDORINA,
            Pokemon::NIDORINA | Mods::PURIFIED,
            Pokemon::NIDORINA | Mods::SHADOW,
        ],
        Pokemon::NIDOQUEEN => [
            Pokemon::NIDOQUEEN,
            Pokemon::NIDOQUEEN | Mods::PURIFIED,
            Pokemon::NIDOQUEEN | Mods::SHADOW,
        ],
        Pokemon::NIDORAN_M => [
            Pokemon::NIDORAN_M,
            Pokemon::NIDORAN_M | Mods::PURIFIED,
            Pokemon::NIDORAN_M | Mods::SHADOW,
        ],
        Pokemon::NIDORINO => [
            Pokemon::NIDORINO,
            Pokemon::NIDORINO | Mods::PURIFIED,
            Pokemon::NIDORINO | Mods::SHADOW,
        ],
        Pokemon::NIDOKING => [
            Pokemon::NIDOKING,
            Pokemon::NIDOKING | Mods::PURIFIED,
            Pokemon::NIDOKING | Mods::SHADOW,
        ],
        Pokemon::CLEFAIRY => [
            Pokemon::CLEFAIRY,
        ],
        Pokemon::CLEFABLE => [
            Pokemon::CLEFABLE,
        ],
        Pokemon::VULPIX => [
            Pokemon::VULPIX,
            Pokemon::VULPIX | Mods::ALOLAN,
            Pokemon::VULPIX | Mods::PURIFIED,
            Pokemon::VULPIX | Mods::SHADOW,
        ],
        Pokemon::NINETALES => [
            Pokemon::NINETALES,
            Pokemon::NINETALES | Mods::ALOLAN,
            Pokemon::NINETALES | Mods::PURIFIED,
            Pokemon::NINETALES | Mods::SHADOW,
        ],
        Pokemon::JIGGLYPUFF => [
            Pokemon::JIGGLYPUFF,
        ],
        Pokemon::WIGGLYTUFF => [
            Pokemon::WIGGLYTUFF,
        ],
        Pokemon::ZUBAT => [
            Pokemon::ZUBAT,
            Pokemon::ZUBAT | Mods::PURIFIED,
            Pokemon::ZUBAT | Mods::SHADOW,
        ],
        Pokemon::GOLBAT => [
            Pokemon::GOLBAT,
            Pokemon::GOLBAT | Mods::PURIFIED,
            Pokemon::GOLBAT | Mods::SHADOW,
        ],
        Pokemon::ODDISH => [
            Pokemon::ODDISH,
            Pokemon::ODDISH | Mods::PURIFIED,
            Pokemon::ODDISH | Mods::SHADOW,
        ],
        Pokemon::GLOOM => [
            Pokemon::GLOOM,
            Pokemon::GLOOM | Mods::PURIFIED,
            Pokemon::GLOOM | Mods::SHADOW,
        ],
        Pokemon::VILEPLUME => [
            Pokemon::VILEPLUME,
            Pokemon::VILEPLUME | Mods::PURIFIED,
            Pokemon::VILEPLUME | Mods::SHADOW,
        ],
        Pokemon::PARAS => [
            Pokemon::PARAS,
        ],
        Pokemon::PARASECT => [
            Pokemon::PARASECT,
        ],
        Pokemon::VENONAT => [
            Pokemon::VENONAT,
            Pokemon::VENONAT | Mods::PURIFIED,
            Pokemon::VENONAT | Mods::SHADOW,
        ],
        Pokemon::VENOMOTH => [
            Pokemon::VENOMOTH,
            Pokemon::VENOMOTH | Mods::PURIFIED,
            Pokemon::VENOMOTH | Mods::SHADOW,
        ],
        Pokemon::DIGLETT => [
            Pokemon::DIGLETT,
            Pokemon::DIGLETT | Mods::ALOLAN,
            Pokemon::DIGLETT | Mods::PURIFIED,
            Pokemon::DIGLETT | Mods::SHADOW,
        ],
        Pokemon::DUGTRIO => [
            Pokemon::DUGTRIO,
            Pokemon::DUGTRIO | Mods::ALOLAN,
            Pokemon::DUGTRIO | Mods::PURIFIED,
            Pokemon::DUGTRIO | Mods::SHADOW,
        ],
        Pokemon::MEOWTH => [
            Pokemon::MEOWTH,
            Pokemon::MEOWTH | Mods::ALOLAN,
            Pokemon::MEOWTH | Mods::GALARIAN,
            Pokemon::MEOWTH | Mods::PURIFIED,
            Pokemon::MEOWTH | Mods::SHADOW,
        ],
        Pokemon::PERSIAN => [
            Pokemon::PERSIAN,
            Pokemon::PERSIAN | Mods::ALOLAN,
            Pokemon::PERSIAN | Mods::PURIFIED,
            Pokemon::PERSIAN | Mods::SHADOW,
        ],
        Pokemon::PSYDUCK => [
            Pokemon::PSYDUCK,
            Pokemon::PSYDUCK | Mods::PURIFIED,
            Pokemon::PSYDUCK | Mods::SHADOW,
        ],
        Pokemon::GOLDUCK => [
            Pokemon::GOLDUCK,
            Pokemon::GOLDUCK | Mods::PURIFIED,
            Pokemon::GOLDUCK | Mods::SHADOW,
        ],
        Pokemon::MANKEY => [
            Pokemon::MANKEY,
        ],
        Pokemon::PRIMEAPE => [
            Pokemon::PRIMEAPE,
        ],
        Pokemon::GROWLITHE => [
            Pokemon::GROWLITHE,
            Pokemon::GROWLITHE | Mods::PURIFIED,
            Pokemon::GROWLITHE | Mods::SHADOW,
        ],
        Pokemon::ARCANINE => [
            Pokemon::ARCANINE,
            Pokemon::ARCANINE | Mods::PURIFIED,
            Pokemon::ARCANINE | Mods::SHADOW,
        ],
        Pokemon::POLIWAG => [
            Pokemon::POLIWAG,
            Pokemon::POLIWAG | Mods::PURIFIED,
            Pokemon::POLIWAG | Mods::SHADOW,
        ],
        Pokemon::POLIWHIRL => [
            Pokemon::POLIWHIRL,
            Pokemon::POLIWHIRL | Mods::PURIFIED,
            Pokemon::POLIWHIRL | Mods::SHADOW,
        ],
        Pokemon::POLIWRATH => [
            Pokemon::POLIWRATH,
            Pokemon::POLIWRATH | Mods::PURIFIED,
            Pokemon::POLIWRATH | Mods::SHADOW,
        ],
        Pokemon::ABRA => [
            Pokemon::ABRA,
            Pokemon::ABRA | Mods::PURIFIED,
            Pokemon::ABRA | Mods::SHADOW,
        ],
        Pokemon::KADABRA => [
            Pokemon::KADABRA,
            Pokemon::KADABRA | Mods::PURIFIED,
            Pokemon::KADABRA | Mods::SHADOW,
        ],
        Pokemon::ALAKAZAM => [
            Pokemon::ALAKAZAM,
            Pokemon::ALAKAZAM | Mods::PURIFIED,
            Pokemon::ALAKAZAM | Mods::SHADOW,
        ],
        Pokemon::MACHOP => [
            Pokemon::MACHOP,
            Pokemon::MACHOP | Mods::PURIFIED,
            Pokemon::MACHOP | Mods::SHADOW,
        ],
        Pokemon::MACHOKE => [
            Pokemon::MACHOKE,
            Pokemon::MACHOKE | Mods::PURIFIED,
            Pokemon::MACHOKE | Mods::SHADOW,
        ],
        Pokemon::MACHAMP => [
            Pokemon::MACHAMP,
            Pokemon::MACHAMP | Mods::PURIFIED,
            Pokemon::MACHAMP | Mods::SHADOW,
        ],
        Pokemon::BELLSPROUT => [
            Pokemon::BELLSPROUT,
            Pokemon::BELLSPROUT | Mods::PURIFIED,
            Pokemon::BELLSPROUT | Mods::SHADOW,
        ],
        Pokemon::WEEPINBELL => [
            Pokemon::WEEPINBELL,
            Pokemon::WEEPINBELL | Mods::PURIFIED,
            Pokemon::WEEPINBELL | Mods::SHADOW,
        ],
        Pokemon::VICTREEBEL => [
            Pokemon::VICTREEBEL,
            Pokemon::VICTREEBEL | Mods::PURIFIED,
            Pokemon::VICTREEBEL | Mods::SHADOW,
        ],
        Pokemon::TENTACOOL => [
            Pokemon::TENTACOOL,
        ],
        Pokemon::TENTACRUEL => [
            Pokemon::TENTACRUEL,
        ],
        Pokemon::GEODUDE => [
            Pokemon::GEODUDE,
            Pokemon::GEODUDE | Mods::ALOLAN,
            Pokemon::GEODUDE | Mods::PURIFIED,
            Pokemon::GEODUDE | Mods::SHADOW,
        ],
        Pokemon::GRAVELER => [
            Pokemon::GRAVELER,
            Pokemon::GRAVELER | Mods::ALOLAN,
            Pokemon::GRAVELER | Mods::PURIFIED,
            Pokemon::GRAVELER | Mods::SHADOW,
        ],
        Pokemon::GOLEM => [
            Pokemon::GOLEM,
            Pokemon::GOLEM | Mods::ALOLAN,
            Pokemon::GOLEM | Mods::PURIFIED,
            Pokemon::GOLEM | Mods::SHADOW,
        ],
        Pokemon::PONYTA => [
            Pokemon::PONYTA,
            Pokemon::PONYTA | Mods::GALARIAN,
            Pokemon::PONYTA | Mods::PURIFIED,
            Pokemon::PONYTA | Mods::SHADOW,
        ],
        Pokemon::RAPIDASH => [
            Pokemon::RAPIDASH,
            Pokemon::RAPIDASH | Mods::GALARIAN,
            Pokemon::RAPIDASH | Mods::PURIFIED,
            Pokemon::RAPIDASH | Mods::SHADOW,
        ],
        Pokemon::SLOWPOKE => [
            Pokemon::SLOWPOKE,
            Pokemon::SLOWPOKE | Mods::GALARIAN,
            Pokemon::SLOWPOKE | Mods::PURIFIED,
            Pokemon::SLOWPOKE | Mods::SHADOW,
        ],
        Pokemon::SLOWBRO => [
            Pokemon::SLOWBRO,
            Pokemon::SLOWBRO | Mods::GALARIAN,
            Pokemon::SLOWBRO | Mods::PURIFIED,
            Pokemon::SLOWBRO | Mods::SHADOW,
        ],
        Pokemon::MAGNEMITE => [
            Pokemon::MAGNEMITE,
            Pokemon::MAGNEMITE | Mods::PURIFIED,
            Pokemon::MAGNEMITE | Mods::SHADOW,
        ],
        Pokemon::MAGNETON => [
            Pokemon::MAGNETON,
            Pokemon::MAGNETON | Mods::PURIFIED,
            Pokemon::MAGNETON | Mods::SHADOW,
        ],
        Pokemon::FARFETCH_D => [
            Pokemon::FARFETCH_D,
            Pokemon::FARFETCH_D | Mods::GALARIAN,
            Pokemon::FARFETCH_D | Mods::PURIFIED,
            Pokemon::FARFETCH_D | Mods::SHADOW,
        ],
        Pokemon::DODUO => [
            Pokemon::DODUO,
        ],
        Pokemon::DODRIO => [
            Pokemon::DODRIO,
        ],
        Pokemon::SEEL => [
            Pokemon::SEEL,
        ],
        Pokemon::DEWGONG => [
            Pokemon::DEWGONG,
        ],
        Pokemon::GRIMER => [
            Pokemon::GRIMER,
            Pokemon::GRIMER | Mods::ALOLAN,
            Pokemon::GRIMER | Mods::PURIFIED,
            Pokemon::GRIMER | Mods::SHADOW,
        ],
        Pokemon::MUK => [
            Pokemon::MUK,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::MUK | Mods::PURIFIED,
            Pokemon::MUK | Mods::SHADOW,
        ],
        Pokemon::SHELLDER => [
            Pokemon::SHELLDER,
            Pokemon::SHELLDER | Mods::PURIFIED,
            Pokemon::SHELLDER | Mods::SHADOW,
        ],
        Pokemon::CLOYSTER => [
            Pokemon::CLOYSTER,
            Pokemon::CLOYSTER | Mods::PURIFIED,
            Pokemon::CLOYSTER | Mods::SHADOW,
        ],
        Pokemon::GASTLY => [
            Pokemon::GASTLY,
        ],
        Pokemon::HAUNTER => [
            Pokemon::HAUNTER,
        ],
        Pokemon::GENGAR => [
            Pokemon::GENGAR,
            Pokemon::GENGAR | Mods::MEGA,
        ],
        Pokemon::ONIX => [
            Pokemon::ONIX,
            Pokemon::ONIX | Mods::PURIFIED,
            Pokemon::ONIX | Mods::SHADOW,
        ],
        Pokemon::DROWZEE => [
            Pokemon::DROWZEE,
            Pokemon::DROWZEE | Mods::PURIFIED,
            Pokemon::DROWZEE | Mods::SHADOW,
        ],
        Pokemon::HYPNO => [
            Pokemon::HYPNO,
            Pokemon::HYPNO | Mods::PURIFIED,
            Pokemon::HYPNO | Mods::SHADOW,
        ],
        Pokemon::KRABBY => [
            Pokemon::KRABBY,
            Pokemon::KRABBY | Mods::PURIFIED,
            Pokemon::KRABBY | Mods::SHADOW,
        ],
        Pokemon::KINGLER => [
            Pokemon::KINGLER,
            Pokemon::KINGLER | Mods::PURIFIED,
            Pokemon::KINGLER | Mods::SHADOW,
        ],
        Pokemon::VOLTORB => [
            Pokemon::VOLTORB,
        ],
        Pokemon::ELECTRODE => [
            Pokemon::ELECTRODE,
        ],
        Pokemon::EXEGGCUTE => [
            Pokemon::EXEGGCUTE,
            Pokemon::EXEGGCUTE | Mods::PURIFIED,
            Pokemon::EXEGGCUTE | Mods::SHADOW,
        ],
        Pokemon::EXEGGUTOR => [
            Pokemon::EXEGGUTOR,
            Pokemon::EXEGGUTOR | Mods::ALOLAN,
            Pokemon::EXEGGUTOR | Mods::PURIFIED,
            Pokemon::EXEGGUTOR | Mods::SHADOW,
        ],
        Pokemon::CUBONE => [
            Pokemon::CUBONE,
            Pokemon::CUBONE | Mods::PURIFIED,
            Pokemon::CUBONE | Mods::SHADOW,
        ],
        Pokemon::MAROWAK => [
            Pokemon::MAROWAK,
            Pokemon::MAROWAK | Mods::ALOLAN,
            Pokemon::MAROWAK | Mods::PURIFIED,
            Pokemon::MAROWAK | Mods::SHADOW,
        ],
        Pokemon::HITMONLEE => [
            Pokemon::HITMONLEE,
            Pokemon::HITMONLEE | Mods::PURIFIED,
            Pokemon::HITMONLEE | Mods::SHADOW,
        ],
        Pokemon::HITMONCHAN => [
            Pokemon::HITMONCHAN,
            Pokemon::HITMONCHAN | Mods::PURIFIED,
            Pokemon::HITMONCHAN | Mods::SHADOW,
        ],
        Pokemon::LICKITUNG => [
            Pokemon::LICKITUNG,
        ],
        Pokemon::KOFFING => [
            Pokemon::KOFFING,
            Pokemon::KOFFING | Mods::PURIFIED,
            Pokemon::KOFFING | Mods::SHADOW,
        ],
        Pokemon::WEEZING => [
            Pokemon::WEEZING,
            Pokemon::WEEZING | Mods::GALARIAN,
            Pokemon::WEEZING | Mods::PURIFIED,
            Pokemon::WEEZING | Mods::SHADOW,
        ],
        Pokemon::RHYHORN => [
            Pokemon::RHYHORN,
            Pokemon::RHYHORN | Mods::PURIFIED,
            Pokemon::RHYHORN | Mods::SHADOW,
        ],
        Pokemon::RHYDON => [
            Pokemon::RHYDON,
            Pokemon::RHYDON | Mods::PURIFIED,
            Pokemon::RHYDON | Mods::SHADOW,
        ],
        Pokemon::CHANSEY => [
            Pokemon::CHANSEY,
        ],
        Pokemon::TANGELA => [
            Pokemon::TANGELA,
        ],
        Pokemon::KANGASKHAN => [
            Pokemon::KANGASKHAN,
            Pokemon::KANGASKHAN | Mods::PURIFIED,
            Pokemon::KANGASKHAN | Mods::SHADOW,
        ],
        Pokemon::HORSEA => [
            Pokemon::HORSEA,
        ],
        Pokemon::SEADRA => [
            Pokemon::SEADRA,
        ],
        Pokemon::GOLDEEN => [
            Pokemon::GOLDEEN,
        ],
        Pokemon::SEAKING => [
            Pokemon::SEAKING,
        ],
        Pokemon::STARYU => [
            Pokemon::STARYU,
        ],
        Pokemon::STARMIE => [
            Pokemon::STARMIE,
        ],
        Pokemon::MR_MIME => [
            Pokemon::MR_MIME,
            Pokemon::MR_MIME | Mods::GALARIAN,
            Pokemon::MR_MIME | Mods::PURIFIED,
            Pokemon::MR_MIME | Mods::SHADOW,
        ],
        Pokemon::SCYTHER => [
            Pokemon::SCYTHER,
            Pokemon::SCYTHER | Mods::PURIFIED,
            Pokemon::SCYTHER | Mods::SHADOW,
        ],
        Pokemon::JYNX => [
            Pokemon::JYNX,
        ],
        Pokemon::ELECTABUZZ => [
            Pokemon::ELECTABUZZ,
            Pokemon::ELECTABUZZ | Mods::PURIFIED,
            Pokemon::ELECTABUZZ | Mods::SHADOW,
        ],
        Pokemon::MAGMAR => [
            Pokemon::MAGMAR,
            Pokemon::MAGMAR | Mods::PURIFIED,
            Pokemon::MAGMAR | Mods::SHADOW,
        ],
        Pokemon::PINSIR => [
            Pokemon::PINSIR,
            Pokemon::PINSIR | Mods::PURIFIED,
            Pokemon::PINSIR | Mods::SHADOW,
        ],
        Pokemon::TAUROS => [
            Pokemon::TAUROS,
        ],
        Pokemon::MAGIKARP => [
            Pokemon::MAGIKARP,
            Pokemon::MAGIKARP | Mods::PURIFIED,
            Pokemon::MAGIKARP | Mods::SHADOW,
        ],
        Pokemon::GYARADOS => [
            Pokemon::GYARADOS,
            Pokemon::GYARADOS | Mods::MEGA,
            Pokemon::GYARADOS | Mods::PURIFIED | Mods::MEGA,
            Pokemon::GYARADOS | Mods::PURIFIED,
            Pokemon::GYARADOS | Mods::SHADOW,
        ],
        Pokemon::LAPRAS => [
            Pokemon::LAPRAS,
            Pokemon::LAPRAS | Mods::PURIFIED,
            Pokemon::LAPRAS | Mods::SHADOW,
        ],
        Pokemon::DITTO => [
            Pokemon::DITTO,
        ],
        Pokemon::EEVEE => [
            Pokemon::EEVEE,
        ],
        Pokemon::VAPOREON => [
            Pokemon::VAPOREON,
        ],
        Pokemon::JOLTEON => [
            Pokemon::JOLTEON,
        ],
        Pokemon::FLAREON => [
            Pokemon::FLAREON,
        ],
        Pokemon::PORYGON => [
            Pokemon::PORYGON,
            Pokemon::PORYGON | Mods::PURIFIED,
            Pokemon::PORYGON | Mods::SHADOW,
        ],
        Pokemon::OMANYTE => [
            Pokemon::OMANYTE,
            Pokemon::OMANYTE | Mods::PURIFIED,
            Pokemon::OMANYTE | Mods::SHADOW,
        ],
        Pokemon::OMASTAR => [
            Pokemon::OMASTAR,
            Pokemon::OMASTAR | Mods::PURIFIED,
            Pokemon::OMASTAR | Mods::SHADOW,
        ],
        Pokemon::KABUTO => [
            Pokemon::KABUTO,
            Pokemon::KABUTO | Mods::PURIFIED,
            Pokemon::KABUTO | Mods::SHADOW,
        ],
        Pokemon::KABUTOPS => [
            Pokemon::KABUTOPS,
            Pokemon::KABUTOPS | Mods::PURIFIED,
            Pokemon::KABUTOPS | Mods::SHADOW,
        ],
        Pokemon::AERODACTYL => [
            Pokemon::AERODACTYL,
            Pokemon::AERODACTYL | Mods::PURIFIED,
            Pokemon::AERODACTYL | Mods::SHADOW,
        ],
        Pokemon::SNORLAX => [
            Pokemon::SNORLAX,
            Pokemon::SNORLAX | Mods::PURIFIED,
            Pokemon::SNORLAX | Mods::SHADOW,
        ],
        Pokemon::ARTICUNO => [
            Pokemon::ARTICUNO,
            Pokemon::ARTICUNO | Mods::PURIFIED,
            Pokemon::ARTICUNO | Mods::SHADOW,
        ],
        Pokemon::ZAPDOS => [
            Pokemon::ZAPDOS,
            Pokemon::ZAPDOS | Mods::PURIFIED,
            Pokemon::ZAPDOS | Mods::SHADOW,
        ],
        Pokemon::MOLTRES => [
            Pokemon::MOLTRES,
            Pokemon::MOLTRES | Mods::PURIFIED,
            Pokemon::MOLTRES | Mods::SHADOW,
        ],
        Pokemon::DRATINI => [
            Pokemon::DRATINI,
            Pokemon::DRATINI | Mods::PURIFIED,
            Pokemon::DRATINI | Mods::SHADOW,
        ],
        Pokemon::DRAGONAIR => [
            Pokemon::DRAGONAIR,
            Pokemon::DRAGONAIR | Mods::PURIFIED,
            Pokemon::DRAGONAIR | Mods::SHADOW,
        ],
        Pokemon::DRAGONITE => [
            Pokemon::DRAGONITE,
            Pokemon::DRAGONITE | Mods::PURIFIED,
            Pokemon::DRAGONITE | Mods::SHADOW,
        ],
        Pokemon::MEWTWO => [
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::PURIFIED,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
        ],
        Pokemon::MEW => [
            Pokemon::MEW,
        ],
        Pokemon::CHIKORITA => [
            Pokemon::CHIKORITA,
        ],
        Pokemon::BAYLEEF => [
            Pokemon::BAYLEEF,
        ],
        Pokemon::MEGANIUM => [
            Pokemon::MEGANIUM,
        ],
        Pokemon::CYNDAQUIL => [
            Pokemon::CYNDAQUIL,
        ],
        Pokemon::QUILAVA => [
            Pokemon::QUILAVA,
        ],
        Pokemon::TYPHLOSION => [
            Pokemon::TYPHLOSION,
        ],
        Pokemon::TOTODILE => [
            Pokemon::TOTODILE,
        ],
        Pokemon::CROCONAW => [
            Pokemon::CROCONAW,
        ],
        Pokemon::FERALIGATR => [
            Pokemon::FERALIGATR,
        ],
        Pokemon::SENTRET => [
            Pokemon::SENTRET,
        ],
        Pokemon::FURRET => [
            Pokemon::FURRET,
        ],
        Pokemon::HOOTHOOT => [
            Pokemon::HOOTHOOT,
        ],
        Pokemon::NOCTOWL => [
            Pokemon::NOCTOWL,
        ],
        Pokemon::LEDYBA => [
            Pokemon::LEDYBA,
        ],
        Pokemon::LEDIAN => [
            Pokemon::LEDIAN,
        ],
        Pokemon::SPINARAK => [
            Pokemon::SPINARAK,
        ],
        Pokemon::ARIADOS => [
            Pokemon::ARIADOS,
        ],
        Pokemon::CROBAT => [
            Pokemon::CROBAT,
            Pokemon::CROBAT | Mods::PURIFIED,
            Pokemon::CROBAT | Mods::SHADOW,
        ],
        Pokemon::CHINCHOU => [
            Pokemon::CHINCHOU,
        ],
        Pokemon::LANTURN => [
            Pokemon::LANTURN,
        ],
        Pokemon::PICHU => [
            Pokemon::PICHU,
        ],
        Pokemon::CLEFFA => [
            Pokemon::CLEFFA,
        ],
        Pokemon::IGGLYBUFF => [
            Pokemon::IGGLYBUFF,
        ],
        Pokemon::TOGEPI => [
            Pokemon::TOGEPI,
        ],
        Pokemon::TOGETIC => [
            Pokemon::TOGETIC,
        ],
        Pokemon::NATU => [
            Pokemon::NATU,
        ],
        Pokemon::XATU => [
            Pokemon::XATU,
        ],
        Pokemon::MAREEP => [
            Pokemon::MAREEP,
            Pokemon::MAREEP | Mods::PURIFIED,
            Pokemon::MAREEP | Mods::SHADOW,
        ],
        Pokemon::FLAAFFY => [
            Pokemon::FLAAFFY,
            Pokemon::FLAAFFY | Mods::PURIFIED,
            Pokemon::FLAAFFY | Mods::SHADOW,
        ],
        Pokemon::AMPHAROS => [
            Pokemon::AMPHAROS,
            Pokemon::AMPHAROS | Mods::MEGA,
            Pokemon::AMPHAROS | Mods::PURIFIED | Mods::MEGA,
            Pokemon::AMPHAROS | Mods::PURIFIED,
            Pokemon::AMPHAROS | Mods::SHADOW,
        ],
        Pokemon::BELLOSSOM => [
            Pokemon::BELLOSSOM,
            Pokemon::BELLOSSOM | Mods::PURIFIED,
            Pokemon::BELLOSSOM | Mods::SHADOW,
        ],
        Pokemon::MARILL => [
            Pokemon::MARILL,
        ],
        Pokemon::AZUMARILL => [
            Pokemon::AZUMARILL,
        ],
        Pokemon::SUDOWOODO => [
            Pokemon::SUDOWOODO,
        ],
        Pokemon::POLITOED => [
            Pokemon::POLITOED,
            Pokemon::POLITOED | Mods::PURIFIED,
            Pokemon::POLITOED | Mods::SHADOW,
        ],
        Pokemon::HOPPIP => [
            Pokemon::HOPPIP,
            Pokemon::HOPPIP | Mods::PURIFIED,
            Pokemon::HOPPIP | Mods::SHADOW,
        ],
        Pokemon::SKIPLOOM => [
            Pokemon::SKIPLOOM,
            Pokemon::SKIPLOOM | Mods::PURIFIED,
            Pokemon::SKIPLOOM | Mods::SHADOW,
        ],
        Pokemon::JUMPLUFF => [
            Pokemon::JUMPLUFF,
            Pokemon::JUMPLUFF | Mods::PURIFIED,
            Pokemon::JUMPLUFF | Mods::SHADOW,
        ],
        Pokemon::AIPOM => [
            Pokemon::AIPOM,
            Pokemon::AIPOM | Mods::PURIFIED,
            Pokemon::AIPOM | Mods::SHADOW,
        ],
        Pokemon::SUNKERN => [
            Pokemon::SUNKERN,
        ],
        Pokemon::SUNFLORA => [
            Pokemon::SUNFLORA,
        ],
        Pokemon::YANMA => [
            Pokemon::YANMA,
        ],
        Pokemon::WOOPER => [
            Pokemon::WOOPER,
            Pokemon::WOOPER | Mods::PURIFIED,
            Pokemon::WOOPER | Mods::SHADOW,
        ],
        Pokemon::QUAGSIRE => [
            Pokemon::QUAGSIRE,
            Pokemon::QUAGSIRE | Mods::PURIFIED,
            Pokemon::QUAGSIRE | Mods::SHADOW,
        ],
        Pokemon::ESPEON => [
            Pokemon::ESPEON,
        ],
        Pokemon::UMBREON => [
            Pokemon::UMBREON,
        ],
        Pokemon::MURKROW => [
            Pokemon::MURKROW,
            Pokemon::MURKROW | Mods::PURIFIED,
            Pokemon::MURKROW | Mods::SHADOW,
        ],
        Pokemon::SLOWKING => [
            Pokemon::SLOWKING,
            Pokemon::SLOWKING | Mods::PURIFIED,
            Pokemon::SLOWKING | Mods::SHADOW,
        ],
        Pokemon::MISDREAVUS => [
            Pokemon::MISDREAVUS,
            Pokemon::MISDREAVUS | Mods::PURIFIED,
            Pokemon::MISDREAVUS | Mods::SHADOW,
        ],
        Pokemon::UNOWN => [
            Pokemon::UNOWN,
        ],
        Pokemon::WOBBUFFET => [
            Pokemon::WOBBUFFET,
            Pokemon::WOBBUFFET | Mods::PURIFIED,
            Pokemon::WOBBUFFET | Mods::SHADOW,
        ],
        Pokemon::GIRAFARIG => [
            Pokemon::GIRAFARIG,
        ],
        Pokemon::PINECO => [
            Pokemon::PINECO,
            Pokemon::PINECO | Mods::PURIFIED,
            Pokemon::PINECO | Mods::SHADOW,
        ],
        Pokemon::FORRETRESS => [
            Pokemon::FORRETRESS,
            Pokemon::FORRETRESS | Mods::PURIFIED,
            Pokemon::FORRETRESS | Mods::SHADOW,
        ],
        Pokemon::DUNSPARCE => [
            Pokemon::DUNSPARCE,
        ],
        Pokemon::GLIGAR => [
            Pokemon::GLIGAR,
            Pokemon::GLIGAR | Mods::PURIFIED,
            Pokemon::GLIGAR | Mods::SHADOW,
        ],
        Pokemon::STEELIX => [
            Pokemon::STEELIX,
            Pokemon::STEELIX | Mods::PURIFIED,
            Pokemon::STEELIX | Mods::SHADOW,
        ],
        Pokemon::SNUBBULL => [
            Pokemon::SNUBBULL,
        ],
        Pokemon::GRANBULL => [
            Pokemon::GRANBULL,
        ],
        Pokemon::QWILFISH => [
            Pokemon::QWILFISH,
        ],
        Pokemon::SCIZOR => [
            Pokemon::SCIZOR,
            Pokemon::SCIZOR | Mods::PURIFIED,
            Pokemon::SCIZOR | Mods::SHADOW,
        ],
        Pokemon::SHUCKLE => [
            Pokemon::SHUCKLE,
            Pokemon::SHUCKLE | Mods::PURIFIED,
            Pokemon::SHUCKLE | Mods::SHADOW,
        ],
        Pokemon::HERACROSS => [
            Pokemon::HERACROSS,
        ],
        Pokemon::SNEASEL => [
            Pokemon::SNEASEL,
            Pokemon::SNEASEL | Mods::PURIFIED,
            Pokemon::SNEASEL | Mods::SHADOW,
        ],
        Pokemon::TEDDIURSA => [
            Pokemon::TEDDIURSA,
            Pokemon::TEDDIURSA | Mods::PURIFIED,
            Pokemon::TEDDIURSA | Mods::SHADOW,
        ],
        Pokemon::URSARING => [
            Pokemon::URSARING,
            Pokemon::URSARING | Mods::PURIFIED,
            Pokemon::URSARING | Mods::SHADOW,
        ],
        Pokemon::SLUGMA => [
            Pokemon::SLUGMA,
        ],
        Pokemon::MAGCARGO => [
            Pokemon::MAGCARGO,
        ],
        Pokemon::SWINUB => [
            Pokemon::SWINUB,
            Pokemon::SWINUB | Mods::PURIFIED,
            Pokemon::SWINUB | Mods::SHADOW,
        ],
        Pokemon::PILOSWINE => [
            Pokemon::PILOSWINE,
            Pokemon::PILOSWINE | Mods::PURIFIED,
            Pokemon::PILOSWINE | Mods::SHADOW,
        ],
        Pokemon::CORSOLA => [
            Pokemon::CORSOLA,
            Pokemon::CORSOLA | Mods::GALARIAN,
        ],
        Pokemon::REMORAID => [
            Pokemon::REMORAID,
        ],
        Pokemon::OCTILLERY => [
            Pokemon::OCTILLERY,
        ],
        Pokemon::DELIBIRD => [
            Pokemon::DELIBIRD,
            Pokemon::DELIBIRD | Mods::PURIFIED,
            Pokemon::DELIBIRD | Mods::SHADOW,
        ],
        Pokemon::MANTINE => [
            Pokemon::MANTINE,
        ],
        Pokemon::SKARMORY => [
            Pokemon::SKARMORY,
            Pokemon::SKARMORY | Mods::PURIFIED,
            Pokemon::SKARMORY | Mods::SHADOW,
        ],
        Pokemon::HOUNDOUR => [
            Pokemon::HOUNDOUR,
            Pokemon::HOUNDOUR | Mods::PURIFIED,
            Pokemon::HOUNDOUR | Mods::SHADOW,
        ],
        Pokemon::HOUNDOOM => [
            Pokemon::HOUNDOOM,
            Pokemon::HOUNDOOM | Mods::MEGA,
            Pokemon::HOUNDOOM | Mods::PURIFIED | Mods::MEGA,
            Pokemon::HOUNDOOM | Mods::PURIFIED,
            Pokemon::HOUNDOOM | Mods::SHADOW,
        ],
        Pokemon::KINGDRA => [
            Pokemon::KINGDRA,
        ],
        Pokemon::PHANPY => [
            Pokemon::PHANPY,
        ],
        Pokemon::DONPHAN => [
            Pokemon::DONPHAN,
        ],
        Pokemon::PORYGON2 => [
            Pokemon::PORYGON2,
            Pokemon::PORYGON2 | Mods::PURIFIED,
            Pokemon::PORYGON2 | Mods::SHADOW,
        ],
        Pokemon::STANTLER => [
            Pokemon::STANTLER,
            Pokemon::STANTLER | Mods::PURIFIED,
            Pokemon::STANTLER | Mods::SHADOW,
        ],
        Pokemon::SMEARGLE => [
            Pokemon::SMEARGLE,
        ],
        Pokemon::TYROGUE => [
            Pokemon::TYROGUE,
        ],
        Pokemon::HITMONTOP => [
            Pokemon::HITMONTOP,
        ],
        Pokemon::SMOOCHUM => [
            Pokemon::SMOOCHUM,
        ],
        Pokemon::ELEKID => [
            Pokemon::ELEKID,
        ],
        Pokemon::MAGBY => [
            Pokemon::MAGBY,
        ],
        Pokemon::MILTANK => [
            Pokemon::MILTANK,
        ],
        Pokemon::BLISSEY => [
            Pokemon::BLISSEY,
        ],
        Pokemon::RAIKOU => [
            Pokemon::RAIKOU,
            Pokemon::RAIKOU | Mods::PURIFIED,
            Pokemon::RAIKOU | Mods::SHADOW,
        ],
        Pokemon::ENTEI => [
            Pokemon::ENTEI,
            Pokemon::ENTEI | Mods::PURIFIED,
            Pokemon::ENTEI | Mods::SHADOW,
        ],
        Pokemon::SUICUNE => [
            Pokemon::SUICUNE,
            Pokemon::SUICUNE | Mods::PURIFIED,
            Pokemon::SUICUNE | Mods::SHADOW,
        ],
        Pokemon::LARVITAR => [
            Pokemon::LARVITAR,
            Pokemon::LARVITAR | Mods::PURIFIED,
            Pokemon::LARVITAR | Mods::SHADOW,
        ],
        Pokemon::PUPITAR => [
            Pokemon::PUPITAR,
            Pokemon::PUPITAR | Mods::PURIFIED,
            Pokemon::PUPITAR | Mods::SHADOW,
        ],
        Pokemon::TYRANITAR => [
            Pokemon::TYRANITAR,
            Pokemon::TYRANITAR | Mods::PURIFIED,
            Pokemon::TYRANITAR | Mods::SHADOW,
        ],
        Pokemon::LUGIA => [
            Pokemon::LUGIA,
        ],
        Pokemon::HO_OH => [
            Pokemon::HO_OH,
        ],
        Pokemon::CELEBI => [
            Pokemon::CELEBI,
        ],
        Pokemon::TREECKO => [
            Pokemon::TREECKO,
        ],
        Pokemon::GROVYLE => [
            Pokemon::GROVYLE,
        ],
        Pokemon::SCEPTILE => [
            Pokemon::SCEPTILE,
        ],
        Pokemon::TORCHIC => [
            Pokemon::TORCHIC,
        ],
        Pokemon::COMBUSKEN => [
            Pokemon::COMBUSKEN,
        ],
        Pokemon::BLAZIKEN => [
            Pokemon::BLAZIKEN,
        ],
        Pokemon::MUDKIP => [
            Pokemon::MUDKIP,
            Pokemon::MUDKIP | Mods::PURIFIED,
            Pokemon::MUDKIP | Mods::SHADOW,
        ],
        Pokemon::MARSHTOMP => [
            Pokemon::MARSHTOMP,
            Pokemon::MARSHTOMP | Mods::PURIFIED,
            Pokemon::MARSHTOMP | Mods::SHADOW,
        ],
        Pokemon::SWAMPERT => [
            Pokemon::SWAMPERT,
            Pokemon::SWAMPERT | Mods::PURIFIED,
            Pokemon::SWAMPERT | Mods::SHADOW,
        ],
        Pokemon::POOCHYENA => [
            Pokemon::POOCHYENA,
        ],
        Pokemon::MIGTYENA => [
            Pokemon::MIGTYENA,
        ],
        Pokemon::ZIGZAGOON => [
            Pokemon::ZIGZAGOON,
            Pokemon::ZIGZAGOON | Mods::GALARIAN,
            Pokemon::ZIGZAGOON | Mods::PURIFIED,
            Pokemon::ZIGZAGOON | Mods::SHADOW,
        ],
        Pokemon::LINOONE => [
            Pokemon::LINOONE,
            Pokemon::LINOONE | Mods::GALARIAN,
            Pokemon::LINOONE | Mods::PURIFIED,
            Pokemon::LINOONE | Mods::SHADOW,
        ],
        Pokemon::WURMPLE => [
            Pokemon::WURMPLE,
        ],
        Pokemon::SILCOON => [
            Pokemon::SILCOON,
        ],
        Pokemon::BEAUTIFLY => [
            Pokemon::BEAUTIFLY,
        ],
        Pokemon::CASCOON => [
            Pokemon::CASCOON,
        ],
        Pokemon::DUSTOX => [
            Pokemon::DUSTOX,
        ],
        Pokemon::LOTAD => [
            Pokemon::LOTAD,
        ],
        Pokemon::LOMBRE => [
            Pokemon::LOMBRE,
        ],
        Pokemon::LUDICOLO => [
            Pokemon::LUDICOLO,
        ],
        Pokemon::SEEDOT => [
            Pokemon::SEEDOT,
            Pokemon::SEEDOT | Mods::PURIFIED,
            Pokemon::SEEDOT | Mods::SHADOW,
        ],
        Pokemon::NUZLEAF => [
            Pokemon::NUZLEAF,
            Pokemon::NUZLEAF | Mods::PURIFIED,
            Pokemon::NUZLEAF | Mods::SHADOW,
        ],
        Pokemon::SHIFTRY => [
            Pokemon::SHIFTRY,
            Pokemon::SHIFTRY | Mods::PURIFIED,
            Pokemon::SHIFTRY | Mods::SHADOW,
        ],
        Pokemon::TAILLOW => [
            Pokemon::TAILLOW,
        ],
        Pokemon::SWELLOW => [
            Pokemon::SWELLOW,
        ],
        Pokemon::WINGULL => [
            Pokemon::WINGULL,
        ],
        Pokemon::PELIPPER => [
            Pokemon::PELIPPER,
        ],
        Pokemon::RALTS => [
            Pokemon::RALTS,
            Pokemon::RALTS | Mods::PURIFIED,
            Pokemon::RALTS | Mods::SHADOW,
        ],
        Pokemon::KIRLIA => [
            Pokemon::KIRLIA,
            Pokemon::KIRLIA | Mods::PURIFIED,
            Pokemon::KIRLIA | Mods::SHADOW,
        ],
        Pokemon::GARDEVOIR => [
            Pokemon::GARDEVOIR,
            Pokemon::GARDEVOIR | Mods::PURIFIED,
            Pokemon::GARDEVOIR | Mods::SHADOW,
        ],
        Pokemon::SURSKIT => [
            Pokemon::SURSKIT,
        ],
        Pokemon::MASQUERAIN => [
            Pokemon::MASQUERAIN,
        ],
        Pokemon::SHROOMISH => [
            Pokemon::SHROOMISH,
        ],
        Pokemon::BRELOOM => [
            Pokemon::BRELOOM,
        ],
        Pokemon::SLAKOTH => [
            Pokemon::SLAKOTH,
        ],
        Pokemon::VIGOROTH => [
            Pokemon::VIGOROTH,
        ],
        Pokemon::SLAKING => [
            Pokemon::SLAKING,
        ],
        Pokemon::NINCADA => [
            Pokemon::NINCADA,
        ],
        Pokemon::NINJASK => [
            Pokemon::NINJASK,
        ],
        Pokemon::SHEDINJA => [
            Pokemon::SHEDINJA,
        ],
        Pokemon::WHISMUR => [
            Pokemon::WHISMUR,
        ],
        Pokemon::LOUDRED => [
            Pokemon::LOUDRED,
        ],
        Pokemon::EXPLOUD => [
            Pokemon::EXPLOUD,
        ],
        Pokemon::MAKUHITA => [
            Pokemon::MAKUHITA,
        ],
        Pokemon::HARIYAMA => [
            Pokemon::HARIYAMA,
        ],
        Pokemon::AZURILL => [
            Pokemon::AZURILL,
        ],
        Pokemon::NOSEPASS => [
            Pokemon::NOSEPASS,
            Pokemon::NOSEPASS | Mods::PURIFIED,
            Pokemon::NOSEPASS | Mods::SHADOW,
        ],
        Pokemon::SKITTY => [
            Pokemon::SKITTY,
        ],
        Pokemon::DELCATTY => [
            Pokemon::DELCATTY,
        ],
        Pokemon::SABLEYE => [
            Pokemon::SABLEYE,
            Pokemon::SABLEYE | Mods::PURIFIED,
            Pokemon::SABLEYE | Mods::SHADOW,
        ],
        Pokemon::MAWILE => [
            Pokemon::MAWILE,
            Pokemon::MAWILE | Mods::PURIFIED,
            Pokemon::MAWILE | Mods::SHADOW,
        ],
        Pokemon::ARON => [
            Pokemon::ARON,
            Pokemon::ARON | Mods::PURIFIED,
            Pokemon::ARON | Mods::SHADOW,
        ],
        Pokemon::LAIRON => [
            Pokemon::LAIRON,
            Pokemon::LAIRON | Mods::PURIFIED,
            Pokemon::LAIRON | Mods::SHADOW,
        ],
        Pokemon::AGGRON => [
            Pokemon::AGGRON,
            Pokemon::AGGRON | Mods::PURIFIED,
            Pokemon::AGGRON | Mods::SHADOW,
        ],
        Pokemon::MEDITITE => [
            Pokemon::MEDITITE,
        ],
        Pokemon::MEDICHAM => [
            Pokemon::MEDICHAM,
        ],
        Pokemon::ELECTRIKE => [
            Pokemon::ELECTRIKE,
        ],
        Pokemon::MANELECTRIC => [
            Pokemon::MANELECTRIC,
        ],
        Pokemon::PLUSLE => [
            Pokemon::PLUSLE,
        ],
        Pokemon::MINUN => [
            Pokemon::MINUN,
        ],
        Pokemon::VOLBEAT => [
            Pokemon::VOLBEAT,
        ],
        Pokemon::ILLUMISE => [
            Pokemon::ILLUMISE,
        ],
        Pokemon::ROSELIA => [
            Pokemon::ROSELIA,
        ],
        Pokemon::GULPIN => [
            Pokemon::GULPIN,
        ],
        Pokemon::SWALOT => [
            Pokemon::SWALOT,
        ],
        Pokemon::CARAVANHA => [
            Pokemon::CARAVANHA,
            Pokemon::CARAVANHA | Mods::PURIFIED,
            Pokemon::CARAVANHA | Mods::SHADOW,
        ],
        Pokemon::SHARPEDO => [
            Pokemon::SHARPEDO,
            Pokemon::SHARPEDO | Mods::PURIFIED,
            Pokemon::SHARPEDO | Mods::SHADOW,
        ],
        Pokemon::WAILMER => [
            Pokemon::WAILMER,
        ],
        Pokemon::WAILORD => [
            Pokemon::WAILORD,
        ],
        Pokemon::NUMEL => [
            Pokemon::NUMEL,
        ],
        Pokemon::CAMERUPT => [
            Pokemon::CAMERUPT,
        ],
        Pokemon::TORKOAL => [
            Pokemon::TORKOAL,
        ],
        Pokemon::SPOINK => [
            Pokemon::SPOINK,
        ],
        Pokemon::GRUMPIG => [
            Pokemon::GRUMPIG,
        ],
        Pokemon::SPINDA => [
            Pokemon::SPINDA,
        ],
        Pokemon::TRAPINCH => [
            Pokemon::TRAPINCH,
            Pokemon::TRAPINCH | Mods::PURIFIED,
            Pokemon::TRAPINCH | Mods::SHADOW,
        ],
        Pokemon::VIBRAVA => [
            Pokemon::VIBRAVA,
            Pokemon::VIBRAVA | Mods::PURIFIED,
            Pokemon::VIBRAVA | Mods::SHADOW,
        ],
        Pokemon::FLYGON => [
            Pokemon::FLYGON,
            Pokemon::FLYGON | Mods::PURIFIED,
            Pokemon::FLYGON | Mods::SHADOW,
        ],
        Pokemon::CACNEA => [
            Pokemon::CACNEA,
            Pokemon::CACNEA | Mods::PURIFIED,
            Pokemon::CACNEA | Mods::SHADOW,
        ],
        Pokemon::CACTURNE => [
            Pokemon::CACTURNE,
            Pokemon::CACTURNE | Mods::PURIFIED,
            Pokemon::CACTURNE | Mods::SHADOW,
        ],
        Pokemon::SWABLU => [
            Pokemon::SWABLU,
        ],
        Pokemon::ALTARIA => [
            Pokemon::ALTARIA,
        ],
        Pokemon::ZANGOOSE => [
            Pokemon::ZANGOOSE,
        ],
        Pokemon::SEVIPER => [
            Pokemon::SEVIPER,
        ],
        Pokemon::LUNATONE => [
            Pokemon::LUNATONE,
        ],
        Pokemon::SOLROCK => [
            Pokemon::SOLROCK,
        ],
        Pokemon::BARBOACH => [
            Pokemon::BARBOACH,
        ],
        Pokemon::WHISCASH => [
            Pokemon::WHISCASH,
        ],
        Pokemon::CORPHISH => [
            Pokemon::CORPHISH,
        ],
        Pokemon::CRAWDAUNT => [
            Pokemon::CRAWDAUNT,
        ],
        Pokemon::BALTOY => [
            Pokemon::BALTOY,
        ],
        Pokemon::CLAYDOL => [
            Pokemon::CLAYDOL,
        ],
        Pokemon::LILEEP => [
            Pokemon::LILEEP,
            Pokemon::LILEEP | Mods::PURIFIED,
            Pokemon::LILEEP | Mods::SHADOW,
        ],
        Pokemon::CRADILY => [
            Pokemon::CRADILY,
            Pokemon::CRADILY | Mods::PURIFIED,
            Pokemon::CRADILY | Mods::SHADOW,
        ],
        Pokemon::ANORITH => [
            Pokemon::ANORITH,
            Pokemon::ANORITH | Mods::PURIFIED,
            Pokemon::ANORITH | Mods::SHADOW,
        ],
        Pokemon::ARMALDO => [
            Pokemon::ARMALDO,
            Pokemon::ARMALDO | Mods::PURIFIED,
            Pokemon::ARMALDO | Mods::SHADOW,
        ],
        Pokemon::FEEBAS => [
            Pokemon::FEEBAS,
        ],
        Pokemon::MILOTIC => [
            Pokemon::MILOTIC,
        ],
        Pokemon::CASTFORM => [
            Pokemon::CASTFORM | FormsAlias::CASTFORM_NORMAL,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_RAINY,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_SNOWY,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_SUNNY,
        ],
        Pokemon::KECLEON => [
            Pokemon::KECLEON,
        ],
        Pokemon::SHUPPET => [
            Pokemon::SHUPPET,
            Pokemon::SHUPPET | Mods::PURIFIED,
            Pokemon::SHUPPET | Mods::SHADOW,
        ],
        Pokemon::BANETTE => [
            Pokemon::BANETTE,
            Pokemon::BANETTE | Mods::PURIFIED,
            Pokemon::BANETTE | Mods::SHADOW,
        ],
        Pokemon::DUSKULL => [
            Pokemon::DUSKULL,
            Pokemon::DUSKULL | Mods::PURIFIED,
            Pokemon::DUSKULL | Mods::SHADOW,
        ],
        Pokemon::DUSCLOPS => [
            Pokemon::DUSCLOPS,
            Pokemon::DUSCLOPS | Mods::PURIFIED,
            Pokemon::DUSCLOPS | Mods::SHADOW,
        ],
        Pokemon::TROPIUS => [
            Pokemon::TROPIUS,
        ],
        Pokemon::CHIMECHO => [
            Pokemon::CHIMECHO,
        ],
        Pokemon::ABSOL => [
            Pokemon::ABSOL,
            Pokemon::ABSOL | Mods::PURIFIED,
            Pokemon::ABSOL | Mods::SHADOW,
        ],
        Pokemon::WYNAUT => [
            Pokemon::WYNAUT,
        ],
        Pokemon::SNORUNT => [
            Pokemon::SNORUNT,
        ],
        Pokemon::GLALIE => [
            Pokemon::GLALIE,
        ],
        Pokemon::SPHEAL => [
            Pokemon::SPHEAL,
            Pokemon::SPHEAL | Mods::PURIFIED,
            Pokemon::SPHEAL | Mods::SHADOW,
        ],
        Pokemon::SEALEO => [
            Pokemon::SEALEO,
            Pokemon::SEALEO | Mods::PURIFIED,
            Pokemon::SEALEO | Mods::SHADOW,
        ],
        Pokemon::WALREIN => [
            Pokemon::WALREIN,
            Pokemon::WALREIN | Mods::PURIFIED,
            Pokemon::WALREIN | Mods::SHADOW,
        ],
        Pokemon::CLAMPERL => [
            Pokemon::CLAMPERL,
        ],
        Pokemon::HUNTAIL => [
            Pokemon::HUNTAIL,
        ],
        Pokemon::GOREBYSS => [
            Pokemon::GOREBYSS,
        ],
        Pokemon::RELICANTH => [
            Pokemon::RELICANTH,
        ],
        Pokemon::LUVDISC => [
            Pokemon::LUVDISC,
        ],
        Pokemon::BAGON => [
            Pokemon::BAGON,
            Pokemon::BAGON | Mods::PURIFIED,
            Pokemon::BAGON | Mods::SHADOW,
        ],
        Pokemon::SHELGON => [
            Pokemon::SHELGON,
            Pokemon::SHELGON | Mods::PURIFIED,
            Pokemon::SHELGON | Mods::SHADOW,
        ],
        Pokemon::SALAMENCE => [
            Pokemon::SALAMENCE,
            Pokemon::SALAMENCE | Mods::PURIFIED,
            Pokemon::SALAMENCE | Mods::SHADOW,
        ],
        Pokemon::BELDUM => [
            Pokemon::BELDUM,
            Pokemon::BELDUM | Mods::PURIFIED,
            Pokemon::BELDUM | Mods::SHADOW,
        ],
        Pokemon::METANG => [
            Pokemon::METANG,
            Pokemon::METANG | Mods::PURIFIED,
            Pokemon::METANG | Mods::SHADOW,
        ],
        Pokemon::METAGROSS => [
            Pokemon::METAGROSS,
            Pokemon::METAGROSS | Mods::PURIFIED,
            Pokemon::METAGROSS | Mods::SHADOW,
        ],
        Pokemon::REGIROCK => [
            Pokemon::REGIROCK,
        ],
        Pokemon::REGICE => [
            Pokemon::REGICE,
        ],
        Pokemon::REGISTEEL => [
            Pokemon::REGISTEEL,
        ],
        Pokemon::LATIAS => [
            Pokemon::LATIAS,
        ],
        Pokemon::LATIOS => [
            Pokemon::LATIOS,
        ],
        Pokemon::KYOGRE => [
            Pokemon::KYOGRE,
        ],
        Pokemon::GROUDON => [
            Pokemon::GROUDON,
        ],
        Pokemon::RAYQUAZA => [
            Pokemon::RAYQUAZA,
        ],
        Pokemon::JIRACHI => [
            Pokemon::JIRACHI,
        ],
        Pokemon::DEOXYS => [
            Pokemon::DEOXYS | FormsAlias::DEOXYS_NORMAL,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_ATTACK,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_SPEED,
        ],
        Pokemon::TURTWIG => [
            Pokemon::TURTWIG,
            Pokemon::TURTWIG | Mods::PURIFIED,
            Pokemon::TURTWIG | Mods::SHADOW,
        ],
        Pokemon::GROTLE => [
            Pokemon::GROTLE,
            Pokemon::GROTLE | Mods::PURIFIED,
            Pokemon::GROTLE | Mods::SHADOW,
        ],
        Pokemon::TORTERRA => [
            Pokemon::TORTERRA,
            Pokemon::TORTERRA | Mods::PURIFIED,
            Pokemon::TORTERRA | Mods::SHADOW,
        ],
        Pokemon::CHIMCHAR => [
            Pokemon::CHIMCHAR,
            Pokemon::CHIMCHAR | Mods::PURIFIED,
            Pokemon::CHIMCHAR | Mods::SHADOW,
        ],
        Pokemon::MONFERNO => [
            Pokemon::MONFERNO,
            Pokemon::MONFERNO | Mods::PURIFIED,
            Pokemon::MONFERNO | Mods::SHADOW,
        ],
        Pokemon::INFERNAPE => [
            Pokemon::INFERNAPE,
            Pokemon::INFERNAPE | Mods::PURIFIED,
            Pokemon::INFERNAPE | Mods::SHADOW,
        ],
        Pokemon::PILUP => [
            Pokemon::PILUP,
        ],
        Pokemon::PRINPLUP => [
            Pokemon::PRINPLUP,
        ],
        Pokemon::EMPOLEON => [
            Pokemon::EMPOLEON,
        ],
        Pokemon::STARLY => [
            Pokemon::STARLY,
        ],
        Pokemon::STARAVIA => [
            Pokemon::STARAVIA,
        ],
        Pokemon::STARAPTOR => [
            Pokemon::STARAPTOR,
        ],
        Pokemon::BIDOOF => [
            Pokemon::BIDOOF,
        ],
        Pokemon::BIBAREL => [
            Pokemon::BIBAREL,
        ],
        Pokemon::KRICKETOT => [
            Pokemon::KRICKETOT,
        ],
        Pokemon::KRICKETUNE => [
            Pokemon::KRICKETUNE,
        ],
        Pokemon::SHINX => [
            Pokemon::SHINX,
        ],
        Pokemon::LUXIO => [
            Pokemon::LUXIO,
        ],
        Pokemon::LUXRAY => [
            Pokemon::LUXRAY,
        ],
        Pokemon::BUDEW => [
            Pokemon::BUDEW,
        ],
        Pokemon::ROSERADE => [
            Pokemon::ROSERADE,
        ],
        Pokemon::CRANIDOS => [
            Pokemon::CRANIDOS,
        ],
        Pokemon::RAMPARDOS => [
            Pokemon::RAMPARDOS,
        ],
        Pokemon::SHIELDON => [
            Pokemon::SHIELDON,
        ],
        Pokemon::BASTIODON => [
            Pokemon::BASTIODON,
        ],
        Pokemon::BURMY => [
            Pokemon::BURMY | FormsAlias::BURMY_PLANT,
            Pokemon::BURMY | FormsAlias::BURMY_TRASH,
            Pokemon::BURMY | FormsAlias::BURMY_SANDY,
        ],
        Pokemon::WORMADAM => [
            Pokemon::WORMADAM | FormsAlias::WORMADAM_PLANT,
            Pokemon::WORMADAM | FormsAlias::WORMADAM_SANDY,
            Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH,
        ],
        Pokemon::MOTHIM => [
            Pokemon::MOTHIM,
        ],
        Pokemon::COMBEE => [
            Pokemon::COMBEE,
        ],
        Pokemon::VESPIQUEN => [
            Pokemon::VESPIQUEN,
        ],
        Pokemon::PACHIRISU => [
            Pokemon::PACHIRISU,
        ],
        Pokemon::BUZIEL => [
            Pokemon::BUZIEL,
        ],
        Pokemon::FLOATZEL => [
            Pokemon::FLOATZEL,
        ],
        Pokemon::CHERUBI => [
            Pokemon::CHERUBI,
        ],
        Pokemon::CHERRIM => [
            Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY,
            Pokemon::CHERRIM | FormsAlias::CHERRIM_OVERCAST,
        ],
        Pokemon::SHELLOS => [
            Pokemon::SHELLOS | FormsAlias::SHELLOS_EAST_SEA,
            Pokemon::SHELLOS | FormsAlias::SHELLOS_WEST_SEA,
        ],
        Pokemon::GASTRODON => [
            Pokemon::GASTRODON | FormsAlias::GASTRODON_EAST_SEA,
            Pokemon::GASTRODON | FormsAlias::GASTRODON_WEST_SEA,
        ],
        Pokemon::AMBIPOM => [
            Pokemon::AMBIPOM,
            Pokemon::AMBIPOM | Mods::PURIFIED,
            Pokemon::AMBIPOM | Mods::SHADOW,
        ],
        Pokemon::DRIFLOON => [
            Pokemon::DRIFLOON,
        ],
        Pokemon::DRIFBLIM => [
            Pokemon::DRIFBLIM,
        ],
        Pokemon::BUNEARY => [
            Pokemon::BUNEARY,
        ],
        Pokemon::LOPUNNY => [
            Pokemon::LOPUNNY,
        ],
        Pokemon::MISMAGIUS => [
            Pokemon::MISMAGIUS,
            Pokemon::MISMAGIUS | Mods::PURIFIED,
            Pokemon::MISMAGIUS | Mods::SHADOW,
        ],
        Pokemon::HONCHKROW => [
            Pokemon::HONCHKROW,
            Pokemon::HONCHKROW | Mods::PURIFIED,
            Pokemon::HONCHKROW | Mods::SHADOW,
        ],
        Pokemon::GLAMEOW => [
            Pokemon::GLAMEOW,
        ],
        Pokemon::PURUGLY => [
            Pokemon::PURUGLY,
        ],
        Pokemon::CHINGLING => [
            Pokemon::CHINGLING,
        ],
        Pokemon::STUNKY => [
            Pokemon::STUNKY,
            Pokemon::STUNKY | Mods::PURIFIED,
            Pokemon::STUNKY | Mods::SHADOW,
        ],
        Pokemon::SKUNTANK => [
            Pokemon::SKUNTANK,
            Pokemon::SKUNTANK | Mods::PURIFIED,
            Pokemon::SKUNTANK | Mods::SHADOW,
        ],
        Pokemon::BRONZOR => [
            Pokemon::BRONZOR,
        ],
        Pokemon::BRONZONG => [
            Pokemon::BRONZONG,
        ],
        Pokemon::BONSLY => [
            Pokemon::BONSLY,
        ],
        Pokemon::MIME_JR => [
            Pokemon::MIME_JR,
        ],
        Pokemon::HAPPINY => [
            Pokemon::HAPPINY,
        ],
        Pokemon::CHATOT => [
            Pokemon::CHATOT,
        ],
        Pokemon::SPIRITOMB => [
            Pokemon::SPIRITOMB,
        ],
        Pokemon::GIBLE => [
            Pokemon::GIBLE,
            Pokemon::GIBLE | Mods::PURIFIED,
            Pokemon::GIBLE | Mods::SHADOW,
        ],
        Pokemon::GABITE => [
            Pokemon::GABITE,
            Pokemon::GABITE | Mods::PURIFIED,
            Pokemon::GABITE | Mods::SHADOW,
        ],
        Pokemon::GARCHOMP => [
            Pokemon::GARCHOMP,
            Pokemon::GARCHOMP | Mods::PURIFIED,
            Pokemon::GARCHOMP | Mods::SHADOW,
        ],
        Pokemon::MUNCHLAX => [
            Pokemon::MUNCHLAX,
        ],
        Pokemon::RIOLU => [
            Pokemon::RIOLU,
        ],
        Pokemon::LUCARIO => [
            Pokemon::LUCARIO,
        ],
        Pokemon::HIPPOPOTAS => [
            Pokemon::HIPPOPOTAS,
            Pokemon::HIPPOPOTAS | Mods::PURIFIED,
            Pokemon::HIPPOPOTAS | Mods::SHADOW,
        ],
        Pokemon::HIPPOWDON => [
            Pokemon::HIPPOWDON,
            Pokemon::HIPPOWDON | Mods::PURIFIED,
            Pokemon::HIPPOWDON | Mods::SHADOW,
        ],
        Pokemon::SKORUPI => [
            Pokemon::SKORUPI,
        ],
        Pokemon::DRAPION => [
            Pokemon::DRAPION,
        ],
        Pokemon::CROAGUNK => [
            Pokemon::CROAGUNK,
        ],
        Pokemon::TOXICROAK => [
            Pokemon::TOXICROAK,
        ],
        Pokemon::CARNIVINE => [
            Pokemon::CARNIVINE,
        ],
        Pokemon::FINNEON => [
            Pokemon::FINNEON,
        ],
        Pokemon::LUMINEON => [
            Pokemon::LUMINEON,
        ],
        Pokemon::MANTYKE => [
            Pokemon::MANTYKE,
        ],
        Pokemon::SNOVER => [
            Pokemon::SNOVER,
            Pokemon::SNOVER | Mods::PURIFIED,
            Pokemon::SNOVER | Mods::SHADOW,
        ],
        Pokemon::ABOMASNOW => [
            Pokemon::ABOMASNOW,
            Pokemon::ABOMASNOW | Mods::MEGA,
            Pokemon::ABOMASNOW | Mods::PURIFIED | Mods::MEGA,
            Pokemon::ABOMASNOW | Mods::PURIFIED,
            Pokemon::ABOMASNOW | Mods::SHADOW,
        ],
        Pokemon::WEAVILE => [
            Pokemon::WEAVILE,
            Pokemon::WEAVILE | Mods::PURIFIED,
            Pokemon::WEAVILE | Mods::SHADOW,
        ],
        Pokemon::MAGNEZONE => [
            Pokemon::MAGNEZONE,
            Pokemon::MAGNEZONE | Mods::PURIFIED,
            Pokemon::MAGNEZONE | Mods::SHADOW,
        ],
        Pokemon::LICKILICKY => [
            Pokemon::LICKILICKY,
        ],
        Pokemon::RHYPERIOR => [
            Pokemon::RHYPERIOR,
            Pokemon::RHYPERIOR | Mods::PURIFIED,
            Pokemon::RHYPERIOR | Mods::SHADOW,
        ],
        Pokemon::TANGROWTH => [
            Pokemon::TANGROWTH,
        ],
        Pokemon::ELECTIVIRE => [
            Pokemon::ELECTIVIRE,
            Pokemon::ELECTIVIRE | Mods::PURIFIED,
            Pokemon::ELECTIVIRE | Mods::SHADOW,
        ],
        Pokemon::MAGMORTAR => [
            Pokemon::MAGMORTAR,
            Pokemon::MAGMORTAR | Mods::PURIFIED,
            Pokemon::MAGMORTAR | Mods::SHADOW,
        ],
        Pokemon::TOGEKISS => [
            Pokemon::TOGEKISS,
        ],
        Pokemon::YANMEGA => [
            Pokemon::YANMEGA,
        ],
        Pokemon::LEAFEON => [
            Pokemon::LEAFEON,
        ],
        Pokemon::GLACEON => [
            Pokemon::GLACEON,
        ],
        Pokemon::GLISCOR => [
            Pokemon::GLISCOR,
            Pokemon::GLISCOR | Mods::PURIFIED,
            Pokemon::GLISCOR | Mods::SHADOW,
        ],
        Pokemon::MAMOSWINE => [
            Pokemon::MAMOSWINE,
            Pokemon::MAMOSWINE | Mods::PURIFIED,
            Pokemon::MAMOSWINE | Mods::SHADOW,
        ],
        Pokemon::PORYGON_Z => [
            Pokemon::PORYGON_Z,
            Pokemon::PORYGON_Z | Mods::PURIFIED,
            Pokemon::PORYGON_Z | Mods::SHADOW,
        ],
        Pokemon::GALLADE => [
            Pokemon::GALLADE,
            Pokemon::GALLADE | Mods::PURIFIED,
            Pokemon::GALLADE | Mods::SHADOW,
        ],
        Pokemon::PROBOPASS => [
            Pokemon::PROBOPASS,
            Pokemon::PROBOPASS | Mods::PURIFIED,
            Pokemon::PROBOPASS | Mods::SHADOW,
        ],
        Pokemon::DUSKNOIR => [
            Pokemon::DUSKNOIR,
            Pokemon::DUSKNOIR | Mods::PURIFIED,
            Pokemon::DUSKNOIR | Mods::SHADOW,
        ],
        Pokemon::FROSLASS => [
            Pokemon::FROSLASS,
        ],
        Pokemon::ROTOM => [
            Pokemon::ROTOM | FormsAlias::ROTOM_NORMAL,
            Pokemon::ROTOM | FormsAlias::ROTOM_FAN,
            Pokemon::ROTOM | FormsAlias::ROTOM_FROST,
            Pokemon::ROTOM | FormsAlias::ROTOM_HEAT,
            Pokemon::ROTOM | FormsAlias::ROTOM_MOW,
            Pokemon::ROTOM | FormsAlias::ROTOM_WASH,
        ],
        Pokemon::UXIE => [
            Pokemon::UXIE,
        ],
        Pokemon::MESPRIT => [
            Pokemon::MESPRIT,
        ],
        Pokemon::AZELF => [
            Pokemon::AZELF,
        ],
        Pokemon::DIALGA => [
            Pokemon::DIALGA,
        ],
        Pokemon::PALKIA => [
            Pokemon::PALKIA,
        ],
        Pokemon::HEATRAN => [
            Pokemon::HEATRAN,
        ],
        Pokemon::REGIGIGAS => [
            Pokemon::REGIGIGAS,
        ],
        Pokemon::GIRATINA => [
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
        ],
        Pokemon::CRESSELIA => [
            Pokemon::CRESSELIA,
        ],
        Pokemon::PHIONE => [
            Pokemon::PHIONE,
        ],
        Pokemon::MANAPHY => [
            Pokemon::MANAPHY,
        ],
        Pokemon::DARKRAI => [
            Pokemon::DARKRAI,
        ],
        Pokemon::SHAYMIN => [
            Pokemon::SHAYMIN | FormsAlias::SHAYMIN_LAND,
            Pokemon::SHAYMIN | FormsAlias::SHAYMIN_SKY,
        ],
        Pokemon::ARCEUS => [
            Pokemon::ARCEUS | FormsAlias::ARCEUS_NORMAL,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_BUG,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_DARK,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_DRAGON,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_ELECTRIC,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_FAIRY,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_FIGHTING,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_FIRE,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_FLYING,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_GHOST,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_GRASS,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_GROUND,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_ICE,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_POISON,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_PSYCHIC,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_ROCK,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_STEEL,
            Pokemon::ARCEUS | FormsAlias::ARCEUS_WATER,
        ],
        Pokemon::VICTINI => [
            Pokemon::VICTINI,
        ],
        Pokemon::SNIVY => [
            Pokemon::SNIVY,
        ],
        Pokemon::SERVINE => [
            Pokemon::SERVINE,
        ],
        Pokemon::SERPERIOR => [
            Pokemon::SERPERIOR,
        ],
        Pokemon::TEPIG => [
            Pokemon::TEPIG,
        ],
        Pokemon::PIGNITE => [
            Pokemon::PIGNITE,
        ],
        Pokemon::EMBOAR => [
            Pokemon::EMBOAR,
        ],
        Pokemon::OSHAWOTT => [
            Pokemon::OSHAWOTT,
        ],
        Pokemon::DEWOTT => [
            Pokemon::DEWOTT,
        ],
        Pokemon::SAMUROTT => [
            Pokemon::SAMUROTT,
        ],
        Pokemon::PATRAT => [
            Pokemon::PATRAT,
        ],
        Pokemon::WATCHDOG => [
            Pokemon::WATCHDOG,
        ],
        Pokemon::LILLIPUP => [
            Pokemon::LILLIPUP,
        ],
        Pokemon::HERDIER => [
            Pokemon::HERDIER,
        ],
        Pokemon::STOUTLAND => [
            Pokemon::STOUTLAND,
        ],
        Pokemon::PURROLIN => [
            Pokemon::PURROLIN,
        ],
        Pokemon::LIEPARD => [
            Pokemon::LIEPARD,
        ],
        Pokemon::PANSAGE => [
            Pokemon::PANSAGE,
        ],
        Pokemon::SIMISAGE => [
            Pokemon::SIMISAGE,
        ],
        Pokemon::PANSEAR => [
            Pokemon::PANSEAR,
        ],
        Pokemon::SMISEAR => [
            Pokemon::SMISEAR,
        ],
        Pokemon::PANPOUR => [
            Pokemon::PANPOUR,
        ],
        Pokemon::SMIPOUR => [
            Pokemon::SMIPOUR,
        ],
        Pokemon::MUNNA => [
            Pokemon::MUNNA,
        ],
        Pokemon::MUSHARNA => [
            Pokemon::MUSHARNA,
        ],
        Pokemon::PIDOVE => [
            Pokemon::PIDOVE,
        ],
        Pokemon::TRANQUILL => [
            Pokemon::TRANQUILL,
        ],
        Pokemon::UNFEZANT => [
            Pokemon::UNFEZANT,
        ],
        Pokemon::BLITZLE => [
            Pokemon::BLITZLE,
        ],
        Pokemon::ZEBSTRIKA => [
            Pokemon::ZEBSTRIKA,
        ],
        Pokemon::ROGGENROLA => [
            Pokemon::ROGGENROLA,
        ],
        Pokemon::BOLDORE => [
            Pokemon::BOLDORE,
        ],
        Pokemon::GIGALITH => [
            Pokemon::GIGALITH,
        ],
        Pokemon::WOOBAT => [
            Pokemon::WOOBAT,
        ],
        Pokemon::SWOOBAT => [
            Pokemon::SWOOBAT,
        ],
        Pokemon::DRILBUR => [
            Pokemon::DRILBUR,
        ],
        Pokemon::EXCADRILL => [
            Pokemon::EXCADRILL,
        ],
        Pokemon::AUDINO => [
            Pokemon::AUDINO,
        ],
        Pokemon::TIMBURR => [
            Pokemon::TIMBURR,
        ],
        Pokemon::GURDURR => [
            Pokemon::GURDURR,
        ],
        Pokemon::CONKELDURR => [
            Pokemon::CONKELDURR,
        ],
        Pokemon::TYMPOLE => [
            Pokemon::TYMPOLE,
        ],
        Pokemon::PALPITOAD => [
            Pokemon::PALPITOAD,
        ],
        Pokemon::SEISMITOAD => [
            Pokemon::SEISMITOAD,
        ],
        Pokemon::THROH => [
            Pokemon::THROH,
        ],
        Pokemon::SAWK => [
            Pokemon::SAWK,
        ],
        Pokemon::SEWADDLE => [
            Pokemon::SEWADDLE,
        ],
        Pokemon::SWADLOON => [
            Pokemon::SWADLOON,
        ],
        Pokemon::LEVANNY => [
            Pokemon::LEVANNY,
        ],
        Pokemon::VENIPEDE => [
            Pokemon::VENIPEDE,
        ],
        Pokemon::WHIRLIPEDE => [
            Pokemon::WHIRLIPEDE,
        ],
        Pokemon::SCOLIPEDE => [
            Pokemon::SCOLIPEDE,
        ],
        Pokemon::COTTONEE => [
            Pokemon::COTTONEE,
        ],
        Pokemon::WHIMSICOTT => [
            Pokemon::WHIMSICOTT,
        ],
        Pokemon::PETILIL => [
            Pokemon::PETILIL,
        ],
        Pokemon::LILLIGANT => [
            Pokemon::LILLIGANT,
        ],
        Pokemon::BASCULIN => [
            Pokemon::BASCULIN | FormsAlias::BASCULIN_BLUE_STRIPED,
            Pokemon::BASCULIN | FormsAlias::BASCULIN_RED_STRIPED,
        ],
        Pokemon::SANDILE => [
            Pokemon::SANDILE,
        ],
        Pokemon::KROKOROK => [
            Pokemon::KROKOROK,
        ],
        Pokemon::KROOKODILE => [
            Pokemon::KROOKODILE,
        ],
        Pokemon::DARUMAKA => [
            Pokemon::DARUMAKA,
            Pokemon::DARUMAKA | Mods::GALARIAN,
            Pokemon::DARUMAKA | Mods::PURIFIED,
            Pokemon::DARUMAKA | Mods::SHADOW,
        ],
        Pokemon::DARMANITAN => [
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD | Mods::GALARIAN,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN | Mods::GALARIAN,
        ],
        Pokemon::MARACTUS => [
            Pokemon::MARACTUS,
        ],
        Pokemon::DWEBBLE => [
            Pokemon::DWEBBLE,
        ],
        Pokemon::CRUSTLE => [
            Pokemon::CRUSTLE,
        ],
        Pokemon::SCRAGGY => [
            Pokemon::SCRAGGY,
        ],
        Pokemon::SCRAFTY => [
            Pokemon::SCRAFTY,
        ],
        Pokemon::SIGILYPH => [
            Pokemon::SIGILYPH,
        ],
        Pokemon::YAMASK => [
            Pokemon::YAMASK,
            Pokemon::YAMASK | Mods::GALARIAN,
            Pokemon::YAMASK | Mods::PURIFIED,
            Pokemon::YAMASK | Mods::SHADOW,
        ],
        Pokemon::COFAGRIGUS => [
            Pokemon::COFAGRIGUS,
            Pokemon::COFAGRIGUS | Mods::PURIFIED,
            Pokemon::COFAGRIGUS | Mods::SHADOW,
        ],
        Pokemon::TIRTOUGA => [
            Pokemon::TIRTOUGA,
        ],
        Pokemon::CARRACOSTA => [
            Pokemon::CARRACOSTA,
        ],
        Pokemon::ARCHEN => [
            Pokemon::ARCHEN,
        ],
        Pokemon::ARCHEOPS => [
            Pokemon::ARCHEOPS,
        ],
        Pokemon::TRUBBISH => [
            Pokemon::TRUBBISH,
        ],
        Pokemon::GARBODOR => [
            Pokemon::GARBODOR,
        ],
        Pokemon::ZORUA => [
            Pokemon::ZORUA,
        ],
        Pokemon::ZOROARK => [
            Pokemon::ZOROARK,
        ],
        Pokemon::MINCCINO => [
            Pokemon::MINCCINO,
        ],
        Pokemon::CINCCINO => [
            Pokemon::CINCCINO,
        ],
        Pokemon::GOTHITA => [
            Pokemon::GOTHITA,
        ],
        Pokemon::GOTHORITA => [
            Pokemon::GOTHORITA,
        ],
        Pokemon::GOTHITELLE => [
            Pokemon::GOTHITELLE,
        ],
        Pokemon::SOLOSIS => [
            Pokemon::SOLOSIS,
        ],
        Pokemon::DUOSION => [
            Pokemon::DUOSION,
        ],
        Pokemon::REUNICLUS => [
            Pokemon::REUNICLUS,
        ],
        Pokemon::DUCKLETT => [
            Pokemon::DUCKLETT,
        ],
        Pokemon::SWANNA => [
            Pokemon::SWANNA,
        ],
        Pokemon::VANILLITE => [
            Pokemon::VANILLITE,
        ],
        Pokemon::VANILLISH => [
            Pokemon::VANILLISH,
        ],
        Pokemon::VANILLUXE => [
            Pokemon::VANILLUXE,
        ],
        Pokemon::DEERLING => [
            Pokemon::DEERLING | FormsAlias::DEERLING_SPRING,
            Pokemon::DEERLING | FormsAlias::DEERLING_SUMMER,
            Pokemon::DEERLING | FormsAlias::DEERLING_AUTUMN,
            Pokemon::DEERLING | FormsAlias::DEERLING_WINTER,
        ],
        Pokemon::SAWSBUCK => [
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SPRING,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SUMMER,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_AUTUMN,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_WINTER,
        ],
        Pokemon::EMOLGA => [
            Pokemon::EMOLGA,
        ],
        Pokemon::KARRABLAST => [
            Pokemon::KARRABLAST,
        ],
        Pokemon::ESCAVALIER => [
            Pokemon::ESCAVALIER,
        ],
        Pokemon::FOONGUS => [
            Pokemon::FOONGUS,
        ],
        Pokemon::AMOONGUSS => [
            Pokemon::AMOONGUSS,
        ],
        Pokemon::FRILLISH => [
            Pokemon::FRILLISH | FormsAlias::FRILLISH_MALE,
            Pokemon::FRILLISH | FormsAlias::FRILLISH_FEMALE,
        ],
        Pokemon::JELLICENT => [
            Pokemon::JELLICENT | FormsAlias::JELLICENT_MALE,
            Pokemon::JELLICENT | FormsAlias::JELLICENT_FEMALE,
        ],
        Pokemon::ALOMOMOLA => [
            Pokemon::ALOMOMOLA,
        ],
        Pokemon::JOLTIK => [
            Pokemon::JOLTIK,
        ],
        Pokemon::GALVANTULA => [
            Pokemon::GALVANTULA,
        ],
        Pokemon::FERROSEED => [
            Pokemon::FERROSEED,
        ],
        Pokemon::FERROTHORN => [
            Pokemon::FERROTHORN,
        ],
        Pokemon::KLINK => [
            Pokemon::KLINK,
        ],
        Pokemon::KLANG => [
            Pokemon::KLANG,
        ],
        Pokemon::KLINKLANG => [
            Pokemon::KLINKLANG,
        ],
        Pokemon::TYNAMO => [
            Pokemon::TYNAMO,
        ],
        Pokemon::ELEKTRIK => [
            Pokemon::ELEKTRIK,
        ],
        Pokemon::ELEKTROSS => [
            Pokemon::ELEKTROSS,
        ],
        Pokemon::ELGYEM => [
            Pokemon::ELGYEM,
        ],
        Pokemon::BEHEEYEM => [
            Pokemon::BEHEEYEM,
        ],
        Pokemon::LITWICK => [
            Pokemon::LITWICK,
        ],
        Pokemon::LAMPENT => [
            Pokemon::LAMPENT,
        ],
        Pokemon::CHANDELURE => [
            Pokemon::CHANDELURE,
        ],
        Pokemon::AXEW => [
            Pokemon::AXEW,
        ],
        Pokemon::FRAXURE => [
            Pokemon::FRAXURE,
        ],
        Pokemon::HAXORUS => [
            Pokemon::HAXORUS,
        ],
        Pokemon::CUBCHOO => [
            Pokemon::CUBCHOO,
        ],
        Pokemon::BEARTIC => [
            Pokemon::BEARTIC,
        ],
        Pokemon::CRYOGONAL => [
            Pokemon::CRYOGONAL,
        ],
        Pokemon::SHELMET => [
            Pokemon::SHELMET,
        ],
        Pokemon::ACCELGOR => [
            Pokemon::ACCELGOR,
        ],
        Pokemon::STUNFISK => [
            Pokemon::STUNFISK,
            Pokemon::STUNFISK | Mods::GALARIAN,
            Pokemon::STUNFISK | Mods::PURIFIED,
            Pokemon::STUNFISK | Mods::SHADOW,
        ],
        Pokemon::MIENFOO => [
            Pokemon::MIENFOO,
        ],
        Pokemon::MIENSHAO => [
            Pokemon::MIENSHAO,
        ],
        Pokemon::DRUDDIGON => [
            Pokemon::DRUDDIGON,
        ],
        Pokemon::GOLETT => [
            Pokemon::GOLETT,
        ],
        Pokemon::GOLURK => [
            Pokemon::GOLURK,
        ],
        Pokemon::PAWNIARD => [
            Pokemon::PAWNIARD,
        ],
        Pokemon::BISHARP => [
            Pokemon::BISHARP,
        ],
        Pokemon::BOUFFALANT => [
            Pokemon::BOUFFALANT,
        ],
        Pokemon::RUFFLET => [
            Pokemon::RUFFLET,
        ],
        Pokemon::BRAVIARY => [
            Pokemon::BRAVIARY,
        ],
        Pokemon::VULLABY => [
            Pokemon::VULLABY,
        ],
        Pokemon::MANDIBUZZ => [
            Pokemon::MANDIBUZZ,
        ],
        Pokemon::HEATMOR => [
            Pokemon::HEATMOR,
        ],
        Pokemon::DURANT => [
            Pokemon::DURANT,
        ],
        Pokemon::DEINO => [
            Pokemon::DEINO,
        ],
        Pokemon::ZWELIOUS => [
            Pokemon::ZWELIOUS,
        ],
        Pokemon::HYDREIGON => [
            Pokemon::HYDREIGON,
        ],
        Pokemon::LARVESTA => [
            Pokemon::LARVESTA,
        ],
        Pokemon::VOLCARONA => [
            Pokemon::VOLCARONA,
        ],
        Pokemon::COBALLION => [
            Pokemon::COBALLION,
        ],
        Pokemon::TERRAKION => [
            Pokemon::TERRAKION,
        ],
        Pokemon::VIRIZION => [
            Pokemon::VIRIZION,
        ],
        Pokemon::TORNADUS => [
            Pokemon::TORNADUS | FormsAlias::TORNADUS_INCARNATE,
            Pokemon::TORNADUS | FormsAlias::TORNADUS_THERIAN,
        ],
        Pokemon::THUNDURUS => [
            Pokemon::THUNDURUS | FormsAlias::THUNDURUS_INCARNATE,
            Pokemon::THUNDURUS | FormsAlias::THUNDURUS_THERIAN,
        ],
        Pokemon::RESHIRAM => [
            Pokemon::RESHIRAM,
        ],
        Pokemon::ZEKROM => [
            Pokemon::ZEKROM,
        ],
        Pokemon::LANDORUS => [
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN,
        ],
        Pokemon::KYUREM => [
            Pokemon::KYUREM | FormsAlias::KYUREM_NORMAL,
            Pokemon::KYUREM | FormsAlias::KYUREM_BLACK,
            Pokemon::KYUREM | FormsAlias::KYUREM_WHITE,
        ],
        Pokemon::KELDEO => [
            Pokemon::KELDEO | FormsAlias::KELDEO_ORDINARY,
            Pokemon::KELDEO | FormsAlias::KELDEO_RESOLUTE,
        ],
        Pokemon::MELOETTA => [
            Pokemon::MELOETTA | FormsAlias::MELOETTA_ARIA,
            Pokemon::MELOETTA | FormsAlias::MELOETTA_PIROUETTE,
        ],
        Pokemon::GENESECT => [
            Pokemon::GENESECT | FormsAlias::GENESECT_NORMAL,
            Pokemon::GENESECT | FormsAlias::GENESECT_BURN,
            Pokemon::GENESECT | FormsAlias::GENESECT_CHILL,
            Pokemon::GENESECT | FormsAlias::GENESECT_DOUSE,
            Pokemon::GENESECT | FormsAlias::GENESECT_SHOCK,
        ],
        Pokemon::CHESPIN => [
            Pokemon::CHESPIN,
        ],
        Pokemon::QUILLADIN => [
            Pokemon::QUILLADIN,
        ],
        Pokemon::CHESNAUGHT => [
            Pokemon::CHESNAUGHT,
        ],
        Pokemon::FENNEKIN => [
            Pokemon::FENNEKIN,
        ],
        Pokemon::BRAIXEN => [
            Pokemon::BRAIXEN,
        ],
        Pokemon::DELPHOX => [
            Pokemon::DELPHOX,
        ],
        Pokemon::FROAKIE => [
            Pokemon::FROAKIE,
        ],
        Pokemon::FROGADIER => [
            Pokemon::FROGADIER,
        ],
        Pokemon::GRENINJA => [
            Pokemon::GRENINJA | FormsAlias::GRENINJA_NORMAL,
            Pokemon::GRENINJA | FormsAlias::GRENINJA_ASH,
        ],
        Pokemon::BUNNELBY => [
            Pokemon::BUNNELBY,
        ],
        Pokemon::DIGGERSBY => [
            Pokemon::DIGGERSBY,
        ],
        Pokemon::FLETCHLING => [
            Pokemon::FLETCHLING,
        ],
        Pokemon::FLETCHINDER => [
            Pokemon::FLETCHINDER,
        ],
        Pokemon::TALONFLAME => [
            Pokemon::TALONFLAME,
        ],
        Pokemon::SCATTERBUG => [
            Pokemon::SCATTERBUG,
        ],
        Pokemon::SPEWPA => [
            Pokemon::SPEWPA,
        ],
        Pokemon::VIVILLON => [
            Pokemon::VIVILLON | FormsAlias::VIVILLON_MEADOW,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_CONTINENTAL,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_GARDEN,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_ELEGANT,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_MARINE,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_PLAINS,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_RIVER,
        ],
        Pokemon::LITLEO => [
            Pokemon::LITLEO,
        ],
        Pokemon::PYROAR => [
            Pokemon::PYROAR | FormsAlias::PYROAR_MALE,
            Pokemon::PYROAR | FormsAlias::PYROAR_FEMALE,
        ],
        Pokemon::FLABEBE => [
            Pokemon::FLABEBE,
        ],
        Pokemon::FLOETTE => [
            Pokemon::FLOETTE,
        ],
        Pokemon::FLORGES => [
            Pokemon::FLORGES,
        ],
        Pokemon::SKIDDO => [
            Pokemon::SKIDDO,
        ],
        Pokemon::GOGOAT => [
            Pokemon::GOGOAT,
        ],
        Pokemon::PANCHAM => [
            Pokemon::PANCHAM,
        ],
        Pokemon::PANGORO => [
            Pokemon::PANGORO,
        ],
        Pokemon::FURFROU => [
            Pokemon::FURFROU | FormsAlias::FURFROU_NATURAL,
            Pokemon::FURFROU | FormsAlias::FURFROU_HEART,
            Pokemon::FURFROU | FormsAlias::FURFROU_STAR,
            Pokemon::FURFROU | FormsAlias::FURFROU_DIAMOND,
        ],
        Pokemon::ESPURR => [
            Pokemon::ESPURR,
        ],
        Pokemon::MEOWSTIC => [
            Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_MALE,
            Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_FEMALE,
        ],
        Pokemon::HONEDGE => [
            Pokemon::HONEDGE,
        ],
        Pokemon::DOUBLADE => [
            Pokemon::DOUBLADE,
        ],
        Pokemon::AEGISLASH => [
            Pokemon::AEGISLASH | FormsAlias::AEGISLASH_SHIELD,
            Pokemon::AEGISLASH | FormsAlias::AEGISLASH_BLADE,
        ],
        Pokemon::SPIRITZEE => [
            Pokemon::SPIRITZEE,
        ],
        Pokemon::AROMATISSE => [
            Pokemon::AROMATISSE,
        ],
        Pokemon::SWIRLIX => [
            Pokemon::SWIRLIX,
        ],
        Pokemon::SLURPUFF => [
            Pokemon::SLURPUFF,
        ],
        Pokemon::INKAY => [
            Pokemon::INKAY,
        ],
        Pokemon::MALAMAR => [
            Pokemon::MALAMAR,
        ],
        Pokemon::BINACLE => [
            Pokemon::BINACLE,
        ],
        Pokemon::BARBARACLE => [
            Pokemon::BARBARACLE,
        ],
        Pokemon::SKRELP => [
            Pokemon::SKRELP,
        ],
        Pokemon::DRAGALGE => [
            Pokemon::DRAGALGE,
        ],
        Pokemon::CLAUNCHER => [
            Pokemon::CLAUNCHER,
        ],
        Pokemon::CLAWITZER => [
            Pokemon::CLAWITZER,
        ],
        Pokemon::HELIOPTILE => [
            Pokemon::HELIOPTILE,
        ],
        Pokemon::HELIOLISK => [
            Pokemon::HELIOLISK,
        ],
        Pokemon::TYRUNT => [
            Pokemon::TYRUNT,
        ],
        Pokemon::TYRANTRUM => [
            Pokemon::TYRANTRUM,
        ],
        Pokemon::AMAURA => [
            Pokemon::AMAURA,
        ],
        Pokemon::AURORUS => [
            Pokemon::AURORUS,
        ],
        Pokemon::SYLVEON => [
            Pokemon::SYLVEON,
        ],
        Pokemon::HAWLUCHA => [
            Pokemon::HAWLUCHA,
        ],
        Pokemon::DEDENNE => [
            Pokemon::DEDENNE,
        ],
        Pokemon::CARBINK => [
            Pokemon::CARBINK,
        ],
        Pokemon::GOOMY => [
            Pokemon::GOOMY,
        ],
        Pokemon::SLIGGOO => [
            Pokemon::SLIGGOO,
        ],
        Pokemon::GOODRA => [
            Pokemon::GOODRA,
        ],
        Pokemon::KLEFKI => [
            Pokemon::KLEFKI,
        ],
        Pokemon::PHANTUMP => [
            Pokemon::PHANTUMP,
        ],
        Pokemon::TREVEANT => [
            Pokemon::TREVEANT,
        ],
        Pokemon::PUMPKABOO => [
            Pokemon::PUMPKABOO,
        ],
        Pokemon::GOURGEIST => [
            Pokemon::GOURGEIST,
        ],
        Pokemon::BERGMITE => [
            Pokemon::BERGMITE,
        ],
        Pokemon::AVALUGG => [
            Pokemon::AVALUGG,
        ],
        Pokemon::NOIBAT => [
            Pokemon::NOIBAT,
        ],
        Pokemon::NOIVERN => [
            Pokemon::NOIVERN,
        ],
        Pokemon::XERNEAS => [
            Pokemon::XERNEAS,
        ],
        Pokemon::YVELTAL => [
            Pokemon::YVELTAL,
        ],
        Pokemon::ZYGARGE => [
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_HALF,
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_TENTH,
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_FULL,
        ],
        Pokemon::DIANCIE => [
            Pokemon::DIANCIE,
        ],
        Pokemon::HOOPA => [
            Pokemon::HOOPA | FormsAlias::HOOPA_CONFINED,
            Pokemon::HOOPA | FormsAlias::HOOPA_UNBOUND,
        ],
        Pokemon::VOLCANION => [
            Pokemon::VOLCANION,
        ],
        Pokemon::ROWLET => [
            Pokemon::ROWLET,
        ],
        Pokemon::DARTRIX => [
            Pokemon::DARTRIX,
        ],
        Pokemon::DECIDUEYE => [
            Pokemon::DECIDUEYE,
        ],
        Pokemon::LITTEN => [
            Pokemon::LITTEN,
        ],
        Pokemon::TORRACAT => [
            Pokemon::TORRACAT,
        ],
        Pokemon::INCINEROAR => [
            Pokemon::INCINEROAR,
        ],
        Pokemon::POPPLIO => [
            Pokemon::POPPLIO,
        ],
        Pokemon::BRIONNE => [
            Pokemon::BRIONNE,
        ],
        Pokemon::PRIMARINA => [
            Pokemon::PRIMARINA,
        ],
        Pokemon::PIKIPEK => [
            Pokemon::PIKIPEK,
        ],
        Pokemon::TRUMBEAK => [
            Pokemon::TRUMBEAK,
        ],
        Pokemon::TOUCANNON => [
            Pokemon::TOUCANNON,
        ],
        Pokemon::YUNGOOS => [
            Pokemon::YUNGOOS,
        ],
        Pokemon::GUMSHOOS => [
            Pokemon::GUMSHOOS,
        ],
        Pokemon::GRUBBIN => [
            Pokemon::GRUBBIN,
        ],
        Pokemon::CHARJABUG => [
            Pokemon::CHARJABUG,
        ],
        Pokemon::VIKAVOLT => [
            Pokemon::VIKAVOLT,
        ],
        Pokemon::CRABAWLER => [
            Pokemon::CRABAWLER,
        ],
        Pokemon::CRABOMINABLE => [
            Pokemon::CRABOMINABLE,
        ],
        Pokemon::ORICORIO => [
            Pokemon::ORICORIO | FormsAlias::ORICORIO_BAILE,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_POMPOM,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_PAU,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_SENSU,
        ],
        Pokemon::CUTIEFLY => [
            Pokemon::CUTIEFLY,
        ],
        Pokemon::RIBOMBEE => [
            Pokemon::RIBOMBEE,
        ],
        Pokemon::ROCKRUFF => [
            Pokemon::ROCKRUFF,
        ],
        Pokemon::LYCANROC => [
            Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDDAY,
            Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDNIGHT,
            Pokemon::LYCANROC | FormsAlias::LYCANROC_DUSK,
        ],
        Pokemon::WISHIWASHI => [
            Pokemon::WISHIWASHI | FormsAlias::WISHIWASHI_SOLO,
            Pokemon::WISHIWASHI | FormsAlias::WISHIWASHI_SCHOOL,
        ],
        Pokemon::MAREANIE => [
            Pokemon::MAREANIE,
        ],
        Pokemon::TOXAPEX => [
            Pokemon::TOXAPEX,
        ],
        Pokemon::MUDBRAY => [
            Pokemon::MUDBRAY,
        ],
        Pokemon::MUDSDALE => [
            Pokemon::MUDSDALE,
        ],
        Pokemon::DEWPIDER => [
            Pokemon::DEWPIDER,
        ],
        Pokemon::ARAQUANID => [
            Pokemon::ARAQUANID,
        ],
        Pokemon::FOMANTIS => [
            Pokemon::FOMANTIS,
        ],
        Pokemon::LURANTIS => [
            Pokemon::LURANTIS,
        ],
        Pokemon::MORELULL => [
            Pokemon::MORELULL,
        ],
        Pokemon::SHIINOTIC => [
            Pokemon::SHIINOTIC,
        ],
        Pokemon::SALANDIT => [
            Pokemon::SALANDIT,
        ],
        Pokemon::SALAZZLE => [
            Pokemon::SALAZZLE,
        ],
        Pokemon::STUFFUL => [
            Pokemon::STUFFUL,
        ],
        Pokemon::BEWEAR => [
            Pokemon::BEWEAR,
        ],
        Pokemon::BOUNSWEET => [
            Pokemon::BOUNSWEET,
        ],
        Pokemon::STEENEE => [
            Pokemon::STEENEE,
        ],
        Pokemon::TSAREENA => [
            Pokemon::TSAREENA,
        ],
        Pokemon::COMFEY => [
            Pokemon::COMFEY,
        ],
        Pokemon::ORANGURU => [
            Pokemon::ORANGURU,
        ],
        Pokemon::PASSIMIAN => [
            Pokemon::PASSIMIAN,
        ],
        Pokemon::WIMPOD => [
            Pokemon::WIMPOD,
        ],
        Pokemon::GOLISOPOD => [
            Pokemon::GOLISOPOD,
        ],
        Pokemon::SANDYGAST => [
            Pokemon::SANDYGAST,
        ],
        Pokemon::PALOSSAND => [
            Pokemon::PALOSSAND,
        ],
        Pokemon::PYUKUMUKU => [
            Pokemon::PYUKUMUKU,
        ],
        Pokemon::TYPE_NULL => [
            Pokemon::TYPE_NULL,
        ],
        Pokemon::SILVALLY => [
            Pokemon::SILVALLY,
        ],
        Pokemon::MINIOR => [
            Pokemon::MINIOR | FormsAlias::MINIOR_METEOR,
            Pokemon::MINIOR | FormsAlias::MINIOR_RED,
        ],
        Pokemon::KOMALA => [
            Pokemon::KOMALA,
        ],
        Pokemon::TURTONATOR => [
            Pokemon::TURTONATOR,
        ],
        Pokemon::TOGEDEMARU => [
            Pokemon::TOGEDEMARU,
        ],
        Pokemon::MIMIKYU => [
            Pokemon::MIMIKYU,
        ],
        Pokemon::BRUXISH => [
            Pokemon::BRUXISH,
        ],
        Pokemon::DRAMPA => [
            Pokemon::DRAMPA,
        ],
        Pokemon::DHELMISE => [
            Pokemon::DHELMISE,
        ],
        Pokemon::JANGMO_O => [
            Pokemon::JANGMO_O,
        ],
        Pokemon::HAKAMO_O => [
            Pokemon::HAKAMO_O,
        ],
        Pokemon::KOMMO_O => [
            Pokemon::KOMMO_O,
        ],
        Pokemon::TAPU_KOKO => [
            Pokemon::TAPU_KOKO,
        ],
        Pokemon::TAPU_LELE => [
            Pokemon::TAPU_LELE,
        ],
        Pokemon::TAPU_BULU => [
            Pokemon::TAPU_BULU,
        ],
        Pokemon::TAPU_FINI => [
            Pokemon::TAPU_FINI,
        ],
        Pokemon::COSMOG => [
            Pokemon::COSMOG,
        ],
        Pokemon::COSMOEM => [
            Pokemon::COSMOEM,
        ],
        Pokemon::SOLGALEO => [
            Pokemon::SOLGALEO,
        ],
        Pokemon::LUNALA => [
            Pokemon::LUNALA,
        ],
        Pokemon::NIHILEGO => [
            Pokemon::NIHILEGO,
        ],
        Pokemon::BUZZWOLE => [
            Pokemon::BUZZWOLE,
        ],
        Pokemon::PHEROMOSA => [
            Pokemon::PHEROMOSA,
        ],
        Pokemon::XURKITREE => [
            Pokemon::XURKITREE,
        ],
        Pokemon::CELESTEELA => [
            Pokemon::CELESTEELA,
        ],
        Pokemon::KARTANA => [
            Pokemon::KARTANA,
        ],
        Pokemon::GUZZLORD => [
            Pokemon::GUZZLORD,
        ],
        Pokemon::NECROZMA => [
            Pokemon::NECROZMA | FormsAlias::NECROZMA_NORMAL,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_DUSK,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_DAWN,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_ULTRA,
        ],
        Pokemon::MAGEARNA => [
            Pokemon::MAGEARNA,
        ],
        Pokemon::MARSHADOW => [
            Pokemon::MARSHADOW,
        ],
        Pokemon::POIPOLE => [
            Pokemon::POIPOLE,
        ],
        Pokemon::NAGANADEL => [
            Pokemon::NAGANADEL,
        ],
        Pokemon::STAKATAKA => [
            Pokemon::STAKATAKA,
        ],
        Pokemon::BLACEPHALON => [
            Pokemon::BLACEPHALON,
        ],
        Pokemon::ZERAORA => [
            Pokemon::ZERAORA,
        ],
        Pokemon::MELTAN => [
            Pokemon::MELTAN,
        ],
        Pokemon::MELMETAL => [
            Pokemon::MELMETAL,
        ],
        Pokemon::GROOKEY => [
            Pokemon::GROOKEY,
        ],
        Pokemon::THWACKEY => [
            Pokemon::THWACKEY,
        ],
        Pokemon::RILLABOOM => [
            Pokemon::RILLABOOM,
        ],
        Pokemon::SCORBUNNY => [
            Pokemon::SCORBUNNY,
        ],
        Pokemon::RABOOT => [
            Pokemon::RABOOT,
        ],
        Pokemon::CINDERACE => [
            Pokemon::CINDERACE,
        ],
        Pokemon::SOBBLE => [
            Pokemon::SOBBLE,
        ],
        Pokemon::DRIZZILE => [
            Pokemon::DRIZZILE,
        ],
        Pokemon::INTELEON => [
            Pokemon::INTELEON,
        ],
        Pokemon::SKWOVET => [
            Pokemon::SKWOVET,
        ],
        Pokemon::GREEDENT => [
            Pokemon::GREEDENT,
        ],
        Pokemon::ROOKIDEE => [
            Pokemon::ROOKIDEE,
        ],
        Pokemon::CORVISQUIRE => [
            Pokemon::CORVISQUIRE,
        ],
        Pokemon::CORVIKNIGHT => [
            Pokemon::CORVIKNIGHT,
        ],
        Pokemon::BLIPBUG => [
            Pokemon::BLIPBUG,
        ],
        Pokemon::DOTTLER => [
            Pokemon::DOTTLER,
        ],
        Pokemon::ORBEETLE => [
            Pokemon::ORBEETLE,
        ],
        Pokemon::NICKIT => [
            Pokemon::NICKIT,
        ],
        Pokemon::THIEVUL => [
            Pokemon::THIEVUL,
        ],
        Pokemon::GOSSIFLEUR => [
            Pokemon::GOSSIFLEUR,
        ],
        Pokemon::ELDEGOSS => [
            Pokemon::ELDEGOSS,
        ],
        Pokemon::WOOLOO => [
            Pokemon::WOOLOO,
        ],
        Pokemon::DUBWOOL => [
            Pokemon::DUBWOOL,
        ],
        Pokemon::CHEWTLE => [
            Pokemon::CHEWTLE,
        ],
        Pokemon::DREDNAW => [
            Pokemon::DREDNAW,
        ],
        Pokemon::YAMPER => [
            Pokemon::YAMPER,
        ],
        Pokemon::BOLTUND => [
            Pokemon::BOLTUND,
        ],
        Pokemon::ROLYCOLY => [
            Pokemon::ROLYCOLY,
        ],
        Pokemon::CARKOL => [
            Pokemon::CARKOL,
        ],
        Pokemon::COALOSSAL => [
            Pokemon::COALOSSAL,
        ],
        Pokemon::APPLIN => [
            Pokemon::APPLIN,
        ],
        Pokemon::FLAPPLE => [
            Pokemon::FLAPPLE,
        ],
        Pokemon::APPLETUN => [
            Pokemon::APPLETUN,
        ],
        Pokemon::SILICOBRA => [
            Pokemon::SILICOBRA,
        ],
        Pokemon::SANDACONDA => [
            Pokemon::SANDACONDA,
        ],
        Pokemon::CRAMORANT => [
            Pokemon::CRAMORANT,
        ],
        Pokemon::ARROKUDA => [
            Pokemon::ARROKUDA,
        ],
        Pokemon::BARRASKEWDA => [
            Pokemon::BARRASKEWDA,
        ],
        Pokemon::TOXEL => [
            Pokemon::TOXEL,
        ],
        Pokemon::TOXTRICITY => [
            Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_LOW,
            Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_AMPED,
        ],
        Pokemon::SIZZLIPEDE => [
            Pokemon::SIZZLIPEDE,
        ],
        Pokemon::CENTISKORCH => [
            Pokemon::CENTISKORCH,
        ],
        Pokemon::CLOBBOPUS => [
            Pokemon::CLOBBOPUS,
        ],
        Pokemon::GRAPPLOCT => [
            Pokemon::GRAPPLOCT,
        ],
        Pokemon::SINISTEA => [
            Pokemon::SINISTEA,
        ],
        Pokemon::POLTEAGEIST => [
            Pokemon::POLTEAGEIST,
        ],
        Pokemon::HATENNA => [
            Pokemon::HATENNA,
        ],
        Pokemon::HATTREM => [
            Pokemon::HATTREM,
        ],
        Pokemon::HATTERENE => [
            Pokemon::HATTERENE,
        ],
        Pokemon::IMPIDIMP => [
            Pokemon::IMPIDIMP,
        ],
        Pokemon::MORGREM => [
            Pokemon::MORGREM,
        ],
        Pokemon::GRIMMSNARL => [
            Pokemon::GRIMMSNARL,
        ],
        Pokemon::OBSTAGOON => [
            Pokemon::OBSTAGOON,
            Pokemon::OBSTAGOON | Mods::PURIFIED,
            Pokemon::OBSTAGOON | Mods::SHADOW,
        ],
        Pokemon::PERRSERKER => [
            Pokemon::PERRSERKER,
            Pokemon::PERRSERKER | Mods::PURIFIED,
            Pokemon::PERRSERKER | Mods::SHADOW,
        ],
        Pokemon::CURSOLA => [
            Pokemon::CURSOLA,
        ],
        Pokemon::SIRFETCH_D => [
            Pokemon::SIRFETCH_D,
            Pokemon::SIRFETCH_D | Mods::PURIFIED,
            Pokemon::SIRFETCH_D | Mods::SHADOW,
        ],
        Pokemon::MR_RIME => [
            Pokemon::MR_RIME,
            Pokemon::MR_RIME | Mods::PURIFIED,
            Pokemon::MR_RIME | Mods::SHADOW,
        ],
        Pokemon::RUNERIGUS => [
            Pokemon::RUNERIGUS,
            Pokemon::RUNERIGUS | Mods::PURIFIED,
            Pokemon::RUNERIGUS | Mods::SHADOW,
        ],
        Pokemon::MILCERY => [
            Pokemon::MILCERY,
        ],
        Pokemon::ALCREMIE => [
            Pokemon::ALCREMIE | FormsAlias::ALCREMIE_VANILLA,
        ],
        Pokemon::FALINKS => [
            Pokemon::FALINKS,
        ],
        Pokemon::PINCURCHIN => [
            Pokemon::PINCURCHIN,
        ],
        Pokemon::SNOM => [
            Pokemon::SNOM,
        ],
        Pokemon::FROSMOTH => [
            Pokemon::FROSMOTH,
        ],
        Pokemon::STONJOURNER => [
            Pokemon::STONJOURNER,
        ],
        Pokemon::EISCUE => [
            Pokemon::EISCUE,
        ],
        Pokemon::INDEEDEE => [
            Pokemon::INDEEDEE | FormsAlias::INDEEDEE_FEMALE,
            Pokemon::INDEEDEE | FormsAlias::INDEEDEE_MALE,
        ],
        Pokemon::MORPEKO => [
            Pokemon::MORPEKO | FormsAlias::MORPEKO_BELLY,
            Pokemon::MORPEKO | FormsAlias::MORPEKO_HANGRY,
        ],
        Pokemon::CUFANT => [
            Pokemon::CUFANT,
        ],
        Pokemon::COPPERAJAH => [
            Pokemon::COPPERAJAH,
        ],
        Pokemon::DRACOZOLT => [
            Pokemon::DRACOZOLT,
        ],
        Pokemon::ARCTOZOLT => [
            Pokemon::ARCTOZOLT,
        ],
        Pokemon::DRACOVISH => [
            Pokemon::DRACOVISH,
        ],
        Pokemon::ARCTOVISH => [
            Pokemon::ARCTOVISH,
        ],
        Pokemon::DURALUDON => [
            Pokemon::DURALUDON,
        ],
        Pokemon::DREEPY => [
            Pokemon::DREEPY,
        ],
        Pokemon::DRAKLOAK => [
            Pokemon::DRAKLOAK,
        ],
        Pokemon::DRAGAPULT => [
            Pokemon::DRAGAPULT,
        ],
        Pokemon::ZACIAN => [
            Pokemon::ZACIAN | FormsAlias::ZACIAN_HERO,
            Pokemon::ZACIAN | FormsAlias::ZACIAN_CROWNED,
        ],
        Pokemon::ZAMAZENTA => [
            Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_HERO,
            Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_CROWNED,
        ],
        Pokemon::ETERNATUS => [
            Pokemon::ETERNATUS,
        ],
        Pokemon::KUBFU => [
            Pokemon::KUBFU,
        ],
        Pokemon::URSHIFU => [
            Pokemon::URSHIFU | FormsAlias::URSHIFU_SINGLE,
            Pokemon::URSHIFU | FormsAlias::URSHIFU_RAPID,
        ],
        Pokemon::ZARUDE => [
            Pokemon::ZARUDE,
        ],

    ];
}