<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Parser\Helper;

class ParsePVE extends Common
{
    const URL = 'https://gamepress.gg/pokemongo/attackers-tier-list';
    const CLASS_NAME = 'PVE';
    const DESC = 'GamePress Attackers';

    public static function run()
    {
        $page = self::loadSource(static::URL);
//        file_put_contents(__DIR__ . '/../../../pve.txt', $page); die();
//        $page = file_get_contents(__DIR__ . '/../../../pve.txt');
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
                        && strpos($h2->nodeValue, 'Tier') !== false
                        && strpos($h2->nodeValue, 'Overview') === false
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
                $name = null;
                /** @var \DOMElement[] $divs2 */
                $divs2 = $div->getElementsByTagName('div');
                foreach ($divs2 as $div2) {
                    if ($div2->getAttribute('class') === 'tier-list-cell-row') {
                        $list[$title][] = [
                            'name' => $name = $div2->getAttribute('data-title'),
                            'code' => Helper::getCodeByName($name)
                        ];
                    }
                }
            }
        }
        return $list;
    }
}