<?php

namespace Pogo\Data\Result;

use Pogo\Data\Parser\Locale;
use Pogo\General\Mods;
use Pogo\Data\Manual\FormsAlias;
use Pogo\Data\Manual\PokemonList;

class Pokemon
{
    const FIELD_CONST = 'const';
    const FIELD_NAME = 'name';
    const FIELD_FORM = 'form';
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';
    const FIELD_ATTACK = 'attack';
    const FIELD_DEFENSE = 'defense';
    const FIELD_STAMINA = 'stamina';
    const FIELD_FAST_MOVES = 'fastMoves';
    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
    const FIELD_CHARGE_MOVES = 'chargeMoves';
    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
    const FIELD_EVOLUTIONS = 'evolutions';
    const FIELD_THIRD_MOVE_DUST = 'thirdDust';
    const FIELD_THIRD_MOVE_CANDY = ' thirdCandy';
    const FIELD_TRANSFERABLE = 'transferable';
    const FIELD_DEPLOYABLE = 'deployable';
    const FIELD_PARENT = 'parent';
    const FIELD_BUDDY_DISTANCE = 'buddyDistance';
    const FIELD_LEGENDARY = 'legendary';
    const FIELD_MYTHIC = 'mythic';

    const FIELD_PURIFY_DUST = 'purifyDust';
    const FIELD_PURIFY_CANDY = 'purifyCandy';

    const FIELD_EVOLUTION_POKEMON = 'pokemon';
    const FIELD_EVOLUTION_FORM = 'form';
    const FIELD_EVOLUTION_CANDY = 'candy';
    const FIELD_EVOLUTION_FREE_TRADED = 'freeTraded';
    const FIELD_EVOLUTION_ITEM = 'item';
    const FIELD_EVOLUTION_LURE = 'lure';
    const FIELD_EVOLUTION_DISTANCE = 'km';
    const FIELD_EVOLUTION_MALE = 'male';
    const FIELD_EVOLUTION_FEMALE = 'female';
    const FIELD_EVOLUTION_DAY = 'day';
    const FIELD_EVOLUTION_NIGHT = 'night';
    const FIELD_EVOLUTION_BUDDY = 'buddy';
    const FIELD_EVOLUTION_PRIORITY = 'priority';

    protected $pokemon = [];

    public function add(int $code, array $data)
    {
        $this->pokemon[$code] = $data;
    }

    public function getList()
    {
        return $this->pokemon;
    }

    public function writePHP()
    {
        $output = [];
        $forms = [];
        $legendaries = [];
        $mythics = [];
        $evolutions = [];
        $moveUsers = [];

        $str2code = [];
        foreach ($this->pokemon as $code => $pokemon) {
            if (!empty($pokemon[Pokemon::FIELD_FORM])) {
                $str2code[$pokemon[Pokemon::FIELD_FORM]] = $code;
            } else {
                $str2code[$pokemon[Pokemon::FIELD_NAME]] = $code;
            }
        }

        foreach ($this->pokemon as $code => $pokemon) {
            $id = Mods::getId($code);

            $shortConst = PokemonList::getConst($id);
            $idConst = 'Pokemon::' . $shortConst;
            $codeConst = $this->getCodeConst($code);

            // collect forms
            if (!isset($forms[$idConst])) {
                $forms[$idConst] = [$codeConst];
            } else {
                $forms[$idConst][] = $codeConst;
            }

            // process simple fields
            $data = [
                "self::FIELD_NAME => '" . addcslashes($this->getPokemonName($code), "'") . "'",
                "self::FIELD_NAME_SHORT => '" . addcslashes($this->getPokemonName($code, true), "'") . "'",
                'self::FIELD_ATTACK => ' . $pokemon[Pokemon::FIELD_ATTACK],
                'self::FIELD_DEFENSE => ' . $pokemon[Pokemon::FIELD_DEFENSE],
                'self::FIELD_STAMINA => ' . $pokemon[Pokemon::FIELD_STAMINA],
                'self::FIELD_TYPE1 => Types::' . \Pogo\General\Types::getConst($pokemon[Pokemon::FIELD_TYPE1]),
            ];
            if ($pokemon[Pokemon::FIELD_TYPE2]) {
                $data[] = 'self::FIELD_TYPE2 => Types::' . \Pogo\General\Types::getConst($pokemon[Pokemon::FIELD_TYPE2]);
            }
            if ($pokemon[Pokemon::FIELD_PURIFY_CANDY]) {
                $data[] = 'self::FIELD_PURIFY_CANDY => ' . $pokemon[Pokemon::FIELD_PURIFY_CANDY];
            }
            if ($pokemon[Pokemon::FIELD_PURIFY_DUST]) {
                $data[] = 'self::FIELD_PURIFY_STARDUST => ' . $pokemon[Pokemon::FIELD_PURIFY_DUST];
            }
            if ($pokemon[Pokemon::FIELD_LEGENDARY]) {
                $data[] = 'self::FIELD_LEGENDARY => true';
                $legendaries[$shortConst] = 1;
            }
            if ($pokemon[Pokemon::FIELD_MYTHIC]) {
                $data[] = 'self::FIELD_MYTHIC => true';
                $mythics[$shortConst] = 1;
            }
            if ($pokemon[Pokemon::FIELD_TRANSFERABLE]) {
                $data[] = 'self::FIELD_TRANSFERABLE => true';
            }
            if ($pokemon[Pokemon::FIELD_DEPLOYABLE]) {
                $data[] = 'self::FIELD_DEPLOYABLE => true';
            }
            $data[] = 'self::FIELD_BUDDY_DISTANCE => ' . $pokemon[Pokemon::FIELD_BUDDY_DISTANCE];
            if ($pokemon[Pokemon::FIELD_THIRD_MOVE_CANDY]) {
                $data[] = 'self::FIELD_THIRD_MOVE_CANDY => ' . $pokemon[Pokemon::FIELD_THIRD_MOVE_CANDY];
            }
            if ($pokemon[Pokemon::FIELD_THIRD_MOVE_DUST]) {
                $data[] = 'self::FIELD_THIRD_MOVE_STARDUST => ' . $pokemon[Pokemon::FIELD_THIRD_MOVE_DUST];
            }

            // process evolutions
            if (!empty($pokemon[Pokemon::FIELD_EVOLUTIONS])) {
                $evolvesTo = [];
                foreach ($pokemon[Pokemon::FIELD_EVOLUTIONS] as $evolutionData) {
//                    if ($id === 446) {
//                        var_dump($evolutionData);
//                        die();
//                    }
                    if (empty($evolutionData[Pokemon::FIELD_EVOLUTION_FORM])) {
                        $evolutionData[Pokemon::FIELD_EVOLUTION_FORM] = $evolutionData[Pokemon::FIELD_EVOLUTION_POKEMON];
                    }
                    if (empty($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]])) {
                        if (empty($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM] . '_NORMAL'])) {
                            echo 'WARNING: Missing str2code for ', $evolutionData[Pokemon::FIELD_EVOLUTION_FORM], PHP_EOL;
                        } else {
                            $str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]] = $str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM] . '_NORMAL'];
                        }
                    }
                    $evoConst = $this->getCodeConst($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]]);
                    $evoArr = [
                        'self::FIELD_PARENT => ' . $codeConst
                    ];
                    foreach ($evolutionData as $k => $v) {
                        static $intConvert = [
                            Pokemon::FIELD_EVOLUTION_CANDY => 'FIELD_CANDY',
                            Pokemon::FIELD_EVOLUTION_DISTANCE => 'FIELD_WALKED',
                            Pokemon::FIELD_EVOLUTION_PRIORITY => 'FIELD_PRIORITY'
                        ];
                        if (isset($intConvert[$k])) {
                            $evoArr[] = "self::{$intConvert[$k]} => $v";
                            continue;
                        }
                        static $stringConvert = [
                            Pokemon::FIELD_EVOLUTION_ITEM => 'FIELD_ITEM',
                            Pokemon::FIELD_EVOLUTION_LURE => 'FIELD_LURE'
                        ];
                        if (isset($stringConvert[$k])) {
                            $evoArr[] = "self::{$stringConvert[$k]} => '$v'";
                            continue;
                        }
                        static $trueConvert = [
                            Pokemon::FIELD_EVOLUTION_FREE_TRADED => 'FIELD_TRADED',
                            Pokemon::FIELD_EVOLUTION_BUDDY => 'FIELD_BUDDY',
                            Pokemon::FIELD_EVOLUTION_MALE => 'FIELD_MALE',
                            Pokemon::FIELD_EVOLUTION_FEMALE => 'FIELD_FEMALE',
                            Pokemon::FIELD_EVOLUTION_DAY => 'FIELD_DAY',
                            Pokemon::FIELD_EVOLUTION_NIGHT => 'FIELD_NIGHT'
                        ];
                        if (isset($trueConvert[$k])) {
                            $evoArr[] = "self::{$trueConvert[$k]} => true";
                            continue;
                        }
                        switch ($k) {
                            case 'pokemon':
                            case 'form':
                                break;
                            default:
                                echo 'WARNING: unhandled evolution key: ', $k, ' for ', $codeConst, ' => ', $evoConst, PHP_EOL;
                        }
                    }
                    $evolutions[$evoConst] = $evoArr;
                    $evolvesTo[] = $evoConst;
                }
                $data[] = 'self::FIELD_EVOLVES => [' . implode(', ', $evolvesTo) . ']';
            }

            // process moves
            static $moveTranslate = [];
            if (empty($moveTranslate)) {
                $ref = new \ReflectionClass('\Pogo\Data\Generated\Moves');
                $moveTranslate = array_flip($ref->getConstants());
            }
            foreach (
                [
                    Pokemon::FIELD_FAST_MOVES => 'FIELD_FAST_MOVES',
                    Pokemon::FIELD_FAST_MOVES_ELITE => 'FIELD_FAST_MOVES_ELITE',
                    Pokemon::FIELD_CHARGE_MOVES => 'FIELD_CHARGE_MOVES',
                    Pokemon::FIELD_CHARGE_MOVES_ELITE => 'FIELD_CHARGE_MOVES_ELITE'
                ] as $field => $convField
            ) {
                if (empty($pokemon[$field])) {
                    continue;
                }
                $mvArr = [];
                foreach ($pokemon[$field] as $mvId) {
                    $mvArr[] = $moveTranslate[$mvId];
                    $moveUsers['Moves::' . $moveTranslate[$mvId]][] = $codeConst;
                }
                $data[] = "self::$convField => [Moves::" . implode(', Moves::', $mvArr) . "]";
            }

            $str = "        $codeConst => [\n            ";
            $str .= implode(",\n            ", $data);
            $str .= "\n        ]";
            $output[] = $str;
        }

        // PokemonData.php
        $output = implode(",\n", $output);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Data\Manual\FormsAlias, Pogo\General\Types;

class PokemonData
{
    const FIELD_NAME = 'name';
    const FIELD_NAME_SHORT = 'short';
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';
    const FIELD_ATTACK = 'attack';
    const FIELD_DEFENSE = 'defense';
    const FIELD_STAMINA = 'stamina';
    const FIELD_PURIFY_CANDY = 'purifyCandy';
    const FIELD_PURIFY_STARDUST = 'purifyDust';
    const FIELD_LEGENDARY = 'legendary';
    const FIELD_MYTHIC = 'mythic';
    const FIELD_TRANSFERABLE = 'transfer';
    const FIELD_DEPLOYABLE = 'deploy';
    const FIELD_BUDDY_DISTANCE = 'distance'; 
    const FIELD_THIRD_MOVE_CANDY = 'moveCandy';
    const FIELD_THIRD_MOVE_STARDUST = 'moveDust';
    const FIELD_EVOLVES = 'evolves';
    const FIELD_FAST_MOVES = 'fastMoves';
    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
    const FIELD_CHARGE_MOVES = 'chargeMoves';
    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
    
    const POKEMON = [
$output    
    ];
} 
PHP;
        file_put_contents(__DIR__ . '/../Generated/PokemonData.php', $output);

        // PokemonForms.php
        $output = '';
        foreach ($forms as $k => $v) {
            $output .= "        $k => [\n";
            foreach ($v as $v1) {
                $output .= "            $v1,\n";
            }
            $output .= "        ],\n";
        }
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Data\Manual\FormsAlias;

class PokemonForms
{
    const FORMS = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../Generated/PokemonForms.php', $output);

        // Legendaries.php
        $output = '        Pokemon::' . implode(",\n        Pokemon::", array_keys($legendaries));
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon;

class Legendaries
{
    const LEGENDARIES = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../Generated/Legendaries.php', $output);

        // Mythics.php
        $output = '        Pokemon::' . implode(",\n        Pokemon::", array_keys($mythics));
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon;

class Mythics
{
    const LEGENDARIES = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../Generated/Mythics.php', $output);

        // Evolutions.php
        $output = [];
        foreach ($evolutions as $pokemon => &$data) {
            $data = '            ' . implode(",\n            ", $data) . "\n";
        }
        foreach ($evolutions as $k => $v) {
            $output[] = "        $k => [\n$v        ]";
        }
        $output = implode(",\n", $output);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Data\Manual\FormsAlias;

class Evolutions
{
    const FIELD_PARENT = 'from';
    const FIELD_CANDY = 'candy';
    const FIELD_WALKED = 'walk';
    const FIELD_BUDDY = 'buddy';
    const FIELD_DAY = 'day';
    const FIELD_NIGHT = 'night';
    const FIELD_PRIORITY = 'priority';
    const FIELD_TRADED = 'traded';
    const FIELD_ITEM = 'item';
    const FIELD_LURE = 'lure';
    const FIELD_MALE = 'male';
    const FIELD_FEMALE = 'female';
      
    const EVOLUTIONS = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../Generated/Evolutions.php', $output);

        // MoveUsers.php
        $output = [];
        foreach ($moveUsers as $move => $users) {
            $output[] = "        $move => [\n            " . implode(",\n            ", $users) . "\n        ]";
        }
        $output = implode(",\n", $output);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Data\Manual\FormsAlias;

class MoveUsers
{
    const MOVES = [
$output    
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../Generated/MoveUsers.php', $output);
    }

    protected function getCodeConst($code)
    {
        $shortConst = PokemonList::getConst(Mods::getId($code));
        $codeConst = 'Pokemon::' . $shortConst;
        $formBits = ($code & Mods::FORM_MASK);
        $formConst = FormsAlias::getConst($shortConst, $formBits);
        if ($formConst) {
            $codeConst .= ' | FormsAlias::' . $formConst;
        } elseif ($formBits) {
            $codeConst .= ' | Mods::FORM' . Mods::getForm($code);
        }
        !($code & Mods::SHADOW) ?: $codeConst .= ' | Mods::SHADOW';
        !($code & Mods::ALOLAN) ?: $codeConst .= ' | Mods::ALOLAN';
        !($code & Mods::PURIFIED) ?: $codeConst .= ' | Mods::PURIFIED';
        !($code & Mods::GALARIAN) ?: $codeConst .= ' | Mods::GALARIAN';
        return $codeConst;
    }

    /**
     * Get constant name from value (for code generation)
     * @param string $type
     * @return string|null
     */
    public static function getConst(string $type): ?string
    {
        static $typeConst = null;
        if ($typeConst) {
            return $typeConst[$type] ?? null;
        }
        $reflection = new \ReflectionClass(__CLASS__);
        $constants = $reflection->getConstants();
        $typeConst = [];
        foreach ($constants as $name => $value) {
            if (!is_string($value)) {
                continue;
            }
            $typeConst[$value] = $name;
        }
        return $typeConst[$type] ?? null;
    }

    /**
     * @param int $code
     * @param bool $short
     * @return string|null
     */
    public function getPokemonName(int $code, bool $short = false): string
    {
        $name = Locale::getPokemon($code);
        if (!$short) {
            $name = Mods::getFullName($name, $code);
        }
        return $name;
    }
}
