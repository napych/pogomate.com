<?php

namespace Pogo\Data\Manual;

use Pogo\General\Mods;

class FormsAlias
{
    const MEWTWO_NORMAL = Mods::FORM1;
    const MEWTWO_ARMORED = Mods::FORM2;
    const CASTFORM_NORMAL = Mods::FORM1;
    const CASTFORM_RAINY = Mods::FORM2;
    const CASTFORM_SNOWY = Mods::FORM3;
    const CASTFORM_SUNNY = Mods::FORM4;
    const DEOXYS_NORMAL = Mods::FORM1;
    const DEOXYS_ATTACK = Mods::FORM2;
    const DEOXYS_DEFENSE = Mods::FORM3;
    const DEOXYS_SPEED = Mods::FORM4;
    const BURMY_PLANT = Mods::FORM1;
    const BURMY_TRASH = Mods::FORM2;
    const BURMY_SANDY = Mods::FORM3;
    const WORMADAM_PLANT = Mods::FORM1;
    const WORMADAM_TRASH = Mods::FORM2;
    const WORMADAM_SANDY = Mods::FORM3;
    const CHERRIM_SUNNY = Mods::FORM1;
    const CHERRIM_OVERCAST = Mods::FORM2;
    const GIRATINA_ORIGIN = Mods::FORM1;
    const GIRATINA_ALTERED = Mods::FORM2;
    const ROTOM_NORMAL = Mods::FORM1;
    const ROTOM_FAN = Mods::FORM2;
    const ROTOM_FROST = Mods::FORM3;
    const ROTOM_HEAT = Mods::FORM4;
    const ROTOM_MOW = Mods::FORM5;
    const ROTOM_WASH = Mods::FORM6;
    const SHELLOS_EAST_SEA = Mods::FORM1;
    const SHELLOS_WEST_SEA = Mods::FORM2;
    const GASTRODON_EAST_SEA = Mods::FORM1;
    const GASTRODON_WEST_SEA = Mods::FORM2;
    const SHAYMIN_LAND = Mods::FORM1;
    const SHAYMIN_SKY = Mods::FORM2;
    const ARCEUS_NORMAL = Mods::FORM1;
    const ARCEUS_BUG = Mods::FORM2;
    const ARCEUS_DARK = Mods::FORM3;
    const ARCEUS_DRAGON = Mods::FORM4;
    const ARCEUS_ELECTRIC = Mods::FORM5;
    const ARCEUS_FAIRY = Mods::FORM6;
    const ARCEUS_FIGHTING = Mods::FORM7;
    const ARCEUS_FIRE = Mods::FORM8;
    const ARCEUS_FLYING = Mods::FORM9;
    const ARCEUS_GHOST = Mods::FORM10;
    const ARCEUS_GRASS = Mods::FORM11;
    const ARCEUS_GROUND = Mods::FORM12;
    const ARCEUS_ICE = Mods::FORM13;
    const ARCEUS_POISON = Mods::FORM14;
    const ARCEUS_PSYCHIC = Mods::FORM15;
    const ARCEUS_ROCK = Mods::FORM16;
    const ARCEUS_STEEL = Mods::FORM17;
    const ARCEUS_WATER = Mods::FORM18;
    const BASCULIN_BLUE_STRIPED = Mods::FORM1;
    const BASCULIN_RED_STRIPED = Mods::FORM2;
    const DARMANITAN_STANDARD = Mods::FORM1;
    const DARMANITAN_ZEN = Mods::FORM2;
    const KYUREM_NORMAL = Mods::FORM1;
    const KYUREM_BLACK = Mods::FORM2;
    const KYUREM_WHITE = Mods::FORM3;
    const DEERLING_SPRING = Mods::FORM1;
    const DEERLING_SUMMER = Mods::FORM2;
    const DEERLING_AUTUMN = Mods::FORM3;
    const DEERLING_WINTER = Mods::FORM4;
    const SAWSBUCK_SPRING = Mods::FORM1;
    const SAWSBUCK_SUMMER = Mods::FORM2;
    const SAWSBUCK_AUTUMN = Mods::FORM3;
    const SAWSBUCK_WINTER = Mods::FORM4;
    const FRILLISH_MALE = Mods::FORM1;
    const FRILLISH_FEMALE = Mods::FORM2;
    const JELLICENT_MALE = Mods::FORM1;
    const JELLICENT_FEMALE = Mods::FORM2;
    const TORNADUS_INCARNATE = Mods::FORM1;
    const TORNADUS_THERIAN = Mods::FORM2;
    const THUNDURUS_INCARNATE = Mods::FORM1;
    const THUNDURUS_THERIAN = Mods::FORM2;
    const LANDORUS_INCARNATE = Mods::FORM1;
    const LANDORUS_THERIAN = Mods::FORM2;
    const KELDEO_ORDINARY = Mods::FORM1;
    const KELDEO_RESOLUTE = Mods::FORM2;
    const MELOETTA_ARIA = Mods::FORM1;
    const MELOETTA_PIROUETTE = Mods::FORM2;
    const GENESECT_NORMAL = Mods::FORM1;
    const GENESECT_BURN = Mods::FORM2;
    const GENESECT_CHILL = Mods::FORM3;
    const GENESECT_DOUSE = Mods::FORM4;
    const GENESECT_SHOCK = Mods::FORM5;

    /**
     * Get constant name from code (for code generation)
     * @param string $prefix
     * @param int $form
     * @return string|null
     */
    public static function getConst(string $prefix, int $form): ?string
    {
        $reflection = new \ReflectionClass(__CLASS__);
        $constants = $reflection->getConstants();
        foreach ($constants as $name => $value) {
            if ($value === $form && strpos($name, $prefix . '_') === 0) {
                return $name;
            }
        }
        return null;
    }
}
