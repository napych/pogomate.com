<?php

namespace Pogo\Data\Manual;

use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class Forms extends FormsAlias
{
    const NAMES = [
        Pokemon::BURMY => [
            self::BURMY_PLANT => 'Plant Cloak',
            self::BURMY_TRASH => 'Trash Cloak',
            self::BURMY_SANDY => 'Sandy Cloak'
        ],
        Pokemon::DEOXYS => [
            self::DEOXYS_NORMAL => 'Normal Forme',
            self::DEOXYS_ATTACK => 'Attack Forme',
            self::DEOXYS_DEFENSE => 'Defense Forme',
            self::DEOXYS_SPEED => 'Speed Forme'
        ],
        Pokemon::CASTFORM => [
            self::CASTFORM_NORMAL => null,
            self::CASTFORM_RAINY => 'Rainy',
            self::CASTFORM_SNOWY => 'Snowy',
            self::CASTFORM_SUNNY => 'Sunny'
        ],
        Pokemon::WORMADAM => [
            self::WORMADAM_PLANT => 'Plant Cloak',
            self::WORMADAM_SANDY => 'Sandy Cloak',
            self::WORMADAM_TRASH => 'Trash Cloak'
        ],
        Pokemon::CHERRIM => [
            self::CHERRIM_SUNNY => 'Sunshine Form',
            self::CHERRIM_OVERCAST => 'Overcast Form'
        ],
        Pokemon::GIRATINA => [
            self::GIRATINA_ORIGIN => 'Origin Forme',
            self::GIRATINA_ALTERED => 'Altered Forme'
        ],
        Pokemon::ROTOM => [
            self::ROTOM_NORMAL => null,
            self::ROTOM_FAN => 'Fan',
            self::ROTOM_FROST => 'Frost',
            self::ROTOM_HEAT => 'Fan',
            self::ROTOM_MOW => 'Fan',
            self::ROTOM_WASH => 'Wash'
        ],
        Pokemon::SHELLOS => [
            self::SHELLOS_EAST_SEA => 'East Sea',
            self::SHELLOS_WEST_SEA => 'West Sea'
        ],
        Pokemon::GASTRODON => [
            self::GASTRODON_EAST_SEA => 'East Sea',
            self::GASTRODON_WEST_SEA => 'West Sea'
        ],
        Pokemon::MEWTWO => [
            self::MEWTWO_NORMAL => null,
            self::MEWTWO_ARMORED => 'Armored Mewtwo'
        ],
        Pokemon::SHAYMIN => [
            self::SHAYMIN_LAND => 'Land Forme',
            self::SHAYMIN_SKY => 'Sky Forme',
        ],
        Pokemon::ARCEUS => [
            self::ARCEUS_NORMAL => 'Normal',
            self::ARCEUS_BUG => 'Bug',
            self::ARCEUS_DARK => 'Dark',
            self::ARCEUS_DRAGON => 'Dragon',
            self::ARCEUS_ELECTRIC => 'Electric',
            self::ARCEUS_FAIRY => 'Fairy',
            self::ARCEUS_FIGHTING => 'Fighting',
            self::ARCEUS_FIRE => 'Fire',
            self::ARCEUS_FLYING => 'Flying',
            self::ARCEUS_GHOST => 'Ghost',
            self::ARCEUS_GRASS => 'Grass',
            self::ARCEUS_GROUND => 'Ground',
            self::ARCEUS_ICE => 'Ice',
            self::ARCEUS_POISON => 'Poison',
            self::ARCEUS_PSYCHIC => 'Psychic',
            self::ARCEUS_ROCK => 'Rock',
            self::ARCEUS_STEEL => 'Steel',
            self::ARCEUS_WATER => 'Water'
        ],
        Pokemon::BASCULIN => [
            self::BASCULIN_BLUE_STRIPED => 'Blue-Striped',
            self::BASCULIN_RED_STRIPED => 'Red-Striped'
        ],
        Pokemon::DARMANITAN => [
            self::DARMANITAN_STANDARD => 'Standard Mode',
            self::DARMANITAN_ZEN => 'Zen Mode'
        ],
        Pokemon::KYUREM => [
            self::KYUREM_NORMAL => null,
            self::KYUREM_BLACK => 'Black Kyurem',
            self::KYUREM_WHITE => 'White Kyurem'
        ],
        Pokemon::DEERLING => [
            self::DEERLING_SPRING => 'Spring Form',
            self::DEERLING_SUMMER => 'Summer Form',
            self::DEERLING_AUTUMN => 'Autumn Form',
            self::DEERLING_WINTER => 'Winter Form'
        ],
        Pokemon::SAWSBUCK => [
            self::SAWSBUCK_SPRING => 'Spring Form',
            self::SAWSBUCK_SUMMER => 'Summer Form',
            self::SAWSBUCK_AUTUMN => 'Autumn Form',
            self::SAWSBUCK_WINTER => 'Winter Form'
        ],
        Pokemon::FRILLISH => [
            self::FRILLISH_MALE => 'Male',
            self::FRILLISH_FEMALE => 'Female'
        ],
        Pokemon::JELLICENT => [
            self::JELLICENT_MALE => 'Male',
            self::FRILLISH_FEMALE => 'Female'
        ],
        Pokemon::TORNADUS => [
            self::TORNADUS_INCARNATE => 'Incarnate Forme',
            self::TORNADUS_THERIAN => 'Therian Forme'
        ],
        Pokemon::THUNDURUS => [
            self::THUNDURUS_INCARNATE => 'Incarnate Forme',
            self::THUNDURUS_THERIAN => 'Therian Forme'
        ],
        Pokemon::LANDORUS => [
            self::THUNDURUS_INCARNATE => 'Incarnate Forme',
            self::THUNDURUS_THERIAN => 'Therian Forme'
        ],
        Pokemon::KELDEO => [
            self::KELDEO_ORDINARY => 'Ordinary Form',
            self::KELDEO_RESOLUTE => 'Resolute Form'
        ],
        Pokemon::MELOETTA => [
            self::MELOETTA_ARIA => 'Aria Forme',
            self::MELOETTA_PIROUETTE => 'Pirouette Forme'
        ],
        Pokemon::GENESECT => [
            self::GENESECT_NORMAL => null,
            self::GENESECT_BURN => 'Burn Drive',
            self::GENESECT_CHILL => 'Chill Drive',
            self::GENESECT_DOUSE => 'Douse Drive',
            self::GENESECT_SHOCK => 'Shock Drive'
        ],
        Pokemon::GRENINJA => [
            self::GRENINJA_NORMAL => null,
            self::GRENINJA_ASH => 'Ash-Greninja'
        ],
        Pokemon::VIVILLON => [
            self::VIVILLON_MEADOW => 'Meadow Pattern',
            self::VIVILLON_CONTINENTAL => 'Continental Pattern',
            self::VIVILLON_GARDEN => 'Garden Pattern',
            self::VIVILLON_ELEGANT => 'Elegant Pattern',
            self::VIVILLON_MARINE => 'Marine Pattern',
            self::VIVILLON_PLAINS => 'High Plains Pattern',
            self::VIVILLON_RIVER => 'River Pattern'
        ],
        Pokemon::PYROAR => [
            self::PYROAR_MALE => 'Male',
            self::PYROAR_FEMALE => 'Female'
        ],
        Pokemon::FURFROU => [
            self::FURFROU_NATURAL => 'Natural Form',
            self::FURFROU_HEART => 'Heart Trim',
            self::FURFROU_STAR => 'Star Trim',
            self::FURFROU_DIAMOND => 'Diamond Trim'
        ],
        Pokemon::MEOWSTIC => [
            self::MEOWSTIC_MALE => 'Male',
            self::MEOWSTIC_FEMALE => 'Female'
        ],
        Pokemon::AEGISLASH => [
            self::AEGISLASH_SHIELD => 'Shield Forme',
            self::AEGISLASH_BLADE => 'Blade Forme'
        ],
        Pokemon::ZYGARGE => [
            self::ZYGARGE_HALF => '50% Forme',
            self::ZYGARGE_TENTH => '10% Forme',
            self::ZYGARGE_FULL => 'Complete Forme'
        ],
        Pokemon::HOOPA => [
            self::HOOPA_CONFINED => 'Hoopa Confined',
            self::HOOPA_UNBOUND => 'Hoopa Unbound'
        ],
        Pokemon::ORICORIO => [
            self::ORICORIO_BAILE => 'Baile Style',
            self::ORICORIO_POMPOM => 'Pom-Pom Style',
            self::ORICORIO_PAU => 'Pa\'u Style',
            self::ORICORIO_SENSU => 'Sensu Style'
        ],
        Pokemon::LYCANROC => [
            self::LYCANROC_MIDDAY => 'Midday Form',
            self::LYCANROC_MIDNIGHT => 'Midnight Form',
            self::LYCANROC_DUSK => 'Dusk Form'
        ],
        Pokemon::WISHIWASHI => [
            self::WISHIWASHI_SOLO => 'Solo Form',
            self::WISHIWASHI_SCHOOL => 'School Form'
        ],
        Pokemon::MINIOR => [
            self::MINIOR_METEOR => 'Meteor Form',
            self::MINIOR_RED => 'Red Core'
        ],
        Pokemon::NECROZMA => [
            self::NECROZMA_NORMAL => null,
            self::NECROZMA_DUSK => 'Dusk Mane',
            self::NECROZMA_DAWN => 'Dawn Wings',
            self::NECROZMA_ULTRA => 'Ultra Necrozma'
        ],
        Pokemon::TOXTRICITY => [
            self::TOXTRICITY_LOW => 'Low Key Form',
            self::TOXTRICITY_AMPED => 'Amped Form'
        ],
        Pokemon::ALCREMIE => [
            self::ALCREMIE_VANILLA => 'Vanilla Cream'
        ],
        Pokemon::INDEEDEE => [
            self::INDEEDEE_FEMALE => 'Female',
            self::INDEEDEE_MALE => 'Male'
        ],
        Pokemon::MORPEKO => [
            self::MORPEKO_BELLY => 'Full Belly Mode',
            self::MORPEKO_HANGRY => 'Hangry Mode'
        ],
        Pokemon::ZACIAN => [
            self::ZACIAN_HERO => 'Hero of Many Battles',
            self::ZACIAN_CROWNED => 'Crowned Sword'
        ],
        Pokemon::ZAMAZENTA => [
            self::ZAMAZENTA_HERO => 'Hero of Many Battles',
            self::ZAMAZENTA_CROWNED => 'Crowned Shield'
        ],
        Pokemon::URSHIFU => [
            self::URSHIFU_SINGLE => 'Single Strike Style',
            self::URSHIFU_RAPID => 'Rapid Strike Style'
        ]
    ];

    /** @deprecated */
    const FORMS = [
        Pokemon::CHARIZARD | Mods::MEGA => ['Mega X', 'Mega Y'],
        Pokemon::MEWTWO | Mods::MEGA => ['Mega X', 'Mega Y'],
        Pokemon::KYOGRE => [null, 'Primal Reversion'],
        Pokemon::GROUDON => [null, 'Primal Reversion'],
    ];
}
