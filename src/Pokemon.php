<?php

namespace Pogo;

use Exception;
use Pogo\Handjob\Evolve;
use Pogo\Handjob\Forms;
use Pogo\General\Mods;
use Pogo\Handjob\Names;

class Pokemon extends Pokemon\PokemonList
{
    /** @var self[] */
    protected static $list = [];

    /** @var int */
    protected $code;
    /** @var int */
    protected $pokedexId;
    /** @var string */
    protected $name = null;
    /** @var string */
    protected $shortName = null;
    /** @var string */
    protected $linkName = null;
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

    /**
     * @param $name
     * @return Pokemon|null
     */
    public static function getByLink($name): ?Pokemon
    {
        $pokedexId = Names::link2id(strtolower($name));
        if (!$pokedexId) {
            return null;
        }
        $result = [];
        $list = static::getList();
        foreach ($list as $pokemon) {
            if ($pokemon->getPokedexId() === $pokedexId) {
                return $pokemon;
            }
        }
        return null;
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

    public function getShortName()
    {
        if (!$this->shortName) {
            $this->shortName = Names::getShortName($this, false);
        }
        return $this->shortName;
    }

    public function getLinkName()
    {
        if (!$this->linkName) {
            $this->linkName = strtolower(Names::getShortName($this, true));
        }
        return $this->linkName;
    }

    public static function getList()
    {
        $fooClass = new \ReflectionClass('\\Pogo\\Pokemon\\PokemonList');
        $constants = $fooClass->getConstants();
        $source = [];
        foreach ($constants as $code) {
            $source[$code] = 1;
        }
        foreach ($source as $code => $evolveFrom) {
            static::get($code);
        }
        return self::$list;
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param bool|string $addNode
     * @return \DOMElement|\DOMNode
     */
    public function getXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('pokemon'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        $node->setAttribute('pokedexId', $this->getPokedexId());
        $node->setAttribute('code', $this->getCode());
        $node->setAttribute('name', $this->getName());
        $node->setAttribute('shortName', $this->getShortName());
        $node->setAttribute('link', $this->getLinkName());
        return $node;
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param bool|string $addNode
     * @return \DOMElement|\DOMNode
     */
    public static function getListXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('pokemonList'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        foreach (static::getList() as $code => $pokemon) {
            $pokemon->getXML($node, true);
        }
        return $node;
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param bool $addNode
     * @return \DOMElement|\DOMNode
     */
    public function getFamilyXML(\DOMElement $node, bool $addNode)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('pokemonFamily'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }

        $first = $this->getCode();
        while ($from = Evolve::getEvolveFrom($first)) {
            $first = $from;
        }

        static::recurseEvolve($node, $first, $this->getCode());

        return $node;
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param int $code
     * @param int $current
     */
    private static function recurseEvolve($node, $code, $current)
    {
        $subNode = Pokemon::get($code)->getXML($node, 'evolve');
        if ($code === $current) {
            $subNode->setAttribute('current', '1');
        }
        $toList = Evolve::getEvolveTo($code, true);
        foreach ($toList as $to) {
            static::recurseEvolve($subNode, $to, $current);
        }
    }
}
