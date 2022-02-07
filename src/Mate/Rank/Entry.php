<?php

declare(strict_types=1);

namespace Pogo\Mate\Rank;

use Pogo\Mate\Leagues;
use Pogo\Mate\Stats;
use Pogo\Pokemon;

/**
 * PVP Rank entry
 */
class Entry
{
    public Pokemon $pokemon;
    public int $attack;
    public int $defense;
    public int $stamina;
    public string $league;
    public int $rank40;
    public int $level40;
    public float $prod40;
    public float $percent40;
    public int $rank41;
    public int $level41;
    public float $prod41;
    public float $percent41;
    public int $rank50;
    public int $level50;
    public float $prod50;
    public float $percent50;
    public int $rank51;
    public int $level51;
    public float $prod51;
    public float $percent51;
    public int $cp40;
    public int $cp41;
    public int $cp50;
    public int $cp51;

    public float $statCache;

    /**
     * @param \Pogo\Pokemon $pokemon
     * @param string $league
     * @param int $indAttack
     * @param int $indDefense
     * @param int $indStamina
     * @return \Pogo\Mate\Rank\Entry|null
     */
    public static function generate(
        Pokemon $pokemon,
        string $league,
        int $indAttack,
        int $indDefense,
        int $indStamina
    ): ?Entry {
        $maxCP = Leagues::getMaxCP($league);

        $newRank = new static();
        $newRank->pokemon = $pokemon;
        $newRank->attack = $indAttack;
        $newRank->defense = $indDefense;
        $newRank->stamina = $indStamina;
        $newRank->league = $league;

        // 51
        if (($cp = Stats::getRankCP($newRank, 51)) <= $maxCP) {
            $newRank->level51 = 51;
            $newRank->prod51 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, 51);
            $newRank->cp51 = $cp;
        }
        // 50-42
        for ($level = 50; $level >= 42; $level--) {
            if (($cp = Stats::getRankCP($newRank, $level)) <= $maxCP) {
                $newRank->level50 = $level;
                $newRank->prod50 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, $level);
                $newRank->cp50 = $cp;
                break;
            }
        }
        // 41
        if (($cp = Stats::getRankCP($newRank, 41)) <= $maxCP) {
            $newRank->level41 = 41;
            $newRank->prod41 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, 41);
            $newRank->cp41 = $cp;
        }
        // 40-1
        for ($level = 40; $level >= 1; $level--) {
            if (($cp = Stats::getRankCP($newRank, $level)) <= $maxCP) {
                $newRank->level40 = $level;
                $newRank->prod40 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, 40);
                $newRank->cp40 = $cp;
                break;
            }
        }
        if (!isset($newRank->prod41)) {
            $newRank->level41 = $newRank->level40;
            $newRank->prod41 = $newRank->prod40;
            $newRank->cp41 = $newRank->cp40;
        }
        if (!isset($newRank->prod50)) {
            $newRank->level50 = $newRank->level41;
            $newRank->prod50 = $newRank->prod41;
            $newRank->cp50 = $newRank->cp41;
        }
        if (!isset($newRank->prod51)) {
            $newRank->level51 = $newRank->level50;
            $newRank->prod51 = $newRank->prod50;
            $newRank->cp51 = $newRank->cp50;
        }
        return $newRank;
    }

    public function getSql(): string
    {
        $ins = [
            'pokemon' => $this->pokemon->getCode(),
            'attack' => $this->attack,
            'defense' => $this->defense,
            'stamina' => $this->stamina,
            'league' => $this->league,
            'rank40' => $this->rank40,
            'level40' => $this->level40,
            'prod40' => $this->prod40,
            'percent40' => $this->percent40,
            'rank41' => $this->rank41,
            'level41' => $this->level41,
            'prod41' => $this->prod41,
            'percent41' => $this->percent41,
            'rank50' => $this->rank50,
            'level50' => $this->level50,
            'prod50' => $this->prod50,
            'percent50' => $this->percent50,
            'rank51' => $this->rank51,
            'level51' => $this->level51,
            'prod51' => $this->prod51,
            'percent51' => $this->percent51,
            'cp40' => $this->cp40,
            'cp41' => $this->cp41,
            'cp50' => $this->cp50,
            'cp51' => $this->cp51
        ];
        $line = [];
        foreach ($ins as $key => $value) {
            $line[] = "`$key`='$value'";
        }
        return 'INSERT INTO `rank` SET ' . implode(',', $line);
    }
}