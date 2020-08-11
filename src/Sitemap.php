<?php

namespace Pogo;

use Pogo\Data\Types;

class Sitemap
{
    public static function fill()
    {
        $locs = [
            ['loc' => '/', 'changefreq' => 'daily'],
            ['loc' => '/cleanup'],
            ['loc' => '/lists'],
            ['loc' => '/pokemon'],
            ['loc' => '/counters'],
        ];
        $types1 = Types::TYPE_ENUM;
        $types2 = $attacks1 = $attacks2 = array_merge([''], Types::TYPE_ENUM);
        foreach ($types1 as $type1) {
            foreach ($types2 as $type2) {
                if ($type1 === $type2) {
                    continue;
                }
                foreach ($attacks1 as $attack1) {
                    if (!$attack1) {
                        $locs[] = [
                            'loc' =>
                                '/counters?type1=' . $type1
                                . '&type2=' . $type2
                                . '&attack1=&attack2='
                        ];
                        continue;
                    }
                    foreach ($attacks2 as $attack2) {
                        if ($attack1 === $attack2) {
                            continue;
                        }
                        $locs[] = [
                            'loc' =>
                                '/counters?type1=' . $type1
                                . '&type2=' . $type2
                                . '&attack1=' . $attack1
                                . '&attack2=' . $attack2
                        ];
                    }
                }
            }
        }
        \Difra\Tools\Sitemap::add($locs);
    }
}