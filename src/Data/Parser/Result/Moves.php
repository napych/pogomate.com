<?php

namespace Pogo\Data\Parser\Result;

use Pogo\Data\Parser\Locale;

class Moves
{
    protected $moves = [];

    const FIELD_CONST = 'const';
    const FIELD_CLASS = 'class';
    const FIELD_TYPE = 'type';
    const FIELD_POWER = 'power';
    const FIELD_ACCURACY = 'accuracyChance';
    const FIELD_CRIT = 'critChance';
    const FIELD_ENERGY = 'energy';
    const FIELD_DURATION = 'duration';
    const FIELD_DMG_WINDOW_START = 'dmgStart';
    const FIELD_DMG_WINDOW_END = 'dmgEnd';
    const FIELD_COMBAT_POWER = 'pvpPower';
    const FIELD_COMBAT_ENERGY = 'pvpEnergy';

    const MOVES_CLASS_FAST = 'fast';
    const MOVES_CLASS_CHARGE = 'charge';

    public function add(int $id, array $data)
    {
        $this->moves[$id] = $data;
    }

    public function getList()
    {
        return $this->moves;
    }

    const CLASS_TRANSLATE = [
        self::MOVES_CLASS_CHARGE => 'CLASS_CHARGE',
        self::MOVES_CLASS_FAST => 'CLASS_FAST'
    ];

    public function writePHP()
    {
        $defines = [];
        $moves = [];
        foreach ($this->moves as $id => $move) {
            $defines[] = "    const {$move[self::FIELD_CONST]} = $id;";
            $moveStr = [
                "self::FIELD_NAME => '" . addcslashes(Locale::getMove($id), "'") . "'"
            ];
            foreach ($move as $k => $v) {
                if ($v === null) {
                    $v = 'null';
                }
                switch ($k) {
                    case self::FIELD_CLASS:
                        if (!empty($move[self::FIELD_CLASS])) {
                            $moveStr[] = 'self::FIELD_CLASS => self::' . self::CLASS_TRANSLATE[$move[self::FIELD_CLASS]];
                        }
                        break;
                    case self::FIELD_TYPE:
                        $moveStr[] = 'self::FIELD_TYPE => Types::' . \Pogo\Pokemon\Types::getConst($move[self::FIELD_TYPE]);
                        break;
                    case self::FIELD_CONST:
                        break;
                    default:
                        $const = self::getConst($k);
                        $moveStr[] = "self::$const => $v";
                }
            }
            $moves[] = "        self::{$move[self::FIELD_CONST]} => [\n            " . implode(",\n            ", $moveStr) . "\n        ]";
        }

        $defines = implode("\n", $defines);
        $moves = implode(",\n", $moves);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

class Moves
{
$defines
}
PHP;
        file_put_contents(All::PHP_PATH . 'Moves.php', $output);
        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon\Types;

class MovesData extends Moves
{
    const FIELD_NAME = 'name';
    const FIELD_CLASS = 'class';
    const FIELD_TYPE = 'type';
    const FIELD_POWER = 'power';
    const FIELD_ACCURACY = 'accuracyChance';
    const FIELD_CRIT = 'critChance';
    const FIELD_ENERGY = 'energy';
    const FIELD_DURATION = 'duration';
    const FIELD_DMG_WINDOW_START = 'dmgStart';
    const FIELD_DMG_WINDOW_END = 'dmgEnd';
    const FIELD_COMBAT_POWER = 'pvpPower';
    const FIELD_COMBAT_ENERGY = 'pvpEnergy';

    const CLASS_CHARGE = 'charge';
    const CLASS_FAST = 'fast';

    const MOVES = [
$moves
    ];
}
PHP;
        file_put_contents(All::PHP_PATH . 'MovesData.php', $output);
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
