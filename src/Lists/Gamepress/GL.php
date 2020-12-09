<?php

namespace Pogo\Lists\Gamepress {

    use Pogo\Data\Manual\FormsAlias;
    use Pogo\Pokemon\Mods;
    use Pogo\Pokemon;

    class GL
    {
        const DESCRIPTION = 'GamePress Greater League';

        const TIERS = [
            'Tier 1' => [
                Pokemon::AZUMARILL,
                Pokemon::SKARMORY,
                Pokemon::ALTARIA,
                Pokemon::STUNFISK | Mods::GALARIAN,
                Pokemon::SKARMORY | Mods::SHADOW
            ],
            'Tier 1.5' => [
                Pokemon::VENUSAUR,
                Pokemon::UMBREON,
                Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE,
                Pokemon::BASTIODON,
                Pokemon::TROPIUS,
                Pokemon::SABLEYE,
                Pokemon::SWAMPERT,
                Pokemon::REGISTEEL,
                Pokemon::MEGANIUM,
                Pokemon::HYPNO,
            ],
            'Tier 2' => [
                Pokemon::LANTURN,
                Pokemon::PROBOPASS,
                Pokemon::SIRFETCH_D,
                Pokemon::VICTREEBEL | Mods::SHADOW,
                Pokemon::ZWELIOUS,
                Pokemon::MANDIBUZZ,
                Pokemon::STUNFISK,
                Pokemon::MELMETAL,
                Pokemon::HAUNTER,
                Pokemon::RAICHU | Mods::ALOLAN,
                Pokemon::MAROWAK | Mods::ALOLAN,
                Pokemon::CRESSELIA,
                Pokemon::TOXICROAK,
                Pokemon::ABOMASNOW,
                Pokemon::QUAGSIRE,
                Pokemon::DRIFBLIM,
                Pokemon::GENGAR,
                Pokemon::JIRACHI,
                Pokemon::DEWGONG,
                Pokemon::WHISCASH,
                Pokemon::MEDICHAM,
                Pokemon::LAPRAS,
                Pokemon::VIGOROTH,
                Pokemon::SHIFTRY,
                Pokemon::MEW,
                Pokemon::DIGGERSBY,
            ],
            'Tier 2.5' => [
                Pokemon::IVYSAUR,
                Pokemon::MAWILE,
                Pokemon::MACHAMP | Mods::SHADOW,
                Pokemon::IVYSAUR | Mods::SHADOW,
                Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY,
                Pokemon::FERROTHORN,
                Pokemon::GALVANTULA,
                Pokemon::SCRAFTY,
                Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH,
                Pokemon::MUK | Mods::ALOLAN,
                Pokemon::NINETALES | Mods::ALOLAN,
                Pokemon::FROSLASS,
                Pokemon::GALLADE,
                Pokemon::TOGEKISS,
                Pokemon::MUNCHLAX,
                Pokemon::BRONZONG,
                Pokemon::SKUNTANK,
                Pokemon::JUMPLUFF | Mods::SHADOW,
                Pokemon::CLEFABLE,
                Pokemon::NOCTOWL,
                Pokemon::JUMPLUFF,
                Pokemon::VICTREEBEL,
                Pokemon::MANTINE,
                Pokemon::WIGGLYTUFF,
            ]
        ];
    }
}
