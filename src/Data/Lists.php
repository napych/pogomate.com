<?php

namespace Pogo\Data;

use Pogo\Data\Forms\Mega;

class Lists
{
    const TYPE_PVE = 'PVE';
    const TYPE_GL = 'GL';
    const TYPE_UL = 'UL';
    const TYPE_ML = 'ML';

    const ENT_TAG = 'tag';
    const ENT_DESCRIPTION = 'desc';
    const ENT_CONTENT = 'content';
    const ENT_TYPE = 'type';
    const ENT_DATA = 'data';
    const ENT_DEFAULT = 'default';

    const CONTENT_TIERS = 'tiers';
    const CONTENT_LIST = 'list';

    public static function getAll()
    {
        return [
            [
                self::ENT_TAG => 'GP_PVE',
                self::ENT_DESCRIPTION => Gamepress\PVE::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Gamepress\PVE::TIERS,
                self::ENT_DEFAULT => true
            ],
            [
                self::ENT_TAG => 'GP_GL',
                self::ENT_DESCRIPTION => Gamepress\GL::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_GL,
                self::ENT_DATA => Gamepress\GL::TIERS,
                self::ENT_DEFAULT => true
            ],
            [
                self::ENT_TAG => 'GP_UL',
                self::ENT_DESCRIPTION => Gamepress\UL::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_UL,
                self::ENT_DATA => Gamepress\UL::TIERS,
                self::ENT_DEFAULT => true
            ],
            [
                self::ENT_TAG => 'GP_ML',
                self::ENT_DESCRIPTION => Gamepress\ML::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_ML,
                self::ENT_DATA => Gamepress\ML::TIERS,
                self::ENT_DEFAULT => true
            ],
            [
                self::ENT_TAG => 'MEGA',
                self::ENT_DESCRIPTION => Mega::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_LIST,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Mega::MEGA,
                self::ENT_DEFAULT => true
            ],
            [
                self::ENT_TAG => 'JMT10',
                self::ENT_DESCRIPTION => Top10::DESCRIPTION,
                self::ENT_CONTENT => self::CONTENT_TIERS,
                self::ENT_TYPE => self::TYPE_PVE,
                self::ENT_DATA => Top10::LISTS,
                self::ENT_DEFAULT => false
            ],
        ];
    }

    /**
     * @param \DOMElement|\DOMNode $node
     * @param string|bool $addNode
     * @return \DOMElement|\DOMNode
     */
    public static function getAllXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('lists'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        $tmpId = 1;
        foreach (self::getAll() as $list) {
            /** @var \DOMElement $listNode */
            $listNode = $node->appendChild($node->ownerDocument->createElement('list'));
            $listNode->setAttribute('tag', $list[Lists::ENT_TAG]);
            $listNode->setAttribute('description', $list[Lists::ENT_DESCRIPTION]);
            $listNode->setAttribute('content', $list[Lists::ENT_CONTENT]);
            $listNode->setAttribute('type', $list[Lists::ENT_TYPE]);
            $listNode->setAttribute('default', $list[Lists::ENT_DEFAULT] ? '1' : '0');
            if ($list[Lists::ENT_CONTENT] === Lists::CONTENT_TIERS) {
                foreach ($list[Lists::ENT_DATA] as $tier => $data) {
                    /** @var \DOMElement $tierNode */
                    $tierNode = $listNode->appendChild($node->ownerDocument->createElement('tier'));
                    $tierNode->setAttribute('description', $tier);
                }
            }
        }
        return $node;
    }
}