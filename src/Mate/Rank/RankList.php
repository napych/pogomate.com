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
     */
    public static function generate(Pokemon $pokemon)
    {
        $ranks = [];
        foreach ([Leagues::GL, Leagues::UL] as $league) {
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
//        $db = DB::getInstance();
//        echo ' filling...';
//        $db->beginTransaction();
        $file = fopen('bin/ranks.sql', 'a');
        foreach ($ranks as $subList) {
            foreach ($subList as $rank) {
                fputs($file, $rank->getSql() . ";\n");
//                $db->query($rank->getSQL());
            }
        }
//        echo ' committing...';
//        $db->commit();
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
        // 50
        usort($ranks, function ($r1, $r2) {
            return $r2->prod50 <=> $r1->prod50;
        });
        $maxProd = $ranks[0]->prod50;
        foreach ($ranks as $key => $entry) {
            $entry->rank50 = $key + 1;
            $entry->percent50 = round($entry->prod50 / $maxProd * 100, 2);
        }
    }
}