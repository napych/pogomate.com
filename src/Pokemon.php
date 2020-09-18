<?php

namespace Pogo;

use Exception;
use Pogo\Data\Generated\Evolutions;
use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Generated\PokemonForms;
use Pogo\Data\Manual\Evolve;
use Pogo\Data\Manual\Forms;
use Pogo\Data\Generated\Links;
use Pogo\Pokemon\Mods;

use const false;

class Pokemon extends Data\Manual\PokemonList
{
    /** @var self[] */
    protected static $list = [];

    /** @var int */
    protected $code;
    /** @var int|null */
    protected $evolveFrom = null;

    /**
     * @param int $code
     * @return Pokemon
     */
    public static function get(int $code): Pokemon
    {
        if (isset(static::$list[$code])) {
            return static::$list[$code];
        }
        $obj = new static;
        $obj->code = $code;
        static::$list[$code] = $obj;
        return $obj;
    }

    /**
     * @param $name
     * @return Pokemon|null
     */
    public static function getByLink($name): ?Pokemon
    {
        if (!isset(Links::LINK2POKEMON[$name])) {
            return null;
        }
        return static::get(Links::LINK2POKEMON[$name]);
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getPokedexId(): int
    {
        return Mods::getId($this->code);
    }

    public function isAlolan(): bool
    {
        return Mods::isAlolan($this->code);
    }

    public function isGalarian(): bool
    {
        return Mods::isGalarian($this->code);
    }

    public function isShadow(): bool
    {
        return Mods::isShadow($this->code);
    }

    public function isPurified(): bool
    {
        return Mods::isPurified($this->code);
    }

    public function getForm(): int
    {
        return Mods::getForm($this->code);
    }

    /**
     * @return int|null
     * @throws Exception
     */
    public function getEvolveFrom()
    {
        if ($this->evolveFrom !== null) {
            return $this->evolveFrom ?: null;
        }

        // generated list
        if (!empty(Evolutions::EVOLUTIONS[$this->code][Evolutions::FIELD_PARENT])) {
            return $this->evolveFrom = Evolutions::EVOLUTIONS[$this->code][Evolutions::FIELD_PARENT] ?: 0;
        }

        // handjob list
        $code = $this->code;
        if ($this->isShadow()) {
            $code -= Mods::SHADOW;
        }
        if (!array_key_exists($code, Evolve::EVOLVE_FROM)) {
            $this->evolveFrom = 0;
            throw new Exception('Evolve from is not set for pokemon ' . $code . ' ' . $this->getName());
        }
        $this->evolveFrom = Evolve::EVOLVE_FROM[$code];
        if ($this->evolveFrom && $this->isShadow()) {
            $this->evolveFrom += Mods::SHADOW;
        }
        if ($this->evolveFrom === $this->code) {
            throw new Exception("Pokemon {$this->code} evolve from is set to itself!");
        }

        return $this->evolveFrom;
    }

    public function getName(): string
    {
        return PokemonData::POKEMON[$this->getCode()][PokemonData::FIELD_NAME];
    }

    public function getShortName()
    {
        return PokemonData::POKEMON[$this->code][PokemonData::FIELD_NAME_SHORT];
    }

    public function getLinkName(): string
    {
        return Links::POKEMON2LINK[$this->getPokedexId()];
    }

    /**
     * Get pokemon list
     * @param bool $withForms Include all forms
     * @param bool $withoutPurified Skip purified forms
     * @return static[]
     */
    public static function getList(bool $withForms = false, bool $withoutPurified = true): array
    {
        $result = [];
        $codeList = $withForms ? array_keys(PokemonData::POKEMON) : array_keys(PokemonForms::FORMS);
        foreach ($codeList as $code) {
            if ($withForms && $withoutPurified && Mods::isPurified($code)) {
                continue;
            }
            $result[$code] = static::get($code);
        }
        return $result;
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
