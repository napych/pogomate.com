<?php

namespace Pogo;

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
    }
}