<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias;

class PokemonForms
{
    const FORMS = [
        Pokemon::BULBASAUR => [
            Pokemon::BULBASAUR,
            Pokemon::BULBASAUR | Mods::SHADOW
        ],
        Pokemon::IVYSAUR => [
            Pokemon::IVYSAUR,
            Pokemon::IVYSAUR | Mods::SHADOW
        ],
        Pokemon::VENUSAUR => [
            Pokemon::VENUSAUR,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::VENUSAUR | Mods::MEGA
        ],
        Pokemon::CHARMANDER => [
            Pokemon::CHARMANDER,
            Pokemon::CHARMANDER | Mods::SHADOW
        ],
        Pokemon::CHARMELEON => [
            Pokemon::CHARMELEON,
            Pokemon::CHARMELEON | Mods::SHADOW
        ],
        Pokemon::CHARIZARD => [
            Pokemon::CHARIZARD,
            Pokemon::CHARIZARD | Mods::SHADOW,
            Pokemon::CHARIZARD | Mods::MEGA_X,
            Pokemon::CHARIZARD | Mods::MEGA_Y
        ],
        Pokemon::SQUIRTLE => [
            Pokemon::SQUIRTLE,
            Pokemon::SQUIRTLE | Mods::SHADOW
        ],
        Pokemon::WARTORTLE => [
            Pokemon::WARTORTLE,
            Pokemon::WARTORTLE | Mods::SHADOW
        ],
        Pokemon::BLASTOISE => [
            Pokemon::BLASTOISE,
            Pokemon::BLASTOISE | Mods::SHADOW,
            Pokemon::BLASTOISE | Mods::MEGA
        ],
        Pokemon::CATERPIE => [
            Pokemon::CATERPIE
        ],
        Pokemon::METAPOD => [
            Pokemon::METAPOD
        ],
        Pokemon::BUTTERFREE => [
            Pokemon::BUTTERFREE
        ],
        Pokemon::WEEDLE => [
            Pokemon::WEEDLE,
            Pokemon::WEEDLE | Mods::SHADOW
        ],
        Pokemon::KAKUNA => [
            Pokemon::KAKUNA,
            Pokemon::KAKUNA | Mods::SHADOW
        ],
        Pokemon::BEEDRILL => [
            Pokemon::BEEDRILL,
            Pokemon::BEEDRILL | Mods::SHADOW,
            Pokemon::BEEDRILL | Mods::MEGA
        ],
        Pokemon::PIDGEY => [
            Pokemon::PIDGEY
        ],
        Pokemon::PIDGEOTTO => [
            Pokemon::PIDGEOTTO
        ],
        Pokemon::PIDGEOT => [
            Pokemon::PIDGEOT,
            Pokemon::PIDGEOT | Mods::MEGA
        ],
        Pokemon::RATATTA => [
            Pokemon::RATATTA,
            Pokemon::RATATTA | Mods::ALOLAN,
            Pokemon::RATATTA | Mods::SHADOW,
            Pokemon::RATATTA | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::RATICATE => [
            Pokemon::RATICATE,
            Pokemon::RATICATE | Mods::ALOLAN,
            Pokemon::RATICATE | Mods::SHADOW,
            Pokemon::RATICATE | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::SPEAROW => [
            Pokemon::SPEAROW
        ],
        Pokemon::FEAROW => [
            Pokemon::FEAROW
        ],
        Pokemon::EKANS => [
            Pokemon::EKANS,
            Pokemon::EKANS | Mods::SHADOW
        ],
        Pokemon::ARBOK => [
            Pokemon::ARBOK,
            Pokemon::ARBOK | Mods::SHADOW
        ],
        Pokemon::PIKACHU => [
            Pokemon::PIKACHU
        ],
        Pokemon::RAICHU => [
            Pokemon::RAICHU,
            Pokemon::RAICHU | Mods::ALOLAN
        ],
        Pokemon::SANDSHREW => [
            Pokemon::SANDSHREW,
            Pokemon::SANDSHREW | Mods::ALOLAN,
            Pokemon::SANDSHREW | Mods::SHADOW,
            Pokemon::SANDSHREW | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::SANDSLASH => [
            Pokemon::SANDSLASH,
            Pokemon::SANDSLASH | Mods::ALOLAN,
            Pokemon::SANDSLASH | Mods::SHADOW,
            Pokemon::SANDSLASH | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::NIDORAN_F => [
            Pokemon::NIDORAN_F,
            Pokemon::NIDORAN_F | Mods::SHADOW
        ],
        Pokemon::NIDORINA => [
            Pokemon::NIDORINA,
            Pokemon::NIDORINA | Mods::SHADOW
        ],
        Pokemon::NIDOQUEEN => [
            Pokemon::NIDOQUEEN,
            Pokemon::NIDOQUEEN | Mods::SHADOW
        ],
        Pokemon::NIDORAN_M => [
            Pokemon::NIDORAN_M,
            Pokemon::NIDORAN_M | Mods::SHADOW
        ],
        Pokemon::NIDORINO => [
            Pokemon::NIDORINO,
            Pokemon::NIDORINO | Mods::SHADOW
        ],
        Pokemon::NIDOKING => [
            Pokemon::NIDOKING,
            Pokemon::NIDOKING | Mods::SHADOW
        ],
        Pokemon::CLEFAIRY => [
            Pokemon::CLEFAIRY
        ],
        Pokemon::CLEFABLE => [
            Pokemon::CLEFABLE
        ],
        Pokemon::VULPIX => [
            Pokemon::VULPIX,
            Pokemon::VULPIX | Mods::ALOLAN,
            Pokemon::VULPIX | Mods::SHADOW,
            Pokemon::VULPIX | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::NINETALES => [
            Pokemon::NINETALES,
            Pokemon::NINETALES | Mods::ALOLAN,
            Pokemon::NINETALES | Mods::SHADOW,
            Pokemon::NINETALES | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::JIGGLYPUFF => [
            Pokemon::JIGGLYPUFF
        ],
        Pokemon::WIGGLYTUFF => [
            Pokemon::WIGGLYTUFF
        ],
        Pokemon::ZUBAT => [
            Pokemon::ZUBAT,
            Pokemon::ZUBAT | Mods::SHADOW
        ],
        Pokemon::GOLBAT => [
            Pokemon::GOLBAT,
            Pokemon::GOLBAT | Mods::SHADOW
        ],
        Pokemon::ODDISH => [
            Pokemon::ODDISH,
            Pokemon::ODDISH | Mods::SHADOW
        ],
        Pokemon::GLOOM => [
            Pokemon::GLOOM,
            Pokemon::GLOOM | Mods::SHADOW
        ],
        Pokemon::VILEPLUME => [
            Pokemon::VILEPLUME,
            Pokemon::VILEPLUME | Mods::SHADOW
        ],
        Pokemon::PARAS => [
            Pokemon::PARAS
        ],
        Pokemon::PARASECT => [
            Pokemon::PARASECT
        ],
        Pokemon::VENONAT => [
            Pokemon::VENONAT,
            Pokemon::VENONAT | Mods::SHADOW
        ],
        Pokemon::VENOMOTH => [
            Pokemon::VENOMOTH,
            Pokemon::VENOMOTH | Mods::SHADOW
        ],
        Pokemon::DIGLETT => [
            Pokemon::DIGLETT,
            Pokemon::DIGLETT | Mods::ALOLAN,
            Pokemon::DIGLETT | Mods::SHADOW,
            Pokemon::DIGLETT | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::DUGTRIO => [
            Pokemon::DUGTRIO,
            Pokemon::DUGTRIO | Mods::ALOLAN,
            Pokemon::DUGTRIO | Mods::SHADOW,
            Pokemon::DUGTRIO | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::MEOWTH => [
            Pokemon::MEOWTH,
            Pokemon::MEOWTH | Mods::ALOLAN,
            Pokemon::MEOWTH | Mods::GALARIAN,
            Pokemon::MEOWTH | Mods::SHADOW,
            Pokemon::MEOWTH | Mods::SHADOW | Mods::ALOLAN,
            Pokemon::MEOWTH | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::PERSIAN => [
            Pokemon::PERSIAN,
            Pokemon::PERSIAN | Mods::ALOLAN,
            Pokemon::PERSIAN | Mods::SHADOW,
            Pokemon::PERSIAN | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::PSYDUCK => [
            Pokemon::PSYDUCK,
            Pokemon::PSYDUCK | Mods::SHADOW
        ],
        Pokemon::GOLDUCK => [
            Pokemon::GOLDUCK,
            Pokemon::GOLDUCK | Mods::SHADOW
        ],
        Pokemon::MANKEY => [
            Pokemon::MANKEY
        ],
        Pokemon::PRIMEAPE => [
            Pokemon::PRIMEAPE
        ],
        Pokemon::GROWLITHE => [
            Pokemon::GROWLITHE,
            Pokemon::GROWLITHE | Mods::SHADOW
        ],
        Pokemon::ARCANINE => [
            Pokemon::ARCANINE,
            Pokemon::ARCANINE | Mods::SHADOW
        ],
        Pokemon::POLIWAG => [
            Pokemon::POLIWAG,
            Pokemon::POLIWAG | Mods::SHADOW
        ],
        Pokemon::POLIWHIRL => [
            Pokemon::POLIWHIRL,
            Pokemon::POLIWHIRL | Mods::SHADOW
        ],
        Pokemon::POLIWRATH => [
            Pokemon::POLIWRATH,
            Pokemon::POLIWRATH | Mods::SHADOW
        ],
        Pokemon::ABRA => [
            Pokemon::ABRA,
            Pokemon::ABRA | Mods::SHADOW
        ],
        Pokemon::KADABRA => [
            Pokemon::KADABRA,
            Pokemon::KADABRA | Mods::SHADOW
        ],
        Pokemon::ALAKAZAM => [
            Pokemon::ALAKAZAM,
            Pokemon::ALAKAZAM | Mods::SHADOW
        ],
        Pokemon::MACHOP => [
            Pokemon::MACHOP,
            Pokemon::MACHOP | Mods::SHADOW
        ],
        Pokemon::MACHOKE => [
            Pokemon::MACHOKE,
            Pokemon::MACHOKE | Mods::SHADOW
        ],
        Pokemon::MACHAMP => [
            Pokemon::MACHAMP,
            Pokemon::MACHAMP | Mods::SHADOW
        ],
        Pokemon::BELLSPROUT => [
            Pokemon::BELLSPROUT,
            Pokemon::BELLSPROUT | Mods::SHADOW
        ],
        Pokemon::WEEPINBELL => [
            Pokemon::WEEPINBELL,
            Pokemon::WEEPINBELL | Mods::SHADOW
        ],
        Pokemon::VICTREEBEL => [
            Pokemon::VICTREEBEL,
            Pokemon::VICTREEBEL | Mods::SHADOW
        ],
        Pokemon::TENTACOOL => [
            Pokemon::TENTACOOL
        ],
        Pokemon::TENTACRUEL => [
            Pokemon::TENTACRUEL
        ],
        Pokemon::GEODUDE => [
            Pokemon::GEODUDE,
            Pokemon::GEODUDE | Mods::ALOLAN,
            Pokemon::GEODUDE | Mods::SHADOW,
            Pokemon::GEODUDE | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::GRAVELER => [
            Pokemon::GRAVELER,
            Pokemon::GRAVELER | Mods::ALOLAN,
            Pokemon::GRAVELER | Mods::SHADOW,
            Pokemon::GRAVELER | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::GOLEM => [
            Pokemon::GOLEM,
            Pokemon::GOLEM | Mods::ALOLAN,
            Pokemon::GOLEM | Mods::SHADOW,
            Pokemon::GOLEM | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::PONYTA => [
            Pokemon::PONYTA,
            Pokemon::PONYTA | Mods::GALARIAN,
            Pokemon::PONYTA | Mods::SHADOW,
            Pokemon::PONYTA | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::RAPIDASH => [
            Pokemon::RAPIDASH,
            Pokemon::RAPIDASH | Mods::GALARIAN,
            Pokemon::RAPIDASH | Mods::SHADOW,
            Pokemon::RAPIDASH | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::SLOWPOKE => [
            Pokemon::SLOWPOKE,
            Pokemon::SLOWPOKE | Mods::GALARIAN,
            Pokemon::SLOWPOKE | Mods::SHADOW,
            Pokemon::SLOWPOKE | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::SLOWBRO => [
            Pokemon::SLOWBRO,
            Pokemon::SLOWBRO | Mods::GALARIAN,
            Pokemon::SLOWBRO | Mods::SHADOW,
            Pokemon::SLOWBRO | Mods::MEGA,
            Pokemon::SLOWBRO | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::MAGNEMITE => [
            Pokemon::MAGNEMITE,
            Pokemon::MAGNEMITE | Mods::SHADOW
        ],
        Pokemon::MAGNETON => [
            Pokemon::MAGNETON,
            Pokemon::MAGNETON | Mods::SHADOW
        ],
        Pokemon::FARFETCH_D => [
            Pokemon::FARFETCH_D,
            Pokemon::FARFETCH_D | Mods::GALARIAN,
            Pokemon::FARFETCH_D | Mods::SHADOW,
            Pokemon::FARFETCH_D | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::DODUO => [
            Pokemon::DODUO
        ],
        Pokemon::DODRIO => [
            Pokemon::DODRIO
        ],
        Pokemon::SEEL => [
            Pokemon::SEEL
        ],
        Pokemon::DEWGONG => [
            Pokemon::DEWGONG
        ],
        Pokemon::GRIMER => [
            Pokemon::GRIMER,
            Pokemon::GRIMER | Mods::ALOLAN,
            Pokemon::GRIMER | Mods::SHADOW,
            Pokemon::GRIMER | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::MUK => [
            Pokemon::MUK,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::MUK | Mods::SHADOW,
            Pokemon::MUK | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::SHELLDER => [
            Pokemon::SHELLDER,
            Pokemon::SHELLDER | Mods::SHADOW
        ],
        Pokemon::CLOYSTER => [
            Pokemon::CLOYSTER,
            Pokemon::CLOYSTER | Mods::SHADOW
        ],
        Pokemon::GASTLY => [
            Pokemon::GASTLY
        ],
        Pokemon::HAUNTER => [
            Pokemon::HAUNTER
        ],
        Pokemon::GENGAR => [
            Pokemon::GENGAR,
            Pokemon::GENGAR | Mods::MEGA
        ],
        Pokemon::ONIX => [
            Pokemon::ONIX,
            Pokemon::ONIX | Mods::SHADOW
        ],
        Pokemon::DROWZEE => [
            Pokemon::DROWZEE,
            Pokemon::DROWZEE | Mods::SHADOW
        ],
        Pokemon::HYPNO => [
            Pokemon::HYPNO,
            Pokemon::HYPNO | Mods::SHADOW
        ],
        Pokemon::KRABBY => [
            Pokemon::KRABBY,
            Pokemon::KRABBY | Mods::SHADOW
        ],
        Pokemon::KINGLER => [
            Pokemon::KINGLER,
            Pokemon::KINGLER | Mods::SHADOW
        ],
        Pokemon::VOLTORB => [
            Pokemon::VOLTORB,
            Pokemon::VOLTORB | Mods::SHADOW
        ],
        Pokemon::ELECTRODE => [
            Pokemon::ELECTRODE,
            Pokemon::ELECTRODE | Mods::SHADOW
        ],
        Pokemon::EXEGGCUTE => [
            Pokemon::EXEGGCUTE,
            Pokemon::EXEGGCUTE | Mods::SHADOW
        ],
        Pokemon::EXEGGUTOR => [
            Pokemon::EXEGGUTOR,
            Pokemon::EXEGGUTOR | Mods::ALOLAN,
            Pokemon::EXEGGUTOR | Mods::SHADOW,
            Pokemon::EXEGGUTOR | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::CUBONE => [
            Pokemon::CUBONE,
            Pokemon::CUBONE | Mods::SHADOW
        ],
        Pokemon::MAROWAK => [
            Pokemon::MAROWAK,
            Pokemon::MAROWAK | Mods::ALOLAN,
            Pokemon::MAROWAK | Mods::SHADOW,
            Pokemon::MAROWAK | Mods::SHADOW | Mods::ALOLAN
        ],
        Pokemon::HITMONLEE => [
            Pokemon::HITMONLEE,
            Pokemon::HITMONLEE | Mods::SHADOW
        ],
        Pokemon::HITMONCHAN => [
            Pokemon::HITMONCHAN,
            Pokemon::HITMONCHAN | Mods::SHADOW
        ],
        Pokemon::LICKITUNG => [
            Pokemon::LICKITUNG
        ],
        Pokemon::KOFFING => [
            Pokemon::KOFFING,
            Pokemon::KOFFING | Mods::SHADOW
        ],
        Pokemon::WEEZING => [
            Pokemon::WEEZING,
            Pokemon::WEEZING | Mods::GALARIAN,
            Pokemon::WEEZING | Mods::SHADOW,
            Pokemon::WEEZING | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::RHYHORN => [
            Pokemon::RHYHORN,
            Pokemon::RHYHORN | Mods::SHADOW
        ],
        Pokemon::RHYDON => [
            Pokemon::RHYDON,
            Pokemon::RHYDON | Mods::SHADOW
        ],
        Pokemon::CHANSEY => [
            Pokemon::CHANSEY
        ],
        Pokemon::TANGELA => [
            Pokemon::TANGELA,
            Pokemon::TANGELA | Mods::SHADOW
        ],
        Pokemon::KANGASKHAN => [
            Pokemon::KANGASKHAN,
            Pokemon::KANGASKHAN | Mods::SHADOW
        ],
        Pokemon::HORSEA => [
            Pokemon::HORSEA,
            Pokemon::HORSEA | Mods::SHADOW
        ],
        Pokemon::SEADRA => [
            Pokemon::SEADRA,
            Pokemon::SEADRA | Mods::SHADOW
        ],
        Pokemon::GOLDEEN => [
            Pokemon::GOLDEEN
        ],
        Pokemon::SEAKING => [
            Pokemon::SEAKING
        ],
        Pokemon::STARYU => [
            Pokemon::STARYU
        ],
        Pokemon::STARMIE => [
            Pokemon::STARMIE
        ],
        Pokemon::MR_MIME => [
            Pokemon::MR_MIME,
            Pokemon::MR_MIME | Mods::GALARIAN,
            Pokemon::MR_MIME | Mods::SHADOW,
            Pokemon::MR_MIME | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::SCYTHER => [
            Pokemon::SCYTHER,
            Pokemon::SCYTHER | Mods::SHADOW
        ],
        Pokemon::JYNX => [
            Pokemon::JYNX
        ],
        Pokemon::ELECTABUZZ => [
            Pokemon::ELECTABUZZ,
            Pokemon::ELECTABUZZ | Mods::SHADOW
        ],
        Pokemon::MAGMAR => [
            Pokemon::MAGMAR,
            Pokemon::MAGMAR | Mods::SHADOW
        ],
        Pokemon::PINSIR => [
            Pokemon::PINSIR,
            Pokemon::PINSIR | Mods::SHADOW
        ],
        Pokemon::TAUROS => [
            Pokemon::TAUROS
        ],
        Pokemon::MAGIKARP => [
            Pokemon::MAGIKARP,
            Pokemon::MAGIKARP | Mods::SHADOW
        ],
        Pokemon::GYARADOS => [
            Pokemon::GYARADOS,
            Pokemon::GYARADOS | Mods::SHADOW,
            Pokemon::GYARADOS | Mods::MEGA
        ],
        Pokemon::LAPRAS => [
            Pokemon::LAPRAS,
            Pokemon::LAPRAS | Mods::SHADOW
        ],
        Pokemon::DITTO => [
            Pokemon::DITTO
        ],
        Pokemon::EEVEE => [
            Pokemon::EEVEE
        ],
        Pokemon::VAPOREON => [
            Pokemon::VAPOREON
        ],
        Pokemon::JOLTEON => [
            Pokemon::JOLTEON
        ],
        Pokemon::FLAREON => [
            Pokemon::FLAREON
        ],
        Pokemon::PORYGON => [
            Pokemon::PORYGON,
            Pokemon::PORYGON | Mods::SHADOW
        ],
        Pokemon::OMANYTE => [
            Pokemon::OMANYTE,
            Pokemon::OMANYTE | Mods::SHADOW
        ],
        Pokemon::OMASTAR => [
            Pokemon::OMASTAR,
            Pokemon::OMASTAR | Mods::SHADOW
        ],
        Pokemon::KABUTO => [
            Pokemon::KABUTO,
            Pokemon::KABUTO | Mods::SHADOW
        ],
        Pokemon::KABUTOPS => [
            Pokemon::KABUTOPS,
            Pokemon::KABUTOPS | Mods::SHADOW
        ],
        Pokemon::AERODACTYL => [
            Pokemon::AERODACTYL,
            Pokemon::AERODACTYL | Mods::SHADOW,
            Pokemon::AERODACTYL | Mods::MEGA
        ],
        Pokemon::SNORLAX => [
            Pokemon::SNORLAX,
            Pokemon::SNORLAX | Mods::SHADOW
        ],
        Pokemon::ARTICUNO => [
            Pokemon::ARTICUNO,
            Pokemon::ARTICUNO | Mods::SHADOW
        ],
        Pokemon::ZAPDOS => [
            Pokemon::ZAPDOS,
            Pokemon::ZAPDOS | Mods::SHADOW
        ],
        Pokemon::MOLTRES => [
            Pokemon::MOLTRES,
            Pokemon::MOLTRES | Mods::SHADOW
        ],
        Pokemon::DRATINI => [
            Pokemon::DRATINI,
            Pokemon::DRATINI | Mods::SHADOW
        ],
        Pokemon::DRAGONAIR => [
            Pokemon::DRAGONAIR,
            Pokemon::DRAGONAIR | Mods::SHADOW
        ],
        Pokemon::DRAGONITE => [
            Pokemon::DRAGONITE,
            Pokemon::DRAGONITE | Mods::SHADOW
        ],
        Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL => [
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED | Mods::SHADOW
        ],
        Pokemon::MEW => [
            Pokemon::MEW
        ],
        Pokemon::CHIKORITA => [
            Pokemon::CHIKORITA,
            Pokemon::CHIKORITA | Mods::SHADOW
        ],
        Pokemon::BAYLEEF => [
            Pokemon::BAYLEEF,
            Pokemon::BAYLEEF | Mods::SHADOW
        ],
        Pokemon::MEGANIUM => [
            Pokemon::MEGANIUM,
            Pokemon::MEGANIUM | Mods::SHADOW
        ],
        Pokemon::CYNDAQUIL => [
            Pokemon::CYNDAQUIL,
            Pokemon::CYNDAQUIL | Mods::SHADOW
        ],
        Pokemon::QUILAVA => [
            Pokemon::QUILAVA,
            Pokemon::QUILAVA | Mods::SHADOW
        ],
        Pokemon::TYPHLOSION => [
            Pokemon::TYPHLOSION,
            Pokemon::TYPHLOSION | Mods::SHADOW
        ],
        Pokemon::TOTODILE => [
            Pokemon::TOTODILE,
            Pokemon::TOTODILE | Mods::SHADOW
        ],
        Pokemon::CROCONAW => [
            Pokemon::CROCONAW,
            Pokemon::CROCONAW | Mods::SHADOW
        ],
        Pokemon::FERALIGATR => [
            Pokemon::FERALIGATR,
            Pokemon::FERALIGATR | Mods::SHADOW
        ],
        Pokemon::SENTRET => [
            Pokemon::SENTRET
        ],
        Pokemon::FURRET => [
            Pokemon::FURRET
        ],
        Pokemon::HOOTHOOT => [
            Pokemon::HOOTHOOT
        ],
        Pokemon::NOCTOWL => [
            Pokemon::NOCTOWL
        ],
        Pokemon::LEDYBA => [
            Pokemon::LEDYBA
        ],
        Pokemon::LEDIAN => [
            Pokemon::LEDIAN
        ],
        Pokemon::SPINARAK => [
            Pokemon::SPINARAK
        ],
        Pokemon::ARIADOS => [
            Pokemon::ARIADOS
        ],
        Pokemon::CROBAT => [
            Pokemon::CROBAT,
            Pokemon::CROBAT | Mods::SHADOW
        ],
        Pokemon::CHINCHOU => [
            Pokemon::CHINCHOU
        ],
        Pokemon::LANTURN => [
            Pokemon::LANTURN
        ],
        Pokemon::PICHU => [
            Pokemon::PICHU
        ],
        Pokemon::CLEFFA => [
            Pokemon::CLEFFA
        ],
        Pokemon::IGGLYBUFF => [
            Pokemon::IGGLYBUFF
        ],
        Pokemon::TOGEPI => [
            Pokemon::TOGEPI
        ],
        Pokemon::TOGETIC => [
            Pokemon::TOGETIC
        ],
        Pokemon::NATU => [
            Pokemon::NATU
        ],
        Pokemon::XATU => [
            Pokemon::XATU
        ],
        Pokemon::MAREEP => [
            Pokemon::MAREEP,
            Pokemon::MAREEP | Mods::SHADOW
        ],
        Pokemon::FLAAFFY => [
            Pokemon::FLAAFFY,
            Pokemon::FLAAFFY | Mods::SHADOW
        ],
        Pokemon::AMPHAROS => [
            Pokemon::AMPHAROS,
            Pokemon::AMPHAROS | Mods::SHADOW,
            Pokemon::AMPHAROS | Mods::MEGA
        ],
        Pokemon::BELLOSSOM => [
            Pokemon::BELLOSSOM,
            Pokemon::BELLOSSOM | Mods::SHADOW
        ],
        Pokemon::MARILL => [
            Pokemon::MARILL
        ],
        Pokemon::AZUMARILL => [
            Pokemon::AZUMARILL
        ],
        Pokemon::SUDOWOODO => [
            Pokemon::SUDOWOODO
        ],
        Pokemon::POLITOED => [
            Pokemon::POLITOED,
            Pokemon::POLITOED | Mods::SHADOW
        ],
        Pokemon::HOPPIP => [
            Pokemon::HOPPIP,
            Pokemon::HOPPIP | Mods::SHADOW
        ],
        Pokemon::SKIPLOOM => [
            Pokemon::SKIPLOOM,
            Pokemon::SKIPLOOM | Mods::SHADOW
        ],
        Pokemon::JUMPLUFF => [
            Pokemon::JUMPLUFF,
            Pokemon::JUMPLUFF | Mods::SHADOW
        ],
        Pokemon::AIPOM => [
            Pokemon::AIPOM,
            Pokemon::AIPOM | Mods::SHADOW
        ],
        Pokemon::SUNKERN => [
            Pokemon::SUNKERN
        ],
        Pokemon::SUNFLORA => [
            Pokemon::SUNFLORA
        ],
        Pokemon::YANMA => [
            Pokemon::YANMA
        ],
        Pokemon::WOOPER => [
            Pokemon::WOOPER,
            Pokemon::WOOPER | Mods::SHADOW
        ],
        Pokemon::QUAGSIRE => [
            Pokemon::QUAGSIRE,
            Pokemon::QUAGSIRE | Mods::SHADOW
        ],
        Pokemon::ESPEON => [
            Pokemon::ESPEON
        ],
        Pokemon::UMBREON => [
            Pokemon::UMBREON
        ],
        Pokemon::MURKROW => [
            Pokemon::MURKROW,
            Pokemon::MURKROW | Mods::SHADOW
        ],
        Pokemon::SLOWKING => [
            Pokemon::SLOWKING,
            Pokemon::SLOWKING | Mods::SHADOW,
            Pokemon::SLOWKING | Mods::GALARIAN,
            Pokemon::SLOWKING | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::MISDREAVUS => [
            Pokemon::MISDREAVUS,
            Pokemon::MISDREAVUS | Mods::SHADOW
        ],
        Pokemon::UNOWN => [
            Pokemon::UNOWN
        ],
        Pokemon::WOBBUFFET => [
            Pokemon::WOBBUFFET,
            Pokemon::WOBBUFFET | Mods::SHADOW
        ],
        Pokemon::GIRAFARIG => [
            Pokemon::GIRAFARIG
        ],
        Pokemon::PINECO => [
            Pokemon::PINECO,
            Pokemon::PINECO | Mods::SHADOW
        ],
        Pokemon::FORRETRESS => [
            Pokemon::FORRETRESS,
            Pokemon::FORRETRESS | Mods::SHADOW
        ],
        Pokemon::DUNSPARCE => [
            Pokemon::DUNSPARCE
        ],
        Pokemon::GLIGAR => [
            Pokemon::GLIGAR,
            Pokemon::GLIGAR | Mods::SHADOW
        ],
        Pokemon::STEELIX => [
            Pokemon::STEELIX,
            Pokemon::STEELIX | Mods::SHADOW,
            Pokemon::STEELIX | Mods::MEGA
        ],
        Pokemon::SNUBBULL => [
            Pokemon::SNUBBULL,
            Pokemon::SNUBBULL | Mods::SHADOW
        ],
        Pokemon::GRANBULL => [
            Pokemon::GRANBULL,
            Pokemon::GRANBULL | Mods::SHADOW
        ],
        Pokemon::QWILFISH => [
            Pokemon::QWILFISH
        ],
        Pokemon::SCIZOR => [
            Pokemon::SCIZOR,
            Pokemon::SCIZOR | Mods::SHADOW
        ],
        Pokemon::SHUCKLE => [
            Pokemon::SHUCKLE,
            Pokemon::SHUCKLE | Mods::SHADOW
        ],
        Pokemon::HERACROSS => [
            Pokemon::HERACROSS
        ],
        Pokemon::SNEASEL => [
            Pokemon::SNEASEL,
            Pokemon::SNEASEL | Mods::SHADOW
        ],
        Pokemon::TEDDIURSA => [
            Pokemon::TEDDIURSA,
            Pokemon::TEDDIURSA | Mods::SHADOW
        ],
        Pokemon::URSARING => [
            Pokemon::URSARING,
            Pokemon::URSARING | Mods::SHADOW
        ],
        Pokemon::SLUGMA => [
            Pokemon::SLUGMA
        ],
        Pokemon::MAGCARGO => [
            Pokemon::MAGCARGO
        ],
        Pokemon::SWINUB => [
            Pokemon::SWINUB,
            Pokemon::SWINUB | Mods::SHADOW
        ],
        Pokemon::PILOSWINE => [
            Pokemon::PILOSWINE,
            Pokemon::PILOSWINE | Mods::SHADOW
        ],
        Pokemon::CORSOLA => [
            Pokemon::CORSOLA,
            Pokemon::CORSOLA | Mods::GALARIAN
        ],
        Pokemon::REMORAID => [
            Pokemon::REMORAID
        ],
        Pokemon::OCTILLERY => [
            Pokemon::OCTILLERY
        ],
        Pokemon::DELIBIRD => [
            Pokemon::DELIBIRD,
            Pokemon::DELIBIRD | Mods::SHADOW
        ],
        Pokemon::MANTINE => [
            Pokemon::MANTINE
        ],
        Pokemon::SKARMORY => [
            Pokemon::SKARMORY,
            Pokemon::SKARMORY | Mods::SHADOW
        ],
        Pokemon::HOUNDOUR => [
            Pokemon::HOUNDOUR,
            Pokemon::HOUNDOUR | Mods::SHADOW
        ],
        Pokemon::HOUNDOOM => [
            Pokemon::HOUNDOOM,
            Pokemon::HOUNDOOM | Mods::SHADOW,
            Pokemon::HOUNDOOM | Mods::MEGA
        ],
        Pokemon::KINGDRA => [
            Pokemon::KINGDRA,
            Pokemon::KINGDRA | Mods::SHADOW
        ],
        Pokemon::PHANPY => [
            Pokemon::PHANPY
        ],
        Pokemon::DONPHAN => [
            Pokemon::DONPHAN
        ],
        Pokemon::PORYGON2 => [
            Pokemon::PORYGON2,
            Pokemon::PORYGON2 | Mods::SHADOW
        ],
        Pokemon::STANTLER => [
            Pokemon::STANTLER,
            Pokemon::STANTLER | Mods::SHADOW
        ],
        Pokemon::SMEARGLE => [
            Pokemon::SMEARGLE
        ],
        Pokemon::TYROGUE => [
            Pokemon::TYROGUE
        ],
        Pokemon::HITMONTOP => [
            Pokemon::HITMONTOP
        ],
        Pokemon::SMOOCHUM => [
            Pokemon::SMOOCHUM
        ],
        Pokemon::ELEKID => [
            Pokemon::ELEKID
        ],
        Pokemon::MAGBY => [
            Pokemon::MAGBY
        ],
        Pokemon::MILTANK => [
            Pokemon::MILTANK
        ],
        Pokemon::BLISSEY => [
            Pokemon::BLISSEY
        ],
        Pokemon::RAIKOU => [
            Pokemon::RAIKOU,
            Pokemon::RAIKOU | Mods::SHADOW
        ],
        Pokemon::ENTEI => [
            Pokemon::ENTEI,
            Pokemon::ENTEI | Mods::SHADOW
        ],
        Pokemon::SUICUNE => [
            Pokemon::SUICUNE,
            Pokemon::SUICUNE | Mods::SHADOW
        ],
        Pokemon::LARVITAR => [
            Pokemon::LARVITAR,
            Pokemon::LARVITAR | Mods::SHADOW
        ],
        Pokemon::PUPITAR => [
            Pokemon::PUPITAR,
            Pokemon::PUPITAR | Mods::SHADOW
        ],
        Pokemon::TYRANITAR => [
            Pokemon::TYRANITAR,
            Pokemon::TYRANITAR | Mods::SHADOW
        ],
        Pokemon::LUGIA => [
            Pokemon::LUGIA,
            Pokemon::LUGIA | Mods::SHADOW
        ],
        Pokemon::HO_OH => [
            Pokemon::HO_OH,
            Pokemon::HO_OH | Mods::SHADOW
        ],
        Pokemon::CELEBI => [
            Pokemon::CELEBI
        ],
        Pokemon::TREECKO => [
            Pokemon::TREECKO
        ],
        Pokemon::GROVYLE => [
            Pokemon::GROVYLE
        ],
        Pokemon::SCEPTILE => [
            Pokemon::SCEPTILE
        ],
        Pokemon::TORCHIC => [
            Pokemon::TORCHIC,
            Pokemon::TORCHIC | Mods::SHADOW
        ],
        Pokemon::COMBUSKEN => [
            Pokemon::COMBUSKEN,
            Pokemon::COMBUSKEN | Mods::SHADOW
        ],
        Pokemon::BLAZIKEN => [
            Pokemon::BLAZIKEN,
            Pokemon::BLAZIKEN | Mods::SHADOW
        ],
        Pokemon::MUDKIP => [
            Pokemon::MUDKIP,
            Pokemon::MUDKIP | Mods::SHADOW
        ],
        Pokemon::MARSHTOMP => [
            Pokemon::MARSHTOMP,
            Pokemon::MARSHTOMP | Mods::SHADOW
        ],
        Pokemon::SWAMPERT => [
            Pokemon::SWAMPERT,
            Pokemon::SWAMPERT | Mods::SHADOW
        ],
        Pokemon::POOCHYENA => [
            Pokemon::POOCHYENA,
            Pokemon::POOCHYENA | Mods::SHADOW
        ],
        Pokemon::MIGTYENA => [
            Pokemon::MIGTYENA,
            Pokemon::MIGTYENA | Mods::SHADOW
        ],
        Pokemon::ZIGZAGOON => [
            Pokemon::ZIGZAGOON,
            Pokemon::ZIGZAGOON | Mods::GALARIAN,
            Pokemon::ZIGZAGOON | Mods::SHADOW,
            Pokemon::ZIGZAGOON | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::LINOONE => [
            Pokemon::LINOONE,
            Pokemon::LINOONE | Mods::GALARIAN,
            Pokemon::LINOONE | Mods::SHADOW,
            Pokemon::LINOONE | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::WURMPLE => [
            Pokemon::WURMPLE
        ],
        Pokemon::SILCOON => [
            Pokemon::SILCOON
        ],
        Pokemon::BEAUTIFLY => [
            Pokemon::BEAUTIFLY
        ],
        Pokemon::CASCOON => [
            Pokemon::CASCOON
        ],
        Pokemon::DUSTOX => [
            Pokemon::DUSTOX
        ],
        Pokemon::LOTAD => [
            Pokemon::LOTAD
        ],
        Pokemon::LOMBRE => [
            Pokemon::LOMBRE
        ],
        Pokemon::LUDICOLO => [
            Pokemon::LUDICOLO
        ],
        Pokemon::SEEDOT => [
            Pokemon::SEEDOT,
            Pokemon::SEEDOT | Mods::SHADOW
        ],
        Pokemon::NUZLEAF => [
            Pokemon::NUZLEAF,
            Pokemon::NUZLEAF | Mods::SHADOW
        ],
        Pokemon::SHIFTRY => [
            Pokemon::SHIFTRY,
            Pokemon::SHIFTRY | Mods::SHADOW
        ],
        Pokemon::TAILLOW => [
            Pokemon::TAILLOW
        ],
        Pokemon::SWELLOW => [
            Pokemon::SWELLOW
        ],
        Pokemon::WINGULL => [
            Pokemon::WINGULL
        ],
        Pokemon::PELIPPER => [
            Pokemon::PELIPPER
        ],
        Pokemon::RALTS => [
            Pokemon::RALTS,
            Pokemon::RALTS | Mods::SHADOW
        ],
        Pokemon::KIRLIA => [
            Pokemon::KIRLIA,
            Pokemon::KIRLIA | Mods::SHADOW
        ],
        Pokemon::GARDEVOIR => [
            Pokemon::GARDEVOIR,
            Pokemon::GARDEVOIR | Mods::SHADOW
        ],
        Pokemon::SURSKIT => [
            Pokemon::SURSKIT
        ],
        Pokemon::MASQUERAIN => [
            Pokemon::MASQUERAIN
        ],
        Pokemon::SHROOMISH => [
            Pokemon::SHROOMISH
        ],
        Pokemon::BRELOOM => [
            Pokemon::BRELOOM
        ],
        Pokemon::SLAKOTH => [
            Pokemon::SLAKOTH
        ],
        Pokemon::VIGOROTH => [
            Pokemon::VIGOROTH
        ],
        Pokemon::SLAKING => [
            Pokemon::SLAKING
        ],
        Pokemon::NINCADA => [
            Pokemon::NINCADA
        ],
        Pokemon::NINJASK => [
            Pokemon::NINJASK
        ],
        Pokemon::SHEDINJA => [
            Pokemon::SHEDINJA
        ],
        Pokemon::WHISMUR => [
            Pokemon::WHISMUR,
            Pokemon::WHISMUR | Mods::SHADOW
        ],
        Pokemon::LOUDRED => [
            Pokemon::LOUDRED,
            Pokemon::LOUDRED | Mods::SHADOW
        ],
        Pokemon::EXPLOUD => [
            Pokemon::EXPLOUD,
            Pokemon::EXPLOUD | Mods::SHADOW
        ],
        Pokemon::MAKUHITA => [
            Pokemon::MAKUHITA,
            Pokemon::MAKUHITA | Mods::SHADOW
        ],
        Pokemon::HARIYAMA => [
            Pokemon::HARIYAMA,
            Pokemon::HARIYAMA | Mods::SHADOW
        ],
        Pokemon::AZURILL => [
            Pokemon::AZURILL
        ],
        Pokemon::NOSEPASS => [
            Pokemon::NOSEPASS,
            Pokemon::NOSEPASS | Mods::SHADOW
        ],
        Pokemon::SKITTY => [
            Pokemon::SKITTY
        ],
        Pokemon::DELCATTY => [
            Pokemon::DELCATTY
        ],
        Pokemon::SABLEYE => [
            Pokemon::SABLEYE,
            Pokemon::SABLEYE | Mods::SHADOW
        ],
        Pokemon::MAWILE => [
            Pokemon::MAWILE,
            Pokemon::MAWILE | Mods::SHADOW
        ],
        Pokemon::ARON => [
            Pokemon::ARON,
            Pokemon::ARON | Mods::SHADOW
        ],
        Pokemon::LAIRON => [
            Pokemon::LAIRON,
            Pokemon::LAIRON | Mods::SHADOW
        ],
        Pokemon::AGGRON => [
            Pokemon::AGGRON,
            Pokemon::AGGRON | Mods::SHADOW
        ],
        Pokemon::MEDITITE => [
            Pokemon::MEDITITE
        ],
        Pokemon::MEDICHAM => [
            Pokemon::MEDICHAM
        ],
        Pokemon::ELECTRIKE => [
            Pokemon::ELECTRIKE,
            Pokemon::ELECTRIKE | Mods::SHADOW
        ],
        Pokemon::MANELECTRIC => [
            Pokemon::MANELECTRIC,
            Pokemon::MANELECTRIC | Mods::SHADOW,
            Pokemon::MANELECTRIC | Mods::MEGA
        ],
        Pokemon::PLUSLE => [
            Pokemon::PLUSLE
        ],
        Pokemon::MINUN => [
            Pokemon::MINUN
        ],
        Pokemon::VOLBEAT => [
            Pokemon::VOLBEAT
        ],
        Pokemon::ILLUMISE => [
            Pokemon::ILLUMISE
        ],
        Pokemon::ROSELIA => [
            Pokemon::ROSELIA
        ],
        Pokemon::GULPIN => [
            Pokemon::GULPIN
        ],
        Pokemon::SWALOT => [
            Pokemon::SWALOT
        ],
        Pokemon::CARAVANHA => [
            Pokemon::CARAVANHA,
            Pokemon::CARAVANHA | Mods::SHADOW
        ],
        Pokemon::SHARPEDO => [
            Pokemon::SHARPEDO,
            Pokemon::SHARPEDO | Mods::SHADOW
        ],
        Pokemon::WAILMER => [
            Pokemon::WAILMER
        ],
        Pokemon::WAILORD => [
            Pokemon::WAILORD
        ],
        Pokemon::NUMEL => [
            Pokemon::NUMEL
        ],
        Pokemon::CAMERUPT => [
            Pokemon::CAMERUPT
        ],
        Pokemon::TORKOAL => [
            Pokemon::TORKOAL
        ],
        Pokemon::SPOINK => [
            Pokemon::SPOINK
        ],
        Pokemon::GRUMPIG => [
            Pokemon::GRUMPIG
        ],
        Pokemon::SPINDA => [
            Pokemon::SPINDA
        ],
        Pokemon::TRAPINCH => [
            Pokemon::TRAPINCH,
            Pokemon::TRAPINCH | Mods::SHADOW
        ],
        Pokemon::VIBRAVA => [
            Pokemon::VIBRAVA,
            Pokemon::VIBRAVA | Mods::SHADOW
        ],
        Pokemon::FLYGON => [
            Pokemon::FLYGON,
            Pokemon::FLYGON | Mods::SHADOW
        ],
        Pokemon::CACNEA => [
            Pokemon::CACNEA,
            Pokemon::CACNEA | Mods::SHADOW
        ],
        Pokemon::CACTURNE => [
            Pokemon::CACTURNE,
            Pokemon::CACTURNE | Mods::SHADOW
        ],
        Pokemon::SWABLU => [
            Pokemon::SWABLU
        ],
        Pokemon::ALTARIA => [
            Pokemon::ALTARIA,
            Pokemon::ALTARIA | Mods::MEGA
        ],
        Pokemon::ZANGOOSE => [
            Pokemon::ZANGOOSE
        ],
        Pokemon::SEVIPER => [
            Pokemon::SEVIPER
        ],
        Pokemon::LUNATONE => [
            Pokemon::LUNATONE
        ],
        Pokemon::SOLROCK => [
            Pokemon::SOLROCK
        ],
        Pokemon::BARBOACH => [
            Pokemon::BARBOACH
        ],
        Pokemon::WHISCASH => [
            Pokemon::WHISCASH
        ],
        Pokemon::CORPHISH => [
            Pokemon::CORPHISH
        ],
        Pokemon::CRAWDAUNT => [
            Pokemon::CRAWDAUNT
        ],
        Pokemon::BALTOY => [
            Pokemon::BALTOY
        ],
        Pokemon::CLAYDOL => [
            Pokemon::CLAYDOL
        ],
        Pokemon::LILEEP => [
            Pokemon::LILEEP,
            Pokemon::LILEEP | Mods::SHADOW
        ],
        Pokemon::CRADILY => [
            Pokemon::CRADILY,
            Pokemon::CRADILY | Mods::SHADOW
        ],
        Pokemon::ANORITH => [
            Pokemon::ANORITH,
            Pokemon::ANORITH | Mods::SHADOW
        ],
        Pokemon::ARMALDO => [
            Pokemon::ARMALDO,
            Pokemon::ARMALDO | Mods::SHADOW
        ],
        Pokemon::FEEBAS => [
            Pokemon::FEEBAS
        ],
        Pokemon::MILOTIC => [
            Pokemon::MILOTIC
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_NORMAL => [
            Pokemon::CASTFORM | FormsAlias::CASTFORM_NORMAL,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_RAINY,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_SNOWY,
            Pokemon::CASTFORM | FormsAlias::CASTFORM_SUNNY
        ],
        Pokemon::KECLEON => [
            Pokemon::KECLEON
        ],
        Pokemon::SHUPPET => [
            Pokemon::SHUPPET,
            Pokemon::SHUPPET | Mods::SHADOW
        ],
        Pokemon::BANETTE => [
            Pokemon::BANETTE,
            Pokemon::BANETTE | Mods::SHADOW
        ],
        Pokemon::DUSKULL => [
            Pokemon::DUSKULL,
            Pokemon::DUSKULL | Mods::SHADOW
        ],
        Pokemon::DUSCLOPS => [
            Pokemon::DUSCLOPS,
            Pokemon::DUSCLOPS | Mods::SHADOW
        ],
        Pokemon::TROPIUS => [
            Pokemon::TROPIUS
        ],
        Pokemon::CHIMECHO => [
            Pokemon::CHIMECHO
        ],
        Pokemon::ABSOL => [
            Pokemon::ABSOL,
            Pokemon::ABSOL | Mods::SHADOW,
            Pokemon::ABSOL | Mods::MEGA
        ],
        Pokemon::WYNAUT => [
            Pokemon::WYNAUT
        ],
        Pokemon::SNORUNT => [
            Pokemon::SNORUNT
        ],
        Pokemon::GLALIE => [
            Pokemon::GLALIE
        ],
        Pokemon::SPHEAL => [
            Pokemon::SPHEAL,
            Pokemon::SPHEAL | Mods::SHADOW
        ],
        Pokemon::SEALEO => [
            Pokemon::SEALEO,
            Pokemon::SEALEO | Mods::SHADOW
        ],
        Pokemon::WALREIN => [
            Pokemon::WALREIN,
            Pokemon::WALREIN | Mods::SHADOW
        ],
        Pokemon::CLAMPERL => [
            Pokemon::CLAMPERL
        ],
        Pokemon::HUNTAIL => [
            Pokemon::HUNTAIL
        ],
        Pokemon::GOREBYSS => [
            Pokemon::GOREBYSS
        ],
        Pokemon::RELICANTH => [
            Pokemon::RELICANTH
        ],
        Pokemon::LUVDISC => [
            Pokemon::LUVDISC
        ],
        Pokemon::BAGON => [
            Pokemon::BAGON,
            Pokemon::BAGON | Mods::SHADOW
        ],
        Pokemon::SHELGON => [
            Pokemon::SHELGON,
            Pokemon::SHELGON | Mods::SHADOW
        ],
        Pokemon::SALAMENCE => [
            Pokemon::SALAMENCE,
            Pokemon::SALAMENCE | Mods::SHADOW
        ],
        Pokemon::BELDUM => [
            Pokemon::BELDUM,
            Pokemon::BELDUM | Mods::SHADOW
        ],
        Pokemon::METANG => [
            Pokemon::METANG,
            Pokemon::METANG | Mods::SHADOW
        ],
        Pokemon::METAGROSS => [
            Pokemon::METAGROSS,
            Pokemon::METAGROSS | Mods::SHADOW
        ],
        Pokemon::REGIROCK => [
            Pokemon::REGIROCK
        ],
        Pokemon::REGICE => [
            Pokemon::REGICE
        ],
        Pokemon::REGISTEEL => [
            Pokemon::REGISTEEL
        ],
        Pokemon::LATIAS => [
            Pokemon::LATIAS
        ],
        Pokemon::LATIOS => [
            Pokemon::LATIOS
        ],
        Pokemon::KYOGRE => [
            Pokemon::KYOGRE
        ],
        Pokemon::GROUDON => [
            Pokemon::GROUDON
        ],
        Pokemon::RAYQUAZA => [
            Pokemon::RAYQUAZA
        ],
        Pokemon::JIRACHI => [
            Pokemon::JIRACHI
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_NORMAL => [
            Pokemon::DEOXYS | FormsAlias::DEOXYS_NORMAL,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_ATTACK,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_SPEED
        ],
        Pokemon::TURTWIG => [
            Pokemon::TURTWIG,
            Pokemon::TURTWIG | Mods::SHADOW
        ],
        Pokemon::GROTLE => [
            Pokemon::GROTLE,
            Pokemon::GROTLE | Mods::SHADOW
        ],
        Pokemon::TORTERRA => [
            Pokemon::TORTERRA,
            Pokemon::TORTERRA | Mods::SHADOW
        ],
        Pokemon::CHIMCHAR => [
            Pokemon::CHIMCHAR,
            Pokemon::CHIMCHAR | Mods::SHADOW
        ],
        Pokemon::MONFERNO => [
            Pokemon::MONFERNO,
            Pokemon::MONFERNO | Mods::SHADOW
        ],
        Pokemon::INFERNAPE => [
            Pokemon::INFERNAPE,
            Pokemon::INFERNAPE | Mods::SHADOW
        ],
        Pokemon::PILUP => [
            Pokemon::PILUP
        ],
        Pokemon::PRINPLUP => [
            Pokemon::PRINPLUP
        ],
        Pokemon::EMPOLEON => [
            Pokemon::EMPOLEON
        ],
        Pokemon::STARLY => [
            Pokemon::STARLY,
            Pokemon::STARLY | Mods::SHADOW
        ],
        Pokemon::STARAVIA => [
            Pokemon::STARAVIA,
            Pokemon::STARAVIA | Mods::SHADOW
        ],
        Pokemon::STARAPTOR => [
            Pokemon::STARAPTOR,
            Pokemon::STARAPTOR | Mods::SHADOW
        ],
        Pokemon::BIDOOF => [
            Pokemon::BIDOOF,
            Pokemon::BIDOOF | Mods::SHADOW
        ],
        Pokemon::BIBAREL => [
            Pokemon::BIBAREL,
            Pokemon::BIBAREL | Mods::SHADOW
        ],
        Pokemon::KRICKETOT => [
            Pokemon::KRICKETOT
        ],
        Pokemon::KRICKETUNE => [
            Pokemon::KRICKETUNE
        ],
        Pokemon::SHINX => [
            Pokemon::SHINX
        ],
        Pokemon::LUXIO => [
            Pokemon::LUXIO
        ],
        Pokemon::LUXRAY => [
            Pokemon::LUXRAY
        ],
        Pokemon::BUDEW => [
            Pokemon::BUDEW
        ],
        Pokemon::ROSERADE => [
            Pokemon::ROSERADE
        ],
        Pokemon::CRANIDOS => [
            Pokemon::CRANIDOS
        ],
        Pokemon::RAMPARDOS => [
            Pokemon::RAMPARDOS
        ],
        Pokemon::SHIELDON => [
            Pokemon::SHIELDON
        ],
        Pokemon::BASTIODON => [
            Pokemon::BASTIODON
        ],
        Pokemon::BURMY | FormsAlias::BURMY_PLANT => [
            Pokemon::BURMY | FormsAlias::BURMY_PLANT,
            Pokemon::BURMY | FormsAlias::BURMY_TRASH,
            Pokemon::BURMY | FormsAlias::BURMY_SANDY
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_PLANT => [
            Pokemon::WORMADAM | FormsAlias::WORMADAM_PLANT,
            Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH,
            Pokemon::WORMADAM | FormsAlias::WORMADAM_SANDY
        ],
        Pokemon::MOTHIM => [
            Pokemon::MOTHIM
        ],
        Pokemon::COMBEE => [
            Pokemon::COMBEE
        ],
        Pokemon::VESPIQUEN => [
            Pokemon::VESPIQUEN
        ],
        Pokemon::PACHIRISU => [
            Pokemon::PACHIRISU
        ],
        Pokemon::BUZIEL => [
            Pokemon::BUZIEL
        ],
        Pokemon::FLOATZEL => [
            Pokemon::FLOATZEL
        ],
        Pokemon::CHERUBI => [
            Pokemon::CHERUBI
        ],
        Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY => [
            Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY,
            Pokemon::CHERRIM | FormsAlias::CHERRIM_OVERCAST
        ],
        Pokemon::SHELLOS | FormsAlias::SHELLOS_EAST_SEA => [
            Pokemon::SHELLOS | FormsAlias::SHELLOS_EAST_SEA,
            Pokemon::SHELLOS | FormsAlias::SHELLOS_WEST_SEA
        ],
        Pokemon::GASTRODON | FormsAlias::GASTRODON_EAST_SEA => [
            Pokemon::GASTRODON | FormsAlias::GASTRODON_EAST_SEA,
            Pokemon::GASTRODON | FormsAlias::GASTRODON_WEST_SEA
        ],
        Pokemon::AMBIPOM => [
            Pokemon::AMBIPOM,
            Pokemon::AMBIPOM | Mods::SHADOW
        ],
        Pokemon::DRIFLOON => [
            Pokemon::DRIFLOON
        ],
        Pokemon::DRIFBLIM => [
            Pokemon::DRIFBLIM
        ],
        Pokemon::BUNEARY => [
            Pokemon::BUNEARY
        ],
        Pokemon::LOPUNNY => [
            Pokemon::LOPUNNY,
            Pokemon::LOPUNNY | Mods::MEGA
        ],
        Pokemon::MISMAGIUS => [
            Pokemon::MISMAGIUS,
            Pokemon::MISMAGIUS | Mods::SHADOW
        ],
        Pokemon::HONCHKROW => [
            Pokemon::HONCHKROW,
            Pokemon::HONCHKROW | Mods::SHADOW
        ],
        Pokemon::GLAMEOW => [
            Pokemon::GLAMEOW
        ],
        Pokemon::PURUGLY => [
            Pokemon::PURUGLY
        ],
        Pokemon::CHINGLING => [
            Pokemon::CHINGLING
        ],
        Pokemon::STUNKY => [
            Pokemon::STUNKY,
            Pokemon::STUNKY | Mods::SHADOW
        ],
        Pokemon::SKUNTANK => [
            Pokemon::SKUNTANK,
            Pokemon::SKUNTANK | Mods::SHADOW
        ],
        Pokemon::BRONZOR => [
            Pokemon::BRONZOR
        ],
        Pokemon::BRONZONG => [
            Pokemon::BRONZONG
        ],
        Pokemon::BONSLY => [
            Pokemon::BONSLY
        ],
        Pokemon::MIME_JR => [
            Pokemon::MIME_JR
        ],
        Pokemon::HAPPINY => [
            Pokemon::HAPPINY
        ],
        Pokemon::CHATOT => [
            Pokemon::CHATOT
        ],
        Pokemon::SPIRITOMB => [
            Pokemon::SPIRITOMB
        ],
        Pokemon::GIBLE => [
            Pokemon::GIBLE,
            Pokemon::GIBLE | Mods::SHADOW
        ],
        Pokemon::GABITE => [
            Pokemon::GABITE,
            Pokemon::GABITE | Mods::SHADOW
        ],
        Pokemon::GARCHOMP => [
            Pokemon::GARCHOMP,
            Pokemon::GARCHOMP | Mods::SHADOW
        ],
        Pokemon::MUNCHLAX => [
            Pokemon::MUNCHLAX
        ],
        Pokemon::RIOLU => [
            Pokemon::RIOLU
        ],
        Pokemon::LUCARIO => [
            Pokemon::LUCARIO
        ],
        Pokemon::HIPPOPOTAS => [
            Pokemon::HIPPOPOTAS,
            Pokemon::HIPPOPOTAS | Mods::SHADOW
        ],
        Pokemon::HIPPOWDON => [
            Pokemon::HIPPOWDON,
            Pokemon::HIPPOWDON | Mods::SHADOW
        ],
        Pokemon::SKORUPI => [
            Pokemon::SKORUPI,
            Pokemon::SKORUPI | Mods::SHADOW
        ],
        Pokemon::DRAPION => [
            Pokemon::DRAPION,
            Pokemon::DRAPION | Mods::SHADOW
        ],
        Pokemon::CROAGUNK => [
            Pokemon::CROAGUNK
        ],
        Pokemon::TOXICROAK => [
            Pokemon::TOXICROAK
        ],
        Pokemon::CARNIVINE => [
            Pokemon::CARNIVINE
        ],
        Pokemon::FINNEON => [
            Pokemon::FINNEON
        ],
        Pokemon::LUMINEON => [
            Pokemon::LUMINEON
        ],
        Pokemon::MANTYKE => [
            Pokemon::MANTYKE
        ],
        Pokemon::SNOVER => [
            Pokemon::SNOVER,
            Pokemon::SNOVER | Mods::SHADOW
        ],
        Pokemon::ABOMASNOW => [
            Pokemon::ABOMASNOW,
            Pokemon::ABOMASNOW | Mods::SHADOW,
            Pokemon::ABOMASNOW | Mods::MEGA
        ],
        Pokemon::WEAVILE => [
            Pokemon::WEAVILE,
            Pokemon::WEAVILE | Mods::SHADOW
        ],
        Pokemon::MAGNEZONE => [
            Pokemon::MAGNEZONE,
            Pokemon::MAGNEZONE | Mods::SHADOW
        ],
        Pokemon::LICKILICKY => [
            Pokemon::LICKILICKY
        ],
        Pokemon::RHYPERIOR => [
            Pokemon::RHYPERIOR,
            Pokemon::RHYPERIOR | Mods::SHADOW
        ],
        Pokemon::TANGROWTH => [
            Pokemon::TANGROWTH,
            Pokemon::TANGROWTH | Mods::SHADOW
        ],
        Pokemon::ELECTIVIRE => [
            Pokemon::ELECTIVIRE,
            Pokemon::ELECTIVIRE | Mods::SHADOW
        ],
        Pokemon::MAGMORTAR => [
            Pokemon::MAGMORTAR,
            Pokemon::MAGMORTAR | Mods::SHADOW
        ],
        Pokemon::TOGEKISS => [
            Pokemon::TOGEKISS
        ],
        Pokemon::YANMEGA => [
            Pokemon::YANMEGA
        ],
        Pokemon::LEAFEON => [
            Pokemon::LEAFEON
        ],
        Pokemon::GLACEON => [
            Pokemon::GLACEON
        ],
        Pokemon::GLISCOR => [
            Pokemon::GLISCOR,
            Pokemon::GLISCOR | Mods::SHADOW
        ],
        Pokemon::MAMOSWINE => [
            Pokemon::MAMOSWINE,
            Pokemon::MAMOSWINE | Mods::SHADOW
        ],
        Pokemon::PORYGON_Z => [
            Pokemon::PORYGON_Z,
            Pokemon::PORYGON_Z | Mods::SHADOW
        ],
        Pokemon::GALLADE => [
            Pokemon::GALLADE,
            Pokemon::GALLADE | Mods::SHADOW
        ],
        Pokemon::PROBOPASS => [
            Pokemon::PROBOPASS,
            Pokemon::PROBOPASS | Mods::SHADOW
        ],
        Pokemon::DUSKNOIR => [
            Pokemon::DUSKNOIR,
            Pokemon::DUSKNOIR | Mods::SHADOW
        ],
        Pokemon::FROSLASS => [
            Pokemon::FROSLASS
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_NORMAL => [
            Pokemon::ROTOM | FormsAlias::ROTOM_NORMAL,
            Pokemon::ROTOM | FormsAlias::ROTOM_FAN,
            Pokemon::ROTOM | FormsAlias::ROTOM_FROST,
            Pokemon::ROTOM | FormsAlias::ROTOM_HEAT,
            Pokemon::ROTOM | FormsAlias::ROTOM_MOW,
            Pokemon::ROTOM | FormsAlias::ROTOM_WASH
        ],
        Pokemon::UXIE => [
            Pokemon::UXIE
        ],
        Pokemon::MESPRIT => [
            Pokemon::MESPRIT
        ],
        Pokemon::AZELF => [
            Pokemon::AZELF
        ],
        Pokemon::DIALGA => [
            Pokemon::DIALGA
        ],
        Pokemon::PALKIA => [
            Pokemon::PALKIA
        ],
        Pokemon::HEATRAN => [
            Pokemon::HEATRAN
        ],
        Pokemon::REGIGIGAS => [
            Pokemon::REGIGIGAS
        ],
        Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN => [
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED
        ],
        Pokemon::CRESSELIA => [
            Pokemon::CRESSELIA
        ],
        Pokemon::PHIONE => [
            Pokemon::PHIONE
        ],
        Pokemon::MANAPHY => [
            Pokemon::MANAPHY
        ],
        Pokemon::DARKRAI => [
            Pokemon::DARKRAI
        ],
        Pokemon::SHAYMIN | FormsAlias::SHAYMIN_LAND => [
            Pokemon::SHAYMIN | FormsAlias::SHAYMIN_LAND,
            Pokemon::SHAYMIN | FormsAlias::SHAYMIN_SKY
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_NORMAL => [
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
            Pokemon::ARCEUS | FormsAlias::ARCEUS_WATER
        ],
        Pokemon::VICTINI => [
            Pokemon::VICTINI
        ],
        Pokemon::SNIVY => [
            Pokemon::SNIVY
        ],
        Pokemon::SERVINE => [
            Pokemon::SERVINE
        ],
        Pokemon::SERPERIOR => [
            Pokemon::SERPERIOR
        ],
        Pokemon::TEPIG => [
            Pokemon::TEPIG
        ],
        Pokemon::PIGNITE => [
            Pokemon::PIGNITE
        ],
        Pokemon::EMBOAR => [
            Pokemon::EMBOAR
        ],
        Pokemon::OSHAWOTT => [
            Pokemon::OSHAWOTT
        ],
        Pokemon::DEWOTT => [
            Pokemon::DEWOTT
        ],
        Pokemon::SAMUROTT => [
            Pokemon::SAMUROTT
        ],
        Pokemon::PATRAT => [
            Pokemon::PATRAT
        ],
        Pokemon::WATCHDOG => [
            Pokemon::WATCHDOG
        ],
        Pokemon::LILLIPUP => [
            Pokemon::LILLIPUP
        ],
        Pokemon::HERDIER => [
            Pokemon::HERDIER
        ],
        Pokemon::STOUTLAND => [
            Pokemon::STOUTLAND
        ],
        Pokemon::PURROLIN => [
            Pokemon::PURROLIN
        ],
        Pokemon::LIEPARD => [
            Pokemon::LIEPARD
        ],
        Pokemon::PANSAGE => [
            Pokemon::PANSAGE
        ],
        Pokemon::SIMISAGE => [
            Pokemon::SIMISAGE
        ],
        Pokemon::PANSEAR => [
            Pokemon::PANSEAR
        ],
        Pokemon::SMISEAR => [
            Pokemon::SMISEAR
        ],
        Pokemon::PANPOUR => [
            Pokemon::PANPOUR
        ],
        Pokemon::SMIPOUR => [
            Pokemon::SMIPOUR
        ],
        Pokemon::MUNNA => [
            Pokemon::MUNNA
        ],
        Pokemon::MUSHARNA => [
            Pokemon::MUSHARNA
        ],
        Pokemon::PIDOVE => [
            Pokemon::PIDOVE
        ],
        Pokemon::TRANQUILL => [
            Pokemon::TRANQUILL
        ],
        Pokemon::UNFEZANT => [
            Pokemon::UNFEZANT
        ],
        Pokemon::BLITZLE => [
            Pokemon::BLITZLE
        ],
        Pokemon::ZEBSTRIKA => [
            Pokemon::ZEBSTRIKA
        ],
        Pokemon::ROGGENROLA => [
            Pokemon::ROGGENROLA
        ],
        Pokemon::BOLDORE => [
            Pokemon::BOLDORE
        ],
        Pokemon::GIGALITH => [
            Pokemon::GIGALITH
        ],
        Pokemon::WOOBAT => [
            Pokemon::WOOBAT
        ],
        Pokemon::SWOOBAT => [
            Pokemon::SWOOBAT
        ],
        Pokemon::DRILBUR => [
            Pokemon::DRILBUR
        ],
        Pokemon::EXCADRILL => [
            Pokemon::EXCADRILL
        ],
        Pokemon::AUDINO => [
            Pokemon::AUDINO
        ],
        Pokemon::TIMBURR => [
            Pokemon::TIMBURR
        ],
        Pokemon::GURDURR => [
            Pokemon::GURDURR
        ],
        Pokemon::CONKELDURR => [
            Pokemon::CONKELDURR
        ],
        Pokemon::TYMPOLE => [
            Pokemon::TYMPOLE
        ],
        Pokemon::PALPITOAD => [
            Pokemon::PALPITOAD
        ],
        Pokemon::SEISMITOAD => [
            Pokemon::SEISMITOAD
        ],
        Pokemon::THROH => [
            Pokemon::THROH
        ],
        Pokemon::SAWK => [
            Pokemon::SAWK
        ],
        Pokemon::SEWADDLE => [
            Pokemon::SEWADDLE
        ],
        Pokemon::SWADLOON => [
            Pokemon::SWADLOON
        ],
        Pokemon::LEVANNY => [
            Pokemon::LEVANNY
        ],
        Pokemon::VENIPEDE => [
            Pokemon::VENIPEDE
        ],
        Pokemon::WHIRLIPEDE => [
            Pokemon::WHIRLIPEDE
        ],
        Pokemon::SCOLIPEDE => [
            Pokemon::SCOLIPEDE
        ],
        Pokemon::COTTONEE => [
            Pokemon::COTTONEE
        ],
        Pokemon::WHIMSICOTT => [
            Pokemon::WHIMSICOTT
        ],
        Pokemon::PETILIL => [
            Pokemon::PETILIL
        ],
        Pokemon::LILLIGANT => [
            Pokemon::LILLIGANT
        ],
        Pokemon::BASCULIN | FormsAlias::BASCULIN_BLUE_STRIPED => [
            Pokemon::BASCULIN | FormsAlias::BASCULIN_BLUE_STRIPED,
            Pokemon::BASCULIN | FormsAlias::BASCULIN_RED_STRIPED
        ],
        Pokemon::SANDILE => [
            Pokemon::SANDILE
        ],
        Pokemon::KROKOROK => [
            Pokemon::KROKOROK
        ],
        Pokemon::KROOKODILE => [
            Pokemon::KROOKODILE
        ],
        Pokemon::DARUMAKA => [
            Pokemon::DARUMAKA,
            Pokemon::DARUMAKA | Mods::GALARIAN,
            Pokemon::DARUMAKA | Mods::SHADOW,
            Pokemon::DARUMAKA | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD => [
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_STANDARD | Mods::GALARIAN,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN | Mods::GALARIAN,
            Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN
        ],
        Pokemon::MARACTUS => [
            Pokemon::MARACTUS
        ],
        Pokemon::DWEBBLE => [
            Pokemon::DWEBBLE
        ],
        Pokemon::CRUSTLE => [
            Pokemon::CRUSTLE
        ],
        Pokemon::SCRAGGY => [
            Pokemon::SCRAGGY
        ],
        Pokemon::SCRAFTY => [
            Pokemon::SCRAFTY
        ],
        Pokemon::SIGILYPH => [
            Pokemon::SIGILYPH
        ],
        Pokemon::YAMASK => [
            Pokemon::YAMASK,
            Pokemon::YAMASK | Mods::GALARIAN,
            Pokemon::YAMASK | Mods::SHADOW,
            Pokemon::YAMASK | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::COFAGRIGUS => [
            Pokemon::COFAGRIGUS,
            Pokemon::COFAGRIGUS | Mods::SHADOW
        ],
        Pokemon::TIRTOUGA => [
            Pokemon::TIRTOUGA
        ],
        Pokemon::CARRACOSTA => [
            Pokemon::CARRACOSTA
        ],
        Pokemon::ARCHEN => [
            Pokemon::ARCHEN
        ],
        Pokemon::ARCHEOPS => [
            Pokemon::ARCHEOPS
        ],
        Pokemon::TRUBBISH => [
            Pokemon::TRUBBISH
        ],
        Pokemon::GARBODOR => [
            Pokemon::GARBODOR
        ],
        Pokemon::ZORUA => [
            Pokemon::ZORUA
        ],
        Pokemon::ZOROARK => [
            Pokemon::ZOROARK
        ],
        Pokemon::MINCCINO => [
            Pokemon::MINCCINO
        ],
        Pokemon::CINCCINO => [
            Pokemon::CINCCINO
        ],
        Pokemon::GOTHITA => [
            Pokemon::GOTHITA
        ],
        Pokemon::GOTHORITA => [
            Pokemon::GOTHORITA
        ],
        Pokemon::GOTHITELLE => [
            Pokemon::GOTHITELLE
        ],
        Pokemon::SOLOSIS => [
            Pokemon::SOLOSIS
        ],
        Pokemon::DUOSION => [
            Pokemon::DUOSION
        ],
        Pokemon::REUNICLUS => [
            Pokemon::REUNICLUS
        ],
        Pokemon::DUCKLETT => [
            Pokemon::DUCKLETT
        ],
        Pokemon::SWANNA => [
            Pokemon::SWANNA
        ],
        Pokemon::VANILLITE => [
            Pokemon::VANILLITE
        ],
        Pokemon::VANILLISH => [
            Pokemon::VANILLISH
        ],
        Pokemon::VANILLUXE => [
            Pokemon::VANILLUXE
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_SPRING => [
            Pokemon::DEERLING | FormsAlias::DEERLING_SPRING,
            Pokemon::DEERLING | FormsAlias::DEERLING_AUTUMN,
            Pokemon::DEERLING | FormsAlias::DEERLING_SUMMER,
            Pokemon::DEERLING | FormsAlias::DEERLING_WINTER
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SPRING => [
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SPRING,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_AUTUMN,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SUMMER,
            Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_WINTER
        ],
        Pokemon::EMOLGA => [
            Pokemon::EMOLGA
        ],
        Pokemon::KARRABLAST => [
            Pokemon::KARRABLAST
        ],
        Pokemon::ESCAVALIER => [
            Pokemon::ESCAVALIER
        ],
        Pokemon::FOONGUS => [
            Pokemon::FOONGUS
        ],
        Pokemon::AMOONGUSS => [
            Pokemon::AMOONGUSS
        ],
        Pokemon::FRILLISH => [
            Pokemon::FRILLISH
        ],
        Pokemon::JELLICENT => [
            Pokemon::JELLICENT
        ],
        Pokemon::ALOMOMOLA => [
            Pokemon::ALOMOMOLA
        ],
        Pokemon::JOLTIK => [
            Pokemon::JOLTIK
        ],
        Pokemon::GALVANTULA => [
            Pokemon::GALVANTULA
        ],
        Pokemon::FERROSEED => [
            Pokemon::FERROSEED
        ],
        Pokemon::FERROTHORN => [
            Pokemon::FERROTHORN
        ],
        Pokemon::KLINK => [
            Pokemon::KLINK
        ],
        Pokemon::KLANG => [
            Pokemon::KLANG
        ],
        Pokemon::KLINKLANG => [
            Pokemon::KLINKLANG
        ],
        Pokemon::TYNAMO => [
            Pokemon::TYNAMO
        ],
        Pokemon::ELEKTRIK => [
            Pokemon::ELEKTRIK
        ],
        Pokemon::ELEKTROSS => [
            Pokemon::ELEKTROSS
        ],
        Pokemon::ELGYEM => [
            Pokemon::ELGYEM
        ],
        Pokemon::BEHEEYEM => [
            Pokemon::BEHEEYEM
        ],
        Pokemon::LITWICK => [
            Pokemon::LITWICK
        ],
        Pokemon::LAMPENT => [
            Pokemon::LAMPENT
        ],
        Pokemon::CHANDELURE => [
            Pokemon::CHANDELURE
        ],
        Pokemon::AXEW => [
            Pokemon::AXEW
        ],
        Pokemon::FRAXURE => [
            Pokemon::FRAXURE
        ],
        Pokemon::HAXORUS => [
            Pokemon::HAXORUS
        ],
        Pokemon::CUBCHOO => [
            Pokemon::CUBCHOO
        ],
        Pokemon::BEARTIC => [
            Pokemon::BEARTIC
        ],
        Pokemon::CRYOGONAL => [
            Pokemon::CRYOGONAL
        ],
        Pokemon::SHELMET => [
            Pokemon::SHELMET
        ],
        Pokemon::ACCELGOR => [
            Pokemon::ACCELGOR
        ],
        Pokemon::STUNFISK => [
            Pokemon::STUNFISK,
            Pokemon::STUNFISK | Mods::GALARIAN,
            Pokemon::STUNFISK | Mods::SHADOW,
            Pokemon::STUNFISK | Mods::SHADOW | Mods::GALARIAN
        ],
        Pokemon::MIENFOO => [
            Pokemon::MIENFOO
        ],
        Pokemon::MIENSHAO => [
            Pokemon::MIENSHAO
        ],
        Pokemon::DRUDDIGON => [
            Pokemon::DRUDDIGON
        ],
        Pokemon::GOLETT => [
            Pokemon::GOLETT
        ],
        Pokemon::GOLURK => [
            Pokemon::GOLURK
        ],
        Pokemon::PAWNIARD => [
            Pokemon::PAWNIARD
        ],
        Pokemon::BISHARP => [
            Pokemon::BISHARP
        ],
        Pokemon::BOUFFALANT => [
            Pokemon::BOUFFALANT
        ],
        Pokemon::RUFFLET => [
            Pokemon::RUFFLET
        ],
        Pokemon::BRAVIARY => [
            Pokemon::BRAVIARY
        ],
        Pokemon::VULLABY => [
            Pokemon::VULLABY
        ],
        Pokemon::MANDIBUZZ => [
            Pokemon::MANDIBUZZ
        ],
        Pokemon::HEATMOR => [
            Pokemon::HEATMOR
        ],
        Pokemon::DURANT => [
            Pokemon::DURANT
        ],
        Pokemon::DEINO => [
            Pokemon::DEINO
        ],
        Pokemon::ZWELIOUS => [
            Pokemon::ZWELIOUS
        ],
        Pokemon::HYDREIGON => [
            Pokemon::HYDREIGON
        ],
        Pokemon::LARVESTA => [
            Pokemon::LARVESTA
        ],
        Pokemon::VOLCARONA => [
            Pokemon::VOLCARONA
        ],
        Pokemon::COBALLION => [
            Pokemon::COBALLION
        ],
        Pokemon::TERRAKION => [
            Pokemon::TERRAKION
        ],
        Pokemon::VIRIZION => [
            Pokemon::VIRIZION
        ],
        Pokemon::TORNADUS | FormsAlias::TORNADUS_INCARNATE => [
            Pokemon::TORNADUS | FormsAlias::TORNADUS_INCARNATE,
            Pokemon::TORNADUS | FormsAlias::TORNADUS_THERIAN
        ],
        Pokemon::THUNDURUS | FormsAlias::THUNDURUS_INCARNATE => [
            Pokemon::THUNDURUS | FormsAlias::THUNDURUS_INCARNATE,
            Pokemon::THUNDURUS | FormsAlias::THUNDURUS_THERIAN
        ],
        Pokemon::RESHIRAM => [
            Pokemon::RESHIRAM
        ],
        Pokemon::ZEKROM => [
            Pokemon::ZEKROM
        ],
        Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE => [
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN
        ],
        Pokemon::KYUREM | FormsAlias::KYUREM_NORMAL => [
            Pokemon::KYUREM | FormsAlias::KYUREM_NORMAL,
            Pokemon::KYUREM | FormsAlias::KYUREM_BLACK,
            Pokemon::KYUREM | FormsAlias::KYUREM_WHITE
        ],
        Pokemon::KELDEO | FormsAlias::KELDEO_ORDINARY => [
            Pokemon::KELDEO | FormsAlias::KELDEO_ORDINARY,
            Pokemon::KELDEO | FormsAlias::KELDEO_RESOLUTE
        ],
        Pokemon::MELOETTA | FormsAlias::MELOETTA_ARIA => [
            Pokemon::MELOETTA | FormsAlias::MELOETTA_ARIA,
            Pokemon::MELOETTA | FormsAlias::MELOETTA_PIROUETTE
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_NORMAL => [
            Pokemon::GENESECT | FormsAlias::GENESECT_NORMAL,
            Pokemon::GENESECT | FormsAlias::GENESECT_BURN,
            Pokemon::GENESECT | FormsAlias::GENESECT_CHILL,
            Pokemon::GENESECT | FormsAlias::GENESECT_DOUSE,
            Pokemon::GENESECT | FormsAlias::GENESECT_SHOCK
        ],
        Pokemon::CHESPIN => [
            Pokemon::CHESPIN
        ],
        Pokemon::QUILLADIN => [
            Pokemon::QUILLADIN
        ],
        Pokemon::CHESNAUGHT => [
            Pokemon::CHESNAUGHT
        ],
        Pokemon::FENNEKIN => [
            Pokemon::FENNEKIN
        ],
        Pokemon::BRAIXEN => [
            Pokemon::BRAIXEN
        ],
        Pokemon::DELPHOX => [
            Pokemon::DELPHOX
        ],
        Pokemon::FROAKIE => [
            Pokemon::FROAKIE
        ],
        Pokemon::FROGADIER => [
            Pokemon::FROGADIER
        ],
        Pokemon::GRENINJA | FormsAlias::GRENINJA_NORMAL => [
            Pokemon::GRENINJA | FormsAlias::GRENINJA_NORMAL,
            Pokemon::GRENINJA | FormsAlias::GRENINJA_ASH
        ],
        Pokemon::BUNNELBY => [
            Pokemon::BUNNELBY
        ],
        Pokemon::DIGGERSBY => [
            Pokemon::DIGGERSBY
        ],
        Pokemon::FLETCHLING => [
            Pokemon::FLETCHLING
        ],
        Pokemon::FLETCHINDER => [
            Pokemon::FLETCHINDER
        ],
        Pokemon::TALONFLAME => [
            Pokemon::TALONFLAME
        ],
        Pokemon::SCATTERBUG => [
            Pokemon::SCATTERBUG
        ],
        Pokemon::SPEWPA => [
            Pokemon::SPEWPA
        ],
        Pokemon::VIVILLON | FormsAlias::VIVILLON_MEADOW => [
            Pokemon::VIVILLON | FormsAlias::VIVILLON_MEADOW,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_CONTINENTAL,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_GARDEN,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_ELEGANT,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_MARINE,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_PLAINS,
            Pokemon::VIVILLON | FormsAlias::VIVILLON_RIVER
        ],
        Pokemon::LITLEO => [
            Pokemon::LITLEO
        ],
        Pokemon::PYROAR => [
            Pokemon::PYROAR,
            Pokemon::PYROAR
        ],
        Pokemon::FLABEBE => [
            Pokemon::FLABEBE
        ],
        Pokemon::FLOETTE => [
            Pokemon::FLOETTE
        ],
        Pokemon::FLORGES => [
            Pokemon::FLORGES
        ],
        Pokemon::SKIDDO => [
            Pokemon::SKIDDO
        ],
        Pokemon::GOGOAT => [
            Pokemon::GOGOAT
        ],
        Pokemon::PANCHAM => [
            Pokemon::PANCHAM
        ],
        Pokemon::PANGORO => [
            Pokemon::PANGORO
        ],
        Pokemon::FURFROU | FormsAlias::FURFROU_NATURAL => [
            Pokemon::FURFROU | FormsAlias::FURFROU_NATURAL,
            Pokemon::FURFROU | FormsAlias::FURFROU_HEART,
            Pokemon::FURFROU | FormsAlias::FURFROU_STAR,
            Pokemon::FURFROU | FormsAlias::FURFROU_DIAMOND
        ],
        Pokemon::ESPURR => [
            Pokemon::ESPURR
        ],
        Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_MALE => [
            Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_MALE,
            Pokemon::MEOWSTIC | FormsAlias::MEOWSTIC_FEMALE
        ],
        Pokemon::HONEDGE => [
            Pokemon::HONEDGE
        ],
        Pokemon::DOUBLADE => [
            Pokemon::DOUBLADE
        ],
        Pokemon::AEGISLASH | FormsAlias::AEGISLASH_SHIELD => [
            Pokemon::AEGISLASH | FormsAlias::AEGISLASH_SHIELD,
            Pokemon::AEGISLASH | FormsAlias::AEGISLASH_BLADE
        ],
        Pokemon::SPIRITZEE => [
            Pokemon::SPIRITZEE
        ],
        Pokemon::AROMATISSE => [
            Pokemon::AROMATISSE
        ],
        Pokemon::SWIRLIX => [
            Pokemon::SWIRLIX
        ],
        Pokemon::SLURPUFF => [
            Pokemon::SLURPUFF
        ],
        Pokemon::INKAY => [
            Pokemon::INKAY
        ],
        Pokemon::MALAMAR => [
            Pokemon::MALAMAR
        ],
        Pokemon::BINACLE => [
            Pokemon::BINACLE
        ],
        Pokemon::BARBARACLE => [
            Pokemon::BARBARACLE
        ],
        Pokemon::SKRELP => [
            Pokemon::SKRELP
        ],
        Pokemon::DRAGALGE => [
            Pokemon::DRAGALGE
        ],
        Pokemon::CLAUNCHER => [
            Pokemon::CLAUNCHER
        ],
        Pokemon::CLAWITZER => [
            Pokemon::CLAWITZER
        ],
        Pokemon::HELIOPTILE => [
            Pokemon::HELIOPTILE
        ],
        Pokemon::HELIOLISK => [
            Pokemon::HELIOLISK
        ],
        Pokemon::TYRUNT => [
            Pokemon::TYRUNT
        ],
        Pokemon::TYRANTRUM => [
            Pokemon::TYRANTRUM
        ],
        Pokemon::AMAURA => [
            Pokemon::AMAURA
        ],
        Pokemon::AURORUS => [
            Pokemon::AURORUS
        ],
        Pokemon::SYLVEON => [
            Pokemon::SYLVEON
        ],
        Pokemon::HAWLUCHA => [
            Pokemon::HAWLUCHA
        ],
        Pokemon::DEDENNE => [
            Pokemon::DEDENNE
        ],
        Pokemon::CARBINK => [
            Pokemon::CARBINK
        ],
        Pokemon::GOOMY => [
            Pokemon::GOOMY
        ],
        Pokemon::SLIGGOO => [
            Pokemon::SLIGGOO
        ],
        Pokemon::GOODRA => [
            Pokemon::GOODRA
        ],
        Pokemon::KLEFKI => [
            Pokemon::KLEFKI
        ],
        Pokemon::PHANTUMP => [
            Pokemon::PHANTUMP
        ],
        Pokemon::TREVEANT => [
            Pokemon::TREVEANT
        ],
        Pokemon::PUMPKABOO | FormsAlias::PUMPKABOO_SMALL => [
            Pokemon::PUMPKABOO | FormsAlias::PUMPKABOO_SMALL,
            Pokemon::PUMPKABOO | FormsAlias::PUMPKABOO_AVERAGE,
            Pokemon::PUMPKABOO | FormsAlias::PUMPKABOO_LARGE,
            Pokemon::PUMPKABOO | FormsAlias::PUMPKABOO_SUPER
        ],
        Pokemon::GOURGEIST | FormsAlias::GOURGEIST_SMALL => [
            Pokemon::GOURGEIST | FormsAlias::GOURGEIST_SMALL,
            Pokemon::GOURGEIST | FormsAlias::GOURGEIST_AVERAGE,
            Pokemon::GOURGEIST | FormsAlias::GOURGEIST_LARGE,
            Pokemon::GOURGEIST | FormsAlias::GOURGEIST_SUPER
        ],
        Pokemon::BERGMITE => [
            Pokemon::BERGMITE
        ],
        Pokemon::AVALUGG => [
            Pokemon::AVALUGG
        ],
        Pokemon::NOIBAT => [
            Pokemon::NOIBAT
        ],
        Pokemon::NOIVERN => [
            Pokemon::NOIVERN
        ],
        Pokemon::XERNEAS => [
            Pokemon::XERNEAS
        ],
        Pokemon::YVELTAL => [
            Pokemon::YVELTAL
        ],
        Pokemon::ZYGARGE | FormsAlias::ZYGARGE_HALF => [
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_HALF,
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_TENTH,
            Pokemon::ZYGARGE | FormsAlias::ZYGARGE_FULL
        ],
        Pokemon::DIANCIE => [
            Pokemon::DIANCIE
        ],
        Pokemon::HOOPA | FormsAlias::HOOPA_CONFINED => [
            Pokemon::HOOPA | FormsAlias::HOOPA_CONFINED,
            Pokemon::HOOPA | FormsAlias::HOOPA_UNBOUND
        ],
        Pokemon::VOLCANION => [
            Pokemon::VOLCANION
        ],
        Pokemon::ROWLET => [
            Pokemon::ROWLET
        ],
        Pokemon::DARTRIX => [
            Pokemon::DARTRIX
        ],
        Pokemon::DECIDUEYE => [
            Pokemon::DECIDUEYE
        ],
        Pokemon::LITTEN => [
            Pokemon::LITTEN
        ],
        Pokemon::TORRACAT => [
            Pokemon::TORRACAT
        ],
        Pokemon::INCINEROAR => [
            Pokemon::INCINEROAR
        ],
        Pokemon::POPPLIO => [
            Pokemon::POPPLIO
        ],
        Pokemon::BRIONNE => [
            Pokemon::BRIONNE
        ],
        Pokemon::PRIMARINA => [
            Pokemon::PRIMARINA
        ],
        Pokemon::PIKIPEK => [
            Pokemon::PIKIPEK
        ],
        Pokemon::TRUMBEAK => [
            Pokemon::TRUMBEAK
        ],
        Pokemon::TOUCANNON => [
            Pokemon::TOUCANNON
        ],
        Pokemon::YUNGOOS => [
            Pokemon::YUNGOOS
        ],
        Pokemon::GUMSHOOS => [
            Pokemon::GUMSHOOS
        ],
        Pokemon::GRUBBIN => [
            Pokemon::GRUBBIN
        ],
        Pokemon::CHARJABUG => [
            Pokemon::CHARJABUG
        ],
        Pokemon::VIKAVOLT => [
            Pokemon::VIKAVOLT
        ],
        Pokemon::CRABAWLER => [
            Pokemon::CRABAWLER
        ],
        Pokemon::CRABOMINABLE => [
            Pokemon::CRABOMINABLE
        ],
        Pokemon::ORICORIO | FormsAlias::ORICORIO_BAILE => [
            Pokemon::ORICORIO | FormsAlias::ORICORIO_BAILE,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_POMPOM,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_PAU,
            Pokemon::ORICORIO | FormsAlias::ORICORIO_SENSU
        ],
        Pokemon::CUTIEFLY => [
            Pokemon::CUTIEFLY
        ],
        Pokemon::RIBOMBEE => [
            Pokemon::RIBOMBEE
        ],
        Pokemon::ROCKRUFF => [
            Pokemon::ROCKRUFF
        ],
        Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDDAY => [
            Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDDAY,
            Pokemon::LYCANROC | FormsAlias::LYCANROC_MIDNIGHT,
            Pokemon::LYCANROC | FormsAlias::LYCANROC_DUSK
        ],
        Pokemon::WISHIWASHI | FormsAlias::WISHIWASHI_SOLO => [
            Pokemon::WISHIWASHI | FormsAlias::WISHIWASHI_SOLO,
            Pokemon::WISHIWASHI | FormsAlias::WISHIWASHI_SCHOOL
        ],
        Pokemon::MAREANIE => [
            Pokemon::MAREANIE
        ],
        Pokemon::TOXAPEX => [
            Pokemon::TOXAPEX
        ],
        Pokemon::MUDBRAY => [
            Pokemon::MUDBRAY
        ],
        Pokemon::MUDSDALE => [
            Pokemon::MUDSDALE
        ],
        Pokemon::DEWPIDER => [
            Pokemon::DEWPIDER
        ],
        Pokemon::ARAQUANID => [
            Pokemon::ARAQUANID
        ],
        Pokemon::FOMANTIS => [
            Pokemon::FOMANTIS
        ],
        Pokemon::LURANTIS => [
            Pokemon::LURANTIS
        ],
        Pokemon::MORELULL => [
            Pokemon::MORELULL
        ],
        Pokemon::SHIINOTIC => [
            Pokemon::SHIINOTIC
        ],
        Pokemon::SALANDIT => [
            Pokemon::SALANDIT
        ],
        Pokemon::SALAZZLE => [
            Pokemon::SALAZZLE
        ],
        Pokemon::STUFFUL => [
            Pokemon::STUFFUL
        ],
        Pokemon::BEWEAR => [
            Pokemon::BEWEAR
        ],
        Pokemon::BOUNSWEET => [
            Pokemon::BOUNSWEET
        ],
        Pokemon::STEENEE => [
            Pokemon::STEENEE
        ],
        Pokemon::TSAREENA => [
            Pokemon::TSAREENA
        ],
        Pokemon::COMFEY => [
            Pokemon::COMFEY
        ],
        Pokemon::ORANGURU => [
            Pokemon::ORANGURU
        ],
        Pokemon::PASSIMIAN => [
            Pokemon::PASSIMIAN
        ],
        Pokemon::WIMPOD => [
            Pokemon::WIMPOD
        ],
        Pokemon::GOLISOPOD => [
            Pokemon::GOLISOPOD
        ],
        Pokemon::SANDYGAST => [
            Pokemon::SANDYGAST
        ],
        Pokemon::PALOSSAND => [
            Pokemon::PALOSSAND
        ],
        Pokemon::PYUKUMUKU => [
            Pokemon::PYUKUMUKU
        ],
        Pokemon::TYPE_NULL => [
            Pokemon::TYPE_NULL
        ],
        Pokemon::SILVALLY => [
            Pokemon::SILVALLY
        ],
        Pokemon::MINIOR | FormsAlias::MINIOR_METEOR => [
            Pokemon::MINIOR | FormsAlias::MINIOR_METEOR,
            Pokemon::MINIOR | FormsAlias::MINIOR_RED
        ],
        Pokemon::KOMALA => [
            Pokemon::KOMALA
        ],
        Pokemon::TURTONATOR => [
            Pokemon::TURTONATOR
        ],
        Pokemon::TOGEDEMARU => [
            Pokemon::TOGEDEMARU
        ],
        Pokemon::MIMIKYU => [
            Pokemon::MIMIKYU
        ],
        Pokemon::BRUXISH => [
            Pokemon::BRUXISH
        ],
        Pokemon::DRAMPA => [
            Pokemon::DRAMPA
        ],
        Pokemon::DHELMISE => [
            Pokemon::DHELMISE
        ],
        Pokemon::JANGMO_O => [
            Pokemon::JANGMO_O
        ],
        Pokemon::HAKAMO_O => [
            Pokemon::HAKAMO_O
        ],
        Pokemon::KOMMO_O => [
            Pokemon::KOMMO_O
        ],
        Pokemon::TAPU_KOKO => [
            Pokemon::TAPU_KOKO
        ],
        Pokemon::TAPU_LELE => [
            Pokemon::TAPU_LELE
        ],
        Pokemon::TAPU_BULU => [
            Pokemon::TAPU_BULU
        ],
        Pokemon::TAPU_FINI => [
            Pokemon::TAPU_FINI
        ],
        Pokemon::COSMOG => [
            Pokemon::COSMOG
        ],
        Pokemon::COSMOEM => [
            Pokemon::COSMOEM
        ],
        Pokemon::SOLGALEO => [
            Pokemon::SOLGALEO
        ],
        Pokemon::LUNALA => [
            Pokemon::LUNALA
        ],
        Pokemon::NIHILEGO => [
            Pokemon::NIHILEGO
        ],
        Pokemon::BUZZWOLE => [
            Pokemon::BUZZWOLE
        ],
        Pokemon::PHEROMOSA => [
            Pokemon::PHEROMOSA
        ],
        Pokemon::XURKITREE => [
            Pokemon::XURKITREE
        ],
        Pokemon::CELESTEELA => [
            Pokemon::CELESTEELA
        ],
        Pokemon::KARTANA => [
            Pokemon::KARTANA
        ],
        Pokemon::GUZZLORD => [
            Pokemon::GUZZLORD
        ],
        Pokemon::NECROZMA | FormsAlias::NECROZMA_NORMAL => [
            Pokemon::NECROZMA | FormsAlias::NECROZMA_NORMAL,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_DUSK,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_DAWN,
            Pokemon::NECROZMA | FormsAlias::NECROZMA_ULTRA
        ],
        Pokemon::MAGEARNA => [
            Pokemon::MAGEARNA
        ],
        Pokemon::MARSHADOW => [
            Pokemon::MARSHADOW
        ],
        Pokemon::POIPOLE => [
            Pokemon::POIPOLE
        ],
        Pokemon::NAGANADEL => [
            Pokemon::NAGANADEL
        ],
        Pokemon::STAKATAKA => [
            Pokemon::STAKATAKA
        ],
        Pokemon::BLACEPHALON => [
            Pokemon::BLACEPHALON
        ],
        Pokemon::ZERAORA => [
            Pokemon::ZERAORA
        ],
        Pokemon::MELTAN => [
            Pokemon::MELTAN
        ],
        Pokemon::MELMETAL => [
            Pokemon::MELMETAL
        ],
        Pokemon::GROOKEY => [
            Pokemon::GROOKEY
        ],
        Pokemon::THWACKEY => [
            Pokemon::THWACKEY
        ],
        Pokemon::RILLABOOM => [
            Pokemon::RILLABOOM
        ],
        Pokemon::SCORBUNNY => [
            Pokemon::SCORBUNNY
        ],
        Pokemon::RABOOT => [
            Pokemon::RABOOT
        ],
        Pokemon::CINDERACE => [
            Pokemon::CINDERACE
        ],
        Pokemon::SOBBLE => [
            Pokemon::SOBBLE
        ],
        Pokemon::DRIZZILE => [
            Pokemon::DRIZZILE
        ],
        Pokemon::INTELEON => [
            Pokemon::INTELEON
        ],
        Pokemon::SKWOVET => [
            Pokemon::SKWOVET
        ],
        Pokemon::GREEDENT => [
            Pokemon::GREEDENT
        ],
        Pokemon::ROOKIDEE => [
            Pokemon::ROOKIDEE
        ],
        Pokemon::CORVISQUIRE => [
            Pokemon::CORVISQUIRE
        ],
        Pokemon::CORVIKNIGHT => [
            Pokemon::CORVIKNIGHT
        ],
        Pokemon::BLIPBUG => [
            Pokemon::BLIPBUG
        ],
        Pokemon::DOTTLER => [
            Pokemon::DOTTLER
        ],
        Pokemon::ORBEETLE => [
            Pokemon::ORBEETLE
        ],
        Pokemon::NICKIT => [
            Pokemon::NICKIT
        ],
        Pokemon::THIEVUL => [
            Pokemon::THIEVUL
        ],
        Pokemon::GOSSIFLEUR => [
            Pokemon::GOSSIFLEUR
        ],
        Pokemon::ELDEGOSS => [
            Pokemon::ELDEGOSS
        ],
        Pokemon::WOOLOO => [
            Pokemon::WOOLOO
        ],
        Pokemon::DUBWOOL => [
            Pokemon::DUBWOOL
        ],
        Pokemon::CHEWTLE => [
            Pokemon::CHEWTLE
        ],
        Pokemon::DREDNAW => [
            Pokemon::DREDNAW
        ],
        Pokemon::YAMPER => [
            Pokemon::YAMPER
        ],
        Pokemon::BOLTUND => [
            Pokemon::BOLTUND
        ],
        Pokemon::ROLYCOLY => [
            Pokemon::ROLYCOLY
        ],
        Pokemon::CARKOL => [
            Pokemon::CARKOL
        ],
        Pokemon::COALOSSAL => [
            Pokemon::COALOSSAL
        ],
        Pokemon::APPLIN => [
            Pokemon::APPLIN
        ],
        Pokemon::FLAPPLE => [
            Pokemon::FLAPPLE
        ],
        Pokemon::APPLETUN => [
            Pokemon::APPLETUN
        ],
        Pokemon::SILICOBRA => [
            Pokemon::SILICOBRA
        ],
        Pokemon::SANDACONDA => [
            Pokemon::SANDACONDA
        ],
        Pokemon::CRAMORANT => [
            Pokemon::CRAMORANT
        ],
        Pokemon::ARROKUDA => [
            Pokemon::ARROKUDA
        ],
        Pokemon::BARRASKEWDA => [
            Pokemon::BARRASKEWDA
        ],
        Pokemon::TOXEL => [
            Pokemon::TOXEL
        ],
        Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_LOW_KEY => [
            Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_LOW_KEY,
            Pokemon::TOXTRICITY | FormsAlias::TOXTRICITY_AMPED
        ],
        Pokemon::SIZZLIPEDE => [
            Pokemon::SIZZLIPEDE
        ],
        Pokemon::CENTISKORCH => [
            Pokemon::CENTISKORCH
        ],
        Pokemon::CLOBBOPUS => [
            Pokemon::CLOBBOPUS
        ],
        Pokemon::GRAPPLOCT => [
            Pokemon::GRAPPLOCT
        ],
        Pokemon::SINISTEA => [
            Pokemon::SINISTEA
        ],
        Pokemon::POLTEAGEIST => [
            Pokemon::POLTEAGEIST,
            Pokemon::POLTEAGEIST
        ],
        Pokemon::HATENNA => [
            Pokemon::HATENNA
        ],
        Pokemon::HATTREM => [
            Pokemon::HATTREM
        ],
        Pokemon::HATTERENE => [
            Pokemon::HATTERENE
        ],
        Pokemon::IMPIDIMP => [
            Pokemon::IMPIDIMP
        ],
        Pokemon::MORGREM => [
            Pokemon::MORGREM
        ],
        Pokemon::GRIMMSNARL => [
            Pokemon::GRIMMSNARL
        ],
        Pokemon::OBSTAGOON => [
            Pokemon::OBSTAGOON,
            Pokemon::OBSTAGOON | Mods::SHADOW
        ],
        Pokemon::PERRSERKER => [
            Pokemon::PERRSERKER,
            Pokemon::PERRSERKER | Mods::SHADOW
        ],
        Pokemon::CURSOLA => [
            Pokemon::CURSOLA,
            Pokemon::CURSOLA | Mods::SHADOW
        ],
        Pokemon::SIRFETCH_D => [
            Pokemon::SIRFETCH_D,
            Pokemon::SIRFETCH_D | Mods::SHADOW
        ],
        Pokemon::MR_RIME => [
            Pokemon::MR_RIME,
            Pokemon::MR_RIME | Mods::SHADOW
        ],
        Pokemon::RUNERIGUS => [
            Pokemon::RUNERIGUS,
            Pokemon::RUNERIGUS | Mods::SHADOW
        ],
        Pokemon::MILCERY => [
            Pokemon::MILCERY
        ],
        Pokemon::ALCREMIE | FormsAlias::ALCREMIE_VANILLA => [
            Pokemon::ALCREMIE | FormsAlias::ALCREMIE_VANILLA
        ],
        Pokemon::FALINKS => [
            Pokemon::FALINKS
        ],
        Pokemon::PINCURCHIN => [
            Pokemon::PINCURCHIN
        ],
        Pokemon::SNOM => [
            Pokemon::SNOM
        ],
        Pokemon::FROSMOTH => [
            Pokemon::FROSMOTH
        ],
        Pokemon::STONJOURNER => [
            Pokemon::STONJOURNER
        ],
        Pokemon::EISCUE => [
            Pokemon::EISCUE
        ],
        Pokemon::INDEEDEE | FormsAlias::INDEEDEE_FEMALE => [
            Pokemon::INDEEDEE | FormsAlias::INDEEDEE_FEMALE,
            Pokemon::INDEEDEE | FormsAlias::INDEEDEE_MALE
        ],
        Pokemon::MORPEKO | FormsAlias::MORPEKO_BELLY => [
            Pokemon::MORPEKO | FormsAlias::MORPEKO_BELLY,
            Pokemon::MORPEKO | FormsAlias::MORPEKO_HANGRY
        ],
        Pokemon::CUFANT => [
            Pokemon::CUFANT
        ],
        Pokemon::COPPERAJAH => [
            Pokemon::COPPERAJAH
        ],
        Pokemon::DRACOZOLT => [
            Pokemon::DRACOZOLT
        ],
        Pokemon::ARCTOZOLT => [
            Pokemon::ARCTOZOLT
        ],
        Pokemon::DRACOVISH => [
            Pokemon::DRACOVISH
        ],
        Pokemon::ARCTOVISH => [
            Pokemon::ARCTOVISH
        ],
        Pokemon::DURALUDON => [
            Pokemon::DURALUDON
        ],
        Pokemon::DREEPY => [
            Pokemon::DREEPY
        ],
        Pokemon::DRAKLOAK => [
            Pokemon::DRAKLOAK
        ],
        Pokemon::DRAGAPULT => [
            Pokemon::DRAGAPULT
        ],
        Pokemon::ZACIAN | FormsAlias::ZACIAN_HERO => [
            Pokemon::ZACIAN | FormsAlias::ZACIAN_HERO,
            Pokemon::ZACIAN | FormsAlias::ZACIAN_CROWNED
        ],
        Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_HERO => [
            Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_HERO,
            Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_CROWNED
        ],
        Pokemon::ETERNATUS => [
            Pokemon::ETERNATUS
        ],
        Pokemon::KUBFU => [
            Pokemon::KUBFU
        ],
        Pokemon::URSHIFU | FormsAlias::URSHIFU_SINGLE => [
            Pokemon::URSHIFU | FormsAlias::URSHIFU_SINGLE,
            Pokemon::URSHIFU | FormsAlias::URSHIFU_RAPID
        ],
        Pokemon::ZARUDE => [
            Pokemon::ZARUDE
        ],
        Pokemon::REGIELEKI => [
            Pokemon::REGIELEKI
        ],
        Pokemon::REGIDRAGO => [
            Pokemon::REGIDRAGO
        ],
        Pokemon::GLASTRIER => [
            Pokemon::GLASTRIER
        ],
        Pokemon::SPECTRIER => [
            Pokemon::SPECTRIER
        ],
        Pokemon::CALYREX => [
            Pokemon::CALYREX
        ]
    ];
}