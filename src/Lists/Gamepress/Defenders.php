<?php

namespace Pogo\Lists\Gamepress;

use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class Defenders
{
    const DESCRIPTION = 'GamePress Defenders';

    const TIERS = [
        'Tier 1' => [
            Pokemon::BLISSEY,
            Pokemon::METAGROSS,
        ],
        'Tier 2' => [
            Pokemon::SNORLAX,
            Pokemon::DRIFBLIM,
            Pokemon::MILOTIC,
        ],
        'Tier 3' => [
            Pokemon::GYARADOS,
            Pokemon::GARCHOMP,
            Pokemon::DRAGONITE,
            Pokemon::TYRANITAR,
            Pokemon::GARDEVOIR,
        ],
        'Tier 4' => [
            Pokemon::CONKELDURR,
            Pokemon::MAGNEZONE,
            Pokemon::VENUSAUR,
            Pokemon::AZUMARILL,
            Pokemon::ESCAVALIER,
            Pokemon::SALAMENCE,
            Pokemon::SWAMPERT,
            Pokemon::MELMETAL,
            Pokemon::CHANSEY,
        ],
        'Tier 5' => [
            Pokemon::BLASTOISE,
            Pokemon::STEELIX,
            Pokemon::BASTIODON,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::RHYPERIOR,
            Pokemon::SLAKING,
        ]
    ];
}
