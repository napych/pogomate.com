<?php

namespace Pogo\Data;

use Pogo\Pokemon;

class Forms
{
    const FORMS = [
        Pokemon::GIRATINA => ['Origin Forme', 'Altered Forme'],
        Pokemon::MEWTWO => [null, 'Armored'],
        Pokemon::DEOXYS => ['Normal', 'Attack', 'Defense', 'Speed'],
        Pokemon::LANDORUS => ['Therian', 'Incarnate'],
    ];
}