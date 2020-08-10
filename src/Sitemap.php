<?php

namespace Pogo;

use Pogo\Data\Types;

class Sitemap
{
    public static function fill()
    {
        \Difra\Tools\Sitemap::add(
            [
                ['loc' => '/', 'changefreq' => 'daily'],
                ['loc' => '/cleanup'],
                ['loc' => '/lists'],
                ['loc' => '/counters'],
                ['loc' => '/pokemon']
            ]
        );
        foreach (Types::TYPE_ENUM as $type) {
            \Difra\Tools\Sitemap::add([['loc' => '/counters?type1=' . $type . '&type2=']]);
        }
        foreach (Types::TYPE_ENUM as $type1) {
            foreach (Types::TYPE_ENUM as $type2) {
                if ($type1 !== $type2) {
                    \Difra\Tools\Sitemap::add([['loc' => '/counters?type1=' . $type1 . '&type2=' . $type2]]);
                }
            }
        }
    }
}