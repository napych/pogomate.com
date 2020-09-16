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
    
    const POKEMON = [
        Pokemon::BULBASAUR => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BULBASAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BULBASAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::IVYSAUR => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::IVYSAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::IVYSAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::VENUSAUR => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENUSAUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENUSAUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CHARMANDER => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHARMANDER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHARMANDER | Mods::SHADOW => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CHARMELEON => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHARMELEON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHARMELEON | Mods::SHADOW => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CHARIZARD => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CHARIZARD | Mods::PURIFIED => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CHARIZARD | Mods::SHADOW => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SQUIRTLE => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SQUIRTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SQUIRTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WARTORTLE => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::WARTORTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::WARTORTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::BLASTOISE => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::BLASTOISE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::BLASTOISE | Mods::SHADOW => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CATERPIE => [
            self::FIELD_ATTACK => 55,
            self::FIELD_DEFENSE => 55,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::METAPOD => [
            self::FIELD_ATTACK => 45,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::BUTTERFREE => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::WEEDLE => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::WEEDLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::WEEDLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 63,
            self::FIELD_DEFENSE => 50,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::KAKUNA => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::KAKUNA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::KAKUNA | Mods::SHADOW => [
            self::FIELD_ATTACK => 46,
            self::FIELD_DEFENSE => 75,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::BEEDRILL => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BEEDRILL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BEEDRILL | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::PIDGEY => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::PIDGEOTTO => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::PIDGEOT => [
            self::FIELD_ATTACK => 166,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 195,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::RATATTA => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RATATTA | Mods::ALOLAN => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::RATATTA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RATATTA | Mods::SHADOW => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 70,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::RATICATE => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RATICATE | Mods::ALOLAN => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::RATICATE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RATICATE | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::SPEAROW => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 60,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::FEAROW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::EKANS => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::EKANS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::EKANS | Mods::SHADOW => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::ARBOK => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::ARBOK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::ARBOK | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PIKACHU => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 96,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::RAICHU => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::RAICHU | Mods::ALOLAN => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::SANDSHREW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::SANDSHREW | Mods::ALOLAN => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::SANDSHREW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::SANDSHREW | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SANDSLASH => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::SANDSLASH | Mods::ALOLAN => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::SANDSLASH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::SANDSLASH | Mods::SHADOW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDORAN_F => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORAN_F | Mods::PURIFIED => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORAN_F | Mods::SHADOW => [
            self::FIELD_ATTACK => 86,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDORINA => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORINA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORINA | Mods::SHADOW => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDOQUEEN => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::NIDOQUEEN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::NIDOQUEEN | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDORAN_M => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORAN_M | Mods::PURIFIED => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORAN_M | Mods::SHADOW => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDORINO => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORINO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::NIDORINO | Mods::SHADOW => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NIDOKING => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::NIDOKING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::NIDOKING | Mods::SHADOW => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 191,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CLEFAIRY => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 108,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::CLEFABLE => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::VULPIX => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::VULPIX | Mods::ALOLAN => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::VULPIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::VULPIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NINETALES => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::NINETALES | Mods::ALOLAN => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::NINETALES | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::NINETALES | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::JIGGLYPUFF => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 41,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::WIGGLYTUFF => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 295,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::ZUBAT => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ZUBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ZUBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::GOLBAT => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GOLBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GOLBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::ODDISH => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::ODDISH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::ODDISH | Mods::SHADOW => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GLOOM => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::GLOOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::GLOOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::VILEPLUME => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VILEPLUME | Mods::PURIFIED => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VILEPLUME | Mods::SHADOW => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PARAS => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::PARASECT => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::VENONAT => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENONAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENONAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::VENOMOTH => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENOMOTH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VENOMOTH | Mods::SHADOW => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DIGLETT => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::DIGLETT | Mods::ALOLAN => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 81,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::DIGLETT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::DIGLETT | Mods::SHADOW => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 67,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DUGTRIO => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::DUGTRIO | Mods::ALOLAN => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::DUGTRIO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::DUGTRIO | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MEOWTH => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::MEOWTH | Mods::ALOLAN => [
            self::FIELD_ATTACK => 99,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::MEOWTH | Mods::GALARIAN => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::MEOWTH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::MEOWTH | Mods::SHADOW => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PERSIAN => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PERSIAN | Mods::ALOLAN => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::PERSIAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PERSIAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PSYDUCK => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::PSYDUCK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::PSYDUCK | Mods::SHADOW => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GOLDUCK => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::GOLDUCK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::GOLDUCK | Mods::SHADOW => [
            self::FIELD_ATTACK => 191,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MANKEY => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::PRIMEAPE => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::GROWLITHE => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::GROWLITHE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::GROWLITHE | Mods::SHADOW => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::ARCANINE => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::ARCANINE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::ARCANINE | Mods::SHADOW => [
            self::FIELD_ATTACK => 227,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::POLIWAG => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLIWAG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLIWAG | Mods::SHADOW => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::POLIWHIRL => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLIWHIRL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLIWHIRL | Mods::SHADOW => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::POLIWRATH => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::POLIWRATH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::POLIWRATH | Mods::SHADOW => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::ABRA => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::ABRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::ABRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::KADABRA => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::KADABRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::KADABRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::ALAKAZAM => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::ALAKAZAM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::ALAKAZAM | Mods::SHADOW => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MACHOP => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHOP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHOP | Mods::SHADOW => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MACHOKE => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHOKE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHOKE | Mods::SHADOW => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MACHAMP => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHAMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MACHAMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::BELLSPROUT => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BELLSPROUT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::BELLSPROUT | Mods::SHADOW => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WEEPINBELL => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::WEEPINBELL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::WEEPINBELL | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::VICTREEBEL => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VICTREEBEL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::VICTREEBEL | Mods::SHADOW => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TENTACOOL => [
            self::FIELD_ATTACK => 97,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::TENTACRUEL => [
            self::FIELD_ATTACK => 166,
            self::FIELD_DEFENSE => 209,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::GEODUDE => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GEODUDE | Mods::ALOLAN => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::GEODUDE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GEODUDE | Mods::SHADOW => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::GRAVELER => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GRAVELER | Mods::ALOLAN => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::GRAVELER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GRAVELER | Mods::SHADOW => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::GOLEM => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GOLEM | Mods::ALOLAN => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::GOLEM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GOLEM | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::PONYTA => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::RAPIDASH => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::SLOWPOKE => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::SLOWBRO => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::MAGNEMITE => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNEMITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNEMITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 93,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MAGNETON => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNETON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNETON | Mods::SHADOW => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::FARFETCH_D => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::FARFETCH_D | Mods::GALARIAN => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::FARFETCH_D | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::FARFETCH_D | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DODUO => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DODRIO => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SEEL => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::DEWGONG => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 177,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::GRIMER => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::GRIMER | Mods::ALOLAN => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::GRIMER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::GRIMER | Mods::SHADOW => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MUK => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::MUK | Mods::ALOLAN => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::MUK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::MUK | Mods::SHADOW => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SHELLDER => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SHELLDER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SHELLDER | Mods::SHADOW => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CLOYSTER => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::CLOYSTER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::CLOYSTER | Mods::SHADOW => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 256,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GASTLY => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 67,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::HAUNTER => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::GENGAR => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::ONIX => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::ONIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::ONIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 85,
            self::FIELD_DEFENSE => 232,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::DROWZEE => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::DROWZEE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::DROWZEE | Mods::SHADOW => [
            self::FIELD_ATTACK => 89,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HYPNO => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::HYPNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::HYPNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::KRABBY => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::KRABBY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::KRABBY | Mods::SHADOW => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::KINGLER => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::KINGLER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::KINGLER | Mods::SHADOW => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::VOLTORB => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELECTRODE => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::EXEGGCUTE => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::EXEGGCUTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::EXEGGCUTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::EXEGGUTOR => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::EXEGGUTOR | Mods::ALOLAN => [
            self::FIELD_ATTACK => 230,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::EXEGGUTOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::EXEGGUTOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 149,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CUBONE => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::CUBONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::CUBONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MAROWAK => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::MAROWAK | Mods::ALOLAN => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::MAROWAK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::MAROWAK | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HITMONLEE => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HITMONLEE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HITMONLEE | Mods::SHADOW => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::HITMONCHAN => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HITMONCHAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HITMONCHAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::LICKITUNG => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::KOFFING => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::KOFFING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::KOFFING | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WEEZING => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::WEEZING | Mods::GALARIAN => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::WEEZING | Mods::PURIFIED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::WEEZING | Mods::SHADOW => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::RHYHORN => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYHORN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYHORN | Mods::SHADOW => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::RHYDON => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYDON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYDON | Mods::SHADOW => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CHANSEY => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 487,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::TANGELA => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::KANGASKHAN => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::KANGASKHAN | Mods::PURIFIED => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::KANGASKHAN | Mods::SHADOW => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HORSEA => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SEADRA => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::GOLDEEN => [
            self::FIELD_ATTACK => 123,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SEAKING => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 147,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::STARYU => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::STARMIE => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::MR_MIME => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::SCYTHER => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SCYTHER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SCYTHER | Mods::SHADOW => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::JYNX => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::ELECTABUZZ => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELECTABUZZ | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELECTABUZZ | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MAGMAR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MAGMAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MAGMAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::PINSIR => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::PINSIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::PINSIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::TAUROS => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::MAGIKARP => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MAGIKARP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MAGIKARP | Mods::SHADOW => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::GYARADOS => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GYARADOS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GYARADOS | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::LAPRAS => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::LAPRAS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::LAPRAS | Mods::SHADOW => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::DITTO => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::EEVEE => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::VAPOREON => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 161,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::JOLTEON => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::FLAREON => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::PORYGON => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::OMANYTE => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::OMANYTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::OMANYTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::OMASTAR => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::OMASTAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::OMASTAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::KABUTO => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::KABUTOPS => [
            self::FIELD_ATTACK => 220,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::AERODACTYL => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SNORLAX => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SNORLAX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SNORLAX | Mods::SHADOW => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 330,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::ARTICUNO => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ARTICUNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ARTICUNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 236,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ZAPDOS => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ZAPDOS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ZAPDOS | Mods::SHADOW => [
            self::FIELD_ATTACK => 253,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MOLTRES => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MOLTRES | Mods::PURIFIED => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MOLTRES | Mods::SHADOW => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::DRATINI => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::DRATINI | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::DRATINI | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::DRAGONAIR => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::DRAGONAIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::DRAGONAIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::DRAGONITE => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DRAGONITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DRAGONITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MEWTWO => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MEWTWO | FormsAlias::MEWTWO_ARMORED => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 278,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MEWTWO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MEWTWO | Mods::SHADOW => [
            self::FIELD_ATTACK => 300,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MEW => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::CHIKORITA => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::BAYLEEF => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::MEGANIUM => [
            self::FIELD_ATTACK => 168,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::CYNDAQUIL => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 118,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::QUILAVA => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::TYPHLOSION => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::TOTODILE => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::CROCONAW => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::FERALIGATR => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SENTRET => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::FURRET => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::HOOTHOOT => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 88,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::NOCTOWL => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::LEDYBA => [
            self::FIELD_ATTACK => 72,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::LEDIAN => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SPINARAK => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::ARIADOS => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::CROBAT => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CROBAT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CROBAT | Mods::SHADOW => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 1,
            self::FIELD_PURIFY_STARDUST => 1000
        ],
        Pokemon::CHINCHOU => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::LANTURN => [
            self::FIELD_ATTACK => 146,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 268,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::PICHU => [
            self::FIELD_ATTACK => 77,
            self::FIELD_DEFENSE => 53,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::CLEFFA => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::IGGLYBUFF => [
            self::FIELD_ATTACK => 69,
            self::FIELD_DEFENSE => 32,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::TOGEPI => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::TOGETIC => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::NATU => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::XATU => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::MAREEP => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::MAREEP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::MAREEP | Mods::SHADOW => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::FLAAFFY => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::FLAAFFY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::FLAAFFY | Mods::SHADOW => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::AMPHAROS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::AMPHAROS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::AMPHAROS | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::BELLOSSOM => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::BELLOSSOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::BELLOSSOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MARILL => [
            self::FIELD_ATTACK => 37,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::AZUMARILL => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::SUDOWOODO => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::POLITOED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLITOED | Mods::PURIFIED => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::POLITOED | Mods::SHADOW => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HOPPIP => [
            self::FIELD_ATTACK => 67,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SKIPLOOM => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::JUMPLUFF => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::AIPOM => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SUNKERN => [
            self::FIELD_ATTACK => 55,
            self::FIELD_DEFENSE => 55,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SUNFLORA => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::YANMA => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::WOOPER => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 66,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::QUAGSIRE => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::ESPEON => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::UMBREON => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 240,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::MURKROW => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::MURKROW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::MURKROW | Mods::SHADOW => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SLOWKING => [
            self::FIELD_ATTACK => 177,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::MISDREAVUS => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::MISDREAVUS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::MISDREAVUS | Mods::SHADOW => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::UNOWN => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::WOBBUFFET => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::WOBBUFFET | Mods::PURIFIED => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::WOBBUFFET | Mods::SHADOW => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 382,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GIRAFARIG => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::PINECO => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::PINECO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::PINECO | Mods::SHADOW => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::FORRETRESS => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::FORRETRESS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::FORRETRESS | Mods::SHADOW => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::DUNSPARCE => [
            self::FIELD_ATTACK => 131,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::GLIGAR => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GLIGAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GLIGAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::STEELIX => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::STEELIX | Mods::PURIFIED => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::STEELIX | Mods::SHADOW => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 272,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::SNUBBULL => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::GRANBULL => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FAIRY
        ],
        Pokemon::QWILFISH => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::SCIZOR => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::SCIZOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::SCIZOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::SHUCKLE => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::SHUCKLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::SHUCKLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 17,
            self::FIELD_DEFENSE => 396,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HERACROSS => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::SNEASEL => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::SNEASEL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::SNEASEL | Mods::SHADOW => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TEDDIURSA => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::URSARING => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SLUGMA => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MAGCARGO => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::SWINUB => [
            self::FIELD_ATTACK => 90,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::PILOSWINE => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::CORSOLA => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::REMORAID => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::OCTILLERY => [
            self::FIELD_ATTACK => 197,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::DELIBIRD => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DELIBIRD | Mods::PURIFIED => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DELIBIRD | Mods::SHADOW => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MANTINE => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 226,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SKARMORY => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 226,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::HOUNDOUR => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::HOUNDOUR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::HOUNDOUR | Mods::SHADOW => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HOUNDOOM => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::HOUNDOOM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::HOUNDOOM | Mods::SHADOW => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::KINGDRA => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::PHANPY => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::DONPHAN => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::PORYGON2 => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON2 | Mods::PURIFIED => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON2 | Mods::SHADOW => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::STANTLER => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::STANTLER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::STANTLER | Mods::SHADOW => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SMEARGLE => [
            self::FIELD_ATTACK => 40,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::TYROGUE => [
            self::FIELD_ATTACK => 64,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HITMONTOP => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::SMOOCHUM => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::ELEKID => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 101,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::MAGBY => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MILTANK => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::BLISSEY => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 496,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RAIKOU => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::RAIKOU | Mods::PURIFIED => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::RAIKOU | Mods::SHADOW => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ENTEI => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ENTEI | Mods::PURIFIED => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ENTEI | Mods::SHADOW => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::SUICUNE => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::SUICUNE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::SUICUNE | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 235,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 20,
            self::FIELD_PURIFY_STARDUST => 20000,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::LARVITAR => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::LARVITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::LARVITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::PUPITAR => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::PUPITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::PUPITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::TYRANITAR => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::TYRANITAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::TYRANITAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 207,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::LUGIA => [
            self::FIELD_ATTACK => 193,
            self::FIELD_DEFENSE => 310,
            self::FIELD_STAMINA => 235,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::HO_OH => [
            self::FIELD_ATTACK => 239,
            self::FIELD_DEFENSE => 244,
            self::FIELD_STAMINA => 214,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::CELEBI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::GRASS,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::TREECKO => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::GROVYLE => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SCEPTILE => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 169,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::TORCHIC => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::COMBUSKEN => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::BLAZIKEN => [
            self::FIELD_ATTACK => 240,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::MUDKIP => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MUDKIP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MUDKIP | Mods::SHADOW => [
            self::FIELD_ATTACK => 126,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MARSHTOMP => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::MARSHTOMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::MARSHTOMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SWAMPERT => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::SWAMPERT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::SWAMPERT | Mods::SHADOW => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::POOCHYENA => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::MIGTYENA => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::ZIGZAGOON => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::ZIGZAGOON | Mods::GALARIAN => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::ZIGZAGOON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::ZIGZAGOON | Mods::SHADOW => [
            self::FIELD_ATTACK => 58,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::LINOONE => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::LINOONE | Mods::GALARIAN => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::LINOONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::LINOONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 186,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WURMPLE => [
            self::FIELD_ATTACK => 75,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::SILCOON => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::BEAUTIFLY => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CASCOON => [
            self::FIELD_ATTACK => 60,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::DUSTOX => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::LOTAD => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::LOMBRE => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::LUDICOLO => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SEEDOT => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SEEDOT | Mods::PURIFIED => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SEEDOT | Mods::SHADOW => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::NUZLEAF => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::NUZLEAF | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::NUZLEAF | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SHIFTRY => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SHIFTRY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SHIFTRY | Mods::SHADOW => [
            self::FIELD_ATTACK => 200,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TAILLOW => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SWELLOW => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::WINGULL => [
            self::FIELD_ATTACK => 106,
            self::FIELD_DEFENSE => 61,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::PELIPPER => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::RALTS => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::RALTS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::RALTS | Mods::SHADOW => [
            self::FIELD_ATTACK => 79,
            self::FIELD_DEFENSE => 59,
            self::FIELD_STAMINA => 99,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::KIRLIA => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::KIRLIA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::KIRLIA | Mods::SHADOW => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::GARDEVOIR => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::GARDEVOIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::GARDEVOIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::SURSKIT => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::MASQUERAIN => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SHROOMISH => [
            self::FIELD_ATTACK => 74,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::BRELOOM => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::SLAKOTH => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::VIGOROTH => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 145,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SLAKING => [
            self::FIELD_ATTACK => 290,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::NINCADA => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 104,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::NINJASK => [
            self::FIELD_ATTACK => 199,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 156,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SHEDINJA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 1,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::WHISMUR => [
            self::FIELD_ATTACK => 92,
            self::FIELD_DEFENSE => 42,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::LOUDRED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 81,
            self::FIELD_STAMINA => 197,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::EXPLOUD => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 137,
            self::FIELD_STAMINA => 232,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::MAKUHITA => [
            self::FIELD_ATTACK => 99,
            self::FIELD_DEFENSE => 54,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::HARIYAMA => [
            self::FIELD_ATTACK => 209,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 302,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::AZURILL => [
            self::FIELD_ATTACK => 36,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::NOSEPASS => [
            self::FIELD_ATTACK => 82,
            self::FIELD_DEFENSE => 215,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::SKITTY => [
            self::FIELD_ATTACK => 84,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::DELCATTY => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SABLEYE => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::SABLEYE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::SABLEYE | Mods::SHADOW => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MAWILE => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::MAWILE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::MAWILE | Mods::SHADOW => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FAIRY,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::ARON => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::LAIRON => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::AGGRON => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 257,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::MEDITITE => [
            self::FIELD_ATTACK => 78,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::MEDICHAM => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::ELECTRIKE => [
            self::FIELD_ATTACK => 123,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::MANELECTRIC => [
            self::FIELD_ATTACK => 215,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::PLUSLE => [
            self::FIELD_ATTACK => 167,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::MINUN => [
            self::FIELD_ATTACK => 147,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::VOLBEAT => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::ILLUMISE => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::ROSELIA => [
            self::FIELD_ATTACK => 186,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::GULPIN => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::SWALOT => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::CARAVANHA => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::CARAVANHA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::CARAVANHA | Mods::SHADOW => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 39,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SHARPEDO => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SHARPEDO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SHARPEDO | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WAILMER => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 68,
            self::FIELD_STAMINA => 277,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::WAILORD => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 347,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::NUMEL => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 79,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::CAMERUPT => [
            self::FIELD_ATTACK => 194,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::TORKOAL => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 203,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::SPOINK => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::GRUMPIG => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::SPINDA => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::TRAPINCH => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::TRAPINCH | Mods::PURIFIED => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::TRAPINCH | Mods::SHADOW => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::VIBRAVA => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::VIBRAVA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::VIBRAVA | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::FLYGON => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::FLYGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::FLYGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::CACNEA => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::CACNEA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::CACNEA | Mods::SHADOW => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CACTURNE => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::CACTURNE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::CACTURNE | Mods::SHADOW => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SWABLU => [
            self::FIELD_ATTACK => 76,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ALTARIA => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ZANGOOSE => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SEVIPER => [
            self::FIELD_ATTACK => 196,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 177,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::LUNATONE => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::SOLROCK => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::BARBOACH => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::WHISCASH => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::CORPHISH => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 125,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::CRAWDAUNT => [
            self::FIELD_ATTACK => 224,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::BALTOY => [
            self::FIELD_ATTACK => 77,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::CLAYDOL => [
            self::FIELD_ATTACK => 140,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::LILEEP => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 165,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::CRADILY => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 200,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::ANORITH => [
            self::FIELD_ATTACK => 176,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::BUG
        ],
        Pokemon::ARMALDO => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::BUG
        ],
        Pokemon::FEEBAS => [
            self::FIELD_ATTACK => 29,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MILOTIC => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::CASTFORM => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_RAINY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_SNOWY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::CASTFORM | FormsAlias::CASTFORM_SUNNY => [
            self::FIELD_ATTACK => 139,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::KECLEON => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::SHUPPET => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::SHUPPET | Mods::PURIFIED => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::SHUPPET | Mods::SHADOW => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 65,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::BANETTE => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::BANETTE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::BANETTE | Mods::SHADOW => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DUSKULL => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSKULL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSKULL | Mods::SHADOW => [
            self::FIELD_ATTACK => 70,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DUSCLOPS => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSCLOPS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSCLOPS | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 234,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TROPIUS => [
            self::FIELD_ATTACK => 136,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 223,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::CHIMECHO => [
            self::FIELD_ATTACK => 175,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::ABSOL => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::ABSOL | Mods::PURIFIED => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::ABSOL | Mods::SHADOW => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::WYNAUT => [
            self::FIELD_ATTACK => 41,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::SNORUNT => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::GLALIE => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::SPHEAL => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::SEALEO => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::WALREIN => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::CLAMPERL => [
            self::FIELD_ATTACK => 133,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::HUNTAIL => [
            self::FIELD_ATTACK => 197,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::GOREBYSS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::RELICANTH => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 203,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::LUVDISC => [
            self::FIELD_ATTACK => 81,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 125,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::BAGON => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::BAGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::BAGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::SHELGON => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::SHELGON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::SHELGON | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::SALAMENCE => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SALAMENCE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SALAMENCE | Mods::SHADOW => [
            self::FIELD_ATTACK => 277,
            self::FIELD_DEFENSE => 168,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::BELDUM => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::BELDUM | Mods::PURIFIED => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::BELDUM | Mods::SHADOW => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::METANG => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::METANG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::METANG | Mods::SHADOW => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::METAGROSS => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::METAGROSS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::METAGROSS | Mods::SHADOW => [
            self::FIELD_ATTACK => 257,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::REGIROCK => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 309,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::REGICE => [
            self::FIELD_ATTACK => 179,
            self::FIELD_DEFENSE => 309,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::REGISTEEL => [
            self::FIELD_ATTACK => 143,
            self::FIELD_DEFENSE => 285,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::LATIAS => [
            self::FIELD_ATTACK => 228,
            self::FIELD_DEFENSE => 246,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::LATIOS => [
            self::FIELD_ATTACK => 268,
            self::FIELD_DEFENSE => 212,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::KYOGRE => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::GROUDON => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 228,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::RAYQUAZA => [
            self::FIELD_ATTACK => 284,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 213,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::JIRACHI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::DEOXYS => [
            self::FIELD_ATTACK => 345,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_ATTACK => [
            self::FIELD_ATTACK => 414,
            self::FIELD_DEFENSE => 46,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 330,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::DEOXYS | FormsAlias::DEOXYS_SPEED => [
            self::FIELD_ATTACK => 230,
            self::FIELD_DEFENSE => 218,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::TURTWIG => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::TURTWIG | Mods::PURIFIED => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::TURTWIG | Mods::SHADOW => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GROTLE => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::GROTLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::GROTLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 157,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TORTERRA => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::TORTERRA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::TORTERRA | Mods::SHADOW => [
            self::FIELD_ATTACK => 202,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::CHIMCHAR => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHIMCHAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::CHIMCHAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 113,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MONFERNO => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::MONFERNO | Mods::PURIFIED => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::MONFERNO | Mods::SHADOW => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::INFERNAPE => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::INFERNAPE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::INFERNAPE | Mods::SHADOW => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PILUP => [
            self::FIELD_ATTACK => 112,
            self::FIELD_DEFENSE => 102,
            self::FIELD_STAMINA => 142,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::PRINPLUP => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::EMPOLEON => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 186,
            self::FIELD_STAMINA => 197,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::STARLY => [
            self::FIELD_ATTACK => 101,
            self::FIELD_DEFENSE => 58,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::STARAVIA => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::STARAPTOR => [
            self::FIELD_ATTACK => 234,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::BIDOOF => [
            self::FIELD_ATTACK => 80,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::BIBAREL => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::KRICKETOT => [
            self::FIELD_ATTACK => 45,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 114,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::KRICKETUNE => [
            self::FIELD_ATTACK => 160,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 184,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::SHINX => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::LUXIO => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 95,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::LUXRAY => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::BUDEW => [
            self::FIELD_ATTACK => 91,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::ROSERADE => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 185,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::CRANIDOS => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 71,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::RAMPARDOS => [
            self::FIELD_ATTACK => 295,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 219,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::SHIELDON => [
            self::FIELD_ATTACK => 76,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::BASTIODON => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 286,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::BURMY => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::BURMY | FormsAlias::BURMY_SANDY => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::BURMY | FormsAlias::BURMY_TRASH => [
            self::FIELD_ATTACK => 53,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::WORMADAM => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_SANDY => [
            self::FIELD_ATTACK => 141,
            self::FIELD_DEFENSE => 180,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MOTHIM => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::COMBEE => [
            self::FIELD_ATTACK => 59,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::VESPIQUEN => [
            self::FIELD_ATTACK => 149,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::PACHIRISU => [
            self::FIELD_ATTACK => 94,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::BUZIEL => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 67,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::FLOATZEL => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::CHERUBI => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::CHERRIM => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::CHERRIM | FormsAlias::CHERRIM_OVERCAST => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SHELLOS => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SHELLOS | FormsAlias::SHELLOS_WEST_SEA => [
            self::FIELD_ATTACK => 103,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::GASTRODON => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 244,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GASTRODON | FormsAlias::GASTRODON_WEST_SEA => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 244,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::AMBIPOM => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::DRIFLOON => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DRIFBLIM => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 102,
            self::FIELD_STAMINA => 312,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::BUNEARY => [
            self::FIELD_ATTACK => 130,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::LOPUNNY => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::MISMAGIUS => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::MISMAGIUS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::MISMAGIUS | Mods::SHADOW => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HONCHKROW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::HONCHKROW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::HONCHKROW | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GLAMEOW => [
            self::FIELD_ATTACK => 109,
            self::FIELD_DEFENSE => 82,
            self::FIELD_STAMINA => 135,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PURUGLY => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::CHINGLING => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::STUNKY => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::STUNKY | Mods::PURIFIED => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::STUNKY | Mods::SHADOW => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 160,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SKUNTANK => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SKUNTANK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::SKUNTANK | Mods::SHADOW => [
            self::FIELD_ATTACK => 184,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::BRONZOR => [
            self::FIELD_ATTACK => 43,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 149,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::BRONZONG => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 213,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::BONSLY => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::MIME_JR => [
            self::FIELD_ATTACK => 125,
            self::FIELD_DEFENSE => 142,
            self::FIELD_STAMINA => 85,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::HAPPINY => [
            self::FIELD_ATTACK => 25,
            self::FIELD_DEFENSE => 77,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::CHATOT => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SPIRITOMB => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::GIBLE => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GIBLE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GIBLE | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 84,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::GABITE => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GABITE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GABITE | Mods::SHADOW => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 125,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::GARCHOMP => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GARCHOMP | Mods::PURIFIED => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::GARCHOMP | Mods::SHADOW => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 193,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MUNCHLAX => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 117,
            self::FIELD_STAMINA => 286,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RIOLU => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::LUCARIO => [
            self::FIELD_ATTACK => 236,
            self::FIELD_DEFENSE => 144,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::HIPPOPOTAS => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::HIPPOPOTAS | Mods::PURIFIED => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::HIPPOPOTAS | Mods::SHADOW => [
            self::FIELD_ATTACK => 124,
            self::FIELD_DEFENSE => 118,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::HIPPOWDON => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::HIPPOWDON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::HIPPOWDON | Mods::SHADOW => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 191,
            self::FIELD_STAMINA => 239,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SKORUPI => [
            self::FIELD_ATTACK => 93,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::BUG
        ],
        Pokemon::DRAPION => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::CROAGUNK => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 76,
            self::FIELD_STAMINA => 134,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::TOXICROAK => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 195,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::CARNIVINE => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::FINNEON => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 135,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::LUMINEON => [
            self::FIELD_ATTACK => 142,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 170,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MANTYKE => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SNOVER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::SNOVER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::SNOVER | Mods::SHADOW => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 105,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::ABOMASNOW => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::ABOMASNOW | Mods::PURIFIED => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::ABOMASNOW | Mods::SHADOW => [
            self::FIELD_ATTACK => 178,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::WEAVILE => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::WEAVILE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::WEAVILE | Mods::SHADOW => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MAGNEZONE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNEZONE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::MAGNEZONE | Mods::SHADOW => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::LICKILICKY => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 181,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RHYPERIOR => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYPERIOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::RHYPERIOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 241,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 251,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ROCK,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::TANGROWTH => [
            self::FIELD_ATTACK => 207,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::ELECTIVIRE => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELECTIVIRE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELECTIVIRE | Mods::SHADOW => [
            self::FIELD_ATTACK => 249,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MAGMORTAR => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MAGMORTAR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::MAGMORTAR | Mods::SHADOW => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::TOGEKISS => [
            self::FIELD_ATTACK => 225,
            self::FIELD_DEFENSE => 217,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::YANMEGA => [
            self::FIELD_ATTACK => 231,
            self::FIELD_DEFENSE => 156,
            self::FIELD_STAMINA => 200,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::LEAFEON => [
            self::FIELD_ATTACK => 216,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::GLACEON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::GLISCOR => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GLISCOR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::GLISCOR | Mods::SHADOW => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::MAMOSWINE => [
            self::FIELD_ATTACK => 247,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::PORYGON_Z => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON_Z | Mods::PURIFIED => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PORYGON_Z | Mods::SHADOW => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::GALLADE => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::GALLADE | Mods::PURIFIED => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::GALLADE | Mods::SHADOW => [
            self::FIELD_ATTACK => 237,
            self::FIELD_DEFENSE => 195,
            self::FIELD_STAMINA => 169,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 5,
            self::FIELD_PURIFY_STARDUST => 5000
        ],
        Pokemon::PROBOPASS => [
            self::FIELD_ATTACK => 135,
            self::FIELD_DEFENSE => 275,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::DUSKNOIR => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSKNOIR | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::DUSKNOIR | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 254,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::FROSLASS => [
            self::FIELD_ATTACK => 171,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::ROTOM => [
            self::FIELD_ATTACK => 185,
            self::FIELD_DEFENSE => 159,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_FAN => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_FROST => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::ICE
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_HEAT => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_MOW => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::ROTOM | FormsAlias::ROTOM_WASH => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 219,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::WATER
        ],
        Pokemon::UXIE => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 270,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::MESPRIT => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 212,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::AZELF => [
            self::FIELD_ATTACK => 270,
            self::FIELD_DEFENSE => 151,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::DIALGA => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::PALKIA => [
            self::FIELD_ATTACK => 280,
            self::FIELD_DEFENSE => 215,
            self::FIELD_STAMINA => 189,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::HEATRAN => [
            self::FIELD_ATTACK => 251,
            self::FIELD_DEFENSE => 213,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::REGIGIGAS => [
            self::FIELD_ATTACK => 287,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 221,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::GIRATINA => [
            self::FIELD_ATTACK => 225,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 225,
            self::FIELD_STAMINA => 284,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::DRAGON,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::CRESSELIA => [
            self::FIELD_ATTACK => 152,
            self::FIELD_DEFENSE => 258,
            self::FIELD_STAMINA => 260,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::PHIONE => [
            self::FIELD_ATTACK => 162,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::MANAPHY => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::DARKRAI => [
            self::FIELD_ATTACK => 285,
            self::FIELD_DEFENSE => 198,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::SHAYMIN => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::SHAYMIN | FormsAlias::SHAYMIN_SKY => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_BUG => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_DARK => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_DRAGON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ELECTRIC => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FAIRY => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FAIRY,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FIGHTING => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FIRE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_FLYING => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GHOST => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GRASS => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_GROUND => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ICE => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_POISON => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::POISON,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_PSYCHIC => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_ROCK => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_STEEL => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::ARCEUS | FormsAlias::ARCEUS_WATER => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 238,
            self::FIELD_STAMINA => 237,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::VICTINI => [
            self::FIELD_ATTACK => 210,
            self::FIELD_DEFENSE => 210,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::SNIVY => [
            self::FIELD_ATTACK => 88,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SERVINE => [
            self::FIELD_ATTACK => 122,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SERPERIOR => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 204,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::TEPIG => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::PIGNITE => [
            self::FIELD_ATTACK => 173,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 207,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::EMBOAR => [
            self::FIELD_ATTACK => 235,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::OSHAWOTT => [
            self::FIELD_ATTACK => 117,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::DEWOTT => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 116,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SAMUROTT => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 157,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::PATRAT => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::WATCHDOG => [
            self::FIELD_ATTACK => 165,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::LILLIPUP => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::HERDIER => [
            self::FIELD_ATTACK => 145,
            self::FIELD_DEFENSE => 126,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::STOUTLAND => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::PURROLIN => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 73,
            self::FIELD_STAMINA => 121,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::LIEPARD => [
            self::FIELD_ATTACK => 187,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 162,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::PANSAGE => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::SIMISAGE => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::PANSEAR => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::SMISEAR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::PANPOUR => [
            self::FIELD_ATTACK => 104,
            self::FIELD_DEFENSE => 94,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SMIPOUR => [
            self::FIELD_ATTACK => 206,
            self::FIELD_DEFENSE => 133,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::MUNNA => [
            self::FIELD_ATTACK => 111,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::MUSHARNA => [
            self::FIELD_ATTACK => 183,
            self::FIELD_DEFENSE => 166,
            self::FIELD_STAMINA => 253,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::PIDOVE => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::TRANQUILL => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::UNFEZANT => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::BLITZLE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 64,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ZEBSTRIKA => [
            self::FIELD_ATTACK => 211,
            self::FIELD_DEFENSE => 136,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ROGGENROLA => [
            self::FIELD_ATTACK => 121,
            self::FIELD_DEFENSE => 110,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::BOLDORE => [
            self::FIELD_ATTACK => 174,
            self::FIELD_DEFENSE => 143,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::GIGALITH => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 201,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::ROCK
        ],
        Pokemon::WOOBAT => [
            self::FIELD_ATTACK => 107,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SWOOBAT => [
            self::FIELD_ATTACK => 161,
            self::FIELD_DEFENSE => 119,
            self::FIELD_STAMINA => 167,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::DRILBUR => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 85,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND
        ],
        Pokemon::EXCADRILL => [
            self::FIELD_ATTACK => 255,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::AUDINO => [
            self::FIELD_ATTACK => 114,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 230,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::TIMBURR => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::GURDURR => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::CONKELDURR => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::TYMPOLE => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::PALPITOAD => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 109,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::SEISMITOAD => [
            self::FIELD_ATTACK => 188,
            self::FIELD_DEFENSE => 150,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GROUND
        ],
        Pokemon::THROH => [
            self::FIELD_ATTACK => 172,
            self::FIELD_DEFENSE => 160,
            self::FIELD_STAMINA => 260,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::SAWK => [
            self::FIELD_ATTACK => 231,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::SEWADDLE => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 124,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SWADLOON => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::LEVANNY => [
            self::FIELD_ATTACK => 205,
            self::FIELD_DEFENSE => 165,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::VENIPEDE => [
            self::FIELD_ATTACK => 83,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 102,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::WHIRLIPEDE => [
            self::FIELD_ATTACK => 100,
            self::FIELD_DEFENSE => 173,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::SCOLIPEDE => [
            self::FIELD_ATTACK => 203,
            self::FIELD_DEFENSE => 175,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::COTTONEE => [
            self::FIELD_ATTACK => 71,
            self::FIELD_DEFENSE => 111,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::WHIMSICOTT => [
            self::FIELD_ATTACK => 164,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FAIRY
        ],
        Pokemon::PETILIL => [
            self::FIELD_ATTACK => 119,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::LILLIGANT => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::BASCULIN => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::BASCULIN | FormsAlias::BASCULIN_RED_STRIPED => [
            self::FIELD_ATTACK => 189,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::SANDILE => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 69,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::KROKOROK => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 90,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::KROOKODILE => [
            self::FIELD_ATTACK => 229,
            self::FIELD_DEFENSE => 158,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::DARK
        ],
        Pokemon::DARUMAKA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::DARUMAKA | Mods::GALARIAN => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::DARUMAKA | Mods::PURIFIED => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::DARUMAKA | Mods::SHADOW => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 86,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::DARMANITAN => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::DARMANITAN | Mods::GALARIAN => [
            self::FIELD_ATTACK => 263,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN | Mods::GALARIAN => [
            self::FIELD_ATTACK => 323,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::ICE,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::DARMANITAN | FormsAlias::DARMANITAN_ZEN => [
            self::FIELD_ATTACK => 243,
            self::FIELD_DEFENSE => 202,
            self::FIELD_STAMINA => 233,
            self::FIELD_TYPE1 => Types::FIRE,
            self::FIELD_TYPE2 => Types::PSYCHIC
        ],
        Pokemon::MARACTUS => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::GRASS
        ],
        Pokemon::DWEBBLE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::CRUSTLE => [
            self::FIELD_ATTACK => 188,
            self::FIELD_DEFENSE => 200,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::SCRAGGY => [
            self::FIELD_ATTACK => 132,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::SCRAFTY => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 222,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FIGHTING
        ],
        Pokemon::SIGILYPH => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 167,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::PSYCHIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::YAMASK => [
            self::FIELD_ATTACK => 95,
            self::FIELD_DEFENSE => 141,
            self::FIELD_STAMINA => 116,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::COFAGRIGUS => [
            self::FIELD_ATTACK => 163,
            self::FIELD_DEFENSE => 237,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::GHOST
        ],
        Pokemon::TIRTOUGA => [
            self::FIELD_ATTACK => 134,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 144,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::CARRACOSTA => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 197,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::ROCK
        ],
        Pokemon::ARCHEN => [
            self::FIELD_ATTACK => 213,
            self::FIELD_DEFENSE => 89,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::ARCHEOPS => [
            self::FIELD_ATTACK => 292,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::TRUBBISH => [
            self::FIELD_ATTACK => 96,
            self::FIELD_DEFENSE => 122,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::GARBODOR => [
            self::FIELD_ATTACK => 181,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::POISON
        ],
        Pokemon::ZORUA => [
            self::FIELD_ATTACK => 153,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::ZOROARK => [
            self::FIELD_ATTACK => 250,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::DARK
        ],
        Pokemon::MINCCINO => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 80,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::CINCCINO => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::GOTHITA => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 112,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::GOTHORITA => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 153,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::GOTHITELLE => [
            self::FIELD_ATTACK => 176,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::SOLOSIS => [
            self::FIELD_ATTACK => 170,
            self::FIELD_DEFENSE => 83,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::DUOSION => [
            self::FIELD_ATTACK => 208,
            self::FIELD_DEFENSE => 103,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::REUNICLUS => [
            self::FIELD_ATTACK => 214,
            self::FIELD_DEFENSE => 148,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::DUCKLETT => [
            self::FIELD_ATTACK => 84,
            self::FIELD_DEFENSE => 96,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::SWANNA => [
            self::FIELD_ATTACK => 182,
            self::FIELD_DEFENSE => 132,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::VANILLITE => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 106,
            self::FIELD_STAMINA => 113,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::VANILLISH => [
            self::FIELD_ATTACK => 151,
            self::FIELD_DEFENSE => 138,
            self::FIELD_STAMINA => 139,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::VANILLUXE => [
            self::FIELD_ATTACK => 218,
            self::FIELD_DEFENSE => 184,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::DEERLING => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_AUTUMN => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_SUMMER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::DEERLING | FormsAlias::DEERLING_WINTER => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SAWSBUCK => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_AUTUMN => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_SUMMER => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::SAWSBUCK | FormsAlias::SAWSBUCK_WINTER => [
            self::FIELD_ATTACK => 198,
            self::FIELD_DEFENSE => 146,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::GRASS
        ],
        Pokemon::EMOLGA => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::KARRABLAST => [
            self::FIELD_ATTACK => 137,
            self::FIELD_DEFENSE => 87,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::ESCAVALIER => [
            self::FIELD_ATTACK => 223,
            self::FIELD_DEFENSE => 187,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::FOONGUS => [
            self::FIELD_ATTACK => 97,
            self::FIELD_DEFENSE => 91,
            self::FIELD_STAMINA => 170,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::AMOONGUSS => [
            self::FIELD_ATTACK => 155,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 249,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::POISON
        ],
        Pokemon::FRILLISH => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::FRILLISH | FormsAlias::FRILLISH_FEMALE => [
            self::FIELD_ATTACK => 115,
            self::FIELD_DEFENSE => 134,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::JELLICENT => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::JELLICENT | FormsAlias::JELLICENT_FEMALE => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 178,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::ALOMOMOLA => [
            self::FIELD_ATTACK => 138,
            self::FIELD_DEFENSE => 131,
            self::FIELD_STAMINA => 338,
            self::FIELD_TYPE1 => Types::WATER
        ],
        Pokemon::JOLTIK => [
            self::FIELD_ATTACK => 110,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::GALVANTULA => [
            self::FIELD_ATTACK => 201,
            self::FIELD_DEFENSE => 128,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::FERROSEED => [
            self::FIELD_ATTACK => 82,
            self::FIELD_DEFENSE => 155,
            self::FIELD_STAMINA => 127,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::FERROTHORN => [
            self::FIELD_ATTACK => 158,
            self::FIELD_DEFENSE => 223,
            self::FIELD_STAMINA => 179,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::KLINK => [
            self::FIELD_ATTACK => 98,
            self::FIELD_DEFENSE => 121,
            self::FIELD_STAMINA => 120,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::KLANG => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 174,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::KLINKLANG => [
            self::FIELD_ATTACK => 199,
            self::FIELD_DEFENSE => 214,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::TYNAMO => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 78,
            self::FIELD_STAMINA => 111,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELEKTRIK => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 130,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELEKTROSS => [
            self::FIELD_ATTACK => 217,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::ELECTRIC
        ],
        Pokemon::ELGYEM => [
            self::FIELD_ATTACK => 148,
            self::FIELD_DEFENSE => 100,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::BEHEEYEM => [
            self::FIELD_ATTACK => 221,
            self::FIELD_DEFENSE => 163,
            self::FIELD_STAMINA => 181,
            self::FIELD_TYPE1 => Types::PSYCHIC
        ],
        Pokemon::LITWICK => [
            self::FIELD_ATTACK => 108,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::LAMPENT => [
            self::FIELD_ATTACK => 169,
            self::FIELD_DEFENSE => 115,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::CHANDELURE => [
            self::FIELD_ATTACK => 271,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 155,
            self::FIELD_TYPE1 => Types::GHOST,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::AXEW => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 101,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::FRAXURE => [
            self::FIELD_ATTACK => 212,
            self::FIELD_DEFENSE => 123,
            self::FIELD_STAMINA => 165,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::HAXORUS => [
            self::FIELD_ATTACK => 284,
            self::FIELD_DEFENSE => 172,
            self::FIELD_STAMINA => 183,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::CUBCHOO => [
            self::FIELD_ATTACK => 128,
            self::FIELD_DEFENSE => 74,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::BEARTIC => [
            self::FIELD_ATTACK => 233,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::CRYOGONAL => [
            self::FIELD_ATTACK => 190,
            self::FIELD_DEFENSE => 218,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::ICE
        ],
        Pokemon::SHELMET => [
            self::FIELD_ATTACK => 72,
            self::FIELD_DEFENSE => 140,
            self::FIELD_STAMINA => 137,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::ACCELGOR => [
            self::FIELD_ATTACK => 220,
            self::FIELD_DEFENSE => 120,
            self::FIELD_STAMINA => 190,
            self::FIELD_TYPE1 => Types::BUG
        ],
        Pokemon::STUNFISK => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::STUNFISK | Mods::GALARIAN => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::STUNFISK | Mods::PURIFIED => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC
        ],
        Pokemon::STUNFISK | Mods::SHADOW => [
            self::FIELD_ATTACK => 144,
            self::FIELD_DEFENSE => 171,
            self::FIELD_STAMINA => 240,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::MIENFOO => [
            self::FIELD_ATTACK => 160,
            self::FIELD_DEFENSE => 98,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::MIENSHAO => [
            self::FIELD_ATTACK => 258,
            self::FIELD_DEFENSE => 127,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::DRUDDIGON => [
            self::FIELD_ATTACK => 213,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 184,
            self::FIELD_TYPE1 => Types::DRAGON
        ],
        Pokemon::GOLETT => [
            self::FIELD_ATTACK => 127,
            self::FIELD_DEFENSE => 92,
            self::FIELD_STAMINA => 153,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::GOLURK => [
            self::FIELD_ATTACK => 222,
            self::FIELD_DEFENSE => 154,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::GHOST
        ],
        Pokemon::PAWNIARD => [
            self::FIELD_ATTACK => 154,
            self::FIELD_DEFENSE => 114,
            self::FIELD_STAMINA => 128,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::BISHARP => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 163,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::BOUFFALANT => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 216,
            self::FIELD_TYPE1 => Types::NORMAL
        ],
        Pokemon::RUFFLET => [
            self::FIELD_ATTACK => 150,
            self::FIELD_DEFENSE => 97,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::BRAVIARY => [
            self::FIELD_ATTACK => 232,
            self::FIELD_DEFENSE => 152,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::VULLABY => [
            self::FIELD_ATTACK => 105,
            self::FIELD_DEFENSE => 139,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::MANDIBUZZ => [
            self::FIELD_ATTACK => 129,
            self::FIELD_DEFENSE => 205,
            self::FIELD_STAMINA => 242,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::FLYING
        ],
        Pokemon::HEATMOR => [
            self::FIELD_ATTACK => 204,
            self::FIELD_DEFENSE => 129,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::FIRE
        ],
        Pokemon::DURANT => [
            self::FIELD_ATTACK => 217,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 151,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL
        ],
        Pokemon::DEINO => [
            self::FIELD_ATTACK => 116,
            self::FIELD_DEFENSE => 93,
            self::FIELD_STAMINA => 141,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::ZWELIOUS => [
            self::FIELD_ATTACK => 159,
            self::FIELD_DEFENSE => 135,
            self::FIELD_STAMINA => 176,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::HYDREIGON => [
            self::FIELD_ATTACK => 256,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 211,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::DRAGON
        ],
        Pokemon::LARVESTA => [
            self::FIELD_ATTACK => 156,
            self::FIELD_DEFENSE => 107,
            self::FIELD_STAMINA => 146,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::VOLCARONA => [
            self::FIELD_ATTACK => 264,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 198,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::FIRE
        ],
        Pokemon::COBALLION => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::TERRAKION => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::ROCK,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::VIRIZION => [
            self::FIELD_ATTACK => 192,
            self::FIELD_DEFENSE => 229,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::GRASS,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::TORNADUS => [
            self::FIELD_ATTACK => 266,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::TORNADUS | FormsAlias::TORNADUS_THERIAN => [
            self::FIELD_ATTACK => 238,
            self::FIELD_DEFENSE => 189,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::THUNDURUS => [
            self::FIELD_ATTACK => 266,
            self::FIELD_DEFENSE => 164,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::THUNDURUS | FormsAlias::THUNDURUS_THERIAN => [
            self::FIELD_ATTACK => 295,
            self::FIELD_DEFENSE => 161,
            self::FIELD_STAMINA => 188,
            self::FIELD_TYPE1 => Types::ELECTRIC,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::RESHIRAM => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::FIRE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::ZEKROM => [
            self::FIELD_ATTACK => 275,
            self::FIELD_DEFENSE => 211,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ELECTRIC,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::LANDORUS => [
            self::FIELD_ATTACK => 261,
            self::FIELD_DEFENSE => 182,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN => [
            self::FIELD_ATTACK => 289,
            self::FIELD_DEFENSE => 179,
            self::FIELD_STAMINA => 205,
            self::FIELD_TYPE1 => Types::GROUND,
            self::FIELD_TYPE2 => Types::FLYING,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::KYUREM => [
            self::FIELD_ATTACK => 246,
            self::FIELD_DEFENSE => 170,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::KYUREM | FormsAlias::KYUREM_BLACK => [
            self::FIELD_ATTACK => 310,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::KYUREM | FormsAlias::KYUREM_WHITE => [
            self::FIELD_ATTACK => 310,
            self::FIELD_DEFENSE => 183,
            self::FIELD_STAMINA => 245,
            self::FIELD_TYPE1 => Types::DRAGON,
            self::FIELD_TYPE2 => Types::ICE,
            self::FIELD_LEGENDARY => true
        ],
        Pokemon::KELDEO => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::KELDEO | FormsAlias::KELDEO_RESOLUTE => [
            self::FIELD_ATTACK => 260,
            self::FIELD_DEFENSE => 192,
            self::FIELD_STAMINA => 209,
            self::FIELD_TYPE1 => Types::WATER,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::MELOETTA => [
            self::FIELD_ATTACK => 250,
            self::FIELD_DEFENSE => 225,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::PSYCHIC,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::MELOETTA | FormsAlias::MELOETTA_PIROUETTE => [
            self::FIELD_ATTACK => 269,
            self::FIELD_DEFENSE => 188,
            self::FIELD_STAMINA => 225,
            self::FIELD_TYPE1 => Types::NORMAL,
            self::FIELD_TYPE2 => Types::FIGHTING,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::GENESECT => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_BURN => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_CHILL => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_DOUSE => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::GENESECT | FormsAlias::GENESECT_SHOCK => [
            self::FIELD_ATTACK => 252,
            self::FIELD_DEFENSE => 199,
            self::FIELD_STAMINA => 174,
            self::FIELD_TYPE1 => Types::BUG,
            self::FIELD_TYPE2 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::MELTAN => [
            self::FIELD_ATTACK => 118,
            self::FIELD_DEFENSE => 99,
            self::FIELD_STAMINA => 130,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::MELMETAL => [
            self::FIELD_ATTACK => 226,
            self::FIELD_DEFENSE => 190,
            self::FIELD_STAMINA => 264,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_MYTHIC => true
        ],
        Pokemon::OBSTAGOON => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::OBSTAGOON | Mods::PURIFIED => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL
        ],
        Pokemon::OBSTAGOON | Mods::SHADOW => [
            self::FIELD_ATTACK => 180,
            self::FIELD_DEFENSE => 194,
            self::FIELD_STAMINA => 212,
            self::FIELD_TYPE1 => Types::DARK,
            self::FIELD_TYPE2 => Types::NORMAL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::PERRSERKER => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::PERRSERKER | Mods::PURIFIED => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL
        ],
        Pokemon::PERRSERKER | Mods::SHADOW => [
            self::FIELD_ATTACK => 195,
            self::FIELD_DEFENSE => 162,
            self::FIELD_STAMINA => 172,
            self::FIELD_TYPE1 => Types::STEEL,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ],
        Pokemon::SIRFETCH_D => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::SIRFETCH_D | Mods::PURIFIED => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING
        ],
        Pokemon::SIRFETCH_D | Mods::SHADOW => [
            self::FIELD_ATTACK => 248,
            self::FIELD_DEFENSE => 176,
            self::FIELD_STAMINA => 158,
            self::FIELD_TYPE1 => Types::FIGHTING,
            self::FIELD_PURIFY_CANDY => 3,
            self::FIELD_PURIFY_STARDUST => 3000
        ]    
    ];
} 