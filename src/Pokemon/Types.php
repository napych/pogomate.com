<?php

namespace Pogo\Pokemon;

use Pogo\Data\Generated\TypeEffectiveness;

class Types extends \Pogo\Data\Manual\Types
{
    /**
     * Get types list as XML
     * @param \DOMElement|\DOMNode $node
     * @param string|bool $addNode
     * @return \DOMElement|\DOMNode
     */
    public static function getTypesXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('types'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        foreach (TypeEffectiveness::EFFECTIVENESS as $type => $stuff) {
            /** @var \DOMElement $typeNode */
            $typeNode = $node->appendChild($node->ownerDocument->createElement('type'));
            $typeNode->setAttribute('name', $type);
        }
        return $node;
    }

    /**
     * Check if type is valid
     * @param string $type
     * @return bool
     */
    public static function isValidType(string $type): bool
    {
        return in_array($type, self::TYPE_ENUM);
    }
}
