<?php

namespace Pogo;

use MongoDB\BSON\Type;
use Pogo\Data\Types;

class Counters
{
    protected $attackTypes = [];
    protected $pokemonTypes = [];

    /**
     * Add attack type(s)
     * @param string|string[] $attackTypes
     */
    public function addAttackTypes($attackTypes)
    {
        if (is_array($attackTypes)) {
            foreach ($attackTypes as $attackType) {
                $this->addAttackTypes($attackType);
            }
            return;
        }
        $this->attackTypes[] = $attackTypes;
    }

    /**
     * Add pokemon type(s)
     * @param string|string[] $types
     * @throws \Exception
     */
    public function addTypes($types)
    {
        if (is_array($types)) {
            foreach ($types as $type) {
                $this->addTypes($type);
            }
            return;
        }
        if (!Types::isValidType($types)) {
            throw new \Exception('Wrong type: ' . $types);
        }
        $this->pokemonTypes[] = $types;
    }

    /**
     * Get search string
     * @return string
     */
    public function getString()
    {
        if (empty($this->attackTypes)) {
            $this->attackTypes = $this->pokemonTypes;
        }
        $attacks = [];
        foreach ($this->pokemonTypes as $type) {
            $attacks = array_merge($attacks, Types::getVulnerabilities($type));
        }
        $attacks = array_unique($attacks);
        $string[] = '@1' . implode(',@1', $attacks);
        $string[] = '@2' . implode(',@2', $attacks);
        $vulnerabilities = [];
        foreach ($this->attackTypes as $type) {
            $vulnerabilities = array_merge($vulnerabilities, Types::getEffective($type));
        }
        $vulnerabilities = array_unique($vulnerabilities);
        $string[] = '!' . implode(',!', $vulnerabilities);
        return implode('&', $string);
    }

    /**
     * Get search string as XML
     * @param \DOMNode|\DOMElement $node
     * @param bool|string $addNode
     * @return \DOMElement|\DOMNode
     */
    public function getXML($node, $addNode = false)
    {
        if ($addNode === true) {
            $node = $node->appendChild($node->ownerDocument->createElement('counters'));
        } elseif ($addNode) {
            $node = $node->appendChild($node->ownerDocument->createElement($addNode));
        }
        $node->setAttribute('string', $this->getString());
        return $node;
    }
}