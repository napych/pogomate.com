<?php

namespace Pogo\Lists\Evolutions;

use Pogo\General\Mods;
use Pogo\Pokemon;

class Gigantamax
{
    const DESCRIPTION = 'Gigantamax evolutions';
    const GIGANTAMAX = [
        Pokemon::VENUSAUR,
        Pokemon::CHARIZARD,
        Pokemon::BLASTOISE,
        Pokemon::BUTTERFREE,
        Pokemon::PIKACHU,
        Pokemon::MEOWTH,
        Pokemon::MACHAMP,
        Pokemon::GENGAR,
        Pokemon::KINGLER,
        Pokemon::LAPRAS,
        Pokemon::EEVEE,
        Pokemon::SNORLAX,
        Pokemon::GARBODOR,
        Pokemon::RILLABOOM,
        Pokemon::CINDERACE,
        Pokemon::INTELEON,
        Pokemon::CORVIKNIGHT,
        Pokemon::ORBEETLE,
        Pokemon::DREDNAW,
        Pokemon::COALOSSAL,
        Pokemon::FLAPPLE,
        Pokemon::APPLETUN,
        Pokemon::SANDACONDA,
        Pokemon::TOXTRICITY,
        Pokemon::CENTISKORCH,
        Pokemon::HATTERENE,
        Pokemon::GRIMMSNARL,
        Pokemon::ALCREMIE,
        Pokemon::COPPERAJAH,
        Pokemon::DURALUDON,
        Pokemon::URSHIFU | Mods::FORM1,
        Pokemon::URSHIFU | Mods::FORM2,
    ];
}
