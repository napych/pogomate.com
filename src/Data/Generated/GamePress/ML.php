<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class ML {
    const DESCRIPTION = 'GamePress Master League';
    
    const TIERS = [
        'Tier 1' => [
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL,
            Pokemon::DIALGA,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ORIGIN,
            Pokemon::ZACIAN | FormsAlias::ZACIAN_HERO,
        ],
        'Tier 1.5' => [
            Pokemon::LUGIA,
            Pokemon::KYOGRE,
            Pokemon::GROUDON,
            Pokemon::GIRATINA | FormsAlias::GIRATINA_ALTERED,
            Pokemon::TOGEKISS,
            Pokemon::MELMETAL,
        ],
        'Tier 2' => [
            Pokemon::SNORLAX,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_INCARNATE,
            Pokemon::MAMOSWINE | Mods::SHADOW,
            Pokemon::DRAGONITE | Mods::SHADOW,
            Pokemon::MEWTWO | FormsAlias::MEWTWO_NORMAL | Mods::SHADOW,
            Pokemon::YVELTAL,
            Pokemon::SNORLAX | Mods::SHADOW,
            Pokemon::LANDORUS | FormsAlias::LANDORUS_THERIAN,
            Pokemon::MAMOSWINE,
            Pokemon::ZEKROM,
            Pokemon::EXCADRILL,
            Pokemon::DRAGONITE,
            Pokemon::GARCHOMP,
            Pokemon::PALKIA,
            Pokemon::METAGROSS,
            Pokemon::HO_OH,
            Pokemon::ZARUDE,
        ],
        'Tier 2.5' => [
            Pokemon::ZAMAZENTA | FormsAlias::ZAMAZENTA_HERO,
            Pokemon::LATIOS,
            Pokemon::METAGROSS | Mods::SHADOW,
            Pokemon::MELOETTA | FormsAlias::MELOETTA_ARIA,
            Pokemon::RESHIRAM,
            Pokemon::GARDEVOIR | Mods::SHADOW,
            Pokemon::GYARADOS,
            Pokemon::GYARADOS | Mods::SHADOW,
            Pokemon::MAGNEZONE | Mods::SHADOW,
            Pokemon::SYLVEON,
            Pokemon::RHYPERIOR,
            Pokemon::MAGNEZONE,
            Pokemon::TYRANITAR | Mods::SHADOW,
            Pokemon::ZAPDOS | Mods::SHADOW,
            Pokemon::REGICE,
            Pokemon::RAIKOU,
            Pokemon::WALREIN,
            Pokemon::HO_OH | Mods::SHADOW,
            Pokemon::ZAPDOS,
            Pokemon::MEW,
            Pokemon::WALREIN | Mods::SHADOW,
            Pokemon::REGIROCK,
            Pokemon::SUICUNE,
        ],
    ];
}