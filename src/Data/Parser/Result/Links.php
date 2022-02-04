<?php

namespace Pogo\Data\Parser\Result;

use Pogo\Data\Generated\MovesData;
use Pogo\Data\Manual\PokemonList;

class Links
{
    protected function generatePokemonPHP()
    {
        $link2id = [];
        $id2link = [];
        $reflection = new \ReflectionClass(PokemonList::class);
        $constants = $reflection->getConstants();
        foreach ($constants as $name => $value) {
            $link = self::makeLink($name);
            $link2id[] = "'$link' => Pokemon::$name";
            $id2link[] = "Pokemon::$name => '$link'";
        }
        $link2id = '        ' . implode(",\n        ", $link2id);
        $id2link = '        ' . implode(",\n        ", $id2link);
        file_put_contents(All::PHP_PATH . 'PokemonLinks.php', <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon;

class PokemonLinks
{
    const POKEMON2LINK = [
$id2link
    ];
    
    const LINK2POKEMON = [
$link2id
    ];
}
PHP
        );
    }

    protected function generateMovePHP()
    {
        $link2id = [];
        $id2link = [];
        $reflection = new \ReflectionClass(\Pogo\Data\Generated\Moves::class);
        $constants = $reflection->getConstants();
        foreach ($constants as $name => $value) {
            $link = self::makeLink(MovesData::MOVES[$value][MovesData::FIELD_NAME]);
            $link2id[$link][] = "Moves::$name";
            $id2link[] = "Moves::$name => '$link'";
        }
        foreach ($link2id as $link => &$str) {
            if (sizeof($str) > 1) {
                $str = "'$link' => [\n            " . implode(",\n            ", $str) . "\n        ]";
            } else {
                $str = "'$link' => [{$str[0]}]";
            }
        }
        $link2id = '        ' . implode(",\n        ", $link2id);
        $id2link = '        ' . implode(",\n        ", $id2link);
        file_put_contents(All::PHP_PATH . 'MovesLinks.php', <<<PHP
<?php

namespace Pogo\Data\Generated;

class MovesLinks
{
    const MOVE2LINK = [
$id2link
    ];
    
    const LINK2MOVE = [
$link2id
    ];
}
PHP
        );
    }

    public function writePHP()
    {
        $this->generatePokemonPHP();
        $this->generateMovePHP();
    }

    protected static function makeLink(string $name): string
    {
        $link = strtolower($name);
        for ($i = 0; $i < strlen($link); $i++) {
            if (!ctype_alnum($link[$i])) {
                $link[$i] = '-';
            }
        }
        $link = trim($link, '-');
        while (str_contains($link, '--')) {
            $link = str_replace('--', '-', $link);
        }
        return $link;
    }
}
