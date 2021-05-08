<?php

namespace Pogo\Data\Parser;

use Pogo\Pokemon;
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
            $key = $json[$i];
            $value = $json[++$i];
            if (isset(self::DESC_TRANSLATE[$key])) {
                self::$poke2desc[self::DESC_TRANSLATE[$key]] = $value;
                continue;
            }
            static::$strings[$key] = $value;
            $chunks = explode('_', $key);
            if ($chunks[0] === 'pokemon' && $chunks[1] === 'desc' && sizeof($chunks) > 3 && $chunks[2] !== 'tmpevo' && !isset(self::DESC_TRANSLATE[$chunks[2]][$chunks[3]])) {
                echo 'WARNING: unlisted pokemon description translation for the locale: ', $key, PHP_EOL;
            }
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
        static::init();
        if (isset(self::$poke2desc[$code])) {
            return self::$poke2desc[$code];
        }
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

    const DESC_TRANSLATE = [
        'pokemon_desc_0019_0046' => Pokemon::RATATTA | Mods::ALOLAN,
        'pokemon_desc_0020_0048' => Pokemon::RATICATE | Mods::ALOLAN,
        'pokemon_desc_0026_0050' => Pokemon::RAICHU | Mods::ALOLAN,
        'pokemon_desc_0027_0052' => Pokemon::SANDSHREW | Mods::ALOLAN,
        'pokemon_desc_0028_0054' => Pokemon::SANDSLASH | Mods::ALOLAN,
        'pokemon_desc_0037_0056' => Pokemon::VULPIX | Mods::ALOLAN,
        'pokemon_desc_0038_0058' => Pokemon::NINETALES | Mods::ALOLAN,
        'pokemon_desc_0050_0060' => Pokemon::DIGLETT | Mods::ALOLAN,
        'pokemon_desc_0051_0062' => Pokemon::DUGTRIO | Mods::ALOLAN,
        'pokemon_desc_0052_0064' => Pokemon::MEOWTH | Mods::ALOLAN,
        'pokemon_desc_0052_2335' => Pokemon::MEOWTH | Mods::GALARIAN,
        'pokemon_desc_0053_0066' => Pokemon::PERSIAN | Mods::ALOLAN,
        'pokemon_desc_0074_0068' => Pokemon::GEODUDE | Mods::ALOLAN,
        'pokemon_desc_0075_0070' => Pokemon::GRAVELER | Mods::ALOLAN,
        'pokemon_desc_0076_0072' => Pokemon::GOLEM | Mods::ALOLAN,
        'pokemon_desc_0077_2336' => Pokemon::PONYTA | Mods::GALARIAN,
        'pokemon_desc_0078_2337' => Pokemon::RAPIDASH | Mods::GALARIAN,
        'pokemon_desc_0083_2338' => Pokemon::FARFETCH_D | Mods::GALARIAN,
        'pokemon_desc_0088_0074' => Pokemon::GRIMER | Mods::ALOLAN,
        'pokemon_desc_0089_0076' => Pokemon::MUK | Mods::ALOLAN,
        'pokemon_desc_0103_0078' => Pokemon::EXEGGUTOR | Mods::ALOLAN,
        'pokemon_desc_0105_0080' => Pokemon::MAROWAK | Mods::ALOLAN,
        'pokemon_desc_0110_0944' => Pokemon::WEEZING | Mods::GALARIAN,
        'pokemon_desc_0122_2339' => Pokemon::MR_MIME | Mods::GALARIAN,
        'pokemon_desc_0263_0946' => Pokemon::ZIGZAGOON | Mods::GALARIAN,
        'pokemon_desc_0264_0948' => Pokemon::LINOONE | Mods::GALARIAN,
        'pokemon_desc_0554_2341' => Pokemon::DARUMAKA | Mods::GALARIAN,
        'pokemon_desc_0555_2342' => Pokemon::DARMANITAN | Mods::GALARIAN,
        'pokemon_desc_0562_2344' => Pokemon::YAMASK | Mods::GALARIAN,
        'pokemon_desc_0618_2345' => Pokemon::STUNFISK | Mods::GALARIAN
    ];
    protected static $poke2desc = [];
}
