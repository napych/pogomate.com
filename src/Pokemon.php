<?php

namespace Pogo;

use Exception;
use Pogo\Data\Evolve;
use ReflectionClass;

class Pokemon extends Data\PokemonList
{
    /** @var self[] */
    protected static $list = [];
    /** @var string[] */
    protected static $names = [];

    /** @var mixed */
    protected $pokedexId;
    /** @var int|null */
    protected $evolveFrom = -1;

    /**
     * @param int $pokedexId
     * @return Pokemon
     */
    public static function get($pokedexId): Pokemon
    {
        if (isset(static::$list[$pokedexId])) {
            return static::$list[$pokedexId];
        }
        $obj = new static;
        $obj->pokedexId = $pokedexId;
        static::$list[$pokedexId] = $obj;
        return $obj;
    }

    public function getPokedexId()
    {
        return $this->pokedexId;
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
        if (!array_key_exists($this->pokedexId, Evolve::EVOLVE_FROM)) {
            throw new Exception('Evolve from is not set for pokemon ' . $this->pokedexId);
        }
        $this->evolveFrom = Evolve::EVOLVE_FROM[$this->pokedexId];
        if ($this->evolveFrom == $this->pokedexId) {
            throw new Exception("Pokemon {$this->pokedexId} evolve from is set to itself!");
        }
        return $this->evolveFrom;
    }

    public function getName()
    {
        if (empty(static::$names)) {
            $fooClass = new ReflectionClass('\\Pogo\\Data\\PokemonList');
            $constants = $fooClass->getConstants();
            foreach ($constants as $name => $value) {
                static::$names[$value] = ucfirst(strtolower($name));
            }
        }
        return static::$names[$this->pokedexId] ?? "Unknown ({$this->pokedexId})";
    }
}