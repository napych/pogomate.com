<?php

declare(strict_types=1);

namespace Pogo\Mate\Rank;

use Difra\DB;
use Pogo\Mate\Leagues;
use Pogo\Pokemon;

/**
 * Ranks list for a pokemon
 */
class RankList
{
    /**
     * Generate all rows for pokémon
     * @param \Pogo\Pokemon $pokemon
     * @throws \Difra\DB\Exception
     */
    public static function generate(Pokemon $pokemon)
    {
        $ranks = [];
        foreach ([Leagues::GL, Leagues::GL] as $league) {
            /** @var \Pogo\Mate\Rank\Entry[] $subList */
            $subList = [];
            for ($attack = 0; $attack <= 15; $attack++) {
                for ($defense = 0; $defense <= 15; $defense++) {
                    for ($stamina = 0; $stamina <= 15; $stamina++) {
                        $subList[] = Entry::generate(
                            $pokemon,
                            $league,
                            $attack,
                            $defense,
                            $stamina
                        );
                    }
                }
            }
            static::hydrate($subList);
            $ranks[$league] = $subList;
        }
        $file = fopen('bin/ranks.sql', 'a');
        fputs($file, "DELETE FROM `rank` WHERE `pokemon`='{$pokemon->getCode()}';\n");
        foreach ($ranks as $subList) {
            foreach ($subList as $rank) {
                fputs($file, $rank->getSQL() . "\n");
            }
        }
        fclose($file);
    }

    protected static function hydrate(array &$ranks): void
    {
        // 40
        usort($ranks, function ($r1, $r2) {
            return $r2->prod40 <=> $r1->prod40;
        });
        $maxProd = $ranks[0]->prod40;
        foreach ($ranks as $key => $entry) {
            $entry->rank40 = $key + 1;
            $entry->percent40 = round($entry->prod40 / $maxProd * 100, 2);
        }
        // 41
        usort($ranks, function ($r1, $r2) {
            return $r2->prod41 <=> $r1->prod41;
        });
        $maxProd = $ranks[0]->prod41;
        foreach ($ranks as $key => $entry) {
            $entry->rank41 = $key + 1;
            $entry->percent41 = round($entry->prod41 / $maxProd * 100, 2);
        }
        // 50
        usort($ranks, function ($r1, $r2) {
            return $r2->prod50 <=> $r1->prod50;
        });
        $maxProd = $ranks[0]->prod50;
        foreach ($ranks as $key => $entry) {
            $entry->rank50 = $key + 1;
            $entry->percent50 = round($entry->prod50 / $maxProd * 100, 2);
        }
        // 51
        usort($ranks, function ($r1, $r2) {
            return $r2->prod51 <=> $r1->prod51;
        });
        $maxProd = $ranks[0]->prod51;
        foreach ($ranks as $key => $entry) {
            $entry->rank51 = $key + 1;
            $entry->percent51 = round($entry->prod51 / $maxProd * 100, 2);
        }
    }
}