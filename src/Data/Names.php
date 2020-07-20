<?php

namespace Pogo\Data;

use Pogo\Pokemon;
use ReflectionClass;

class Names
{
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
    protected static $codes = [];

    /**
     * @param Pokemon|int $pokemon
     * @return mixed|string
     */
    public static function getName($pokemon)
    {
        self::init();

        if (isset(self::$codes[$pokemon->getCode()])) {
            return self::$codes[$pokemon->getCode()];
        }

        $pokedexId = $pokemon->getPokedexId();
        if (isset(self::CUSTOM[$pokedexId])) {
            $name = self::CUSTOM[$pokedexId];
        } elseif (static::$names[$pokedexId]) {
            $name = static::$names[$pokedexId];
        } else {
            $name = "Unknown $pokedexId";
        }
        $flags = [];
        if ($pokemon->isShadow()) {
            $flags[] = 'Shadow';
        }
        if ($pokemon->isAlolan()) {
            $flags[] = 'Alolan';
        }
        if ($form = $pokemon->getFormName()) {
            $flags[] = $form;
        }
        if (!empty($flags)) {
            $name .= ' (' . implode(', ', $flags) . ')';
        }
        return self::$codes[$pokemon->getCode()] = $name;
    }

    protected static function init()
    {
        if (!empty(static::$names)) {
            return;
        }
        $fooClass = new ReflectionClass('\\Pogo\\Data\\PokemonList');
        $constants = $fooClass->getConstants();
        foreach ($constants as $name => $value) {
            static::$names[$value] = ucfirst(strtolower($name));
        }
    }
}