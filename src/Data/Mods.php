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

    public static function getId($flaggedId)
    {
        return $flaggedId & static::ID_MASK;
    }

    public static function hasFlags($flaggedId)
    {
        return $flaggedId != static::getId($flaggedId);
    }

    public static function isAlolan($flaggedID)
    {
        return (bool)($flaggedID & static::ALOLAN);
    }

    public static function isShadow($flaggedId)
    {
        return (bool)($flaggedId & static::SHADOW);
    }

    public static function isGalarian($flaggedId)
    {
        return (bool)($flaggedId & static::GALARIAN);
    }

    public static function getForm($flaggedId)
    {
        return ($flaggedId & static::FORM_MASK) >> static::BASE_SHIFT;
    }
}