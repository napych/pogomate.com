<?php

namespace Pogo\Mate;

use Difra\Config;
use Difra\Envi;
use Pogo\Data\Generated\PokemonLinks;
use Pogo\Pokemon\Types;
use Pogo\Pokemon;

class Sitemap
{
    protected function __construct()
    {
        $this->prefix = 'https://pogomate.com/sitemap';
//        $this->prefix = '/sitemap';
    }

    protected function __clone()
    {
    }

    public static function fill()
    {
        ini_set('memory_limit', '128M');
        $locs = [
            ['loc' => '/', 'changefreq' => 'daily'],
            ['loc' => '/cleanup', 'changefreq' => 'weekly'],
            ['loc' => '/lists', 'changefreq' => 'weekly'],
            ['loc' => '/pokemon', 'changefreq' => 'monthly']
        ];
        foreach (Pokemon::getList() as $pokemon) {
            $locs[] = [
                'loc' => '/pokemon/' . $pokemon->getLinkName(),
                'changefreq' => 'weekly'
            ];
        }
        $locs[] = ['loc' => '/counters'];
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
                                . '&attack1=&attack2=',
                            'changefreq' => 'monthly'
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
                                . '&attack2=' . $attack2,
                            'changefreq' => 'monthly'
                        ];
                    }
                }
            }
        }
        \Difra\Tools\Sitemap::add($locs);
    }

    protected $index = [];
    protected $prefix = null;

    public static function writeAll()
    {
        $sitemap = new static();
        $sitemap->writeMain();
        $sitemap->writePokemon();
        $sitemap->writeCounters();
        $sitemap->writeIndex();
    }

    protected function writeCounters()
    {
        $conf = Config::getInstance()->getValue('sitemap', 'counters');
        $types1 = Types::TYPE_ENUM;
        $types2 = $attacks1 = $attacks2 = array_merge([''], Types::TYPE_ENUM);
        $result = [];
        foreach ($types1 as $type1) {
            foreach ($types2 as $type2) {
                if ($type1 === $type2) {
                    continue;
                }
                foreach ($attacks1 as $attack1) {
                    if (!$attack1) {
                        $result[] = '/counters?type1=' . $type1 . '&type2=' . $type2 . '&attack1=&attack2=';
                        continue;
                    }
                    foreach ($attacks2 as $attack2) {
                        if ($attack1 === $attack2) {
                            continue;
                        }
                        $result[] = '/counters?type1=' . $type1 . '&type2=' . $type2 . '&attack1=' . $attack1 . '&attack2=' . $attack2;
                    }
                }
            }
        }

        $perpage = Config::getInstance()->getValue('sitemap', 'maxLines');
        $pages = ceil(sizeof($result) / $perpage);

        // index
        for ($page = 1; $page <= $pages; $page++) {
            $this->index[] = [
                'loc' => $this->prefix . '/counters-' . $page . '.xml',
                'lastmod' => $conf['lastmod']
            ];
        }

        // files
        for ($page = 1; $page <= $pages; $page++) {
            $doc = new \DOMDocument();
            $doc->formatOutput = true;
            $root = $doc->appendChild($doc->createElementNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'urlset'));
            for ($i = ($page - 1) * $perpage; $i < $page * $perpage; $i++) {
                if (!isset($result[$i])) {
                    continue;
                }
                $node = $root->appendChild($doc->createElement('url'));
                $node->appendChild($doc->createElement('loc', 'https://pogomate.com' . str_replace('&', '&amp;', $result[$i])));
                $node->appendChild($doc->createElement('lastmod', $conf['lastmod']));
                $node->appendChild($doc->createElement('changefreq', $conf['changefreq']));
            }
            $doc->save(Envi\Roots::getRoot() . '/htdocs/sitemap/counters-' . $page . '.xml');
        }
    }

    protected function writePokemon()
    {
        $conf = Config::getInstance()->getValue('sitemap', 'pokemon');
        $this->index[] = ['loc' => $this->prefix . '/pokemon.xml', 'lastmod' => $conf['lastmod']];
        $doc = new \DOMDocument();
        $doc->formatOutput = true;
        $root = $doc->appendChild($doc->createElementNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'urlset'));
        foreach (PokemonLinks::POKEMON2LINK as $link)
        {
            $node = $root->appendChild($doc->createElement('url'));
            $node->appendChild($doc->createElement('loc', 'https://pogomate.com/pokemon/' . $link));
            $node->appendChild($doc->createElement('lastmod', $conf['lastmod']));
            $node->appendChild($doc->createElement('changefreq', $conf['changefreq']));
        }
        $doc->save(Envi\Roots::getRoot() . '/htdocs/sitemap/pokemon.xml');
    }

    protected function writeMain()
    {
        $lastMod = Config::getInstance()->getValue('sitemap', 'mainLastmod');
        $this->index[] = ['loc' => $this->prefix . '/main.xml', 'lastmod' => $lastMod];
        $locs = Config::getInstance()->getValue('sitemap', 'main');
        $doc = new \DOMDocument();
        $doc->formatOutput = true;
        $root = $doc->appendChild($doc->createElementNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'urlset'));
        foreach ($locs as $loc) {
            $node = $root->appendChild($doc->createElement('url'));
            $node->appendChild($doc->createElement('loc', 'https://pogomate.com' . $loc['loc']));
            $node->appendChild($doc->createElement('changefreq', $loc['changefreq']));
        }
        $doc->save(Envi\Roots::getRoot() . '/htdocs/sitemap/main.xml');
    }

    protected function writeIndex()
    {
        $doc = new \DOMDocument();
        $doc->formatOutput = true;
        $root = $doc->appendChild($doc->createElementNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'sitemapindex'));
        foreach ($this->index as $item) {
            $node = $root->appendChild($doc->createElement('sitemap'));
            $node->appendChild($doc->createElement('loc', $item['loc']));
            $node->appendChild($doc->createElement('lastmod', $item['lastmod']));
        }
        $doc->save(Envi\Roots::getRoot() . '/htdocs/sitemap.xml');
    }
}
