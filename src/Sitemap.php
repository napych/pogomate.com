<?php

namespace Pogo;

class Sitemap
{
    public static function fill()
    {
        \Difra\Tools\Sitemap::add(
            [
                ['loc' => '/cleanup'],
                ['loc' => '/lists'],
                ['loc' => '/counters'],
                ['loc' => '/pokemon']
            ]
        );
    }
}