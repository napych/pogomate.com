<?php

namespace Pogo\Data\Parser;

use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Manual\Forms;
use Pogo\Data\Manual\FormsAlias;
use Pogo\Data\Manual\PokemonList;
use Pogo\Pokemon\Mods;

class Helper
{
    public static function generatePokemonConst(int $code): string
    {
        $id = Mods::getId($code);
        $shortConst = PokemonList::getConst($id);
        $codeConst = 'Pokemon::' . $shortConst;
        if (!in_array($id, Forms::IGNORE_FORMS)) {
            $formBits = ($code & Mods::FORM_MASK);
            $formConst = FormsAlias::getConst($shortConst, $formBits);
            if ($formConst) {
                $codeConst .= ' | FormsAlias::' . $formConst;
            } elseif ($formBits) {
                echo 'WARNING: missing form ', Mods::getFormNum($code), ' description for ', $shortConst, PHP_EOL;
                $codeConst .= ' | Mods::FORM' . Mods::getFormNum($code);
            }
        }
        !($code & Mods::SHADOW) ?: $codeConst .= ' | Mods::SHADOW';
        !($code & Mods::ALOLAN) ?: $codeConst .= ' | Mods::ALOLAN';
        !($code & Mods::PURIFIED) ?: $codeConst .= ' | Mods::PURIFIED';
        !($code & Mods::GALARIAN) ?: $codeConst .= ' | Mods::GALARIAN';
        !($code & Mods::MEGA) ?: $codeConst .= ' | Mods::MEGA';
        !($code & Mods::MEGA_X) ?: $codeConst .= ' | Mods::MEGA_X';
        !($code & Mods::MEGA_Y) ?: $codeConst .= ' | Mods::MEGA_Y';
        return $codeConst;
    }

    protected static $names = [];
    const TRANSLATE_NAME = [
        'Sirfetch\'d' => PokemonList::SIRFETCH_D,
        'Jellicent' => PokemonList::JELLICENT,
        'Galarian Darmanitan' => PokemonList::DARMANITAN | Mods::GALARIAN,
        'Darmanitan' => PokemonList::DARMANITAN,
        'Genesect - Burn Drive' => PokemonList::GENESECT | FormsAlias::GENESECT_BURN
    ];


    protected static function loadNames()
    {
        if (!empty(self::$names)) {
            return;
        }
        self::$names = self::TRANSLATE_NAME;
        foreach (PokemonData::POKEMON as $id => $pokemonData) {
            self::$names[$pokemonData[PokemonData::FIELD_NAME]] = $id;
        }
    }

    public static function getCodeByName(string $name): ?int
    {
        self::loadNames();
        if (!isset(self::$names[$name])) {
            echo 'WARNING: can\'t find code for "' . $name . '"', PHP_EOL;
            return null;
        }
        return self::$names[$name];
    }

    public static function getFormName(int $code): ?string
    {
        if (in_array(Mods::getId($code), Forms::IGNORE_FORMS)) {
            return null;
        }
        return Forms::NAMES[Mods::getId($code)][Mods::getForm($code)] ?? null;
    }
}