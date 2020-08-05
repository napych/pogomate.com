<?php

namespace Pogo;

use Pogo\Data\Types;

class Counters
{
    protected $attackTypes = [];
    protected $pokemonTypes = [];

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

    public function addTypes($types)
    {
        if (is_array($types)) {
            foreach ($types as $type) {
                $this->addTypes($type);
            }
            return;
        }
        $this->pokemonTypes[] = $types;
    }

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
}