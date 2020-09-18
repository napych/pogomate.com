<?php

namespace Pogo\Lists\Gamepress;

use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class Defenders
{
    const DESCRIPTION = 'GamePress Defenders';

    const TIERS = [
        'Tier 1' => [
            Pokemon::BLISSEY
        ],
        'Tier 2' => [
            Pokemon::DRAGONITE,
            Pokemon::METAGROSS,
            Pokemon::MILOTIC,
            Pokemon::DRAGONITE | Mods::SHADOW
        ],
        'Tier 2.5' => [
            Pokemon::EXEGGUTOR,
            Pokemon::FERROTHORN,
            Pokemon::GYARADOS,
            Pokemon::HYPNO,
            Pokemon::SLOWBRO,
            Pokemon::SLOWKING,
            Pokemon::STEELIX
        ],
        'Tier 3' => [
            Pokemon::CHANSEY,
            Pokemon::MELMETAL,
            Pokemon::SLAKING,
            Pokemon::SNORLAX
        ],
        'Tier 3.5' => [
            Pokemon::CHARIZARD,
            Pokemon::CLAYDOL,
            Pokemon::DONPHAN,
            Pokemon::EMPOLEON,
            Pokemon::GARDEVOIR,
            Pokemon::TOGEKISS
        ]
    ];
}
