<?php

namespace Pogo\Data\Parser\Result;

class Types
{
    protected $effectiveness = [];

    public function __construct()
    {
        foreach (\Pogo\Pokemon\Types::TYPE_ENUM as $type1) {
            $this->effectiveness[$type1] = [];
            foreach (\Pogo\Pokemon\Types::TYPE_ENUM as $type2) {
                $this->effectiveness[$type1][$type2] = 1.0;
            }
        }
    }

    public function setEffectiveness($attacker, $defender, float $value)
    {
        $this->effectiveness[$attacker][$defender] = $value;
    }

    public function getEffectiveness()
    {
        return $this->effectiveness;
    }

    public function writePHP()
    {
        $output = <<<PHP_CODE
<?php

namespace Pogo\Data\Generated;

use Pogo\Pokemon\Types;

class TypeEffectiveness
{
    const EFFECTIVENESS = [

PHP_CODE;

        foreach ($this->effectiveness as $type1 => $effectData) {
            $type1Name = \Pogo\Pokemon\Types::getConst($type1);
            $output .= "        Types::$type1Name => [\n";
            foreach ($effectData as $type2 => $effectiveness) {
                $type2Name = \Pogo\Pokemon\Types::getConst($type2);
                $output .= "            Types::$type2Name => $effectiveness,\n";
            }
            $output .= "        ],\n";
        }

        $output .= <<<PHP_CODE
    ];
}
PHP_CODE;
        file_put_contents(All::PHP_PATH . 'TypeEffectiveness.php', $output);
    }
}
