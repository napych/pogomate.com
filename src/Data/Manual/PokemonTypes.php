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
        PokemonList::FENNEKIN => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::BRAIXEN => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::DELPHOX => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::FROAKIE => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::FROGADIER => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::GRENINJA | FormsAlias::GRENINJA_NORMAL => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::GRENINJA | FormsAlias::GRENINJA_ASH => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::BUNNELBY => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::DIGGERSBY => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::FLETCHLING => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::FLETCHINDER => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::TALONFLAME => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::SCATTERBUG => [
            self::FIELD_TYPE1 => Types::BUG
        ],
        PokemonList::SPEWPA => [
            self::FIELD_TYPE1 => Types::BUG
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_MEADOW => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_CONTINENTAL => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_GARDEN => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_ELEGANT => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_MARINE => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_PLAINS => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::VIVILLON | FormsAlias::VIVILLON_RIVER => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::LITLEO => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::PYROAR | FormsAlias::PYROAR_MALE => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::PYROAR | FormsAlias::PYROAR_FEMALE => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::FLABEBE => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::FLOETTE => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::FLORGES => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::SKIDDO => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::GOGOAT => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::PANCHAM => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::PANGORO => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::FURFROU | FormsAlias::FURFROU_NATURAL => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::FURFROU | FormsAlias::FURFROU_HEART => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::FURFROU | FormsAlias::FURFROU_STAR => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::FURFROU | FormsAlias::FURFROU_DIAMOND => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::ESPURR => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::MEOWSTIC | FormsAlias::MEOWSTIC_MALE => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::MEOWSTIC | FormsAlias::MEOWSTIC_FEMALE => [
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        PokemonList::HONEDGE => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::DOUBLADE => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::AEGISLASH | FormsAlias::AEGISLASH_SHIELD => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::AEGISLASH | FormsAlias::AEGISLASH_BLADE => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::SPIRITZEE => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::AROMATISSE => [
            self::FIELD_TYPE1 => Types::DARK
        ],
        PokemonList::SWIRLIX => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::SLURPUFF => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::INKAY => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::MALAMAR => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        PokemonList::BINACLE => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::BARBARACLE => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::SKRELP => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::DRAGALGE => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::CLAUNCHER => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::CLAWITZER => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::HELIOPTILE => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::HELIOLISK => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        PokemonList::TYRUNT => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::TYRANTRUM => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::AMAURA => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        PokemonList::AURORUS => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        PokemonList::SYLVEON => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::HAWLUCHA => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::DEDENNE => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::CARBINK => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::GOOMY => [
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        PokemonList::SLIGGOO => [
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        PokemonList::GOODRA => [
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        PokemonList::KLEFKI => [
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::PHANTUMP => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        PokemonList::TREVEANT => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        PokemonList::PUMPKABOO => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        PokemonList::GOURGEIST => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        PokemonList::BERGMITE => [
            self::FIELD_TYPE1 => Types::ICE
        ],
        PokemonList::AVALUGG => [
            self::FIELD_TYPE1 => Types::ICE
        ],
        PokemonList::NOIBAT => [
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::NOIVERN => [
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        PokemonList::XERNEAS => [
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        PokemonList::YVELTAL => [
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::ZYGARGE | FormsAlias::ZYGARGE_HALF => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::ZYGARGE | FormsAlias::ZYGARGE_TENTH => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::ZYGARGE | FormsAlias::ZYGARGE_FULL => [
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        PokemonList::DIANCIE => [
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::HOOPA | FormsAlias::HOOPA_CONFINED => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::HOOPA | FormsAlias::HOOPA_UNBOUND => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::VOLCANION => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::ROWLET => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::DARTRIX => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::DECIDUEYE => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        PokemonList::LITTEN => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::TORRACAT => [
            self::FIELD_TYPE1 => Types::FIRE
        ],
        PokemonList::INCINEROAR => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::DARK
        ],
        PokemonList::POPPLIO => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::BRIONNE => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::PRIMARINA => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::PIKIPEK => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::TRUMBEAK => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::TOUCANNON => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::YUNGOOS => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::GUMSHOOS => [
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        PokemonList::GRUBBIN => [
            self::FIELD_TYPE1 => Types::BUG
        ],
        PokemonList::CHARJABUG => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        PokemonList::VIKAVOLT => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        PokemonList::CRABAWLER => [
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        PokemonList::CRABOMINABLE => [
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::ICE
        ],
        PokemonList::ORICORIO | FormsAlias::ORICORIO_BAILE => [
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::ORICORIO | FormsAlias::ORICORIO_POMPOM => [
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::ORICORIO | FormsAlias::ORICORIO_PAU => [
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::ORICORIO | FormsAlias::ORICORIO_SENSU => [
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        PokemonList::CUTIEFLY => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::RIBOMBEE => [
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::ROCKRUFF => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::LYCANROC | FormsAlias::LYCANROC_MIDDAY => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::LYCANROC | FormsAlias::LYCANROC_MIDNIGHT => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::LYCANROC | FormsAlias::LYCANROC_DUSK => [
            self::FIELD_TYPE1 => Types::ROCK
        ],
        PokemonList::WISHIWASHI | FormsAlias::WISHIWASHI_SOLO => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::WISHIWASHI | FormsAlias::WISHIWASHI_SCHOOL => [
            self::FIELD_TYPE1 => Types::WATER
        ],
        PokemonList::MAREANIE => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::TOXAPEX => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::WATER
        ],
        PokemonList::MUDBRAY => [
            self::FIELD_TYPE1 => Types::GROUND
        ],
        PokemonList::MUDSDALE => [
            self::FIELD_TYPE1 => Types::GROUND
        ],
        PokemonList::DEWPIDER => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::ARAQUANID => [
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::BUG
        ],
        PokemonList::FOMANTIS => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::LURANTIS => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::MORELULL => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::SHIINOTIC => [
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        PokemonList::SALANDIT => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        PokemonList::SALAZZLE => [
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        PokemonList::STUFFUL => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::BEWEAR => [
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        PokemonList::BOUNSWEET => [
            self::FIELD_TYPE1 => Types::GRASS
        ],
        PokemonList::STEENEE => [
            self::FIELD_TYPE1 => Types::GRASS
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
        PokemonList::TOXTRICITY | FormsAlias::TOXTRICITY_LOW_KEY => [
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
