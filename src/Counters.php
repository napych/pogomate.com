<?php

namespace Pogo;

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
        // todo
    }
}