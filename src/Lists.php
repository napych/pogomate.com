<?php

declare(strict_types=1);

namespace Pogo;

use Pogo\Lists\Evolutions;
use Pogo\Lists\Gamepress;
use Pogo\Lists\Top10;

class Lists
{
    const TYPE_PVE = 'PVE';
    const TYPE_GL = 'GL';
    const TYPE_UL = 'UL';
    const TYPE_ML = 'ML';

    const ENT_BLOCK = 'block';
    const ENT_TAG = 'tag';
    const ENT_NAME = 'name';
    const ENT_DESCRIPTION = 'desc';
    const ENT_CONTENT = 'content';
    const ENT_TYPE = 'type';
    const ENT_DATA = 'data';
    const ENT_DEFAULT = 'default';
    const ENT_CLEANUP = 'cleanup';
    const ENT_LINK = 'link';
    const ENT_MAXCP = 'max-cp';

    const BLOCK_GAMEPRESS = 'GamePress';
    const BLOCK_EVOLUTIONS = 'Evolutions';
    const BLOCK_OTHER = 'Other';

    const CONTENT_TIERS = 'tiers';
    const CONTENT_LIST = 'list';

    public static function getAll()
    {
        return [
            [
                self::ENT_BLOCK => self::BLOCK_EVOLUTIONS,
                self::ENT_TAG => 'MEGA',
                self::ENT_NAME => 'Mega',
                self::ENT_DESCRIPTION => Evolutions\Mega::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_LIST,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Evolutions\Mega::MEGA,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true
            ],
            [
                self::ENT_BLOCK => self::BLOCK_EVOLUTIONS,
                self::ENT_TAG => 'GIGA',
                self::ENT_NAME => 'Gigantamax',
                self::ENT_DESCRIPTION => Evolutions\Gigantamax::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_LIST,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Evolutions\Gigantamax::GIGANTAMAX,
                self::ENT_DEFAULT => false,
                self::ENT_CLEANUP => true
            ],
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_PVE',
                self::ENT_NAME => 'Top Attackers',
                self::ENT_DESCRIPTION => Gamepress\PVE::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Gamepress\PVE::TIERS,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/attackers-tier-list'
            ],
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_GL',
                self::ENT_NAME => 'Greater League',
                self::ENT_DESCRIPTION => Gamepress\GL::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_GL,
                self::ENT_DATA => Gamepress\GL::TIERS,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/great-league-pvp-tier-list',
                self::ENT_MAXCP => 1500
            ],
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_UL',
                self::ENT_NAME => 'Ultra League',
                self::ENT_DESCRIPTION => Gamepress\UL::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_UL,
                self::ENT_DATA => Gamepress\UL::TIERS,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/ultra-league-pvp-tier-list',
                self::ENT_MAXCP => 2500
            ],
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_ML',
                self::ENT_NAME => 'Master League',
                self::ENT_DESCRIPTION => Gamepress\ML::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_ML,
                self::ENT_DATA => Gamepress\ML::TIERS,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/master-league-pvp-tier-list'
            ],
            /*
            [
                self::ENT_BLOCK => self::BLOCK_OTHER,
                self::ENT_TAG => 'JMT10',
                self::ENT_NAME => 'JaceMakings\' top',
                self::ENT_DESCRIPTION => Top10::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Top10::LISTS,
                self::ENT_DEFAULT => false,
                self::ENT_CLEANUP => false
            ],
            */
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_DEF',
                self::ENT_NAME => 'Gym defenders',
                self::ENT_DESCRIPTION => Gamepress\Defenders::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Gamepress\Defenders::TIERS,
                self::ENT_DEFAULT => false,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/gym-defenders-tier-list'
            ],
            [
                self::ENT_BLOCK => self::BLOCK_GAMEPRESS,
                self::ENT_TAG => 'GP_TOP',
                self::ENT_NAME => 'Best by type',
                self::ENT_DESCRIPTION => Gamepress\Top::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Gamepress\Top::TIERS,
                self::ENT_DEFAULT => true,
                self::ENT_CLEANUP => true,
                self::ENT_LINK => 'https://gamepress.gg/pokemongo/best-attackers-type'
            ],
        ];
    }

    /**
     * @param \DOMElement $node
     * @param string|bool $addNode
     * @param bool $withStrings
     * @param bool $withSubLists
     * @return \DOMElement
     */
    public static function getListsXML(\DOMElement $node, string|bool $addNode = false, bool $withStrings = false, bool $withSubLists = true): \DOMElement
    {
        if ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement(is_string($addNode) ? $addNode : 'lists'));
        }
        foreach (self::getAll() as $list) {
            /** @var \DOMElement $listNode */
            $listNode = $node->appendChild($node->ownerDocument->createElement('list'));
            $listNode->setAttribute('tag', $list[Lists::ENT_TAG]);
            $listNode->setAttribute('name', $list[Lists::ENT_NAME]);
            $listNode->setAttribute('description', $list[Lists::ENT_DESCRIPTION]);
            $listNode->setAttribute('content', $list[Lists::ENT_CONTENT]);
            $listNode->setAttribute('type', $list[Lists::ENT_TYPE]);
            $listNode->setAttribute('default', $list[Lists::ENT_DEFAULT] ? '1' : '0');
            $listNode->setAttribute('block', $list[Lists::ENT_BLOCK]);
            $listNode->setAttribute('cleanup', $list[Lists::ENT_CLEANUP] ? '1' : '0');
            if ($withSubLists) {
                if ($list[Lists::ENT_CONTENT] === Lists::CONTENT_TIERS) {
                    foreach ($list[Lists::ENT_DATA] as $tier => $data) {
                        /** @var \DOMElement $tierNode */
                        $tierNode = $listNode->appendChild($node->ownerDocument->createElement('tier'));
                        $tierNode->setAttribute('description', $tier);
                        if ($withStrings) {
                            $subList = new Mate\Strings();
                            $subList->addList($list, $tier);
                            $tierNode->setAttribute('string', $subList->getIncludeString());
                        }
                    }
                }
            }
            if ($withStrings) {
                $single = new Mate\Strings();
                $single->addList($list);
                $listNode->setAttribute('string', $single->getIncludeString());
            }
        }
        return $node;
    }
}
