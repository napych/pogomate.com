<?php

namespace Pogo\Pokemon;

use Pogo\Data\Manual\Forms;
use Pogo\Pokemon\Mods;

class Form
{
    public static function getFormName(int $code): ?string
    {
        return Forms::NAMES[Mods::getId($code)][Mods::getForm($code)] ?? null;
    }
}
