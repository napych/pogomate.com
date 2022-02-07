<?php

declare(strict_types=1);

namespace Pogo\Mate;

use Difra\DB;
use Pogo\Mate\Rank\Entry;
use Pogo\Pokemon;

class Rank
{
    /**
     * @param \Pogo\Pokemon|int $pokemon
     * @param string $league
     * @return Entry[]|null
     * @throws \Difra\DB\Exception
     */
    public static function getBest(Pokemon|int $pokemon, string $league): ?array
    {
        $db = DB::getInstance();
        $rows = $db->fetch(
            'SELECT * FROM `rank` WHERE `pokemon`=:pokemon AND `league`=:league AND (`rank40`=1 OR `rank50`=1)',
            ['pokemon' => is_int($pokemon) ? (string) $pokemon : $pokemon->getCode(), 'league' => $league]
        );
        if (empty($rows)) {
            return null;
        }
        $result = [];
        foreach ($rows as $row) {
            $result[] = Entry::load($row);
        }
        return $result;
    }

    /**
     * @param \DOMElement $node
     * @param \Pogo\Pokemon|int $pokemon
     * @param string $league
     * @param string|bool $addNode
     * @return \DOMElement
     * @throws \Difra\DB\Exception
     */
    public static function getBestXML(\DOMElement $node, Pokemon|int $pokemon, string $league, string|bool $addNode = false): \DOMElement
    {
        $data = static::getBest($pokemon, $league);
        if (!$data) {
            return $node;
        }
        if ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement(is_string($addNode) ? $addNode : 'rank'));
            $node->setAttribute('league', $league);
        }
        foreach ($data as $entry) {
            $entry->getXML(node: $node, addNode: true);
        }
        return $node;
    }
}