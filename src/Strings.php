<?php

namespace Pogo;

class Strings
{
    /** @var Pokemon[] */
    protected $pokemon = [];
    /** @var array[] */
    protected $reasons = [];

    public function __construct()
    {
    }

    public function addLists($lists)
    {
        foreach ($lists as $volume => $parts) {
            $this->addList($parts, $volume);
        }
    }

    public function addList($list, $srcReason = null)
    {
        $reason = '';
        foreach ($list as $title => $data) {
            foreach ($data as $pokedexId) {
                $reason = $srcReason ? "$srcReason: $title" : null;
                $newPok = $this->addPokemon($pokedexId, $reason);

                $reason = $reason ? "Evolves to $pokedexId {$newPok->getName()} ($reason)" : null;
                while ($newPokId = $newPok->getEvolveFrom()) {
//                        echo "[$newPokId]";
                    $newPok = $this->addPokemon($newPokId, $reason);
                }
            }
        }
    }

    public function showReasons()
    {
        $pokemonList = $this->pokemon;
        sort($pokemonList);
        foreach ($pokemonList as $pokemon) {
            $pokedexId = $pokemon->getPokedexId();
            echo "<p><strong> {$pokedexId} {$pokemon->getName()}</strong><br>";
            foreach ($this->reasons[$pokedexId] as $reason) {
                echo "$reason<br>";
            }
            echo "</p>";
        }
    }

    /**
     * @param mixed $pokedexId
     * @param string $reason
     * @return Pokemon
     */
    protected function addPokemon($pokedexId, $reason = null)
    {
        if (!isset($this->pokemon[$pokedexId])) {
            $this->pokemon[$pokedexId] = Pokemon::get($pokedexId);
        }
        if ($reason) {
            if (!isset($this->reasons[$pokedexId])) {
                $this->reasons[$pokedexId] = [];
            }
            $this->reasons[$pokedexId][] = $reason;
        }
        return $this->pokemon[$pokedexId];
    }

    public function getExcludeString()
    {
        $includes = [];
        $excludes = [];

        $includeFrom = 0;
        $excludeFrom = 0;
        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($this->pokemon[$i])) {
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
        $include = implode(',', $includes);
        $exclude = '!' . implode('&!', $excludes);
        return strlen($include) <= strlen($exclude) ? $include : $exclude;
    }

    public function getIncludeString()
    {
        $includes = [];
        $includeFrom = 0;
        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($this->pokemon[$i])) {
//                echo "[$i]";
                if (!$includeFrom) {
                    $includeFrom = $i;
                }
            } elseif ($includeFrom) {
                if ($includeFrom == $i - 1) {
                    $includes[] = $includeFrom;
                } else {
                    $includes[] .= "$includeFrom-" . ($i - 1);
                }
                $includeFrom = 0;
            }
        }
        if ($includeFrom) {
            if ($includeFrom == $i - 1) {
                $includes[] = $includeFrom;
            } else {
                $includes[] .= "$includeFrom-" . ($i - 1);
            }
        }
        return implode(',', $includes);
    }
}