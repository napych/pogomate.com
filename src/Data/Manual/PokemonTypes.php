<?php

namespace Pogo\Data\Manual;

class PokemonTypes
{
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';

    const POKEMON = [
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
