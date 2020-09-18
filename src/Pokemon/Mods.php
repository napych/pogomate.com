<?php

namespace Pogo\Pokemon;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon;

class Mods
{
    const BASE_SHIFT = 12;
    const ID_MASK = (1 << self::BASE_SHIFT) - 1;

    const FORM_BITS = 5;
    const FORM_SHIFT = self::BASE_SHIFT;
    const FORM_MASK = 31 << self::FORM_SHIFT;
    const FORM1 = 0 << self::FORM_SHIFT;
    const FORM2 = 1 << self::FORM_SHIFT;
    const FORM3 = 2 << self::FORM_SHIFT;
    const FORM4 = 3 << self::FORM_SHIFT;
    const FORM5 = 4 << self::FORM_SHIFT;
    const FORM6 = 5 << self::FORM_SHIFT;
    const FORM7 = 6 << self::FORM_SHIFT;
    const FORM8 = 7 << self::FORM_SHIFT;
    const FORM9 = 8 << self::FORM_SHIFT;
    const FORM10 = 9 << self::FORM_SHIFT;
    const FORM11 = 10 << self::FORM_SHIFT;
    const FORM12 = 11 << self::FORM_SHIFT;
    const FORM13 = 12 << self::FORM_SHIFT;
    const FORM14 = 13 << self::FORM_SHIFT;
    const FORM15 = 14 << self::FORM_SHIFT;
    const FORM16 = 15 << self::FORM_SHIFT;
    const FORM17 = 16 << self::FORM_SHIFT;
    const FORM18 = 17 << self::FORM_SHIFT;
    const FORM19 = 18 << self::FORM_SHIFT;
    const FORM20 = 19 << self::FORM_SHIFT;
    const FORM21 = 20 << self::FORM_SHIFT;
    const FORM22 = 21 << self::FORM_SHIFT;
    const FORM23 = 22 << self::FORM_SHIFT;
    const FORM24 = 23 << self::FORM_SHIFT;
    const FORM25 = 24 << self::FORM_SHIFT;
    const FORM26 = 25 << self::FORM_SHIFT;
    const FORM27 = 26 << self::FORM_SHIFT;
    const FORM28 = 27 << self::FORM_SHIFT;
    const FORM29 = 28 << self::FORM_SHIFT;
    const FORM30 = 29 << self::FORM_SHIFT;
    const FORM31 = 30 << self::FORM_SHIFT;
    const FORM32 = 31 << self::FORM_SHIFT;

    const FLAGS_SHIFT = (self::FORM_SHIFT + self::FORM_BITS);
    const ALOLAN = 1 << (self::FLAGS_SHIFT);
    const GALARIAN = 1 << (self::FLAGS_SHIFT + 1);
    const SHADOW = 1 << (self::FLAGS_SHIFT + 2);
    const MEGA = 1 << (self::FLAGS_SHIFT + 3);
    const PURIFIED = 1 << (self::FLAGS_SHIFT + 4);

    public static function getId($code)
    {
        return $code & static::ID_MASK;
    }

    public static function hasFlags($code)
    {
        return $code != static::getId($code);
    }

    public static function isAlolan($code)
    {
        return (bool)($code & static::ALOLAN);
    }

    public static function isShadow($code)
    {
        return (bool)($code & static::SHADOW);
    }

    public static function isGalarian($code)
    {
        return (bool)($code & static::GALARIAN);
    }

    public static function isPurified($code)
    {
        return (bool)($code & static::PURIFIED);
    }

    public static function getForm($code)
    {
        return $code & static::FORM_MASK;
    }

    public static function getFormNum($code)
    {
        return (static::getForm($code) >> static::FORM_SHIFT) + 1;
    }

    public static function getConst(int $code, bool $short = false)
    {
        $name = Pokemon::getConst($code);
        if ($short) {
            return $name;
        }
        if (static::isAlolan($code)) {
            $name .= '_ALOLA';
        }
        if (static::isGalarian($code)) {
            $name .= '_GALARIAN';
        }
        if (static::isShadow($code)) {
            $name .= '_SHADOW';
        }
        if (static::isGalarian($code)) {
            $name .= '_GALARIAN';
        }
        if ($formAlias = FormsAlias::getConst($name, $code)) {
            $name = $formAlias;
        }
        return $name;
    }
}
