<?php

namespace Pogo\Data\Parser\Result;

use Pogo\Data\Manual\PokemonList;

class Links
{
    public function writePHP()
    {
        $link2id = [];
        $id2link = [];
        $reflection = new \ReflectionClass(PokemonList::class);
        $constants = $reflection->getConstants();
        foreach ($constants as $name => $value) {
            $link = strtolower($name);
            for ($i = 0; $i < strlen($name); $i++) {
                if (!ctype_alnum($link{$i})) {
                    $link{$i} = '_';
                }
            }
            $link2id[] = "'$link' => Pokemon::$name";
            $id2link[] = "Pokemon::$name => '$link'";
        }
        $link2id = "        " . implode(",\n        ", $link2id);
        $id2link = "        " . implode(",\n        ", $id2link);
        file_put_contents(All::PHP_PATH . 'Links.php', <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon;

class Links
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
}
