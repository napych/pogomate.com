<?php

namespace Pogo\Data\Manual;

use Pogo\Data\Parser\Result\Pokemon;
use Pogo\Pokemon\Mods;

class PokemonTypes
{
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';

    const POKEMON = [
        PokemonList::PONYTA | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::RAPIDASH | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::SLOWPOKE | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::SLOWBRO | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::MR_MIME | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::CORSOLA | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::GHOST
        ],
        PokemonList::YAMASK | Mods::GALARIAN => [
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::CHESPIN => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::QUILLADIN => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::CHESNAUGHT => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],

        PokemonList::TSAREENA => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::COMFEY => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::ORANGURU => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::PASSIMIAN => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::WIMPOD => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::GOLISOPOD => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::SANDYGAST => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::PALOSSAND => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::PYUKUMUKU => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::TYPE_NULL => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::SILVALLY => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::MINIOR | FormsAlias::MINIOR_METEOR => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::MINIOR | FormsAlias::MINIOR_RED => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::KOMALA => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::TURTONATOR => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::TOGEDEMARU => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::MIMIKYU => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::BRUXISH => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::DRAMPA => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::DHELMISE => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        PokemonList::JANGMO_O => [
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        PokemonList::HAKAMO_O => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::KOMMO_O => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::TAPU_KOKO => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::TAPU_LELE => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::TAPU_BULU => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::TAPU_FINI => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::COSMOG => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::COSMOEM => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::SOLGALEO => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::LUNALA => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::NIHILEGO => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::POISON
        ],
        PokemonList::BUZZWOLE => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::PHEROMOSA => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::XURKITREE => [
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        PokemonList::CELESTEELA => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::KARTANA => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::GUZZLORD => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::NECROZMA | FormsAlias::NECROZMA_NORMAL => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::NECROZMA | FormsAlias::NECROZMA_DUSK => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::NECROZMA | FormsAlias::NECROZMA_DAWN => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::NECROZMA | FormsAlias::NECROZMA_ULTRA => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::MAGEARNA => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::MARSHADOW => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::POIPOLE => [
            self::FIELD_TYPE1 => Types::POISON
        ],
        PokemonList::NAGANADEL => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::STAKATAKA => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::BLACEPHALON => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::ZERAORA => [
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        PokemonList::GROOKEY => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::THWACKEY => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::RILLABOOM => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::SCORBUNNY => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::RABOOT => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::CINDERACE => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::SOBBLE => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::DRIZZILE => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::INTELEON => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::SKWOVET => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::GREEDENT => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::ROOKIDEE => [
            self::FIELD_TYPE1 => Types::FLYING
        ],
        PokemonList::CORVISQUIRE => [
            self::FIELD_TYPE1 => Types::FLYING
        ],
        PokemonList::CORVIKNIGHT => [
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::BLIPBUG => [
            self::FIELD_TYPE1 => Types::BUG
        ],
        PokemonList::DOTTLER => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::ORBEETLE => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::NICKIT => [
            self::FIELD_TYPE1 => Types::DARK
        ],
        PokemonList::THIEVUL => [
            self::FIELD_TYPE1 => Types::DARK
        ],
        PokemonList::GOSSIFLEUR => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::ELDEGOSS => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::WOOLOO => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::DUBWOOL => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::CHEWTLE => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::DREDNAW => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        PokemonList::YAMPER => [
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        PokemonList::BOLTUND => [
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        PokemonList::ROLYCOLY => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::CARKOL => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        PokemonList::COALOSSAL => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        PokemonList::APPLIN => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::FLAPPLE => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::APPLETUN => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::SILICOBRA => [
            self::FIELD_TYPE1 => Types::GROUND
        ],
        PokemonList::SANDACONDA => [
            self::FIELD_TYPE1 => Types::GROUND
        ],
        PokemonList::CRAMORANT => [
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::ARROKUDA => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::BARRASKEWDA => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::TOXEL => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::POISON
        ],
        PokemonList::TOXTRICITY | FormsAlias::TOXTRICITY_LOW => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::POISON
        ],
        PokemonList::TOXTRICITY | FormsAlias::TOXTRICITY_AMPED => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::POISON
        ],
        PokemonList::SIZZLIPEDE => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::CENTISKORCH => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::CLOBBOPUS => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::GRAPPLOCT => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::SINISTEA => [
            self::FIELD_TYPE1 => Types::GHOST
        ],
        PokemonList::POLTEAGEIST => [
            self::FIELD_TYPE1 => Types::GHOST
        ],
        PokemonList::HATENNA => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::HATTREM => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::HATTERENE => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::IMPIDIMP => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::MORGREM => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::GRIMMSNARL => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::CURSOLA => [
            self::FIELD_TYPE1 => Types::GHOST
        ],
        PokemonList::SIRFETCH_D => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::MR_RIME => [
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::RUNERIGUS => [
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::MILCERY => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::ALCREMIE | FormsAlias::ALCREMIE_VANILLA => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::FALINKS => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::PINCURCHIN => [
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        PokemonList::SNOM => [
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::FROSMOTH => [
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::STONJOURNER => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::EISCUE => [
            self::FIELD_TYPE1 => Types::ICE
        ],
        PokemonList::INDEEDEE | FormsAlias::INDEEDEE_FEMALE => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::INDEEDEE | FormsAlias::INDEEDEE_MALE => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::MORPEKO | FormsAlias::MORPEKO_BELLY => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::MORPEKO | FormsAlias::MORPEKO_HANGRY => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::CUFANT => [
            self::FIELD_TYPE1 => Types::STEEL
        ],
        PokemonList::COPPERAJAH => [
            self::FIELD_TYPE1 => Types::STEEL
        ],
        PokemonList::DRACOZOLT => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::ARCTOZOLT => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::ICE
        ],
        PokemonList::DRACOVISH => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::ARCTOVISH => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        PokemonList::DURALUDON => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::DREEPY => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::DRAKLOAK => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::DRAGAPULT => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::ZACIAN | FormsAlias::ZACIAN_HERO => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::ZACIAN | FormsAlias::ZACIAN_CROWNED => [
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::ZAMAZENTA | FormsAlias::ZAMAZENTA_HERO => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::ZAMAZENTA | FormsAlias::ZAMAZENTA_CROWNED => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        PokemonList::ETERNATUS => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::KUBFU => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::URSHIFU | FormsAlias::URSHIFU_SINGLE => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::URSHIFU | FormsAlias::URSHIFU_RAPID => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::ZARUDE => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GRASS
        ]
    ];
}
