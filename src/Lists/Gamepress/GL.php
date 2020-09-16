<?php

namespace Pogo\Lists\Gamepress {

    use Pogo\General\Mods;
    use Pogo\Pokemon;

    class GL
    {
        const DESCRIPTION = 'GamePress Greater League';

        const TIERS = [
            'Tier 1' => [
                Pokemon::AZUMARILL,
                Pokemon::SKARMORY,
                Pokemon::ALTARIA,
                Pokemon::STUNFISK | Mods::GALARIAN
            ],
            'Tier 1.5' => [
                Pokemon::VENUSAUR,
                Pokemon::BASTIODON,
                Pokemon::TROPIUS,
                Pokemon::SABLEYE,
                Pokemon::SWAMPERT,
                Pokemon::UMBREON,
                Pokemon::REGISTEEL,
                Pokemon::MEGANIUM,
                Pokemon::DEOXYS | Mods::FORM3,
                Pokemon::HYPNO,
            ],
            'Tier 2' => [
                Pokemon::MAROWAK | Mods::ALOLAN,
                Pokemon::RAICHU | Mods::ALOLAN,
                Pokemon::PROBOPASS,
                Pokemon::ABOMASNOW,
                Pokemon::MELMETAL,
                Pokemon::TOXICROAK,
                Pokemon::DRIFBLIM,
                Pokemon::STUNFISK,
                Pokemon::CRESSELIA,
                Pokemon::WHISCASH,
                Pokemon::JIRACHI,
                Pokemon::DEWGONG,
                Pokemon::MEDICHAM,
                Pokemon::VIGOROTH,
                Pokemon::SHIFTRY,
                Pokemon::QUAGSIRE,
                Pokemon::LANTURN,
                Pokemon::MEW,
                Pokemon::LAPRAS,
                Pokemon::GENGAR,
                Pokemon::HAUNTER,
                Pokemon::ZWELIOUS,
            ],
            'Tier 2.5' => [
                Pokemon::IVYSAUR,
                Pokemon::UXIE,
                Pokemon::SKUNTANK,
                Pokemon::BRONZONG,
                Pokemon::MUNCHLAX,
                Pokemon::TOGEKISS,
                Pokemon::GALLADE,
                Pokemon::FROSLASS,
                Pokemon::NINETALES | Mods::ALOLAN,
                Pokemon::MAWILE,
                Pokemon::MUK | Mods::ALOLAN,
                Pokemon::WORMADAM | Mods::FORM2,
                Pokemon::SCRAFTY,
                Pokemon::GALVANTULA,
                Pokemon::FERROTHORN,
                Pokemon::SIRFETCH_D,
                Pokemon::IVYSAUR | Mods::SHADOW,
                Pokemon::CHARIZARD,
                Pokemon::MACHAMP | Mods::SHADOW,
                Pokemon::MANTINE,
                Pokemon::NOCTOWL,
                Pokemon::JUMPLUFF,
                Pokemon::CLEFABLE,
                Pokemon::WIGGLYTUFF,
                Pokemon::VICTREEBEL,
            ]
        ];
    }
}
