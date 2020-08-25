<?php

namespace Pogo\Data;

use Pogo\Data\Forms\Mega;

class Lists
{
    public static function getAll()
    {
        return [
            Gamepress\PVE::DESCRIPTION => Gamepress\PVE::RANKS,
            Gamepress\GL::DESCRIPTION => Gamepress\GL::RANKS,
            Gamepress\UL::DESCRIPTION => Gamepress\UL::RANKS,
            Gamepress\ML::DESCRIPTION => Gamepress\ML::RANKS,
            Mega::DESCRIPTION => Mega::MEGA,
            Top10::DESCRIPTION => Top10::LISTS
        ];
    }
}