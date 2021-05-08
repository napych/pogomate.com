<?php
//
//namespace Pogo\Data\Parser\Result;
//
//use Pogo\Data\Generated\PokemonData;
//use Pogo\Data\Manual\Forms;
//use Pogo\Data\Manual\Names;
//use Pogo\Data\Manual\PokemonTypes;
//use Pogo\Data\Parser\Generator\Data1D;
//use Pogo\Data\Parser\Generator\Data2D;
//use Pogo\Data\Parser\Locale;
//use Pogo\Pokemon\Mods;
//use Pogo\Data\Manual\FormsAlias;
//use Pogo\Data\Manual\PokemonList;
//use Pogo\Data\Parser\Result\PokemonDataConst as PDC;
//
//class Pokemon
//{
//    const FIELD_CONST = 'const';
//    const FIELD_NAME = 'name';
//    const FIELD_FORM = 'form';
//    const FIELD_TYPE1 = 'type1';
//    const FIELD_TYPE2 = 'type2';
//    const FIELD_ATTACK = 'attack';
//    const FIELD_DEFENSE = 'defense';
//    const FIELD_STAMINA = 'stamina';
//    const FIELD_FAST_MOVES = 'fastMoves';
//    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
//    const FIELD_CHARGE_MOVES = 'chargeMoves';
//    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
//    const FIELD_EVOLUTIONS = 'evolutions';
//    const FIELD_THIRD_MOVE_DUST = 'thirdDust';
//    const FIELD_THIRD_MOVE_CANDY = 'thirdCandy';
//    const FIELD_TRANSFERABLE = 'transferable';
//    const FIELD_DEPLOYABLE = 'deployable';
//    const FIELD_PARENT = 'parent';
//    const FIELD_BUDDY_DISTANCE = 'buddyDistance';
//    const FIELD_LEGENDARY = 'legendary';
//    const FIELD_MYTHIC = 'mythic';
//
//    const FIELD_PURIFY_DUST = 'purifyDust';
//    const FIELD_PURIFY_CANDY = 'purifyCandy';
//
//    const FIELD_EVOLUTION_POKEMON = 'pokemon';
//    const FIELD_EVOLUTION_FORM = 'form';
//    const FIELD_EVOLUTION_CANDY = 'candy';
//    const FIELD_EVOLUTION_FREE_TRADED = 'freeTraded';
//    const FIELD_EVOLUTION_ITEM = 'item';
//    const FIELD_EVOLUTION_LURE = 'lure';
//    const FIELD_EVOLUTION_DISTANCE = 'km';
//    const FIELD_EVOLUTION_MALE = 'male';
//    const FIELD_EVOLUTION_FEMALE = 'female';
//    const FIELD_EVOLUTION_DAY = 'day';
//    const FIELD_EVOLUTION_NIGHT = 'night';
//    const FIELD_EVOLUTION_BUDDY = 'buddy';
//    const FIELD_EVOLUTION_PRIORITY = 'priority';
//    const FIELD_UNRELEASED = 'unreleased';
//
//    protected $fields = [];
//
//    protected $pokemon = [];
//
////    public function __construct()
////    {
////        // init fields translations for PokemonData
////        $fieldsList = new \ReflectionClass(PDC::class);
////        foreach ($fieldsList->getConstants() as $k => $v) {
////            if (substr($k, 0, 6) === 'FIELD_') {
////                $this->fields[$v] = 'self::' . $k;
////            }
////        }
////
////        $reflection = new \ReflectionClass(PokemonList::class);
////        $pokemonList = $reflection->getConstants();
////        foreach ($pokemonList as $const => $value) {
////            $this->initPokemon($value);
////        }
////        foreach (\Pogo\Data\Manual\Evolve::EVOLVE_FROM as $to => $from) {
////            $this->initPokemon($to);
////            $this->initPokemon($from);
////        }
////        foreach (PokemonTypes::POKEMON as $form => $types) {
////            $this->initPokemon($form);
////        }
////        foreach (\Pogo\Data\Manual\Evolve::EVOLVE_FROM as $to => $from) {
////            if (!$from) {
////                continue;
////            }
////            if (!isset($this->pokemon[$from][self::FIELD_EVOLUTIONS])) {
////                $this->pokemon[$from][self::FIELD_EVOLUTIONS] = [];
////            }
////            $evo = [self::FIELD_EVOLUTION_POKEMON => $this->pokemon[$to][self::FIELD_NAME]];
////            if (isset($this->pokemon[$to][self::FIELD_FORM])) {
////                $evo[self::FIELD_EVOLUTION_FORM] = $this->pokemon[$to][self::FIELD_FORM];
////            }
////            $this->pokemon[$from][self::FIELD_EVOLUTIONS][] = $evo;
////        }
////    }
////
////    protected function initPokemon($code)
////    {
////        if (!$code) {
////            return;
////        }
////        $id = Mods::getId($code);
////        if ($id != $code) {
////            $this->initPokemon($id);
////        }
////        $species[$code] = 1;
////        if (isset(Forms::NAMES[$code])) {
////            foreach (Forms::NAMES[$code] as $spCode => $label) {
////                $species[$code | $spCode] = 1;
////            }
////        }
////        foreach ($species as $spCode => $label) {
////            if (isset($this->pokemon[$spCode])) {
////                continue;
////            }
////            $const = Mods::getConst($spCode, true);
////            $formConst = Mods::getConst($spCode, false);
////            $this->pokemon[$spCode] = [
////                self::FIELD_CONST => $formConst,
////                self::FIELD_NAME => $const,
////                self::FIELD_FORM => $formConst,
////                self::FIELD_UNRELEASED => true
////            ];
//////            $form = Mods::getForm($const);
//////            if ($formAlias = FormsAlias::getConst($const, $spCode)) {
//////                $this->pokemon[$spCode][self::FIELD_CONST] = $formAlias;
//////                $this->pokemon[$spCode][self::FIELD_FORM] = $formAlias;
//////            }
////        }
////    }
////
////    public function add(int $code, array $data)
////    {
////        $this->pokemon[$code] = $data;
////    }
////
////    public function getList()
////    {
////        return $this->pokemon;
////    }
//
//    public function writePHP()
//    {
//        foreach ($this->pokemon as $code => $data) {
//            if (!empty($data[self::FIELD_UNRELEASED]) && !array_key_exists(
//                    $code,
//                    \Pogo\Data\Manual\Evolve::EVOLVE_FROM
//                )) {
//                echo 'WARNING: missing manual evolve entry for unreleased pokemon ', $data[self::FIELD_FORM], PHP_EOL;
//            }
//        }
//
//        $forms = [];
//        $legendaries = [];
//        $mythics = [];
//        $evolutions = [];
//        $moveUsers = [];
//
//        $str2code = [];
//        foreach ($this->pokemon as $code => $pokemon) {
//            $str2code[$pokemon[Pokemon::FIELD_CONST]] = $code;
//        }
//
//        $oldList = PokemonData::POKEMON;
//
//        $output = [];
//        foreach ($this->pokemon as $code => $pokemon) {
//            $id = Mods::getId($code);
//
//            $shortConst = PokemonList::getConst($id);
//            $idConst = 'Pokemon::' . $shortConst;
//            $codeConst = $this->getCodeConst($code);
//
//            // collect forms
//            if (!isset($forms[$idConst])) {
//                $forms[$idConst] = [$codeConst];
//            } else {
//                $forms[$idConst][] = $codeConst;
//            }
//
//            $data = [
//                PDC::FIELD_NAME => addcslashes($this->getPokemonName($code), "'"),
//                PDC::FIELD_NAME_SHORT => addcslashes($this->getPokemonName($code, true), "'"),
//                PDC::FIELD_DESC => addcslashes(Locale::getDescription($code), "'"),
//                PDC::FIELD_CATEGORY => addcslashes(Locale::getCategory($code), "'")
//            ];
//
//            if (empty($pokemon[self::FIELD_UNRELEASED])) {
//                $data[PDC::FIELD_ATTACK] = $pokemon[Pokemon::FIELD_ATTACK] ?? 'null';
//                $data[PDC::FIELD_DEFENSE] = $pokemon[Pokemon::FIELD_DEFENSE] ?? 'null';
//                $data[PDC::FIELD_STAMINA] = $pokemon[Pokemon::FIELD_STAMINA] ?? 'null';
//                if (!empty($pokemon[Pokemon::FIELD_TYPE1])) {
//                    $data[PDC::FIELD_TYPE1] = 'Types::' . \Pogo\Data\Manual\Types::getConst(
//                            $pokemon[Pokemon::FIELD_TYPE1]
//                        );
//                }
//                if (!empty($pokemon[Pokemon::FIELD_TYPE2])) {
//                    $data[PDC::FIELD_TYPE2] = 'Types::' . \Pogo\Data\Manual\Types::getConst(
//                            $pokemon[Pokemon::FIELD_TYPE2]
//                        );
//                }
//                foreach (
//                    [
//                        PDC::FIELD_PURIFY_CANDY => Pokemon::FIELD_PURIFY_CANDY,
//                        PDC::FIELD_PURIFY_STARDUST => Pokemon::FIELD_PURIFY_DUST,
//                        PDC::FIELD_BUDDY_DISTANCE => Pokemon::FIELD_BUDDY_DISTANCE,
//                        PDC::FIELD_THIRD_MOVE_CANDY => Pokemon::FIELD_THIRD_MOVE_CANDY,
//                        PDC::FIELD_THIRD_MOVE_STARDUST => Pokemon::FIELD_THIRD_MOVE_DUST,
//                        PDC::FIELD_LEGENDARY => Pokemon::FIELD_LEGENDARY,
//                        PDC::FIELD_MYTHIC => Pokemon::FIELD_MYTHIC,
//                        PDC::FIELD_TRANSFERABLE => Pokemon::FIELD_TRANSFERABLE,
//                        PDC::FIELD_DEPLOYABLE => Pokemon::FIELD_DEPLOYABLE
//                    ] as $pdc => $pkm
//                ) {
//                    if ($pokemon[$pkm]) {
//                        $data[$pdc] = $pokemon[$pkm];
//                    }
//                }
//                // collect legendaries & mythics
//                !$pokemon[Pokemon::FIELD_LEGENDARY] ?: $legendaries[$shortConst] = 1;
//                !$pokemon[Pokemon::FIELD_MYTHIC] ?: $mythics[$shortConst] = 1;
//            } else {
//                $data[self::FIELD_UNRELEASED] = true;
//                if (!isset(PokemonTypes::POKEMON[$code])) {
//                    echo 'WARNING: missing PokemonType for unreleased pokemon ', $this->getPokemonName($code), PHP_EOL;
//                } else {
//                    $data[PDC::FIELD_TYPE1] = 'Types::' . \Pogo\Data\Manual\Types::getConst(
//                            PokemonTypes::POKEMON[$code][PokemonTypes::FIELD_TYPE1]
//                        );
//                    if (!empty(PokemonTypes::POKEMON[$code][PokemonTypes::FIELD_TYPE2])) {
//                        $data[PDC::FIELD_TYPE2] = 'Types::' . \Pogo\Data\Manual\Types::getConst(
//                                PokemonTypes::POKEMON[$code][PokemonTypes::FIELD_TYPE2]
//                            );
//                    }
//                }
//            }
//
//            // process evolutions
//            if (!empty($pokemon[Pokemon::FIELD_EVOLUTIONS])) {
//                $evolvesTo = [];
//                foreach ($pokemon[Pokemon::FIELD_EVOLUTIONS] as $evolutionData) {
//                    if (empty($evolutionData[Pokemon::FIELD_EVOLUTION_FORM])) {
//                        $evolutionData[Pokemon::FIELD_EVOLUTION_FORM] = $evolutionData[Pokemon::FIELD_EVOLUTION_POKEMON];
//                    }
//                    if (empty($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]])) {
//                        if (empty($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM] . '_NORMAL'])) {
//                            echo 'WARNING: Missing str2code for ', $evolutionData[Pokemon::FIELD_EVOLUTION_FORM], PHP_EOL;
//                        } else {
//                            $str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]] = $str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM] . '_NORMAL'];
//                        }
//                    }
//                    $evoConst = $this->getCodeConst($str2code[$evolutionData[Pokemon::FIELD_EVOLUTION_FORM]]);
//                    $evoArr = [
//                        'self::FIELD_PARENT => ' . $codeConst
//                    ];
//                    foreach ($evolutionData as $k => $v) {
//                        static $intConvert = [
//                            Pokemon::FIELD_EVOLUTION_CANDY => 'FIELD_CANDY',
//                            Pokemon::FIELD_EVOLUTION_DISTANCE => 'FIELD_WALKED',
//                            Pokemon::FIELD_EVOLUTION_PRIORITY => 'FIELD_PRIORITY'
//                        ];
//                        if (isset($intConvert[$k])) {
//                            $evoArr[] = "self::{$intConvert[$k]} => $v";
//                            continue;
//                        }
//                        static $stringConvert = [
//                            Pokemon::FIELD_EVOLUTION_ITEM => 'FIELD_ITEM',
//                            Pokemon::FIELD_EVOLUTION_LURE => 'FIELD_LURE'
//                        ];
//                        if (isset($stringConvert[$k])) {
//                            $evoArr[] = "self::{$stringConvert[$k]} => '$v'";
//                            continue;
//                        }
//                        static $trueConvert = [
//                            Pokemon::FIELD_EVOLUTION_FREE_TRADED => 'FIELD_TRADED',
//                            Pokemon::FIELD_EVOLUTION_BUDDY => 'FIELD_BUDDY',
//                            Pokemon::FIELD_EVOLUTION_MALE => 'FIELD_MALE',
//                            Pokemon::FIELD_EVOLUTION_FEMALE => 'FIELD_FEMALE',
//                            Pokemon::FIELD_EVOLUTION_DAY => 'FIELD_DAY',
//                            Pokemon::FIELD_EVOLUTION_NIGHT => 'FIELD_NIGHT'
//                        ];
//                        if (isset($trueConvert[$k])) {
//                            $evoArr[] = "self::{$trueConvert[$k]} => true";
//                            continue;
//                        }
//                        switch ($k) {
//                            case 'pokemon':
//                            case 'form':
//                                break;
//                            default:
//                                echo 'WARNING: unhandled evolution key: ', $k, ' for ', $codeConst, ' => ', $evoConst, PHP_EOL;
//                        }
//                    }
//                    $evolutions[$evoConst] = $evoArr;
//                    $evolvesTo[] = $evoConst;
//                }
//                $data[PDC::FIELD_EVOLVES] = $evolvesTo;
//            }
//
//            // process moves
//            foreach (
//                [
//                    Pokemon::FIELD_FAST_MOVES => PDC::FIELD_FAST_MOVES,
//                    Pokemon::FIELD_FAST_MOVES_ELITE => PDC::FIELD_FAST_MOVES_ELITE,
//                    Pokemon::FIELD_CHARGE_MOVES => PDC::FIELD_CHARGE_MOVES,
//                    Pokemon::FIELD_CHARGE_MOVES_ELITE => PDC::FIELD_CHARGE_MOVES_ELITE
//                ] as $field => $pdc
//            ) {
//                // todo: pass array to $data?
//                if (empty($pokemon[$field])) {
//                    continue;
//                }
//                $mvArr = [];
//                foreach ($pokemon[$field] as $mvId) {
//                    $moveConst = 'Moves::' . self::moveTranslate($mvId);
//                    $mvArr[] = $moveConst;
//                    $moveUsers[$moveConst][] = $codeConst;
//                }
//                $data[$pdc] = $mvArr;
//            }
//
//            $str = "        $codeConst => [\n";
//            foreach ($data as $k => $v) {
//                $str .= "            " . $this->fields[$k] . ' => ';
//                if (is_string($v)) {
//                    $str .= "'$v'";
//                } elseif ($v === true) {
//                    $str .= 'true';
//                } elseif ($v === false) {
//                    $str .= 'false';
//                } elseif ($v === null) {
//                    $str .= 'null';
//                } elseif (is_array($v)) {
//                    $str .= '[' . implode(', ', $v) . ']';
//                } else {
//                    $str .= $v;
//                }
//                $str .= ",\n";
//            }
//            $str .= "        ]";
//            $output[] = $str;
//        }
//
////        // PokemonData.php
////        $output = implode(",\n", $output);
////        $output = <<<PHP
////<?php
////
////namespace Pogo\Data\Generated;
////
////use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias, Pogo\Pokemon\Types;
////
////class PokemonData
////{
////    const FIELD_NAME = 'name';
////    const FIELD_NAME_SHORT = 'short';
////    const FIELD_DESC = 'desc';
////    const FIELD_CATEGORY = 'category';
////    const FIELD_TYPE1 = 'type1';
////    const FIELD_TYPE2 = 'type2';
////    const FIELD_ATTACK = 'attack';
////    const FIELD_DEFENSE = 'defense';
////    const FIELD_STAMINA = 'stamina';
////    const FIELD_PURIFY_CANDY = 'purifyCandy';
////    const FIELD_PURIFY_STARDUST = 'purifyDust';
////    const FIELD_LEGENDARY = 'legendary';
////    const FIELD_MYTHIC = 'mythic';
////    const FIELD_TRANSFERABLE = 'transfer';
////    const FIELD_DEPLOYABLE = 'deploy';
////    const FIELD_BUDDY_DISTANCE = 'distance';
////    const FIELD_THIRD_MOVE_CANDY = 'moveCandy';
////    const FIELD_THIRD_MOVE_STARDUST = 'moveDust';
////    const FIELD_EVOLVES = 'evolves';
////    const FIELD_FAST_MOVES = 'fastMoves';
////    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
////    const FIELD_CHARGE_MOVES = 'chargeMoves';
////    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
////    const FIELD_UNRELEASED = 'unreleased';
////
////    const POKEMON = [
////$output
////    ];
////}
////PHP;
////        file_put_contents(All::PHP_PATH . 'PokemonData.php', $output);
//
////        (new Data2D())
////            ->setClassName('PokemonForms')
////            ->setConstName('FORMS')
////            ->setData($forms)
////            ->setUseString('Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias')
////            ->writePHP();
//
////        (new Data1D())
////            ->setClassName('Legendaries')
////            ->setData(array_keys($legendaries))
////            ->setValuePrefix('Pokemon::')
////            ->setUseString('Pogo\Pokemon')
////            ->writePHP();
//
////        (new Data1D())
////            ->setClassName('Mythics')
////            ->setData(array_keys($mythics))
////            ->setValuePrefix('Pokemon::')
////            ->setUseString('Pogo\Pokemon')
////            ->writePHP();
//
////        // Evolutions
////        $output = [];
////        foreach ($evolutions as $pokemon => &$data) {
////            $data = '            ' . implode(",\n            ", $data) . "\n";
////        }
////        foreach ($evolutions as $k => $v) {
////            $output[] = "        $k => [\n$v        ]";
////        }
////        $output = implode(",\n", $output);
////        $output = <<<PHP
////<?php
////
////namespace Pogo\Data\Generated;
////
////use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias;
////
////class Evolutions
////{
////    const FIELD_PARENT = 'from';
////    const FIELD_CANDY = 'candy';
////    const FIELD_WALKED = 'walk';
////    const FIELD_BUDDY = 'buddy';
////    const FIELD_DAY = 'day';
////    const FIELD_NIGHT = 'night';
////    const FIELD_PRIORITY = 'priority';
////    const FIELD_TRADED = 'traded';
////    const FIELD_ITEM = 'item';
////    const FIELD_LURE = 'lure';
////    const FIELD_MALE = 'male';
////    const FIELD_FEMALE = 'female';
////
////    const EVOLUTIONS = [
////$output
////    ];
////}
////PHP;
////        file_put_contents(All::PHP_PATH . 'Evolutions.php', $output);
//
////        (new Data2D())
////            ->setClassName('MoveUsers')
////            ->setConstName('MOVES')
////            ->setData($moveUsers)
////            ->setUseString('Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias')
////            ->writePHP();
//    }
//
//    protected function getCodeConst($code)
//    {
//        $shortConst = PokemonList::getConst(Mods::getId($code));
//        $codeConst = 'Pokemon::' . $shortConst;
//        $formBits = ($code & Mods::FORM_MASK);
//        $formConst = FormsAlias::getConst($shortConst, $formBits);
//        if ($formConst) {
//            $codeConst .= ' | FormsAlias::' . $formConst;
//        } elseif ($formBits) {
//            echo 'WARNING: missing form ', Mods::getFormNum($code), ' description for ', $shortConst, PHP_EOL;
//            $codeConst .= ' | Mods::FORM' . Mods::getFormNum($code);
//        }
//        !($code & Mods::SHADOW) ?: $codeConst .= ' | Mods::SHADOW';
//        !($code & Mods::ALOLAN) ?: $codeConst .= ' | Mods::ALOLAN';
//        !($code & Mods::PURIFIED) ?: $codeConst .= ' | Mods::PURIFIED';
//        !($code & Mods::GALARIAN) ?: $codeConst .= ' | Mods::GALARIAN';
//        !($code & Mods::MEGA) ?: $codeConst .= ' | Mods::MEGA';
//        !($code & Mods::MEGA_X) ?: $codeConst .= ' | Mods::MEGA_X';
//        !($code & Mods::MEGA_Y) ?: $codeConst .= ' | Mods::MEGA_Y';
//        return $codeConst;
//    }
//
//    /**
//     * Get constant name from value (for code generation)
//     * @param string $type
//     * @return string|null
//     */
//    public static function getConst(string $type): ?string
//    {
//        static $typeConst = null;
//        if ($typeConst) {
//            return $typeConst[$type] ?? null;
//        }
//        $reflection = new \ReflectionClass(__CLASS__);
//        $constants = $reflection->getConstants();
//        $typeConst = [];
//        foreach ($constants as $name => $value) {
//            if (!is_string($value)) {
//                continue;
//            }
//            $typeConst[$value] = $name;
//        }
//        return $typeConst[$type] ?? null;
//    }
//
//    /**
//     * @param int $code
//     * @param bool $short
//     * @return string|null
//     */
//    public function getPokemonName(int $code, bool $short = false): string
//    {
//        if ($short) {
//            $id = Mods::getId($code);
//
//            // get from locale
//            if ($shortName = Locale::getPokemon($id)) {
//                return $shortName;
//            }
//
//            // get from custom names
//            if (!empty(Names::CUSTOM[$id])) {
//                return Names::CUSTOM[$id];
//            }
//
//            // get from PokemonList
//            static $autoNames = null;
//            if ($autoNames === null) {
//                $autoNames = [];
//                $reflection = new \ReflectionClass(\Pogo\Data\Manual\PokemonList::class);
//                $constants = $reflection->getConstants();
//                foreach ($constants as $name => $value) {
//                    $autoNames[$value] = ucfirst(strtolower($name));
//                }
//            }
//            if (!empty($autoNames[$id])) {
//                return $autoNames[$id];
//            }
//
//            // not found
//            return "Unknown/$id";
//        }
//        $name = '';
//        if (!$short) {
//            if (Mods::isShadow($code)) {
//                $name .= 'Shadow ';
//            }
//            if (Mods::isAlolan($code)) {
//                $name .= 'Alolan ';
//            }
//            if (Mods::isGalarian($code)) {
//                $name .= 'Galarian ';
//            }
//            if (Mods::isPurified($code)) {
//                $name .= 'Purified ';
//            }
//            if ($code & (Mods::MEGA | Mods::MEGA_X | Mods::MEGA_Y)) {
//                $name = 'Mega ' . $name;
//            }
//        }
//
//        $pokemonName = $this->getPokemonName($code, true);
//        if ($form = \Pogo\Pokemon\Form::getFormName($code)) {
//            if (strpos($form, $pokemonName) !== false) {
//                $name .= $form;
//            } else {
//                $name .= "$pokemonName ($form)";
//            }
//        } else {
//            $name .= $pokemonName;
//        }
//
//        if (!$short) {
//            if ($code & Mods::MEGA_X) {
//                $name .= ' X';
//            }
//            if ($code & Mods::MEGA_Y) {
//                $name .= ' Y';
//            }
//        }
//
//        return $name;
//    }
//
//    public static function moveTranslate(string $moveId): string
//    {
//        static $moveTranslate = [];
//        if (empty($moveTranslate)) {
//            $ref = new \ReflectionClass('\Pogo\Data\Generated\Moves');
//            $moveTranslate = array_flip($ref->getConstants());
//        }
//        return $moveTranslate[$moveId];
//    }
//}
