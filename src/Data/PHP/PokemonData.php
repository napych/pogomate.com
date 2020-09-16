<?php

namespace Pogo\Data\PHP;

use Pogo\Pokemon, Pogo\General\Mods, Pogo\Handjob\FormsAlias, Pogo\General\Types;

class PokemonData
{
    const FIELD_TYPE1 = 'type1';
    const FIELD_TYPE2 = 'type2';
    const FIELD_ATTACK = 'attack';
    const FIELD_DEFENSE = 'defense';
    const FIELD_STAMINA = 'stamina';
    const FIELD_PURIFY_CANDY = 'purifyCandy';
    const FIELD_PURIFY_STARDUST = 'purifyDust';
    const FIELD_LEGENDARY = 'legendary';
    const FIELD_MYTHIC = 'mythic';
    const FIELD_TRANSFERABLE = 'transfer';
    const FIELD_DEPLOYABLE = 'deploy';
    const FIELD_BUDDY_DISTANCE = 'distance'; 
    
    const POKEMON = [
        Pokemon::BULBASAUR => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BULBASAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BULBASAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::IVYSAUR => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::IVYSAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::IVYSAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENUSAUR => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENUSAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENUSAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMANDER => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMANDER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMANDER | Mods::SHADOW => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMELEON => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMELEON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARMELEON | Mods::SHADOW => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARIZARD => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARIZARD | Mods::PURIFIED => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHARIZARD | Mods::SHADOW => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SQUIRTLE => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SQUIRTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SQUIRTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WARTORTLE => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WARTORTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WARTORTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BLASTOISE => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BLASTOISE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BLASTOISE | Mods::SHADOW => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CATERPIE => [
            self::FIELD_ATTACK => 55,
            self::FIELD_DEFENSE => 55,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::METAPOD => [
            self::FIELD_ATTACK => 45,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BUTTERFREE => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WEEDLE => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WEEDLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WEEDLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KAKUNA => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KAKUNA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KAKUNA | Mods::SHADOW => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BEEDRILL => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BEEDRILL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BEEDRILL | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PIDGEY => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PIDGEOTTO => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PIDGEOT => [
            self::FIELD_ATTACK => 166,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 195,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATATTA => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATATTA | Mods::ALOLAN => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATATTA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATATTA | Mods::SHADOW => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATICATE => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATICATE | Mods::ALOLAN => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATICATE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RATICATE | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SPEAROW => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 60,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::FEAROW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::EKANS => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EKANS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EKANS | Mods::SHADOW => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARBOK => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARBOK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARBOK | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PIKACHU => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 96,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RAICHU => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::RAICHU | Mods::ALOLAN => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SANDSHREW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSHREW | Mods::ALOLAN => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSHREW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSHREW | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSLASH => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSLASH | Mods::ALOLAN => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSLASH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SANDSLASH | Mods::SHADOW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_F => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_F | Mods::PURIFIED => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_F | Mods::SHADOW => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINA => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINA | Mods::SHADOW => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOQUEEN => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOQUEEN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOQUEEN | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_M => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_M | Mods::PURIFIED => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORAN_M | Mods::SHADOW => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINO => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDORINO | Mods::SHADOW => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOKING => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOKING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NIDOKING | Mods::SHADOW => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLEFAIRY => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 108,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CLEFABLE => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::VULPIX => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VULPIX | Mods::ALOLAN => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VULPIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VULPIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NINETALES => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NINETALES | Mods::ALOLAN => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NINETALES | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NINETALES | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::JIGGLYPUFF => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 41,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WIGGLYTUFF => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 295,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZUBAT => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZUBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZUBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLBAT => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ODDISH => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ODDISH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ODDISH | Mods::SHADOW => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLOOM => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLOOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLOOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VILEPLUME => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VILEPLUME | Mods::PURIFIED => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VILEPLUME | Mods::SHADOW => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PARAS => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PARASECT => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENONAT => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENONAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENONAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENOMOTH => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENOMOTH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VENOMOTH | Mods::SHADOW => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DIGLETT => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DIGLETT | Mods::ALOLAN => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 81,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DIGLETT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DIGLETT | Mods::SHADOW => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUGTRIO => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUGTRIO | Mods::ALOLAN => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUGTRIO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUGTRIO | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEOWTH => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEOWTH | Mods::ALOLAN => [
            self::FIELD_ATTACK => 99,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEOWTH | Mods::GALARIAN => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEOWTH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEOWTH | Mods::SHADOW => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERSIAN => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERSIAN | Mods::ALOLAN => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERSIAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERSIAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PSYDUCK => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PSYDUCK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PSYDUCK | Mods::SHADOW => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOLDUCK => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOLDUCK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOLDUCK | Mods::SHADOW => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MANKEY => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PRIMEAPE => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROWLITHE => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROWLITHE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROWLITHE | Mods::SHADOW => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARCANINE => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARCANINE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARCANINE | Mods::SHADOW => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWAG => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWAG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWAG | Mods::SHADOW => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWHIRL => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWHIRL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWHIRL | Mods::SHADOW => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWRATH => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWRATH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLIWRATH | Mods::SHADOW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABRA => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KADABRA => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KADABRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KADABRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ALAKAZAM => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ALAKAZAM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ALAKAZAM | Mods::SHADOW => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOP => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOP | Mods::SHADOW => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOKE => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOKE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHOKE | Mods::SHADOW => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHAMP => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHAMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MACHAMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BELLSPROUT => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BELLSPROUT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BELLSPROUT | Mods::SHADOW => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEPINBELL => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEPINBELL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEPINBELL | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VICTREEBEL => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VICTREEBEL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VICTREEBEL | Mods::SHADOW => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TENTACOOL => [
            self::FIELD_ATTACK => 97,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TENTACRUEL => [
            self::FIELD_ATTACK => 166,
            self::FIELD_DEFENSE => 209,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GEODUDE => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GEODUDE | Mods::ALOLAN => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GEODUDE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GEODUDE | Mods::SHADOW => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GRAVELER => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GRAVELER | Mods::ALOLAN => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GRAVELER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GRAVELER | Mods::SHADOW => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLEM => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLEM | Mods::ALOLAN => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLEM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GOLEM | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PONYTA => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RAPIDASH => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SLOWPOKE => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SLOWBRO => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEMITE => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEMITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEMITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNETON => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNETON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNETON | Mods::SHADOW => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FARFETCH_D => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FARFETCH_D | Mods::GALARIAN => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FARFETCH_D | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FARFETCH_D | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DODUO => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DODRIO => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEEL => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEWGONG => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 177,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GRIMER => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GRIMER | Mods::ALOLAN => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GRIMER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GRIMER | Mods::SHADOW => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUK => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUK | Mods::ALOLAN => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUK | Mods::SHADOW => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHELLDER => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHELLDER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHELLDER | Mods::SHADOW => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLOYSTER => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLOYSTER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLOYSTER | Mods::SHADOW => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GASTLY => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 67,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HAUNTER => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GENGAR => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ONIX => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ONIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ONIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DROWZEE => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DROWZEE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DROWZEE | Mods::SHADOW => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HYPNO => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HYPNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HYPNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KRABBY => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KRABBY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KRABBY | Mods::SHADOW => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KINGLER => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KINGLER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KINGLER | Mods::SHADOW => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VOLTORB => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ELECTRODE => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGCUTE => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGCUTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGCUTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGUTOR => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGUTOR | Mods::ALOLAN => [
            self::FIELD_ATTACK => 230,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGUTOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXEGGUTOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CUBONE => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CUBONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CUBONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAROWAK => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAROWAK | Mods::ALOLAN => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAROWAK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAROWAK | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HITMONLEE => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONLEE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONLEE | Mods::SHADOW => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONCHAN => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONCHAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONCHAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LICKITUNG => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KOFFING => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KOFFING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KOFFING | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEZING => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEZING | Mods::GALARIAN => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEZING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEEZING | Mods::SHADOW => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYHORN => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYHORN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYHORN | Mods::SHADOW => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYDON => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYDON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYDON | Mods::SHADOW => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHANSEY => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 487,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TANGELA => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KANGASKHAN => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KANGASKHAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KANGASKHAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HORSEA => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEADRA => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOLDEEN => [
            self::FIELD_ATTACK => 123,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEAKING => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 147,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STARYU => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STARMIE => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MR_MIME => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SCYTHER => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SCYTHER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SCYTHER | Mods::SHADOW => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::JYNX => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELECTABUZZ => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELECTABUZZ | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELECTABUZZ | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMAR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PINSIR => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PINSIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PINSIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TAUROS => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGIKARP => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MAGIKARP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MAGIKARP | Mods::SHADOW => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GYARADOS => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GYARADOS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GYARADOS | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LAPRAS => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LAPRAS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LAPRAS | Mods::SHADOW => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DITTO => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EEVEE => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VAPOREON => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 161,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::JOLTEON => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLAREON => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PORYGON => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::OMANYTE => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::OMANYTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::OMANYTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::OMASTAR => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::OMASTAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::OMASTAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KABUTO => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KABUTOPS => [
            self::FIELD_ATTACK => 220,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::AERODACTYL => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SNORLAX => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SNORLAX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SNORLAX | Mods::SHADOW => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ARTICUNO => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARTICUNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARTICUNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ZAPDOS => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ZAPDOS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ZAPDOS | Mods::SHADOW => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MOLTRES => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MOLTRES | Mods::PURIFIED => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MOLTRES | Mods::SHADOW => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DRATINI => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRATINI | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRATINI | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONAIR => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONAIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONAIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONITE => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAGONITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MEWTWO => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 278,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MEWTWO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MEWTWO | Mods::SHADOW => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MEW => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::CHIKORITA => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BAYLEEF => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEGANIUM => [
            self::FIELD_ATTACK => 168,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CYNDAQUIL => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::QUILAVA => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TYPHLOSION => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TOTODILE => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CROCONAW => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FERALIGATR => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SENTRET => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::FURRET => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::HOOTHOOT => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 88,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::NOCTOWL => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LEDYBA => [
            self::FIELD_ATTACK => 72,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LEDIAN => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SPINARAK => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ARIADOS => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CROBAT => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CROBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CROBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CHINCHOU => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LANTURN => [
            self::FIELD_ATTACK => 146,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 268,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PICHU => [
            self::FIELD_ATTACK => 77,
            self::FIELD_DEFENSE => 53,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CLEFFA => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::IGGLYBUFF => [
            self::FIELD_ATTACK => 69,
            self::FIELD_DEFENSE => 32,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::TOGEPI => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TOGETIC => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NATU => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::XATU => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAREEP => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAREEP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAREEP | Mods::SHADOW => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLAAFFY => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLAAFFY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLAAFFY | Mods::SHADOW => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::AMPHAROS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::AMPHAROS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::AMPHAROS | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BELLOSSOM => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BELLOSSOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BELLOSSOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MARILL => [
            self::FIELD_ATTACK => 37,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AZUMARILL => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SUDOWOODO => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::POLITOED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLITOED | Mods::PURIFIED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POLITOED | Mods::SHADOW => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOPPIP => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKIPLOOM => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::JUMPLUFF => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AIPOM => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SUNKERN => [
            self::FIELD_ATTACK => 55,
            self::FIELD_DEFENSE => 55,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SUNFLORA => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::YANMA => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WOOPER => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 66,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::QUAGSIRE => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ESPEON => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::UMBREON => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 240,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MURKROW => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MURKROW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MURKROW | Mods::SHADOW => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SLOWKING => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISDREAVUS => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISDREAVUS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISDREAVUS | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::UNOWN => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::WOBBUFFET => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WOBBUFFET | Mods::PURIFIED => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WOBBUFFET | Mods::SHADOW => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GIRAFARIG => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PINECO => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PINECO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PINECO | Mods::SHADOW => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FORRETRESS => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FORRETRESS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FORRETRESS | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DUNSPARCE => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLIGAR => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLIGAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLIGAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STEELIX => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STEELIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STEELIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SNUBBULL => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GRANBULL => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::QWILFISH => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SCIZOR => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SCIZOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SCIZOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHUCKLE => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHUCKLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHUCKLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HERACROSS => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNEASEL => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNEASEL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNEASEL | Mods::SHADOW => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TEDDIURSA => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::URSARING => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SLUGMA => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MAGCARGO => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SWINUB => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PILOSWINE => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CORSOLA => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::REMORAID => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::OCTILLERY => [
            self::FIELD_ATTACK => 197,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::DELIBIRD => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DELIBIRD | Mods::PURIFIED => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DELIBIRD | Mods::SHADOW => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MANTINE => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 226,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SKARMORY => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 226,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HOUNDOUR => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOUNDOUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOUNDOUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOUNDOOM => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOUNDOOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HOUNDOOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KINGDRA => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PHANPY => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DONPHAN => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON2 => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON2 | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON2 | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STANTLER => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STANTLER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STANTLER | Mods::SHADOW => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SMEARGLE => [
            self::FIELD_ATTACK => 40,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TYROGUE => [
            self::FIELD_ATTACK => 64,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HITMONTOP => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SMOOCHUM => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELEKID => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 101,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGBY => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MILTANK => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BLISSEY => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 496,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::RAIKOU => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::RAIKOU | Mods::PURIFIED => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::RAIKOU | Mods::SHADOW => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ENTEI => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ENTEI | Mods::PURIFIED => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ENTEI | Mods::SHADOW => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SUICUNE => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SUICUNE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SUICUNE | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::LARVITAR => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LARVITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LARVITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PUPITAR => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PUPITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PUPITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TYRANITAR => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TYRANITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TYRANITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LUGIA => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 310,
            self::FIELD_STAMINA => 235,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::HO_OH => [
            self::FIELD_ATTACK => 239,
            self::FIELD_DEFENSE => 244,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::CELEBI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::TREECKO => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROVYLE => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SCEPTILE => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TORCHIC => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::COMBUSKEN => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BLAZIKEN => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUDKIP => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUDKIP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUDKIP | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MARSHTOMP => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MARSHTOMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MARSHTOMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SWAMPERT => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SWAMPERT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SWAMPERT | Mods::SHADOW => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::POOCHYENA => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MIGTYENA => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZIGZAGOON => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZIGZAGOON | Mods::GALARIAN => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZIGZAGOON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZIGZAGOON | Mods::SHADOW => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LINOONE => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LINOONE | Mods::GALARIAN => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LINOONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LINOONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WURMPLE => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SILCOON => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BEAUTIFLY => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CASCOON => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::DUSTOX => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LOTAD => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LOMBRE => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LUDICOLO => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEEDOT => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEEDOT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEEDOT | Mods::SHADOW => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NUZLEAF => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NUZLEAF | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NUZLEAF | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHIFTRY => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHIFTRY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHIFTRY | Mods::SHADOW => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TAILLOW => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SWELLOW => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WINGULL => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PELIPPER => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RALTS => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::RALTS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::RALTS | Mods::SHADOW => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KIRLIA => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KIRLIA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KIRLIA | Mods::SHADOW => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARDEVOIR => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARDEVOIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARDEVOIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SURSKIT => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MASQUERAIN => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SHROOMISH => [
            self::FIELD_ATTACK => 74,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BRELOOM => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SLAKOTH => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VIGOROTH => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 145,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SLAKING => [
            self::FIELD_ATTACK => 290,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::NINCADA => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 104,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::NINJASK => [
            self::FIELD_ATTACK => 199,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHEDINJA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 1,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::WHISMUR => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 42,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LOUDRED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 81,
            self::FIELD_STAMINA => 197,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::EXPLOUD => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 232,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MAKUHITA => [
            self::FIELD_ATTACK => 99,
            self::FIELD_DEFENSE => 54,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HARIYAMA => [
            self::FIELD_ATTACK => 209,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 302,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AZURILL => [
            self::FIELD_ATTACK => 36,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::NOSEPASS => [
            self::FIELD_ATTACK => 82,
            self::FIELD_DEFENSE => 215,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKITTY => [
            self::FIELD_ATTACK => 84,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DELCATTY => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SABLEYE => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SABLEYE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SABLEYE | Mods::SHADOW => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAWILE => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAWILE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAWILE | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ARON => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LAIRON => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::AGGRON => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 257,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MEDITITE => [
            self::FIELD_ATTACK => 78,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MEDICHAM => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ELECTRIKE => [
            self::FIELD_ATTACK => 123,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MANELECTRIC => [
            self::FIELD_ATTACK => 215,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PLUSLE => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MINUN => [
            self::FIELD_ATTACK => 147,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VOLBEAT => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ILLUMISE => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ROSELIA => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GULPIN => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SWALOT => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CARAVANHA => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CARAVANHA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CARAVANHA | Mods::SHADOW => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHARPEDO => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHARPEDO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHARPEDO | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WAILMER => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 68,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WAILORD => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 347,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::NUMEL => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CAMERUPT => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TORKOAL => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 203,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SPOINK => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::GRUMPIG => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SPINDA => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TRAPINCH => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TRAPINCH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TRAPINCH | Mods::SHADOW => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VIBRAVA => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VIBRAVA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VIBRAVA | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLYGON => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLYGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FLYGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CACNEA => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CACNEA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CACNEA | Mods::SHADOW => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CACTURNE => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CACTURNE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CACTURNE | Mods::SHADOW => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SWABLU => [
            self::FIELD_ATTACK => 76,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ALTARIA => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ZANGOOSE => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEVIPER => [
            self::FIELD_ATTACK => 196,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LUNATONE => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SOLROCK => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BARBOACH => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WHISCASH => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CORPHISH => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 125,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CRAWDAUNT => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BALTOY => [
            self::FIELD_ATTACK => 77,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLAYDOL => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LILEEP => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 165,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CRADILY => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 200,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ANORITH => [
            self::FIELD_ATTACK => 176,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ARMALDO => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FEEBAS => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MILOTIC => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CASTFORM => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_RAINY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_SNOWY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_SUNNY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KECLEON => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHUPPET => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHUPPET | Mods::PURIFIED => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHUPPET | Mods::SHADOW => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BANETTE => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BANETTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BANETTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKULL => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKULL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKULL | Mods::SHADOW => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSCLOPS => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSCLOPS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSCLOPS | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TROPIUS => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 223,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CHIMECHO => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ABSOL => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ABSOL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ABSOL | Mods::SHADOW => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::WYNAUT => [
            self::FIELD_ATTACK => 41,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNORUNT => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLALIE => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SPHEAL => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEALEO => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WALREIN => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CLAMPERL => [
            self::FIELD_ATTACK => 133,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HUNTAIL => [
            self::FIELD_ATTACK => 197,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOREBYSS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RELICANTH => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 203,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LUVDISC => [
            self::FIELD_ATTACK => 81,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 125,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BAGON => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BAGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BAGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHELGON => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHELGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHELGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SALAMENCE => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SALAMENCE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SALAMENCE | Mods::SHADOW => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BELDUM => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BELDUM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BELDUM | Mods::SHADOW => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METANG => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METANG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METANG | Mods::SHADOW => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METAGROSS => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METAGROSS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::METAGROSS | Mods::SHADOW => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::REGIROCK => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 309,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::REGICE => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 309,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::REGISTEEL => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 285,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::LATIAS => [
            self::FIELD_ATTACK => 228,
            self::FIELD_DEFENSE => 246,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::LATIOS => [
            self::FIELD_ATTACK => 268,
            self::FIELD_DEFENSE => 212,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KYOGRE => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GROUDON => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::RAYQUAZA => [
            self::FIELD_ATTACK => 284,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 213,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::JIRACHI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DEOXYS => [
            self::FIELD_ATTACK => 345,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_ATTACK => [
            self::FIELD_ATTACK => 414,
            self::FIELD_DEFENSE => 46,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 330,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_SPEED => [
            self::FIELD_ATTACK => 230,
            self::FIELD_DEFENSE => 218,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::TURTWIG => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TURTWIG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TURTWIG | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROTLE => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GROTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TORTERRA => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TORTERRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TORTERRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHIMCHAR => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHIMCHAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHIMCHAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MONFERNO => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MONFERNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MONFERNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::INFERNAPE => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::INFERNAPE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::INFERNAPE | Mods::SHADOW => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PILUP => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 102,
            self::FIELD_STAMINA => 142,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PRINPLUP => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EMPOLEON => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 197,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STARLY => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 58,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::STARAVIA => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::STARAPTOR => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BIDOOF => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BIBAREL => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KRICKETOT => [
            self::FIELD_ATTACK => 45,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 114,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KRICKETUNE => [
            self::FIELD_ATTACK => 160,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 184,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SHINX => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LUXIO => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LUXRAY => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BUDEW => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ROSERADE => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CRANIDOS => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::RAMPARDOS => [
            self::FIELD_ATTACK => 295,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 219,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHIELDON => [
            self::FIELD_ATTACK => 76,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BASTIODON => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 286,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BURMY => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BURMY | FormsAlias::BURMY_SANDY => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BURMY | FormsAlias::BURMY_TRASH => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WORMADAM => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_SANDY => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::MOTHIM => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::COMBEE => [
            self::FIELD_ATTACK => 59,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VESPIQUEN => [
            self::FIELD_ATTACK => 149,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PACHIRISU => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BUZIEL => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 67,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FLOATZEL => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHERUBI => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CHERRIM => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CHERRIM | FormsAlias::CHERRIM_OVERCAST => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SHELLOS => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SHELLOS | FormsAlias::SHELLOS_WEST_SEA => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GASTRODON => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 244,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GASTRODON | FormsAlias::GASTRODON_WEST_SEA => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 244,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AMBIPOM => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DRIFLOON => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRIFBLIM => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 102,
            self::FIELD_STAMINA => 312,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BUNEARY => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LOPUNNY => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISMAGIUS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISMAGIUS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MISMAGIUS | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HONCHKROW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HONCHKROW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HONCHKROW | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GLAMEOW => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 135,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PURUGLY => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CHINGLING => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STUNKY => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STUNKY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STUNKY | Mods::SHADOW => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKUNTANK => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKUNTANK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKUNTANK | Mods::SHADOW => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BRONZOR => [
            self::FIELD_ATTACK => 43,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 149,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BRONZONG => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 213,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BONSLY => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MIME_JR => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HAPPINY => [
            self::FIELD_ATTACK => 25,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CHATOT => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SPIRITOMB => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GIBLE => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GIBLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GIBLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GABITE => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GABITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GABITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARCHOMP => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARCHOMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GARCHOMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MUNCHLAX => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 286,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::RIOLU => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LUCARIO => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HIPPOPOTAS => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HIPPOPOTAS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HIPPOPOTAS | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HIPPOWDON => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HIPPOWDON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::HIPPOWDON | Mods::SHADOW => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SKORUPI => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DRAPION => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CROAGUNK => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TOXICROAK => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 195,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CARNIVINE => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FINNEON => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 135,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LUMINEON => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 170,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MANTYKE => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SNOVER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNOVER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SNOVER | Mods::SHADOW => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABOMASNOW => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABOMASNOW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ABOMASNOW | Mods::SHADOW => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEAVILE => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEAVILE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WEAVILE | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEZONE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEZONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MAGNEZONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LICKILICKY => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYPERIOR => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYPERIOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RHYPERIOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TANGROWTH => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ELECTIVIRE => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELECTIVIRE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ELECTIVIRE | Mods::SHADOW => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMORTAR => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMORTAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAGMORTAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TOGEKISS => [
            self::FIELD_ATTACK => 225,
            self::FIELD_DEFENSE => 217,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::YANMEGA => [
            self::FIELD_ATTACK => 231,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 200,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LEAFEON => [
            self::FIELD_ATTACK => 216,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLACEON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLISCOR => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLISCOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GLISCOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MAMOSWINE => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON_Z => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON_Z | Mods::PURIFIED => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PORYGON_Z | Mods::SHADOW => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GALLADE => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GALLADE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GALLADE | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PROBOPASS => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 275,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKNOIR => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKNOIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUSKNOIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FROSLASS => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ROTOM => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_FAN => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_FROST => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_HEAT => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_MOW => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_WASH => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::UXIE => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 270,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MESPRIT => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 212,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::AZELF => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DIALGA => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::PALKIA => [
            self::FIELD_ATTACK => 280,
            self::FIELD_DEFENSE => 215,
            self::FIELD_STAMINA => 189,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::HEATRAN => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 213,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::REGIGIGAS => [
            self::FIELD_ATTACK => 287,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 221,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GIRATINA => [
            self::FIELD_ATTACK => 225,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 225,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::CRESSELIA => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 258,
            self::FIELD_STAMINA => 260,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::PHIONE => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MANAPHY => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::DARKRAI => [
            self::FIELD_ATTACK => 285,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SHAYMIN => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SHAYMIN | FormsAlias::SHAYMIN_SKY => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_BUG => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_DARK => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_DRAGON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ELECTRIC => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FAIRY => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FIGHTING => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FIRE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FLYING => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GHOST => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GRASS => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GROUND => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ICE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_POISON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_PSYCHIC => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ROCK => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_STEEL => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_WATER => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::VICTINI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::SNIVY => [
            self::FIELD_ATTACK => 88,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SERVINE => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SERPERIOR => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 204,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TEPIG => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PIGNITE => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EMBOAR => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::OSHAWOTT => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEWOTT => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SAMUROTT => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 157,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PATRAT => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WATCHDOG => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LILLIPUP => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::HERDIER => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::STOUTLAND => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PURROLIN => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LIEPARD => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PANSAGE => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SIMISAGE => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PANSEAR => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SMISEAR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PANPOUR => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SMIPOUR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUNNA => [
            self::FIELD_ATTACK => 111,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MUSHARNA => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 253,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PIDOVE => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::TRANQUILL => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::UNFEZANT => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BLITZLE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ZEBSTRIKA => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ROGGENROLA => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BOLDORE => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GIGALITH => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::WOOBAT => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SWOOBAT => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::DRILBUR => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EXCADRILL => [
            self::FIELD_ATTACK => 255,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AUDINO => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TIMBURR => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GURDURR => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CONKELDURR => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TYMPOLE => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PALPITOAD => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SEISMITOAD => [
            self::FIELD_ATTACK => 188,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::THROH => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 160,
            self::FIELD_STAMINA => 260,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SAWK => [
            self::FIELD_ATTACK => 231,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SEWADDLE => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SWADLOON => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LEVANNY => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::VENIPEDE => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WHIRLIPEDE => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SCOLIPEDE => [
            self::FIELD_ATTACK => 203,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::COTTONEE => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::WHIMSICOTT => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::PETILIL => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::LILLIGANT => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BASCULIN => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::BASCULIN | FormsAlias::BASCULIN_RED_STRIPED => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SANDILE => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KROKOROK => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KROOKODILE => [
            self::FIELD_ATTACK => 229,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::DARUMAKA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARUMAKA | Mods::GALARIAN => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARUMAKA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARUMAKA | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARMANITAN => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARMANITAN | Mods::GALARIAN => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN | Mods::GALARIAN => [
            self::FIELD_ATTACK => 323,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MARACTUS => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::DWEBBLE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::CRUSTLE => [
            self::FIELD_ATTACK => 188,
            self::FIELD_DEFENSE => 200,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::SCRAGGY => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SCRAFTY => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SIGILYPH => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::YAMASK => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::COFAGRIGUS => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 237,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::TIRTOUGA => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 144,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CARRACOSTA => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ARCHEN => [
            self::FIELD_ATTACK => 213,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ARCHEOPS => [
            self::FIELD_ATTACK => 292,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TRUBBISH => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GARBODOR => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ZORUA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ZOROARK => [
            self::FIELD_ATTACK => 250,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MINCCINO => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CINCCINO => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOTHITA => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOTHORITA => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GOTHITELLE => [
            self::FIELD_ATTACK => 176,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SOLOSIS => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUOSION => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::REUNICLUS => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 148,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DUCKLETT => [
            self::FIELD_ATTACK => 84,
            self::FIELD_DEFENSE => 96,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SWANNA => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VANILLITE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 113,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VANILLISH => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 139,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::VANILLUXE => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEERLING => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_AUTUMN => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_SUMMER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_WINTER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SAWSBUCK => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_AUTUMN => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SUMMER => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_WINTER => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::EMOLGA => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::KARRABLAST => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ESCAVALIER => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FOONGUS => [
            self::FIELD_ATTACK => 97,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 170,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::AMOONGUSS => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 249,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FRILLISH => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FRILLISH | FormsAlias::FRILLISH_FEMALE => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::JELLICENT => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::JELLICENT | FormsAlias::JELLICENT_FEMALE => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ALOMOMOLA => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 338,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::JOLTIK => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::GALVANTULA => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FERROSEED => [
            self::FIELD_ATTACK => 82,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::FERROTHORN => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 223,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::KLINK => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KLANG => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::KLINKLANG => [
            self::FIELD_ATTACK => 199,
            self::FIELD_DEFENSE => 214,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::TYNAMO => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ELEKTRIK => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ELEKTROSS => [
            self::FIELD_ATTACK => 217,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 1
        ],
        Pokemon::ELGYEM => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BEHEEYEM => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::LITWICK => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LAMPENT => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CHANDELURE => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::AXEW => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 101,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::FRAXURE => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 165,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HAXORUS => [
            self::FIELD_ATTACK => 284,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::CUBCHOO => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::BEARTIC => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::CRYOGONAL => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 218,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::SHELMET => [
            self::FIELD_ATTACK => 72,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::ACCELGOR => [
            self::FIELD_ATTACK => 220,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::STUNFISK => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STUNFISK | Mods::GALARIAN => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STUNFISK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::STUNFISK | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MIENFOO => [
            self::FIELD_ATTACK => 160,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::MIENSHAO => [
            self::FIELD_ATTACK => 258,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DRUDDIGON => [
            self::FIELD_ATTACK => 213,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 184,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GOLETT => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::GOLURK => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::PAWNIARD => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BISHARP => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BOUFFALANT => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::RUFFLET => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::BRAVIARY => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VULLABY => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::MANDIBUZZ => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HEATMOR => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DURANT => [
            self::FIELD_ATTACK => 217,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::DEINO => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::ZWELIOUS => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::HYDREIGON => [
            self::FIELD_ATTACK => 256,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 211,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::LARVESTA => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::VOLCARONA => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 5
        ],
        Pokemon::COBALLION => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::TERRAKION => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::VIRIZION => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::TORNADUS => [
            self::FIELD_ATTACK => 266,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::TORNADUS | FormsAlias::TORNADUS_THERIAN => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::THUNDURUS => [
            self::FIELD_ATTACK => 266,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::THUNDURUS | FormsAlias::THUNDURUS_THERIAN => [
            self::FIELD_ATTACK => 295,
            self::FIELD_DEFENSE => 161,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::RESHIRAM => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::ZEKROM => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::LANDORUS => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN => [
            self::FIELD_ATTACK => 289,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KYUREM => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KYUREM | FormsAlias::KYUREM_BLACK => [
            self::FIELD_ATTACK => 310,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KYUREM | FormsAlias::KYUREM_WHITE => [
            self::FIELD_ATTACK => 310,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KELDEO => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::KELDEO | FormsAlias::KELDEO_RESOLUTE => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MELOETTA => [
            self::FIELD_ATTACK => 250,
            self::FIELD_DEFENSE => 225,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MELOETTA | FormsAlias::MELOETTA_PIROUETTE => [
            self::FIELD_ATTACK => 269,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GENESECT => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_BURN => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_CHILL => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_DOUSE => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_SHOCK => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MELTAN => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::MELMETAL => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 264,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 20
        ],
        Pokemon::OBSTAGOON => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::OBSTAGOON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::OBSTAGOON | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERRSERKER => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERRSERKER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::PERRSERKER | Mods::SHADOW => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SIRFETCH_D => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SIRFETCH_D | Mods::PURIFIED => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ],
        Pokemon::SIRFETCH_D | Mods::SHADOW => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000,
            self::FIELD_TRANSFERABLE => true,
            self::FIELD_DEPLOYABLE => true,
            self::FIELD_BUDDY_DISTANCE => 3
        ]    
    ];
} 