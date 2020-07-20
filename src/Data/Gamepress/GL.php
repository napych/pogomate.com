<?php

namespace Pogo\Data\Gamepress {

    use Pogo\Data\Mods;
    use Pogo\Pokemon;

    class GL
    {
        const DESCRIPTION = 'GamePress Greater League';
        const RANKS = [
            'Tier 1' => [
                Pokemon::AZUMARILL,
                Pokemon::SKARMORY,
                Pokemon::ALTARIA,
                Pokemon::REGISTEEL
            ],
            'Tier 1.5' => [
                Pokemon::VENUSAUR,
                Pokemon::UMBREON,
                Pokemon::DEOXYS | Mods::FORM3,
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
                Pokemon::RAICHU | Mods::ALOLAN,
                Pokemon::MAROWAK | Mods::ALOLAN,
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
            ],
            'Tier 2.5' => [
                Pokemon::IVYSAUR,
                Pokemon::GALLADE,
                Pokemon::REGICE,
                Pokemon::CHARIZARD,
                Pokemon::SKUNTANK,
                Pokemon::BRONZONG,
                Pokemon::MUNCHLAX,
                Pokemon::TOGEKISS,
                Pokemon::UXIE,
                Pokemon::MAWILE,
                Pokemon::NINETALES | Mods::ALOLAN,
                Pokemon::MUK | Mods::ALOLAN,
                Pokemon::WORMADAM,
                Pokemon::SCRAFTY,
                Pokemon::GALVANTULA,
                Pokemon::FERROTHORN,
                Pokemon::SIRFETCH_D,
                Pokemon::REGIROCK,
                Pokemon::IVYSAUR | Mods::SHADOW,
                Pokemon::VICTREEBEL,
                Pokemon::CLEFABLE,
                Pokemon::MANTINE,
                Pokemon::WIGGLYTUFF,
                Pokemon::NOCTOWL
            ]
        ];
    }
}