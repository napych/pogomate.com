<?php

namespace Pogo\Data\Gamepress {

    use Pogo\Data\Pokemon;

    class GL
    {
        const DESCRIPTION = 'GamePress Greater League';
        const RANKS = [
            'Tier 1' => [Pokemon::AZUMARILL, Pokemon::SKARMORY, Pokemon::ALTARIA, Pokemon::REGISTEEL],
            'Tier 1.5' => [
                Pokemon::VENUSAUR,
                Pokemon::UMBREON,
                Pokemon::DEOXYS,
                Pokemon::PROBOPASS,
                Pokemon::BASTIODON,
                Pokemon::TROPIUS,
                Pokemon::SABLEYE,
                Pokemon::SWAMPERT,
                Pokemon::MEDICHAM,
                Pokemon::STUNFISK,
                Pokemon::HYPNO,
                Pokemon::MEGANIUM
            ],
            'Tier 2' => [
                Pokemon::ZWELIOUS,
                Pokemon::STUNFISK,
                Pokemon::MELMETAL,
                Pokemon::HAUNTER,
                Pokemon::RAICHU,
                Pokemon::MAROWAK,
                Pokemon::CRESSELIA,
                Pokemon::QUAGSIRE,
                Pokemon::TOXICROAK,
                Pokemon::JUMPLUFF,
                Pokemon::JIRACHI,
                Pokemon::MEW,
                Pokemon::WHISCASH,
                Pokemon::DEWGONG,
                Pokemon::VIGOROTH,
                Pokemon::SHIFTRY,
                Pokemon::LANTURN,
                Pokemon::LAPRAS
            ]
        ];
    }
}