<?php

namespace Pogo\Data\Parser;

use Pogo\Pokemon\Mods;

class Locale
{
    const FILE = __DIR__ . '/../blobs/locale/i18n_english.json';

    protected static $strings = [];

    protected static function init()
    {
        if (!empty(static::$strings)) {
            return;
        }
        $json = json_decode(file_get_contents(self::FILE), true)['data'];
        for ($i = 0; $i < sizeof($json); $i++) {
            static::$strings[$json[$i]] = $json[++$i];
        }
    }

    public static function get(string $name): ?string
    {
        static::init();
        return static::$strings[$name] ?? null;
    }

    public static function getMove(int $id): ?string
    {
        $id = (string)$id;
        while (strlen($id) < 4) {
            $id = '0' . $id;
        }
        return static::get('move_name_' . $id);
    }

    public static function getPokemon(int $code): ?string
    {
        $id = (string)Mods::getId($code);
        while (strlen($id) < 4) {
            $id = '0' . $id;
        }
        return static::get('pokemon_name_' . $id);}
}
