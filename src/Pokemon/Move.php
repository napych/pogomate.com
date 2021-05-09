<?php

namespace Pogo\Pokemon;

use Pogo\Data\Generated\MovesData;
use Pogo\Data\Generated\MovesLinks;

class Move
{
    const CLASS_FAST = 'fast';
    const CLASS_CHARGE = 'charge';

    /** @var int */
    protected $moveId = null;
    /** @var array */
    protected $moveData = null;
    /** @var static[] */
    protected static $cache = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public static function get(int $moveId): ?self
    {
        if (isset(static::$cache[$moveId])) {
            return static::$cache[$moveId];
        }
        if (!isset(MovesData::MOVES[$moveId])) {
            return null;
        }
        $moveObj = new static;
        $moveObj->moveId = $moveId;
        $moveObj->moveData = MovesData::MOVES[$moveId];
        return static::$cache[$moveId] = $moveObj;
    }

    public function getId(): int
    {
        return $this->moveId;
    }

    public function getLink(): string
    {
        return MovesLinks::MOVE2LINK[$this->moveId];
    }

    /**
     * @param string $link
     * @return static[]
     */
    public static function getByLink(string $link): array
    {
        $moveList = MovesLinks::LINK2MOVE[$link] ?? null;
        if (empty($moveList)) {
            return [];
        }
        $moves = [];
        foreach ($moveList as $moveId) {
            $moves[] = static::get($moveId);
        }
        return $moves;
    }

    public function getName(): string
    {
        return $this->moveData[MovesData::FIELD_NAME];
    }

    public function getClass(): ?string
    {
        switch ($this->moveData[MovesData::FIELD_CLASS]) {
            case MovesData::CLASS_FAST:
                return static::CLASS_FAST;
            case MovesData::CLASS_CHARGE:
                return static::CLASS_CHARGE;
        }
        return null;
    }

    public function getType(): string
    {
        return $this->moveData[MovesData::FIELD_TYPE];
    }

    public function getPower(): int
    {
        return $this->moveData[MovesData::FIELD_POWER] ?? 0;
    }

    public function getCrit(): float
    {
        return $this->moveData[MovesData::FIELD_CRIT] ?? 0;
    }

    public function getEnergy(): int
    {
        return $this->moveData[MovesData::FIELD_ENERGY] ?? 0;
    }

    public function getCombatPower(): int
    {
        return $this->moveData[MovesData::FIELD_COMBAT_POWER] ?? 0;
    }

    public function getCombatEnergy(): int
    {
        return $this->moveData[MovesData::FIELD_COMBAT_ENERGY] ?? 0;
    }

    public function getDuration(): float
    {
        return $this->moveData[MovesData::FIELD_DURATION];
    }

    public function getDamageStart(): int
    {
        return $this->moveData[MovesData::FIELD_DMG_WINDOW_START];
    }

    public function getDamageEnd(): int
    {
        return $this->moveData[MovesData::FIELD_DMG_WINDOW_END];
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param string|bool $addNode
     * @param bool $extended
     * @return \DOMElement|\DOMNode
     */
    public function getXML($node, $addNode = false, $extended = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('move'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }

        $node->setAttribute('name', $this->getName());
        $node->setAttribute('link', $this->getLink());
        $node->setAttribute('class', $this->getClass());
        $node->setAttribute('type', $this->getType());

        if ($extended) {
            $node->setAttribute('power', $this->getPower());
            $node->setAttribute('crit', $this->getCrit());
            $node->setAttribute('energy', $this->getEnergy());
            $node->setAttribute('pvpPower', $this->getCombatPower());
            $node->setAttribute('pvpEnergy', $this->getCombatEnergy());
        }

        return $node;
    }
}