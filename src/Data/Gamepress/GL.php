<?php

namespace Pogo\Data\Gamepress {

    use Pogo\Data\Pokemons;

    class GL
    {
        const DESCRIPTION = 'GamePress Greater League';
        const RANKS = [
            'Tier 1' => [Pokemons::AZUMARILL, Pokemons::SKARMORY, Pokemons::ALTARIA, Pokemons::REGISTEEL],
            'Tier 1.5' => [
                Pokemons::VENUSAUR,
                Pokemons::UMBREON,
                Pokemons::DEOXYS,
                Pokemons::PROBOPASS,
                Pokemons::BASTIODON,
                Pokemons::TROPIUS,
                Pokemons::SABLEYE,
                Pokemons::SWAMPERT,
                Pokemons::MEDICHAM,
                Pokemons::STUNFISK,
                Pokemons::HYPNO,
                Pokemons::MEGANIUM
            ],
            'Tier 2' => [
                Pokemons::ZWELIOUS,
                Pokemons::STUNFISK,
                Pokemons::MELMETAL,
                Pokemons::HAUNTER,
                Pokemons::RAICHU,
                Pokemons::MAROWAK,
                Pokemons::CRESSELIA,
                Pokemons::QUAGSIRE,
                Pokemons::TOXICROAK,
                Pokemons::JUMPLUFF,
                Pokemons::JIRACHI,
                Pokemons::MEW,
                Pokemons::WHISCASH,
                Pokemons::DEWGONG,
                Pokemons::VIGOROTH,
                Pokemons::SHIFTRY,
                Pokemons::LANTURN,
                Pokemons::LAPRAS
            ]
        ];
    }
}