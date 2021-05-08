<?php

namespace Pogo\Data\Parser\Generator;

use Pogo\Data\Manual\Evolve;
use Pogo\Data\Manual\FormsAlias;
use Pogo\Data\Manual\Names;
use Pogo\Data\Manual\PokemonList;
use Pogo\Data\Manual\PokemonTypes;
use Pogo\Data\Parser\Locale;
use Pogo\Data\Parser\Result\All;
use Pogo\Pokemon;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon\Types;
use ReflectionClass;

class ResultPokemon
{
    /** @var int */
    protected $code = null;
    /** @var string[] */
    protected $types = [];
    /** @var int|null */
    protected $attack = null;
    /** @var int|null */
    protected $defense = null;
    /** @var int|null */
    protected $stamina = null;

    /** @var bool|null */
    protected $legendary = null;
    /** @var bool|null */
    protected $mythic = null;

    /** @var int|null */
    protected $thirdMoveCandy = null;
    /** @var int|null */
    protected $thirdMoveDust = null;
    /** @var int|null */
    protected $purifyCandy = null;
    /** @var int|null */
    protected $purifyDust = null;
    /** @var int|null */
    protected $buddyDistance = null;

    /** @var bool|null */
    protected $transferable = null;
    /** @var bool|null */
    protected $deployable = null;
    /** @var bool|null */
    protected $tradable = null;


    /** @var bool */
    protected $unreleased = true;

    /** @var int[] */
    protected $fastMoves = [];
    /** @var int[] */
    protected $chargeMoves = [];
    /** @var int[] */
    protected $eliteFastMoves = [];
    /** @var int[] */
    protected $eliteChargeMoves = [];

    /** @var \Pogo\Data\Parser\Generator\ResultEvolution[] */
    protected $evolutions = [];

    /** @var static[] */
    protected static $list = [];
    static protected $moveConstList = [];

    protected function __construct(int $code)
    {
        static::preload();
        $this->code = $code;
    }

    protected function __clone()
    {
    }

    /**
     * @param int $code
     * @return \Pogo\Data\Parser\Generator\ResultPokemon
     */
    public static function get(int $code): ResultPokemon
    {
        return static::$list[$code] ?? static::$list[$code] = new static($code);
    }

    public static function clone(int $newCode, int $oldCode): ResultPokemon
    {
        $new = clone static::$list[$oldCode];
        $new->code = $newCode;
        $new->evolutions = [];
        return static::$list[$newCode] = $new;
    }

    public static function preload(): void
    {
        static $preloadDone = false;
        if ($preloadDone) {
            return;
        }
        // preload all manually defined pokemon
        $preloadDone = true;
        $ref = new ReflectionClass(PokemonList::class);
        foreach ($ref->getConstants() as $const) {
            static::get($const);
        }
        foreach (PokemonTypes::POKEMON as $form => $types) {
            static::get($form)->setTypes($types[PokemonTypes::FIELD_TYPE1], $types[PokemonTypes::FIELD_TYPE2] ?? null);
        }
        foreach (Evolve::EVOLVE_FROM as $to => $from) {
            static::get($to);
            if (!$from) {
                continue;
            }
            static::get($from);
            static::$list[$from]->addEvolution(new ResultEvolution($to));
        }
        // preload move constants
        $ref1 = new ReflectionClass(\Pogo\Data\Generated\Moves::class);
        $constants = $ref1->getConstants();
        foreach ($constants as $k => $v) {
            self::$moveConstList[$v] = 'Moves::' . $k;
        }
    }

    /**
     *
     * Automatic fields
     *
     */

    public function getName(): string
    {
        $name = '';
        if (Mods::isShadow($this->code)) {
            $name .= 'Shadow ';
        }
        if (Mods::isAlolan($this->code)) {
            $name .= 'Alolan ';
        }
        if (Mods::isGalarian($this->code)) {
            $name .= 'Galarian ';
        }
        if (Mods::isPurified($this->code)) {
            $name .= 'Purified ';
        }
        if ($this->code & (Mods::MEGA | Mods::MEGA_X | Mods::MEGA_Y)) {
            $name = 'Mega ' . $name;
        }

        $pokemonName = $this->getShortName();
        if (empty($pokemonName)) {
            echo $this->code;
            die();
        }
        if ($form = \Pogo\Pokemon\Form::getFormName($this->code)) {
            if (strpos($form, $pokemonName) !== false) {
                $name .= $form;
            } else {
                $name .= "$pokemonName ($form)";
            }
        } else {
            $name .= $pokemonName;
        }

        if ($this->code & Mods::MEGA_X) {
            $name .= ' X';
        }
        if ($this->code & Mods::MEGA_Y) {
            $name .= ' Y';
        }
        return $name;
    }

    public function getShortName(): string
    {
        // get from locale
        if ($shortName = Locale::getPokemon($this->code)) {
            return $shortName;
        }

        // get from custom names
        if (!empty(Names::CUSTOM[$this->code])) {
            return Names::CUSTOM[$this->code];
        }

        // get from PokemonList
        static $autoNames = null;
        if ($autoNames === null) {
            $autoNames = [];
            $reflection = new \ReflectionClass(\Pogo\Data\Manual\PokemonList::class);
            $constants = $reflection->getConstants();
            foreach ($constants as $name => $value) {
                $autoNames[$value] = ucfirst(strtolower($name));
            }
        }
        if (!empty($autoNames[$this->code])) {
            return $autoNames[$this->code];
        }

        // not found
        return "Unknown/{$this->code}";
    }

    public function getDescription(): ?string
    {
        return Locale::getDescription($this->code) ?: '';
    }

    public function getCategory(): ?string
    {
        return Locale::getCategory($this->code) ?: '';
    }

    public function getConst(): string
    {
        $shortConst = PokemonList::getConst(Mods::getId($this->code));
        $codeConst = 'Pokemon::' . $shortConst;
        $formBits = ($this->code & Mods::FORM_MASK);
        $formConst = FormsAlias::getConst($shortConst, $formBits);
        if ($formConst) {
            $codeConst .= ' | FormsAlias::' . $formConst;
        } elseif ($formBits) {
            echo 'WARNING: missing form ', Mods::getFormNum($this->code), ' description for ', $shortConst, PHP_EOL;
            $codeConst .= ' | Mods::FORM' . Mods::getFormNum($this->code);
        }
        !($this->code & Mods::SHADOW) ?: $codeConst .= ' | Mods::SHADOW';
        !($this->code & Mods::ALOLAN) ?: $codeConst .= ' | Mods::ALOLAN';
        !($this->code & Mods::PURIFIED) ?: $codeConst .= ' | Mods::PURIFIED';
        !($this->code & Mods::GALARIAN) ?: $codeConst .= ' | Mods::GALARIAN';
        !($this->code & Mods::MEGA) ?: $codeConst .= ' | Mods::MEGA';
        !($this->code & Mods::MEGA_X) ?: $codeConst .= ' | Mods::MEGA_X';
        !($this->code & Mods::MEGA_Y) ?: $codeConst .= ' | Mods::MEGA_Y';
        return $codeConst;
    }

    public function getBaseConst(): string
    {
        return 'Pokemon::' . PokemonList::getConst(Mods::getId($this->code));
    }

    /**
     *
     * Getters and setters
     *
     */

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @return string[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param string $type1
     * @param string|null $type2
     * @return ResultPokemon
     */
    public function setTypes(string $type1, ?string $type2): ResultPokemon
    {
        $this->types = [$type1];
        if ($type2) {
            $this->types[] = $type2;
        }
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAttack(): ?int
    {
        return $this->attack;
    }

    /**
     * @param int|null $attack
     * @return ResultPokemon
     */
    public function setAttack(?int $attack): ResultPokemon
    {
        $this->attack = $attack;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDefense(): ?int
    {
        return $this->defense;
    }

    /**
     * @param int|null $defense
     * @return ResultPokemon
     */
    public function setDefense(?int $defense): ResultPokemon
    {
        $this->defense = $defense;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStamina(): ?int
    {
        return $this->stamina;
    }

    /**
     * @param int|null $stamina
     * @return ResultPokemon
     */
    public function setStamina(?int $stamina): ResultPokemon
    {
        $this->stamina = $stamina;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLegendary(): ?bool
    {
        return $this->legendary;
    }

    /**
     * @param bool|null $legendary
     * @return ResultPokemon
     */
    public function setLegendary(?bool $legendary): ResultPokemon
    {
        $this->legendary = $legendary;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMythic(): ?bool
    {
        return $this->mythic;
    }

    /**
     * @param bool|null $mythic
     * @return ResultPokemon
     */
    public function setMythic(?bool $mythic): ResultPokemon
    {
        $this->mythic = $mythic;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThirdMoveCandy(): ?int
    {
        return $this->thirdMoveCandy;
    }

    /**
     * @param int|null $thirdMoveCandy
     * @return ResultPokemon
     */
    public function setThirdMoveCandy(?int $thirdMoveCandy): ResultPokemon
    {
        $this->thirdMoveCandy = $thirdMoveCandy;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThirdMoveDust(): ?int
    {
        return $this->thirdMoveDust;
    }

    /**
     * @param int|null $thirdMoveDust
     * @return ResultPokemon
     */
    public function setThirdMoveDust(?int $thirdMoveDust): ResultPokemon
    {
        $this->thirdMoveDust = $thirdMoveDust;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPurifyCandy(): ?int
    {
        return $this->purifyCandy;
    }

    /**
     * @param int|null $purifyCandy
     * @return ResultPokemon
     */
    public function setPurifyCandy(?int $purifyCandy): ResultPokemon
    {
        $this->purifyCandy = $purifyCandy;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPurifyDust(): ?int
    {
        return $this->purifyDust;
    }

    /**
     * @param int|null $purifyDust
     * @return ResultPokemon
     */
    public function setPurifyDust(?int $purifyDust): ResultPokemon
    {
        $this->purifyDust = $purifyDust;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBuddyDistance(): ?int
    {
        return $this->buddyDistance;
    }

    /**
     * @param int|null $buddyDistance
     * @return ResultPokemon
     */
    public function setBuddyDistance(?int $buddyDistance): ResultPokemon
    {
        $this->buddyDistance = $buddyDistance;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTransferable(): ?bool
    {
        return $this->transferable;
    }

    /**
     * @param bool|null $transferable
     * @return ResultPokemon
     */
    public function setTransferable(?bool $transferable): ResultPokemon
    {
        $this->transferable = $transferable;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeployable(): ?bool
    {
        return $this->deployable;
    }

    /**
     * @return bool|null
     */
    public function getTradable(): ?bool
    {
        return $this->tradable;
    }

    /**
     * @param bool|null $tradable
     * @return ResultPokemon
     */
    public function setTradable(?bool $tradable): ResultPokemon
    {
        $this->tradable = $tradable;
        return $this;
    }

    /**
     * @param bool|null $deployable
     * @return ResultPokemon
     */
    public function setDeployable(?bool $deployable): ResultPokemon
    {
        $this->deployable = $deployable;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUnreleased(): bool
    {
        return $this->unreleased;
    }

    /**
     * @param bool|null $unreleased
     * @return ResultPokemon
     */
    public function setUnreleased(bool $unreleased): ResultPokemon
    {
        $this->unreleased = $unreleased;
        return $this;
    }

    public function clearMoves(): ResultPokemon
    {
        $this->fastMoves = [];
        $this->eliteFastMoves = [];
        $this->chargeMoves = [];
        $this->eliteChargeMoves = [];
        return $this;
    }

    /**
     * @return int[]
     */
    public function getFastMoves(): array
    {
        return $this->fastMoves;
    }

    public function addFastMove(int $moveId, bool $elite = false): ResultPokemon
    {
        if ($elite) {
            $this->eliteFastMoves[] = $moveId;
        } else {
            $this->fastMoves[] = $moveId;
        }
        return $this;
    }

    /**
     * @return int[]
     */
    public function getChargeMoves(): array
    {
        return $this->chargeMoves;
    }

    public function addChargeMove(int $moveId, bool $elite = false): ResultPokemon
    {
        if ($elite) {
            $this->eliteChargeMoves[] = $moveId;
        } else {
            $this->chargeMoves[] = $moveId;
        }
        return $this;
    }

    /**
     * @return int[]
     */
    public function getEliteFastMoves(): array
    {
        return $this->eliteFastMoves;
    }

    /**
     * @return int[]
     */
    public function getEliteChargeMoves(): array
    {
        return $this->eliteChargeMoves;
    }

    /**
     * @return \Pogo\Data\Parser\Generator\ResultEvolution[]
     */
    public function getEvolutions(): array
    {
        return $this->evolutions;
    }

    public function addEvolution(ResultEvolution $evolution): ResultPokemon
    {
        $this->evolutions[$evolution->getCode()] = $evolution;
        return $this;
    }

    /**
     *
     * Write PHP
     *
     */

    public static function writePHP()
    {
        static::writePokemonData();
        static::writePokemonForms();
        static::writeLegendaries();
        static::writeMythics();
        static::writeEvolutions();
        static::writeMoveUsers();
    }

    public function getPHP()
    {
        $types = $this->getTypes();
        $data = [
            'self::FIELD_NAME' => $this->getName(),
            'self::FIELD_NAME_SHORT' => $this->getShortName(),
            'self::FIELD_DESC' => $this->getDescription(),
            'self::FIELD_CATEGORY' => $this->getCategory(),
            'self::FIELD_ATTACK' => $this->getAttack(),
            'self::FIELD_DEFENSE' => $this->getDefense(),
            'self::FIELD_STAMINA' => $this->getStamina(),
            'self::FIELD_TYPE1' => 'Types::' . Types::getConst($types[0]),
            'self::FIELD_TYPE2' => !empty($types[1]) ? 'Types::' . Types::getConst($types[1]) : null,
            'self::FIELD_LEGENDARY' => $this->getLegendary() ?: null,
            'self::FIELD_MYTHIC' => $this->getMythic() ?: null,
            'self::FIELD_TRANSFERABLE' => $this->getTransferable() ?: null,
            'self::FIELD_DEPLOYABLE' => $this->getDeployable() ?: null,
            'self::FIELD_TRADABLE' => $this->getTradable() ?: null,
            'self::FIELD_BUDDY_DISTANCE' => $this->getBuddyDistance(),
            'self::FIELD_THIRD_MOVE_CANDY' => $this->getThirdMoveCandy(),
            'self::FIELD_THIRD_MOVE_STARDUST' => $this->getThirdMoveDust(),
            'self::FIELD_EVOLVES' => $this->getEvolvesStrings(),
            'self::FIELD_FAST_MOVES' => $this->getFastMovesStrings(false),
            'self::FIELD_FAST_MOVES_ELITE' => $this->getFastMovesStrings(true),
            'self::FIELD_CHARGE_MOVES' => $this->getChargeMovesStrings(false),
            'self::FIELD_CHARGE_MOVES_ELITE' => $this->getChargeMovesStrings(true),
            'self::FIELD_UNRELEASED' => $this->getUnreleased() ?: null
        ];
        return self::array2php($data, $this->getConst() . ' => ', '', 2);
    }

    protected function isModified(): bool
    {
        $previous = Pokemon::get($this->code);
        $modified =
            $previous->getName() != $this->getName() ||
            $previous->getShortName() != $this->getShortName() ||
            $previous->getDescription() != $this->getDescription() ||
            $previous->getCategory() != $this->getCategory() ||
            $previous->getAttack() != $this->getAttack() ||
            $previous->getDefense() != $this->getDefense() ||
            $previous->getStamina() != $this->getStamina() ||
            $previous->isLegendary() != $this->getLegendary() ||
            $previous->isMythical() != $this->getMythic() ||
            $previous->isTransferable() != $this->getTransferable() ||
            $previous->isDeployable() != $this->getDeployable() ||
            $previous->isTradable() != $this->getTradable() ||
            $previous->getBuddyDistance() != $this->getBuddyDistance() ||
            $previous->getThirdMoveCandy() != $this->getThirdMoveCandy() ||
            $previous->getThirdMoveDust() != $this->getThirdMoveDust() ||
            $previous->isUnreleased() != $this->getUnreleased();
        if (!$modified) {
            $types = $this->getTypes();
            $type2 = $types[1] ?: null;
            $modified = $types[0] != $previous->getType1() || $type2 != $previous->getType2();
        }
        // TODO: all moves
        // TODO: evolves
    }

    protected static function array2php(
        array $array,
        string $prefix = '',
        string $postfix = '',
        int $depth = 1,
        bool $inner = false
    ): string {
        $lines = [];
        foreach ($array as $k => $v) {
            if (is_null($v)) {
                continue;
            }
            if (is_string($v)) {
                if (strpos($v, '::') === false) {
                    $val = "'" . addcslashes($v, "'") . "'";
                } else {
                    $val = $v;
                }
            } elseif (is_array($v)) {
                $val = self::array2php($v, "", '', $depth + 1, true);
            } elseif ($v === true) {
                $val = 'true';
            } elseif ($v === false) {
                $val = 'false';
            } else {
                $val = (string)$v;
            }
            if (is_int($k)) {
                $lines[] = $val;
            } else {
                $lines[] = "$k => $val";
            }
        }
        $indent = str_repeat('    ', $depth);
        $content = empty($lines) ? '[]' : "[\n$indent    " . implode(",\n$indent    ", $lines) . "\n$indent]";
        return ($inner ? '' : $indent) . $prefix . $content . $postfix;
    }

    public static function writePokemonData()
    {
        $code = [];
        foreach (static::$list as $rp) {
            $code[] = $rp->getPHP();
        }
        $code = implode(",\n", $code);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias, Pogo\Pokemon\Types;

class PokemonData
{
    const FIELD_NAME = 'name';
    const FIELD_NAME_SHORT = 'short';
    const FIELD_DESC = 'desc';
    const FIELD_CATEGORY = 'category';
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
    const FIELD_TRADABLE = 'tradable';
    const FIELD_BUDDY_DISTANCE = 'distance'; 
    const FIELD_THIRD_MOVE_CANDY = 'moveCandy';
    const FIELD_THIRD_MOVE_STARDUST = 'moveDust';
    const FIELD_EVOLVES = 'evolves';
    const FIELD_FAST_MOVES = 'fastMoves';
    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
    const FIELD_CHARGE_MOVES = 'chargeMoves';
    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
    const FIELD_UNRELEASED = 'unreleased';
    
    const POKEMON = [
$code
    ];
} 
PHP;
        file_put_contents(All::PHP_PATH . 'PokemonData.php', $output);
    }

    protected function getEvolvesStrings(): ?array
    {
        if (empty($this->evolutions)) {
            return null;
        }
        $evolves = [];
        foreach ($this->evolutions as $evolution) {
            $evolves[] = static::get($evolution->getCode())->getConst();
        }
        return $evolves;
    }

    protected function getFastMovesStrings(?bool $elite = null): ?array
    {
        if ($elite === true) {
            $moves = $this->eliteFastMoves;
        } elseif ($elite === false) {
            $moves = $this->fastMoves;
        } else {
            $moves = array_merge($this->fastMoves, $this->eliteFastMoves);
        }
        if (empty($moves)) {
            return null;
        }
        $result = [];
        foreach ($moves as $move) {
            $result[] = self::$moveConstList[$move];
        }
        return $result;
    }

    protected function getChargeMovesStrings(?bool $elite = null): ?array
    {
        if ($elite === true) {
            $moves = $this->eliteChargeMoves;
        } elseif ($elite === false) {
            $moves = $this->chargeMoves;
        } else {
            $moves = array_merge($this->chargeMoves, $this->eliteChargeMoves);
        }
        if (empty($moves)) {
            return null;
        }
        $result = [];
        foreach ($moves as $move) {
            $result[] = self::$moveConstList[$move];
        }
        return $result;
    }

    public static function writePokemonForms(): void
    {
        $forms = [];
        foreach (self::$list as $code => $pokemon) {
            $pid = $code & Mods::ID_MASK;
            $pidName = static::get($pid)->getConst();
            $formName = static::get($code)->getConst();
            if (!isset($forms[$pidName])) {
                $forms[$pidName] = [$formName];
            } else {
                $forms[$pidName][] = $formName;
            }
        }
        (new Data2D())
            ->setClassName('PokemonForms')
            ->setConstName('FORMS')
            ->setData($forms)
            ->setUseString('Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias')
            ->writePHP();
    }

    public static function writeLegendaries(): void
    {
        $legendaries = [];
        foreach (static::$list as $code => $rp) {
            if (!$rp->getLegendary()) {
                continue;
            }
            if ($rp->getCode() !== Mods::getId($code)) {
                continue;
            }
            $legendaries[] = $rp->getBaseConst();
        }
        (new Data1D())
            ->setClassName('Legendaries')
            ->setData($legendaries)
            ->setUseString('Pogo\Pokemon')
            ->writePHP();
    }

    public static function writeMythics(): void
    {
        $mythics = [];
        foreach (static::$list as $code => $rp) {
            if (!$rp->getMythic()) {
                continue;
            }
            if ($rp->getCode() !== Mods::getId($code)) {
                continue;
            }
            $mythics[] = $rp->getBaseConst();
        }
        (new Data1D())
            ->setClassName('Mythics')
            ->setData($mythics)
            ->setUseString('Pogo\Pokemon')
            ->writePHP();
    }

    public static function writeEvolutions(): void
    {
        $result = [];
        foreach (static::$list as $pokemon) {
            foreach ($pokemon->evolutions as $evolution) {
                $child = static::get($evolution->getCode());
                $result[$child->getConst()] = [
                    'self::FIELD_PARENT' => $pokemon->getConst(),
                    'self::FIELD_CANDY' => $evolution->getCostCandy() ?: null,
                    'self::FIELD_WALKED' => $evolution->getRequireWalk() ?: null,
                    'self::FIELD_BUDDY' => $evolution->isRequireBuddy() ?: null,
                    'self::FIELD_DAY' => $evolution->isRequireDay() ?: null,
                    'self::FIELD_NIGHT' => $evolution->isRequireNight() ?: null,
                    'self::FIELD_PRIORITY' => $evolution->getPriority() ?: null,
                    'self::FIELD_TRADED' => $evolution->isTradedNoCandy() ?: null,
                    'self::FIELD_ITEM' => $evolution->getRequiredItem() ?: null,
                    'self::FIELD_LURE' => $evolution->getRequiredItem() ?: null,
                    'self::FIELD_MALE' => $evolution->getRequireGender() === ResultEvolution::GENDER_MALE ?: null,
                    'self::FIELD_FEMALE' => $evolution->getRequireGender() === ResultEvolution::GENDER_FEMALE ?: null,
                    'self::FIELD_ENERGY_FIRST' => $evolution->getRequireEnergyFirst() ?: null,
                    'self::FIELD_ENERGY' => $evolution->getRequireEnergy() ?: null,
                    'self::FIELD_TEMPORARY' => $evolution->isTemporary() ?: null
                ];
            }
        }
        $code = static::array2php($result, 'const EVOLUTIONS = ', ';', 2);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias;

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
    const FIELD_TEMPORARY = 'temporary';
    const FIELD_ENERGY_FIRST = 'nrg1';
    const FIELD_ENERGY = 'nrg';

$code
}
PHP;
        file_put_contents(All::PHP_PATH . 'Evolutions.php', $output);
    }

    public static function writeMoveUsers()
    {
        $moves = [];
        foreach (static::$list as $pokemon) {
            $pokemonConst = $pokemon->getConst();
            $arr = array_merge(
                $pokemon->fastMoves,
                $pokemon->eliteFastMoves,
                $pokemon->chargeMoves,
                $pokemon->eliteChargeMoves
            );
            foreach ($arr as $move) {
                $moveConst = self::$moveConstList[$move];
                if (!isset($moves[$moveConst])) {
                    $moves[$moveConst] = [$pokemonConst];
                } else {
                    $moves[$moveConst][] = $pokemonConst;
                }
            }
        }
        (new Data2D())
            ->setClassName('MoveUsers')
            ->setConstName('MOVES')
            ->setData($moves)
            ->setUseString('Pogo\Pokemon, Pogo\Pokemon\Mods, Pogo\Data\Manual\FormsAlias')
            ->writePHP();
    }
}