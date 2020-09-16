<?php

namespace Pogo\Data\Result;

class Pokemon
{
    const FIELD_CONST = 'const';
    const FIELD_NAME = 'name';
    const FIELD_FORM = 'form';
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';
    const FIELD_ATTACK = 'attack';
    const FIELD_DEFENSE = 'defense';
    const FIELD_STAMINA = 'stamina';
    const FIELD_FAST_MOVES = 'fastMoves';
    const FIELD_FAST_MOVES_ELITE = 'fastMovesElite';
    const FIELD_CHARGE_MOVES = 'chargeMoves';
    const FIELD_CHARGE_MOVES_ELITE = 'chargeMovesElite';
    const FIELD_EVOLUTIONS = 'evolutions';
    const FIELD_THIRD_MOVE_DUST = 'thirdDust';
    const FIELD_THIRD_MOVE_CANDY = ' thirdCandy';
    const FIELD_TRANSFERABLE = 'transferable';
    const FIELD_DEPLOYABLE = 'deployable';
    const FIELD_PARENT = 'parent';
    const FIELD_BUDDY_DISTANCE = 'buddyDistance';
    const FIELD_SHADOW = 'shadow';
    const FIELD_LEGENDARY = 'legendary';
    const FIELD_MYTHIC = 'mythic';

    const FIELD_PURIFY_DUST = 'purifyDust';
    const FIELD_PURIFY_CANDY = 'purifyCandy';

    const FIELD_EVOLUTION_POKEMON = 'pokemon';
    const FIELD_EVOLUTION_FORM = 'form';
    const FIELD_EVOLUTION_CANDY = 'candy';
    const FIELD_EVOLUTION_FREE_TRADED = 'noCostViaTrade';
    const FIELD_EVOLUTION_ITEM = 'item';

    protected $pokemon = [];

    public function add(int $id, array $data)
    {
        $this->pokemon[$id] = $data;
    }

    public function getList()
    {
        return $this->pokemon;
    }

    public function writePHP()
    {
        // todo
    }
}
