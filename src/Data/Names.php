<?php

namespace Pogo\Data;

use Pogo\Pokemon;
use ReflectionClass;

class Names {
    const CUSTOM = [
        Pokemon::NIDORAN_F => 'Nidoran♀',
        Pokemon::NIDORAN_M => 'Nidoran♂',
        Pokemon::FARFETCH_D => 'Farfetch\'d',
        Pokemon::MR_MIME => 'Mr. Mime',
        Pokemon::HO_OH => 'Ho-Oh',
        Pokemon::MIME_JR => 'Mime Jr.',
        Pokemon::SIRFETCH_D => 'Sirfetch\'d'
    ];

    protected static $names = [];

    /**
     * @param Pokemon|int $pokemon
     * @return mixed|string
     */
    public static function getName($pokemon)
    {
        if ($pokemon instanceof Pokemon) {
            $pokemon = $pokemon->getPokedexId();
        }
        if (isset(self::CUSTOM[$pokemon])) {
            return self::CUSTOM[$pokemon];
        }
        if (empty(static::$names)) {
            $fooClass = new ReflectionClass('\\Pogo\\Data\\PokemonList');
            $constants = $fooClass->getConstants();
            foreach ($constants as $name => $value) {
                static::$names[$value] = ucfirst(strtolower($name));
            }
        }
        return static::$names[$pokemon] ?? "Unknown ({$pokemon})";
    }
}