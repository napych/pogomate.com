<?php

declare(strict_types=1);

namespace Pogo\Mate;

/**
 * PVP Leagues
 */
class Leagues
{
    public const GL = 'GL';
    public const UL = 'UL';
    public const ML = 'ML';

    /**
     * @param string $league
     * @return int|null
     */
    public static function getMaxCP(string $league): ?int
    {
        return match ($league) {
            self::GL => 1500,
            self::UL => 2500,
            default => null,
        };
    }
}
