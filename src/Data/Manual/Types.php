<?php

namespace Pogo\Data\Manual;

class Types
{
    const FAIRY = 'Fairy';
    const STEEL = 'Steel';
    const DARK = 'Dark';
    const DRAGON = 'Dragon';
    const GHOST = 'Ghost';
    const ROCK = 'Rock';
    const BUG = 'Bug';
    const PSYCHIC = 'Psychic';
    const FLYING = 'Flying';
    const GROUND = 'Ground';
    const POISON = 'Poison';
    const FIGHTING = 'Fighting';
    const ICE = 'Ice';
    const GRASS = 'Grass';
    const ELECTRIC = 'Electric';
    const WATER = 'Water';
    const FIRE = 'Fire';
    const NORMAL = 'Normal';

    const TYPE_ENUM = [
        self::BUG,
        self::DARK,
        self::DRAGON,
        self::ELECTRIC,
        self::FIGHTING,
        self::FIRE,
        self::FLYING,
        self::GHOST,
        self::GRASS,
        self::GROUND,
        self::FAIRY,
        self::ICE,
        self::NORMAL,
        self::POISON,
        self::PSYCHIC,
        self::ROCK,
        self::STEEL,
        self::WATER
    ];

    /**
     * Get constant name from value (for code generation)
     * @param string $type
     * @return string|null
     */
    public static function getConst(string $type): ?string
    {
        static $typeConst = null;
        if ($typeConst) {
            return $typeConst[$type] ?? null;
        }
        $reflection = new \ReflectionClass(__CLASS__);
        $constants = $reflection->getConstants();
        $typeConst = [];
        foreach ($constants as $name => $value) {
            if (in_array($value, self::TYPE_ENUM)) {
                $typeConst[$value] = $name;
            }
        }
        return $typeConst[$type] ?? null;
    }

}
