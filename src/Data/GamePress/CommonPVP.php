<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Parser\Helper;

abstract class CommonPVP extends Common
{
    public static function run(): void
    {
        $page = self::loadSource(static::URL);
        $list = static::parse($page);
        self::writePHP(static::CLASS_NAME, static::DESC, $list);
    }

    protected static function parse(string &$page): array
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($page);
        /** @var \DOMElement[] $divs */
        $divs = $dom->getElementsByTagName('div');
        $cells = [];
        foreach ($divs as $div) {
            if ($div->hasAttribute('class') && $div->getAttribute('class') === 'tier-list-cell-row') {
                $cells[] = $div;
            }
        }
        $list = [];
        foreach ($cells as $cell) {
            /** @var \DOMElement[] $cellSpans */
            $cellSpans = $cell->getElementsByTagName('span');
            $tier = null;
            foreach ($cellSpans as $cellSpan) {
                if ($cellSpan->hasAttribute('class') && $cellSpan->getAttribute('class') === 'tier-number') {
                    $tier = $cellSpan->nodeValue;
                    break;
                }
            }
            if ($tier === null) {
                echo 'WARNING: can\'t get tier for "', $cell->getAttribute('data-title'), "'", PHP_EOL;
                continue;
            }
            if ($tier < static::MIN_TIER) {
                continue;
            }
            $tier = 'Tier ' . (6.0 - $tier);
            if (!isset($list[$tier])) {
                $list[$tier] = [];
            }
            $list[$tier][] = [
                'name' => $name = $cell->getAttribute('data-title'),
                'code' => self::getCodeByName($name)
            ];
        }
        return $list;
    }

    protected static function writePHP(string $class, string $description, array $data)
    {
        $description = addcslashes($description, "'");
        $code = [];
        foreach ($data as $tier => $list) {
            $code[] = "        '" . $tier . "' => [";
            foreach ($list as $info) {
                if (empty($info['code'])) {
                    continue;
                }
                $code[] = '            ' . Helper::generatePokemonConst($info['code']) . ',';
            }
            $code[] = "        ],";
        }
        $code = implode("\n", $code);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class $class {
    const DESCRIPTION = '$description';
    
    const TIERS = [
$code
    ];
}
PHP;
        file_put_contents(self::DIR . $class . '.php', $output);
    }
}
