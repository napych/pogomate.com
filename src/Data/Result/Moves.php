<?php

namespace Pogo\Data\Result;

class Moves {

    protected $moves = [];

    const FIELD_CONST = 'const';
    const FIELD_CLASS = 'class';
    const FIELD_TYPE = 'type';
    const FIELD_POWER = 'power';
    const FIELD_ACCURACY = 'accuracyChance';
    const FIELD_CRIT = 'critChance';

    const MOVES_TYPE_FAST = 'fast';
    const MOVES_TYPE_CHARGE = 'charge';

    public function add(int $id, array $data)
    {
        $this->moves[$id] = $data;
    }

    public function getList()
    {
        return $this->moves;
    }
}