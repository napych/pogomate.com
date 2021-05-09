<?php

namespace Pogo\Data\Parser;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Data\Manual\PokemonList;
use Pogo\Pokemon\Mods;

class Helper
{
    public static function generatePokemonConst(int $code): string
    {
        $shortConst = PokemonList::getConst(Mods::getId($code));
        $codeConst = 'Pokemon::' . $shortConst;
        $formBits = ($code & Mods::FORM_MASK);
        $formConst = FormsAlias::getConst($shortConst, $formBits);
        if ($formConst) {
            $codeConst .= ' | FormsAlias::' . $formConst;
        } elseif ($formBits) {
            echo 'WARNING: missing form ', Mods::getFormNum($code), ' description for ', $shortConst, PHP_EOL;
            $codeConst .= ' | Mods::FORM' . Mods::getFormNum($code);
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

}