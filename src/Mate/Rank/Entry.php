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
    public float $level40;
    public float $prod40;
    public float $percent40;
    public int $cp40;
    public int $rank50;
    public float $level50;
    public float $prod50;
    public float $percent50;
    public int $cp50;

    public float $statCache;

    public static function load(array $data): static
    {
        $obj = new static();
        $obj->pokemon = Pokemon::get($data['pokemon']);
        $obj->attack = $data['attack'];
        $obj->defense = $data['defense'];
        $obj->stamina = $data['stamina'];
        $obj->league = $data['league'];
        $obj->rank40 = $data['rank40'];
        $obj->rank50 = $data['rank50'];
        $obj->level40 = $data['level40'] / 2;
        $obj->level50 = $data['level50'] / 2;
        $obj->prod40 = $data['prod40'];
        $obj->prod50 = $data['prod50'];
        $obj->percent40 = $data['percent40'];
        $obj->percent50 = $data['percent50'];
        $obj->cp40 = $data['cp40'];
        $obj->cp50 = $data['cp50'];
        return $obj;
    }

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

        // 50-40.5
        for ($level = 50.0; $level >= 40.5; $level -= 0.5) {
            if (($cp = Stats::getRankCP($newRank, $level)) <= $maxCP) {
                $newRank->level50 = $level;
                $newRank->prod50 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, $level);
                $newRank->cp50 = $cp;
                break;
            }
        }
        // 40-1
        for ($level = 40.0; $level >= 1.0; $level -= 0.5) {
            if (($cp = Stats::getRankCP($newRank, $level)) <= $maxCP) {
                $newRank->level40 = $level;
                $newRank->prod40 = Calc::getStatProduct($pokemon, $indAttack, $indDefense, $indStamina, $level);
                $newRank->cp40 = $cp;
                break;
            }
        }
        if (!isset($newRank->prod50)) {
            $newRank->level50 = $newRank->level40;
            $newRank->prod50 = $newRank->prod40;
            $newRank->cp50 = $newRank->cp40;
        }
        return $newRank;
    }

    public function getSql(): string
    {
        $ins = $this->toArray(true);
        $line = [];
        foreach ($ins as $key => $value) {
            $line[] = "`$key`='$value'";
        }
        return 'REPLACE INTO `rank` SET ' . implode(',', $line);
    }

    /**
     * @param bool $forSql
     * @return array
     */
    public function toArray(bool $forSql = false): array
    {
        $levelK = $forSql ? 2 : 1;
        return [
            'pokemon' => $this->pokemon->getCode(),
            'attack' => $this->attack,
            'defense' => $this->defense,
            'stamina' => $this->stamina,
            'league' => $this->league,
            'rank40' => $this->rank40,
            'level40' => $this->level40 * $levelK,
            'prod40' => $this->prod40,
            'percent40' => $this->percent40,
            'rank50' => $this->rank50,
            'level50' => $this->level50 * $levelK,
            'prod50' => $this->prod50,
            'percent50' => $this->percent50,
            'cp40' => $this->cp40,
            'cp50' => $this->cp50,
        ];
    }

    public function getXML(\DOMElement $node, string|bool $addNode = false): \DOMElement
    {
        if ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement(is_string($addNode) ? $addNode : 'rank'));
        }
        foreach ($this->toArray() as $key => $value) {
            $node->setAttribute($key, (string) $value);
        }
        return $node;
    }
}