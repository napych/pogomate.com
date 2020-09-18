<?php

namespace Pogo\Pokemon;

class Mods
{
    const BASE_SHIFT = 12;
    const ID_MASK = (1 << self::BASE_SHIFT) - 1;

    const FORM_BITS = 5;
    const FORM_MASK = 31 << self::BASE_SHIFT;
    const FORM1 = 0 << self::BASE_SHIFT;
    const FORM2 = 1 << self::BASE_SHIFT;
    const FORM3 = 2 << self::BASE_SHIFT;
    const FORM4 = 3 << self::BASE_SHIFT;
    const FORM5 = 4 << self::BASE_SHIFT;
    const FORM6 = 5 << self::BASE_SHIFT;
    const FORM7 = 6 << self::BASE_SHIFT;
    const FORM8 = 7 << self::BASE_SHIFT;
    const FORM9 = 8 << self::BASE_SHIFT;
    const FORM10 = 9 << self::BASE_SHIFT;
    const FORM11 = 10 << self::BASE_SHIFT;
    const FORM12 = 11 << self::BASE_SHIFT;
    const FORM13 = 12 << self::BASE_SHIFT;
    const FORM14 = 13 << self::BASE_SHIFT;
    const FORM15 = 14 << self::BASE_SHIFT;
    const FORM16 = 15 << self::BASE_SHIFT;
    const FORM17 = 16 << self::BASE_SHIFT;
    const FORM18 = 17 << self::BASE_SHIFT;
    const FORM19 = 18 << self::BASE_SHIFT;
    const FORM20 = 19 << self::BASE_SHIFT;
    const FORM21 = 20 << self::BASE_SHIFT;
    const FORM22 = 21 << self::BASE_SHIFT;
    const FORM23 = 22 << self::BASE_SHIFT;
    const FORM24 = 23 << self::BASE_SHIFT;
    const FORM25 = 24 << self::BASE_SHIFT;
    const FORM26 = 25 << self::BASE_SHIFT;
    const FORM27 = 26 << self::BASE_SHIFT;
    const FORM28 = 27 << self::BASE_SHIFT;
    const FORM29 = 28 << self::BASE_SHIFT;
    const FORM30 = 29 << self::BASE_SHIFT;
    const FORM31 = 30 << self::BASE_SHIFT;
    const FORM32 = 31 << self::BASE_SHIFT;

    const FLAGS_SHIFT = (self::BASE_SHIFT + self::FORM_BITS);
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

    public static function getFormFlags($form)
    {
        return $form << self::BASE_SHIFT;
    }
}
