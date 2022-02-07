<?php

declare(strict_types=1);

namespace Pogo\Mate;

use Pogo\Mate\Rank\Entry;
use Pogo\Pokemon;

/**
 * Stats calc
 */
class Stats
{
    /**
     * Don't create objects
     */
    protected function __construct()
    {
    }

    /**
     * Don't clone objects
     */
    protected function __clone()
    {
    }

    public static function getCP(Pokemon $pokemon, int $indAttack, int $indDefense, int $indStamina, float $level): int
    {
        $attack = $pokemon->getAttack() + $indAttack;
        $defense = $pokemon->getDefense() + $indDefense;
        $stamina = $pokemon->getStamina() + $indStamina;
        $cp = $attack * sqrt($defense) * sqrt($stamina)
            * Level::getCpMultiplier($level) * Level::getCpMultiplier($level) / 10;
        return $cp >= 10 ? (int) floor($cp) : 10;
    }

    public static function getRankCP(Entry &$entry, int $level)
    {
        if (!isset($entry->statCache)) {
            $attack = $entry->pokemon->getAttack() + $entry->attack;
            $defense = $entry->pokemon->getDefense() + $entry->defense;
            $stamina = $entry->pokemon->getStamina() + $entry->stamina;
            $entry->statCache = $attack * sqrt($defense) * sqrt($stamina) / 10;
        }
        $cp = $entry->statCache * Level::getCpMultiplier($level) * Level::getCpMultiplier($level);
        return $cp >= 10 ? (int) floor($cp) : 10;
    }
}
