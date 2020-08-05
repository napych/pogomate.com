<?php

namespace Pogo\Data;

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
    const FIGHT = 'Fight';
    const ICE = 'Ice';
    const GRASS = 'Grass';
    const ELECTRIC = 'Electric';
    const WATER = 'Water';
    const FIRE = 'Fire';
    const NORMAL = 'Normal';

    const VULNERABILITIES = [
        self::FAIRY => [self::POISON, self::STEEL],
        self::STEEL => [self::FIRE, self::FIGHT, self::GROUND],
        self::DARK => [self::FIGHT, self::BUG, self::FAIRY],
        self::DRAGON => [self::ICE, self::DRAGON, self::FAIRY],
        self::GHOST => [self::GHOST, self::DARK],
        self::ROCK => [self::WATER, self::GRASS, self::FIGHT, self::GROUND, self::STEEL],
        self::BUG => [self::FIRE, self::FLYING, self::ROCK],
        self::PSYCHIC => [self::BUG, self::GHOST, self::DARK],
        self::FLYING => [self::ELECTRIC, self::ICE, self::ROCK],
        self::GROUND => [self::WATER, self::GRASS, self::ICE],
        self::POISON => [self::GROUND, self::PSYCHIC],
        self::FIGHT => [self::FLYING, self::PSYCHIC, self::FAIRY],
        self::ICE => [self::FIRE, self::FIGHT, self::ROCK, self::STEEL],
        self::GRASS => [self::FIRE, self::ICE, self::POISON, self::FLYING, self::BUG],
        self::ELECTRIC => [self::GROUND],
        self::WATER => [self::ELECTRIC, self::GRASS],
        self::FIRE => [self::WATER, self::GROUND, self::ROCK],
        self::NORMAL => [self::FIGHT]
    ];

    protected static $effective = null;

    protected static function fillEffective()
    {
        if (!empty(static::$effective)) {
            return;
        }
        static::$effective = [];
        foreach (static::VULNERABILITIES as $type => $vulnerabilities) {
            foreach ($vulnerabilities as $vulnerability) {
                if (!isset(static::$effective[$vulnerability])) {
                    static::$effective[$vulnerability] = [$type];
                } else {
                    static::$effective[$vulnerability][] = $type;
                }
            }
        }
    }

    public static function getVulnerabilities(string $type): array
    {
        return self::VULNERABILITIES[$type] ?? [];
    }

    public static function getEffective(string $type): array
    {
        static::fillEffective();
        return self::$effective[$type] ?? [];
    }
}