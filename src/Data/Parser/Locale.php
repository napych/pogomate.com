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
        return static::get('pokemon_name_' . $id);
    }

    public static function getDescription(int $code): ?string
    {
        $id = (string)Mods::getId($code);
        if ($id != $code) {
            return null;
        }
        while (strlen($id) < 4) {
            $id = '0' . $id;
        }
        return static::get('pokemon_desc_' . $id);
    }

    public static function getCategory(int $code): ?string
    {
        $id = (string)$intId = Mods::getId($code);
        while (strlen($id) < 4) {
            $id = '0' . $id;
        }
        if ($code & Mods::MEGA) {
            return static::get('pokemon_desc_tmpevo_' . $id . '_0001');
        } elseif($code & Mods::MEGA_X) {
            return static::get('pokemon_desc_tmpevo_' . $id . '_0002');
        } elseif($code & Mods::MEGA_Y) {
            return static::get('pokemon_desc_tmpevo_' . $id . '_0003');
        } else {
            if ($intId !== $code) {
                return null;
            }
            return static::get('pokemon_category_' . $id);
        }
    }
}
