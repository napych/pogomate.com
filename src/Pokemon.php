<?php

namespace Pogo;

use Exception;
use Pogo\Data\Generated\Evolutions;
use Pogo\Data\Generated\PokemonData;
use Pogo\Data\Generated\PokemonForms;
use Pogo\Data\Manual\Evolve;
use Pogo\Data\Generated\PokemonLinks;
use Pogo\Pokemon\Mods;

use Pogo\Pokemon\Move;

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
        if (!isset(PokemonLinks::LINK2POKEMON[$name])) {
            return null;
        }
        return static::get(PokemonLinks::LINK2POKEMON[$name]);
    }

    /**
     * @param string $link
     * @param bool $ignorePurified
     * @return Pokemon[]
     */
    public static function getFormsByLink(string $link, bool $ignorePurified = true): ?array
    {
        if (empty(PokemonForms::FORMS[PokemonLinks::LINK2POKEMON[$link]])) {
            return null;
        }
        $result = [];
        foreach (PokemonForms::FORMS[PokemonLinks::LINK2POKEMON[$link]] as $formCode) {
            if ($ignorePurified && Mods::isPurified($formCode)) {
                continue;
            }
            $result[$formCode] = static::get($formCode);
        }
        return $result;
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
    public function getEvolveFrom(): ?int
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
            return null;
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
        return PokemonData::POKEMON[$this->getCode()][PokemonData::FIELD_NAME] ?? 'Unknown';
    }

    public function getShortName()
    {
        return PokemonData::POKEMON[$this->code][PokemonData::FIELD_NAME_SHORT];
    }

    public function getLinkHash($forceForm = false): string
    {
        $hash = [];
        if ($this->isShadow()) {
            $hash[] = 'shadow';
        }
        if ($this->isPurified()) {
            $hash[] = 'purified';
        }
        if ($this->isAlolan()) {
            $hash[] = 'alolan';
        }
        if ($this->isGalarian()) {
            $hash[] = 'galarian';
        }
        if ($this->code & Mods::MEGA) {
            $hash[] = 'mega';
        }
        if ($this->code & Mods::MEGA_X) {
            $hash[] = 'mega-x';
        }
        if ($this->code & Mods::MEGA_Y) {
            $hash[] = 'mega-y';
        }
        if (!$forceForm || !empty($hash)) {
            return implode('-', $hash);
        } else {
            return 'regular';
        }
    }

    public function getLinkName($forceForm = false): string
    {
        $link = PokemonLinks::POKEMON2LINK[$this->getPokedexId()];
        if (!empty($hash = $this->getLinkHash($forceForm))) {
            $link .= '#' . $hash;
        }
        return $link;
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
     * @param bool $extended
     * @return \DOMElement|\DOMNode
     */
    public function getXML($node, $addNode = false, bool $extended = false)
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
        $node->setAttribute('linkForm', $this->getLinkName(true));
        $node->setAttribute('form', $this->getLinkHash(true));
        if (!$extended) {
            return $node;
        }

        $data = PokemonData::POKEMON[$this->code];
        $node->setAttribute('unreleased', !empty($data[PokemonData::FIELD_UNRELEASED]) ? '1' : '0');
        $node->setAttribute('type1', $data[PokemonData::FIELD_TYPE1]);
        $node->setAttribute('type2', $data[PokemonData::FIELD_TYPE2] ?? '');
        $node->setAttribute('attack', $data[PokemonData::FIELD_ATTACK] ?? '');
        $node->setAttribute('defense', $data[PokemonData::FIELD_DEFENSE] ?? '');
        $node->setAttribute('stamina', $data[PokemonData::FIELD_STAMINA] ?? '');
        foreach (
            [
                PokemonData::FIELD_FAST_MOVES,
                PokemonData::FIELD_FAST_MOVES_ELITE,
                PokemonData::FIELD_CHARGE_MOVES,
                PokemonData::FIELD_CHARGE_MOVES_ELITE
            ] as $moveType
        ) {
            if (!empty($data[$moveType])) {
                $movesNode = $node->appendChild($node->ownerDocument->createElement('moves'));
                $movesNode->setAttribute('type', $moveType);
                foreach ($data[$moveType] as $move) {
                    Move::get($move)->getXML($movesNode, true, false);
                }
            }
        }

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

        $first = $this;
        while ($prev = $first->getParent()) {
            $first = $prev;
        }

        static::recurseEvolve($node, $first, $this);

        return $node;
    }

    public function getParent()
    {
        if (!isset(Evolutions::EVOLUTIONS[$this->code])) {
            return null;
        }
        return static::get(Evolutions::EVOLUTIONS[$this->code][Evolutions::FIELD_PARENT]);
    }

    public function getChildren()
    {
        if (empty(PokemonData::POKEMON[$this->code][PokemonData::FIELD_EVOLVES])) {
            return [];
        }
        $children = [];
        foreach (PokemonData::POKEMON[$this->code][PokemonData::FIELD_EVOLVES] as $evolutionCode) {
            $children[$evolutionCode] = static::get($evolutionCode);
        }
        return $children;
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param Pokemon $pokemon
     * @param Pokemon $current
     */
    private static function recurseEvolve($node, Pokemon $pokemon, Pokemon $current)
    {
        $subNode = $pokemon->getXML($node, 'evolve');
        if ($pokemon->getCode() === $current->getCode()) {
            $subNode->setAttribute('current', '1');
        }
        foreach ($pokemon->getChildren() as $to) {
            static::recurseEvolve($subNode, $to, $current);
        }
    }
}
