<?php

namespace Pogo;

use Exception;
use Pogo\Data\Evolve;
use Pogo\Data\Forms;
use Pogo\Data\Modifications;
use Pogo\Data\Names;
use ReflectionClass;

class Pokemon extends Data\PokemonList
{
    /** @var self[] */
    protected static $list = [];

    /** @var int */
    protected $code;
    /** @var int */
    protected $pokedexId;
    /** @var string */
    protected $name = null;
    /** @var int|null */
    protected $evolveFrom = -1;
    /** @var int */
    protected $form = 0;
    /** @var bool */
    protected $alolan = false;
    /** @var bool */
    protected $shadow = false;

    /**
     * @param int $code
     * @return Pokemon
     */
    public static function get($code): Pokemon
    {
        if (isset(static::$list[$code])) {
            return static::$list[$code];
        }
        $obj = new static;
        $obj->code = $code;
        $obj->pokedexId = Modifications::getId($code);
        $obj->alolan = Modifications::isAlolan($code);
        $obj->shadow = Modifications::isShadow($code);
        $obj->form = Modifications::getForm($code);
        static::$list[$obj->pokedexId] = $obj;
        return $obj;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getPokedexId()
    {
        return $this->pokedexId;
    }

    public function isAlolan()
    {
        return $this->alolan;
    }

    public function isShadow()
    {
        return $this->shadow;
    }

    public function getFormName()
    {
        return Forms::FORMS[$this->pokedexId][$this->form] ?? '';
    }

    /**
     * @return mixed|null
     * @throws Exception
     */
    public function getEvolveFrom()
    {
        if ($this->evolveFrom !== -1) {
            return $this->evolveFrom;
        }
        if (!array_key_exists($this->code, Evolve::EVOLVE_FROM)) {
            throw new Exception('Evolve from is not set for pokemon ' . $this->code);
        }
        $this->evolveFrom = Evolve::EVOLVE_FROM[$this->code];
        if ($this->evolveFrom === $this->pokedexId) {
            throw new Exception("Pokemon {$this->pokedexId} evolve from is set to itself!");
        }
        return $this->evolveFrom;
    }

    public function getName()
    {
        if (!$this->name) {
            $this->name = Names::getName($this);
        }
        return $this->name;
    }
}