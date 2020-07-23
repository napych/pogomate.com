<?php

namespace Pogo\Data;

class Mods
{
    const BASE_SHIFT = 12;
    const ID_MASK = (1 << self::BASE_SHIFT) - 1;

    const FORM_BITS = 2;
    const FORM_MASK = 3 << self::BASE_SHIFT;
    const FORM1 = 0 << self::BASE_SHIFT;
    const FORM2 = 1 << self::BASE_SHIFT;
    const FORM3 = 2 << self::BASE_SHIFT;
    const FORM4 = 3 << self::BASE_SHIFT;

    const FLAGS_SHIFT = (self::BASE_SHIFT + self::FORM_BITS);
    const ALOLAN = 1 << (self::FLAGS_SHIFT);
    const GALARIAN = 1 << (self::FLAGS_SHIFT + 1);
    const SHADOW = 1 << (self::FLAGS_SHIFT + 2);

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

    public static function getForm($code)
    {
        return ($code & static::FORM_MASK) >> static::BASE_SHIFT;
    }

    public static function getFormFlags($form)
    {
        return $form << self::BASE_SHIFT;
    }
}