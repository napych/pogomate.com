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
            foreach ($data as $code) {
                $reason = $srcReason ? "$srcReason: $title" : null;
                $newPok = $this->addPokemon($code, $reason);

                if ($reason) {
                    $shortName = Pokemon::get($newPok->getPokedexId())->getName();
                    $reason = "Evolves to {$newPok->getPokedexId()} {$shortName} ($reason)";
                }
                while ($newPokId = $newPok->getEvolveFrom()) {
//                    echo "[$newPokId]";
                    $newPok = $this->addPokemon($newPokId, $reason);
                }
            }
        }
    }

    public function showReasons()
    {
        $pokemonList = $this->pokemon;
        usort($pokemonList, function ($v1, $v2) {
            if ($v1->getPokedexId() > $v2->getPokedexId()) {
                return 1;
            } elseif ($v1->getPokedexId() < $v2->getPokedexId()) {
                return -1;
            } elseif ($v1->getCode() > $v2->getCode()) {
                return 1;
            } elseif ($v1->getCode() < $v2->getCode()) {
                return -1;
            }
            return 0;
        });
        foreach ($pokemonList as $pokemon) {
            echo "<p><strong> {$pokemon->getPokedexId()} {$pokemon->getName()}</strong><br>";
            foreach ($this->reasons[$pokemon->getCode()] as $reason) {
                echo "$reason<br>";
            }
            echo "</p>";
        }
    }

    /**
     * @param mixed $code
     * @param string $reason
     * @return Pokemon
     */
    protected function addPokemon($code, $reason = null)
    {
        if (!isset($this->pokemon[$code])) {
            $this->pokemon[$code] = Pokemon::get($code);
        }
        if ($reason) {
            if (!isset($this->reasons[$code])) {
                $this->reasons[$code] = [];
            }
            $this->reasons[$code][] = $reason;
        }
        return $this->pokemon[$code];
    }

    public function getExcludeString()
    {
        $includes = [];
        $excludes = [];

        $includeFrom = 0;
        $excludeFrom = 0;

        $list = [];
        foreach ($this->pokemon as $pokemon) {
            $list[$pokemon->getPokedexId()] = 1;
        }

        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($list[$i])) {
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

        $list = [];
        foreach ($this->pokemon as $pokemon) {
            $list[$pokemon->getPokedexId()] = 1;
        }

        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($list[$i])) {
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