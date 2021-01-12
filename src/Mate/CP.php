<?php

namespace Pogo\Mate;

use Pogo\Pokemon;

class CP
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
        return
            $attack * sqrt($defense) * sqrt($stamina)
            * Level::getCpMultiplier($level) * Level::getCpMultiplier($level) / 10
        ;
    }
}