<?php

namespace Pogo\Data\Result;

use Pogo\General\Mods;
use Pogo\Handjob\FormsAlias;
use Pogo\Pokemon\PokemonList;

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
    const FIELD_EVOLUTION_FREE_TRADED = 'noCostViaTrade';
    const FIELD_EVOLUTION_ITEM = 'item';

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

        foreach ($this->pokemon as $code => $pokemon) {
            $id = Mods::getId($code);

            $shortConst = PokemonList::getConst($id);
            $idConst = $codeConst = 'Pokemon::' . $shortConst;
            if ($formBits = ($code & Mods::FORM_MASK)) {
                $formConst = FormsAlias::getConst($shortConst, $formBits);
                if ($formConst) {
                    $codeConst .= ' | FormsAlias::' . $formConst;
                } else {
                    $codeConst .= ' | Mods::FORM' . Mods::getForm($code);
                }
            }
            !($code & Mods::SHADOW) ?: $codeConst .= ' | Mods::SHADOW';
            !($code & Mods::ALOLAN) ?: $codeConst .= ' | Mods::ALOLAN';
            !($code & Mods::PURIFIED) ?: $codeConst .= ' | Mods::PURIFIED';
            !($code & Mods::GALARIAN) ?: $codeConst .= ' | Mods::GALARIAN';

            // collect forms
            if (!isset($forms[$idConst])) {
                $forms[$idConst] = [$codeConst];
            } else {
                $forms[$idConst][] = $codeConst;
            }

            $data = [
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
//            const FIELD_FAST_MOVES = 'fastMoves';
//            const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
//            const FIELD_CHARGE_MOVES = 'chargeMoves';
//            const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
//            const FIELD_EVOLUTIONS = 'evolutions';
//            const FIELD_THIRD_MOVE_DUST = 'thirdDust';
//            const FIELD_THIRD_MOVE_CANDY = ' thirdCandy';
//            const FIELD_TRANSFERABLE = 'transferable';
//            const FIELD_DEPLOYABLE = 'deployable';
//            const FIELD_PARENT = 'parent';
//            const FIELD_BUDDY_DISTANCE = 'buddyDistance';
//            const FIELD_LEGENDARY = 'legendary';
//            const FIELD_MYTHIC = 'mythic';
//            const FIELD_EVOLUTION_POKEMON = 'pokemon';
//            const FIELD_EVOLUTION_FORM = 'form';
//            const FIELD_EVOLUTION_CANDY = 'candy';
//            const FIELD_EVOLUTION_FREE_TRADED = 'noCostViaTrade';
//            const FIELD_EVOLUTION_ITEM = 'item';

            $str = "        $codeConst => [\n            ";
            $str .= implode(",\n            ", $data);
            $str .= "\n        ]";
            $output[] = $str;
        }

        // PokemonData.php
        $output = implode(",\n", $output);
        $output = <<<PHP
<?php

namespace Pogo\Data\PHP;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Handjob\FormsAlias, Pogo\General\Types;

class PokemonData
{
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';
    const FIELD_ATTACK = 'attack';
    const FIELD_DEFENSE = 'defense';
    const FIELD_STAMINA = 'stamina';
    const FIELD_PURIFY_CANDY = 'purifyCandy';
    const FIELD_PURIFY_STARDUST = 'purifyDust';
    const FIELD_LEGENDARY = 'legendary';
    const FIELD_MYTHIC = 'mythic';
    
    const POKEMON = [
$output    
    ];
} 
PHP;
        file_put_contents(__DIR__ . '/../PHP/PokemonData.php', $output);

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

namespace Pogo\Data\PHP;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Handjob\FormsAlias;

class PokemonForms
{
    const FORMS = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../PHP/PokemonForms.php', $output);

        // Legendaries.php
        $output = '        Pokemon::' . implode(",\n        Pokemon::", array_keys($legendaries));
        $output = <<<PHP
<?php

namespace Pogo\Data\PHP;

use Pogo\Pokemon;

class Legendaries
{
    const LEGENDARIES = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../PHP/Legendaries.php', $output);

        // Mythics.php
        $output = '        Pokemon::' . implode(",\n        Pokemon::", array_keys($mythics));
        $output = <<<PHP
<?php

namespace Pogo\Data\PHP;

use Pogo\Pokemon;

class Mythics
{
    const LEGENDARIES = [
$output
    ];
}
PHP;
        file_put_contents(__DIR__ . '/../PHP/Mythics.php', $output);
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
}
