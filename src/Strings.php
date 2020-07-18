<?php

namespace Pogo;

class Strings
{
    const PREFIX = '!4*&cp0-1749&!shiny&!lucky&!legendary&!mythical&!@special&';
    const HIGHEST = 890;

    /** @var Pokemon[] */
    protected static $pokemon = [];
    /** @var array[] */
    protected static $reasons = [];

    public static function run()
    {
        $lists = \Pogo\Data\Lists::getAll();
        foreach ($lists as $volume => $parts) {
            foreach ($parts as $title => $data) {
                foreach ($data as $pokedexId) {
                    $reason = "$volume: $title";
                    $newPok = static::addPokemon($pokedexId, $reason);
                    isset($reasons[$pokedexId]) ? $reasons[$pokedexId][] = $reason : $reasons[$pokedexId] = [$reason];

                    $reason = "Evolves to $pokedexId {$newPok->getName()} ($reason)";
                    while ($newPokId = $newPok->getEvolveFrom()) {
//                        echo "[$newPokId]";
                        $newPok = static::addPokemon($newPokId, $reason);
                    }
                }
            }
        }

        echo '<h2>String</h2>';
        echo '<p>' . static::getString() . '</p>';
        sort(static::$pokemon);
        echo '<h2>Explanation</h2>';
        foreach (static::$pokemon as $pokemon) {
            $pokedexId = $pokemon->getPokedexId();
            echo "<p><strong> {$pokedexId} {$pokemon->getName()}</strong><br>";
            foreach (static::$reasons[$pokedexId] as $reason) {
                echo "$reason<br>";
            }
            echo "</p>";
        }
//        var_dump(static::$pokemon);
//        var_dump(static::$reasons);
    }

    /**
     * @param mixed $pokedexId
     * @param string $reason
     * @return Pokemon
     */
    protected static function addPokemon($pokedexId, $reason)
    {
        if (!isset(static::$pokemon[$pokedexId])) {
            static::$pokemon[$pokedexId] = Pokemon::get($pokedexId);
        }
        if (!isset(static::$reasons[$pokedexId])) {
            static::$reasons[$pokedexId] = [];
        }
        static::$reasons[$pokedexId][] = $reason;
        return static::$pokemon[$pokedexId];
    }

    protected function getString()
    {
        $includes = [];
        $excludes = [];

        $includeFrom = 0;
        $excludeFrom = 0;
        for ($i = 1; $i <= static::HIGHEST; $i++) {
            if (isset(static::$pokemon[$i])) {
//                echo "[$i]";
                if (!$excludeFrom) {
                    $excludeFrom = $i;
                }
                if ($includeFrom) {
                    if ($includeFrom == $i - 1) {
                        $includes[] .= $includeFrom;
                    } else {
                        $includes[] .= "$includeFrom-" . ($i - 1);
                    }
                    $includeFrom = 0;
                }
            } else {
                if (!$includeFrom) {
                    $includeFrom = $i;
                }
                if ($excludeFrom) {
                    if ($excludeFrom == $i - 1) {
                        $excludes[] = $excludeFrom;
                    } else {
                        $excludes[] .= "$excludeFrom-" . ($i - 1);
                    }
                    $excludeFrom = 0;
                }
            }
        }
        if ($includeFrom) {
            if ($includeFrom == $i - 1) {
                $includes[] .= $includeFrom;
            } else {
                $includes[] .= "$includeFrom-" . ($i - 1);
            }
        }
        if ($excludeFrom) {
            if ($excludeFrom == $i - 1) {
                $excludes[] = $excludeFrom;
            } else {
                $excludes[] .= "$excludeFrom-" . ($i - 1);
            }
        }
        $include = static::PREFIX . implode(',', $includes);
        $exclude = static::PREFIX . '!' . implode('&!', $excludes);
        return strlen($include) <= strlen($exclude) ? $include : $exclude;
    }
}