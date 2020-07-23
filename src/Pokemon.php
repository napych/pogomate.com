<?php

namespace Pogo;

use Exception;
use Pogo\Data\Evolve;
use Pogo\Data\Forms;
use Pogo\Data\Mods;
use Pogo\Data\Names;

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
    /** @var bool */
    protected $galarian = false;

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
        $obj->pokedexId = Mods::getId($code);
        $obj->alolan = Mods::isAlolan($code);
        $obj->galarian = Mods::isGalarian($code);
        $obj->shadow = Mods::isShadow($code);
        $obj->form = Mods::getForm($code);
        static::$list[$code] = $obj;
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

    public function isGalarian()
    {
        return $this->galarian;
    }

    public function isShadow()
    {
        return $this->shadow;
    }

    public function getFormName()
    {
        return Forms::FORMS[$this->pokedexId][$this->form] ?? '';
    }

    public function getForm()
    {
        return Mods::getForm($this->code);
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
        $code = $this->code;
        if ($this->shadow) {
            $code -= Mods::SHADOW;
        }
        if (!array_key_exists($code, Evolve::EVOLVE_FROM)) {
            throw new Exception('Evolve from is not set for pokemon ' . $code . ' ' . $this->getName());
        }
        $this->evolveFrom = Evolve::EVOLVE_FROM[$code];
        if ($this->evolveFrom && $this->shadow) {
             $this->evolveFrom += Mods::SHADOW;
        }
        if ($this->evolveFrom === $this->code) {
            throw new Exception("Pokemon {$this->code} evolve from is set to itself!");
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