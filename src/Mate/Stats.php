<?php

namespace Pogo\Mate;

use Pogo\Pokemon;

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
        return $cp >= 10 ? floor($cp) : 10;
    }

    public static function getStatProduct(Pokemon $pokemon, int $indAttack, int $indDefense, int $indStamina, float $level): float
    {
        $multiplier = Level::getCpMultiplier($level);
        $attack = ($pokemon->getAttack() + $indAttack) * $multiplier;
        $defense = ($pokemon->getDefense() + $indDefense) * $multiplier;
        $stamina = floor(($pokemon->getStamina() + $indStamina) * $multiplier);
        return round($attack * $defense * $stamina) / 1000;
    }
}
