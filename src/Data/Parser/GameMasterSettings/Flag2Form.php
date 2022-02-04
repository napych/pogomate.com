<?php

namespace Pogo\Data\Parser\GameMasterSettings;

use Pogo\Data\Manual\Forms;
use Pogo\Pokemon;

class Flag2Form
{
    public const FLAG2FORM = [
        Pokemon::MEWTWO => [
            'A' => Forms::MEWTWO_ARMORED
        ],
        Pokemon::CASTFORM => [
            'RAINY' => Forms::CASTFORM_RAINY,
            'SNOWY' => Forms::CASTFORM_SNOWY,
            'SUNNY' => Forms::CASTFORM_SUNNY
        ],
        Pokemon::DEOXYS => [
            'ATTACK' => Forms::DEOXYS_ATTACK,
            'DEFENSE' => Forms::DEOXYS_DEFENSE,
            'SPEED' => Forms::DEOXYS_SPEED
        ],
        Pokemon::BURMY => [
            'PLANT' => Forms::BURMY_PLANT,
            'TRASH' => Forms::BURMY_TRASH,
            'SANDY' => Forms::BURMY_SANDY
        ],
        Pokemon::WORMADAM => [
            'PLANT' => Forms::WORMADAM_PLANT,
            'TRASH' => Forms::WORMADAM_TRASH,
            'SANDY' => Forms::WORMADAM_SANDY
        ],
        Pokemon::CHERRIM => [
            'OVERCAST' => Forms::CHERRIM_OVERCAST,
            'SUNNY' => Forms::CHERRIM_SUNNY
        ],
        Pokemon::GIRATINA => [
            'ORIGIN' => Forms::GIRATINA_ORIGIN,
            'ALTERED' => Forms::GIRATINA_ALTERED
        ],
        Pokemon::ROTOM => [
            'FAN' => Forms::ROTOM_FAN,
            'FROST' => Forms::ROTOM_FROST,
            'HEAT' => Forms::ROTOM_HEAT,
            'MOW' => Forms::ROTOM_MOW,
            'WASH' => Forms::ROTOM_WASH
        ],
        Pokemon::SHELLOS => [
            'EAST_SEA' => Forms::SHELLOS_EAST_SEA,
            'WEST_SEA' => Forms::SHELLOS_WEST_SEA
        ],
        Pokemon::GASTRODON => [
            'EAST_SEA' => Forms::GASTRODON_EAST_SEA,
            'WEST_SEA' => Forms::GASTRODON_WEST_SEA
        ],
        Pokemon::SHAYMIN => [
            'LAND' => Forms::SHAYMIN_LAND,
            'SKY' => Forms::SHAYMIN_SKY
        ],
        Pokemon::ARCEUS => [
            'NORMAL' => Forms::ARCEUS_NORMAL,
            'BUG' => Forms::ARCEUS_BUG,
            'DARK' => Forms::ARCEUS_DARK,
            'DRAGON' => Forms::ARCEUS_DRAGON,
            'ELECTRIC' => Forms::ARCEUS_ELECTRIC,
            'FAIRY' => Forms::ARCEUS_FAIRY,
            'FIGHTING' => Forms::ARCEUS_FIGHTING,
            'FIRE' => Forms::ARCEUS_FIRE,
            'FLYING' => Forms::ARCEUS_FLYING,
            'GHOST' => Forms::ARCEUS_GHOST,
            'GRASS' => Forms::ARCEUS_GRASS,
            'GROUND' => Forms::ARCEUS_GROUND,
            'ICE' => Forms::ARCEUS_ICE,
            'POISON' => Forms::ARCEUS_POISON,
            'PSYCHIC' => Forms::ARCEUS_PSYCHIC,
            'ROCK' => Forms::ARCEUS_ROCK,
            'STEEL' => Forms::ARCEUS_STEEL,
            'WATER' => Forms::ARCEUS_WATER
        ],
        Pokemon::BASCULIN => [
            'BLUE_STRIPED' => Forms::BASCULIN_BLUE_STRIPED,
            'RED_STRIPED' => Forms::BASCULIN_RED_STRIPED
        ],
        Pokemon::DARMANITAN => [
            'STANDARD' => Forms::DARMANITAN_STANDARD,
            'ZEN' => Forms::DARMANITAN_ZEN
        ],
        Pokemon::KYUREM => [
            'BLACK' => Forms::KYUREM_BLACK,
            'WHITE' => Forms::KYUREM_WHITE
        ],
        Pokemon::DEERLING => [
            'SPRING' => Forms::DEERLING_SPRING,
            'SUMMER' => Forms::DEERLING_SUMMER,
            'AUTUMN' => Forms::DEERLING_AUTUMN,
            'WINTER' => Forms::DEERLING_WINTER
        ],
        Pokemon::SAWSBUCK => [
            'SPRING' => Forms::SAWSBUCK_SPRING,
            'SUMMER' => Forms::SAWSBUCK_SUMMER,
            'AUTUMN' => Forms::SAWSBUCK_AUTUMN,
            'WINTER' => Forms::SAWSBUCK_WINTER
        ],
        Pokemon::FRILLISH => [
            'NORMAL' => Forms::FRILLISH_MALE,
            'FEMALE' => Forms::FRILLISH_FEMALE
        ],
        Pokemon::JELLICENT => [
            'NORMAL' => Forms::JELLICENT_MALE,
            'FEMALE' => Forms::JELLICENT_FEMALE
        ],
        Pokemon::TORNADUS => [
            'INCARNATE' => Forms::TORNADUS_INCARNATE,
            'THERIAN' => Forms::TORNADUS_THERIAN
        ],
        Pokemon::THUNDURUS => [
            'INCARNATE' => Forms::THUNDURUS_INCARNATE,
            'THERIAN' => Forms::THUNDURUS_THERIAN
        ],
        Pokemon::LANDORUS => [
            'INCARNATE' => Forms::LANDORUS_INCARNATE,
            'THERIAN' => Forms::LANDORUS_THERIAN
        ],
        Pokemon::KELDEO => [
            'ORDINARY' => Forms::KELDEO_ORDINARY,
            'RESOLUTE' => Forms::KELDEO_RESOLUTE
        ],
        Pokemon::MELOETTA => [
            'ARIA' => Forms::MELOETTA_ARIA,
            'PIROUETTE' => Forms::MELOETTA_PIROUETTE
        ],
        Pokemon::GENESECT => [
            'BURN' => Forms::GENESECT_BURN,
            'CHILL' => Forms::GENESECT_CHILL,
            'DOUSE' => Forms::GENESECT_DOUSE,
            'SHOCK' => Forms::GENESECT_SHOCK
        ],
        Pokemon::PYROAR => [
            'NORMAL' => Forms::PYROAR_MALE,
            'FEMALE' => Forms::PYROAR_FEMALE
        ],
        Pokemon::MEOWSTIC => [
            'NORMAL' => Forms::MEOWSTIC_MALE,
            'FEMALE' => Forms::MEOWSTIC_FEMALE
        ],
        Pokemon::GOURGEIST => [
            'SMALL' => Forms::GOURGEIST_SMALL,
            'AVERAGE' => Forms::GOURGEIST_AVERAGE,
            'LARGE' => Forms::GOURGEIST_LARGE,
            'SUPER' => Forms::GOURGEIST_SUPER
        ],
        Pokemon::TOXTRICITY => [
            'LOW_KEY' => Forms::TOXTRICITY_LOW_KEY,
            'AMPED' => Forms::TOXTRICITY_AMPED
        ],
        Pokemon::POLTEAGEIST => [
            'PHONY' => Forms::POLTEAGEIST_PHONY,
            'ANTIQUE' => Forms::POLTEAGEIST_ANTIQUE
        ],
        Pokemon::PUMPKABOO => [
            'SMALL' => Forms::PUMPKABOO_SMALL,
            'AVERAGE' => Forms::PUMPKABOO_AVERAGE,
            'LARGE' => Forms::PUMPKABOO_LARGE,
            'SUPER' => Forms::PUMPKABOO_SUPER
        ],
        Pokemon::URSHIFU => [
            'SINGLE_STRIKE' => Forms::URSHIFU_SINGLE,
            'RAPID_STRIKE' => Forms::URSHIFU_RAPID
        ]
    ];
}