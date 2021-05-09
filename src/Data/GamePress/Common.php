<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Manual\PokemonList;

abstract class Common
{
    const UA = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15';
    const DIR = __DIR__ . '/../Generated/GamePress/';

    abstract public static function run();

    protected static function loadSource(string $url): string
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_URL => $url,
                CURLOPT_ENCODING => 'gzip, deflate',
                CURLOPT_HTTPHEADER => [
                    'Upgrade-Insecure-Requests: 1',
                    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                    'User-Agent: ' . static::UA,
                    'Accept-Language: en-US,en;q=0.5',
                    'Accept-Encoding: gzip, deflate',
                    'Connection: keep-alive',
                ],
            ]
        );
        return curl_exec($curl);
    }

    protected static $names = [];

    protected static function loadNames()
    {
        if (!empty($names)) {
            return;
        }
        foreach (PokemonData::POKEMON as $id => $pokemonData)
        {
            self::$names[$pokemonData[PokemonData::FIELD_NAME]] = $id;
        }
        self::$names['Sirfetch\'d'] = PokemonList::SIRFETCH_D;
        self::$names['Jellicent'] = PokemonList::JELLICENT;
    }

    protected static function getCodeByName(string $name): ?int
    {
        self::loadNames();
        if (!isset(self::$names[$name])) {
            echo 'WARNING: can\'t find code for "' . $name . '"', PHP_EOL;
            return null;
        }
        return self::$names[$name];
    }
}