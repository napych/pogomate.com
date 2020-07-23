<?php

namespace Pogo\Data;

use Pogo\Pokemon;

class Forms
{
    const FORMS = [
        Pokemon::CHARIZARD | Mods::MEGA => ['Mega X', 'Mega Y'],
        Pokemon::GIRATINA => ['Origin Forme', 'Altered Forme'],
        Pokemon::MEWTWO => [null, 'Armored'],
        Pokemon::MEWTWO | Mods::MEGA => ['Mega X', 'Mega Y'],
        Pokemon::KYOGRE => [null, 'Primal Reversion'],
        Pokemon::GROUDON => [null, 'Primal Reversion'],
        Pokemon::DEOXYS => ['Normal Forme', 'Attack Forme', 'Defense Forme', 'Speed Forme'],
        Pokemon::BURMY => ['Plant Cloak', 'Trash Cloak', 'Sandy Cloak'],
        Pokemon::WORMADAM => ['Plant Cloak', 'Trash Cloak', 'Sandy Cloak'],
        Pokemon::SHAYMIN => ['Land Forme', 'Sky Forme'],
        Pokemon::TORNADUS => ['Incarnate Forme', 'Therian Forme'],
        Pokemon::THUNDURUS => ['Incarnate Forme', 'Therian Forme'],
        Pokemon::LANDORUS => ['Incarnate Forme', 'Therian Forme'],
        Pokemon::KYUREM => [null, 'White', 'Black'],
//        Pokemon::FURFROU => ['Natural Form', 'Heart Trim', 'Star Trim', 'Diamond Trim'],
        Pokemon::AEGISLASH => ['Shield Forme', 'Blade Forme'],
        Pokemon::ZYGARGE => ['50% Forme', '10% Forme', 'Complete Forme'],
        Pokemon::HOOPA => ['Hoopa Confined', 'Hoopa Unbound'],
        Pokemon::LYCANROC => ['Midday Form', 'Midnight Form', 'Dusk Form'],
        Pokemon::WISHIWASHI => ['Solo Form', 'School Form'],
        Pokemon::MINIOR => ['Meteor Form', 'Red Core'],
        Pokemon::NECROZMA => [null, 'Dusk Mane', 'Dawn Wings', 'Ultra Necrozma'],
        Pokemon::TOXTRICITY => ['Low Key Form', 'Amped Form'],
    ];
}