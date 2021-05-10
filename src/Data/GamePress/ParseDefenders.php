<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Parser\Helper;

class ParseDefenders extends Common
{
    const URL = 'https://gamepress.gg/pokemongo/gym-defenders-tier-list';
    const CLASS_NAME = 'Defenders';
    const DESC = 'GamePress Defenders';

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
                        && strpos($h2->nodeValue, 'Tier ') !== false
                    ) {
                        $title = $h2->nodeValue;
                        break;
                    }
                }
                if ($title === null) {
                    continue;
                }
                $list[$title] = [];

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
        return $list;
    }
}