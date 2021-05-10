<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Manual\Types;
use Pogo\Data\Parser\Helper;

class ParseTop extends Common
{
    const URL = 'https://gamepress.gg/pokemongo/best-attackers-type';
    const CLASS_NAME = 'Top';
    const DESC = 'GamePress Top By Type';

    const TRANSLATE_TYPE = [
        'Bug Type' => Types::BUG,
        'Dark Type' => Types::DARK,
        'Dragon Type' => Types::DRAGON,
        'Electric Type' => Types::ELECTRIC,
        'Fairy Type' => Types::FAIRY,
        'Fighting Type' => Types::FIGHTING,
        'Fire Type' => Types::FIRE,
        'Flying Type' => Types::FLYING,
        'Ghost Type' => Types::GHOST,
        'Grass Types' => Types::GRASS,
        'Ground Type' => Types::GROUND,
        'Ice Type' => Types::ICE,
        'Poison Type' => Types::POISON,
        'Psychic Type' => Types::PSYCHIC,
        'Rock Type' => Types::ROCK,
        'Steel Type' => Types::STEEL,
        'Water Type' => Types::WATER,
        'Normal Type' => Types::NORMAL
    ];

    public static function run()
    {
        $page = self::loadSource(static::URL);
//        file_put_contents(__DIR__ . '/../../../tmp.txt', $page); die();
//        $page = file_get_contents(__DIR__ . '/../../../tmp.txt');
        $list = static::parse($page);
        self::writePHP(static::CLASS_NAME, static::DESC, $list);
    }

    protected static function parse(string &$page): array
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($page);
        /** @var \DOMElement[] $divs */
        $divs = $dom->getElementsByTagName('div');
        $list = [];
        foreach ($divs as $div) {
            if ($div->hasAttribute('class') && $div->getAttribute('class') === 'field__item') {
                // find tier name
                $title = null;
                /** @var \DOMElement[] $h2s */
                $h2s = $div->getElementsByTagName('h2');
                foreach ($h2s as $h2) {
                    if (
                        $h2->getAttribute('class') === 'main-title'
                        && !empty(self::TRANSLATE_TYPE[$h2->nodeValue])
                    ) {
                        $title = 'Types::' . Types::getConst(self::TRANSLATE_TYPE[$h2->nodeValue]);
                        break;
                    }
                }
                if ($title === null) {
                    continue;
                }
                $list[$title] = [];

                /*

                 */

                // find pokemon names
                /** @var \DOMElement[] $spans */
                $spans = $div->getElementsByTagName('span');
                foreach ($spans as $span) {
                    if (strpos($span->getAttribute('class'), 'field--name-title') !== false) {
                        $list[$title][] = [
                            'name' => $span->nodeValue,
                            'code' => Helper::getCodeByName($span->nodeValue)
                        ];
                    }
                }
            }
        }
        if (sizeof($list) !== sizeof(Types::TYPE_ENUM)) {
            echo 'WARNING: result arrray contains only ', sizeof($list), ' type elements! Something\'s wrong?', PHP_EOL;
        }
        return $list;
    }
}