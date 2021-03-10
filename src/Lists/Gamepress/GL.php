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
                Pokemon::VENUSAUR | Mods::SHADOW,
                Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE,
                Pokemon::BASTIODON,
                Pokemon::REGISTEEL,
                Pokemon::TROPIUS,
                Pokemon::SABLEYE,
                Pokemon::SWAMPERT | Mods::SHADOW,
                Pokemon::UMBREON,
                Pokemon::SWAMPERT,
                Pokemon::MEGANIUM,
                Pokemon::HYPNO | Mods::SHADOW,
                Pokemon::HYPNO,
            ],
            'Tier 2' => [
                Pokemon::VICTREEBEL | Mods::SHADOW,
                Pokemon::MAROWAK | Mods::ALOLAN,
                Pokemon::SIRFETCH_D,
                Pokemon::ZWELIOUS,
                Pokemon::MANDIBUZZ,
                Pokemon::STUNFISK,
                Pokemon::POLITOED | Mods::SHADOW,
                Pokemon::ABOMASNOW | Mods::SHADOW,
                Pokemon::GALVANTULA,
                Pokemon::JELLICENT,
                Pokemon::DIGGERSBY,
                Pokemon::RAICHU | Mods::ALOLAN,
                Pokemon::DRIFBLIM,
                Pokemon::NINETALES | Mods::ALOLAN,
                Pokemon::POLITOED,
                Pokemon::HAUNTER,
                Pokemon::GENGAR,
                Pokemon::LICKITUNG,
                Pokemon::LAPRAS,
                Pokemon::MEW,
                Pokemon::LANTURN,
                Pokemon::SHIFTRY,
                Pokemon::PROBOPASS,
                Pokemon::VIGOROTH,
                Pokemon::MEDICHAM,
                Pokemon::WHISCASH,
                Pokemon::DEWGONG,
                Pokemon::TOXICROAK,
                Pokemon::ABOMASNOW,
                Pokemon::PROBOPASS | Mods::SHADOW,
            ],
            'Tier 2.5' => [
                Pokemon::IVYSAUR,
                Pokemon::JIRACHI,
                Pokemon::FROSLASS,
                Pokemon::FERROTHORN,
                Pokemon::SCRAFTY,
                Pokemon::PELIPPER,
                Pokemon::MAWILE,
                Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH,
                Pokemon::MELMETAL,
                Pokemon::MANTINE,
                Pokemon::SKUNTANK,
                Pokemon::BRONZONG,
                Pokemon::MUNCHLAX,
                Pokemon::MUK | Mods::ALOLAN,
                Pokemon::CRESSELIA,
                Pokemon::TOGEKISS,
                Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY,
                Pokemon::GALLADE,
                Pokemon::VICTREEBEL,
                Pokemon::QUAGSIRE,
                Pokemon::QUAGSIRE | Mods::SHADOW,
                Pokemon::JUMPLUFF,
                Pokemon::MACHAMP | Mods::SHADOW,
                Pokemon::CLEFABLE,
                Pokemon::NOCTOWL,
                Pokemon::WIGGLYTUFF,
                Pokemon::IVYSAUR | Mods::SHADOW,
                Pokemon::PRIMEAPE,
                Pokemon::MAWILE | Mods::SHADOW,
            ]
        ];
    }
}
