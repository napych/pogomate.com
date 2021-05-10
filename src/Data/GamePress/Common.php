<?php

namespace Pogo\Data\GamePress;

use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Manual\PokemonList;
use Pogo\Data\Parser\Helper;

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

    protected static function getCodeByName(string $name): ?int
    {
        return Helper::getCodeByName($name);
    }

    protected static function writePHP(string $class, string $description, array $data)
    {
        $description = addcslashes($description, "'");
        $code = [];
        foreach ($data as $tier => $list) {
            if (strpos($tier, '::') === false) {
                $code[] = "        '" . $tier . "' => [";
            } else {
                $code[] = '        ' . $tier . ' => [';
            }
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
use Pogo\Pokemon\Types;

class $class
{
    const DESCRIPTION = '$description';
    
    const TIERS = [
$code
    ];
}
PHP;
        file_put_contents(self::DIR . $class . '.php', $output);
    }

}