<?php

declare(strict_types=1);

namespace Pogo\Mate\Rank;

use Pogo\Mate\Level;
use Pogo\Pokemon;

/**
 * PVP Rank
 */
class Calc
{
    /**
     * @param \Pogo\Pokemon $pokemon
     * @param int $indAttack
     * @param int $indDefense
     * @param int $indStamina
     * @param float $level
     * @return float
     */
    public static function getStatProduct(Pokemon $pokemon, int $indAttack, int $indDefense, int $indStamina, float $level): float
    {
        $multiplier = Level::getCpMultiplier($level);
        $attack = ($pokemon->getAttack() + $indAttack) * $multiplier;
        $defense = ($pokemon->getDefense() + $indDefense) * $multiplier;
        $stamina = floor(($pokemon->getStamina() + $indStamina) * $multiplier);
        return round($attack * $defense * $stamina) / 1000;
    }
}