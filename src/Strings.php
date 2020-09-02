<?php

namespace Pogo;

use Pogo\Data\Lists;

class Strings
{
    const ALOLAN = 'alola';
    const GALARIAN = 'galar';
    const SHADOW = 'shadow';
    const FLAG_ENUM = [
        self::ALOLAN,
        self::GALARIAN,
        self::SHADOW
    ];

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
            $this->addList($parts);
        }
    }

    public function addList($list)
    {
        $listData = $list[Lists::ENT_DATA];
        if ($list[Lists::ENT_CONTENT] === Lists::CONTENT_LIST) {
            $listData = [$listData];
        }
        foreach ($listData as $title => $data) {
            foreach ($data as $code) {
                $reason = [
                    'list' => $list[Lists::ENT_DESCRIPTION],
                    'type' => $list[Lists::ENT_TYPE],
                    'subList' => $title ?: null
                ];
                $newPok = $this->addPokemon($code, $reason);

                $reason['evolve'] = $newPok->getCode();
                while ($newPokId = $newPok->getEvolveFrom()) {
                    $newPok = $this->addPokemon($newPokId, $reason);
                }
            }
        }
    }

    public function getReasons(int $pokedexId = null)
    {
        // sort pokemon list
        if (!$pokedexId) {
            $pokemonList = $this->pokemon;
        } else {
            $pokemonList = [];
            foreach ($this->pokemon as $code => $pokemon) {
                if ($pokemon->getPokedexId() === $pokedexId) {
                    $pokemonList[$code] = $pokemon;
                }
            }
        }
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

        $result = [];
        foreach ($pokemonList as $pokemon) {
            $result[] = [
                'pokemon' => $pokemon,
                'reasons' => $this->reasons[$pokemon->getCode()]
            ];
//            $name = '#' . $pokemon->getPokedexId() . ' ' . $pokemon->getName();
//            $subResult = [];
//            foreach ($this->reasons[$pokemon->getCode()] as $reason) {
//                $subResult[] = $reason;
//            }
//            $result[$name] = $subResult;
        }
        return $result;
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
        $includeFrom = 0;
        $result = [];

        // fill list and clarify arrays
        $list = [];
        $clarify = [];
        $flagArr = [];
        foreach (self::FLAG_ENUM as $flag) {
            $flagArr[$flag] = 0;
        }
        foreach ($this->pokemon as $code => $pokemon) {
            $pokedexId = $pokemon->getPokedexId();
            $nonRegular = false;
            if ($pokedexId !== $code && !isset($this->pokemon[$pokedexId])) {
                if (!isset($clarify[$pokedexId])) {
                    $clarify[$pokedexId] = $flagArr;
                }
                if ($pokemon->isAlolan()) {
                    $clarify[$pokedexId][self::ALOLAN] = 1;
                    $nonRegular = true;
                }
                if ($pokemon->isGalarian()) {
                    $clarify[$pokedexId][self::GALARIAN] = 1;
                    $nonRegular = true;
                }
                if ($pokemon->isShadow()) {
                    $clarify[$pokedexId][self::SHADOW] = 1;
                    $nonRegular = true;
                }
            }
            if (!$nonRegular) {
                $list[$pokedexId] = 1;
            }
        }
        // get clarify strings
        ksort($clarify);
        foreach ($clarify as $id => $bits) {
            $sortedBits = [];
            foreach ($bits as $flag => $enabled) {
                if ($enabled) {
                    $sortedBits[] = $flag;
                }
            }
            if (!empty($sortedBits)) {
                // TODO: re-enable this when !alola and !galar work again
                //$result[] = '!' . $id . ',!' . implode(',!', $sortedBits);
                // TODO: remove this when !alola and !galar work again
                if (!empty($bits[self::SHADOW])) {
                    $result[] = '!' . $id . ',!shadow';
                } else {
                    $result[] = '!' . $id;
                }
            }
        }

        for ($i = 1; $i <= Settings::MAX_POKEDEX_ID; $i++) {
            if (isset($list[$i])) {
//                echo "[$i]";
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
            }
        }
        if ($includeFrom) {
            if ($includeFrom == $i - 1) {
                $includes[] .= $includeFrom;
            } else {
                $includes[] .= "$includeFrom-" . ($i - 1);
            }
        }

        return implode(',', $includes) . (!empty($result) ? '&' . implode('&', $result) : '');
    }

    public function getIncludeString()
    {
        $includes = [];
        $includeFrom = 0;

        // fill list and clarify arrays
        $list = [];
        $clarify = [];
        $flagArr = [];
        foreach (self::FLAG_ENUM as $flag) {
            $flagArr[$flag] = 0;
        }
        foreach ($this->pokemon as $code => $pokemon) {
            $pokedexId = $pokemon->getPokedexId();
            if ($pokedexId !== $code && !isset($this->pokemon[$pokedexId])) {
                if (!isset($clarify[$pokedexId])) {
                    $clarify[$pokedexId] = $flagArr;
                }
                if ($pokemon->isAlolan()) {
                    $clarify[$pokedexId][self::ALOLAN] = 1;
                }
                if ($pokemon->isGalarian()) {
                    $clarify[$pokedexId][self::GALARIAN] = 1;
                }
                if ($pokemon->isShadow()) {
                    $clarify[$pokedexId][self::SHADOW] = 1;
                }
            }
            $list[$pokedexId] = 1;
        }
        ksort($clarify);
        foreach ($clarify as $id => $bits) {
            $sortedBits = [];
            foreach ($bits as $flag => $enabled) {
                if ($enabled) {
                    $sortedBits[] = $flag;
                }
            }
            if (!empty($sortedBits)) {
                $result[] = '!' . $id . ',' . implode(',', $sortedBits);
            }
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

        return implode(',', $includes) . (!empty($result) ? '&' . implode('&', $result) : '');
    }
}