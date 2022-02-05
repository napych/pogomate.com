<?php

declare(strict_types=1);

namespace Pogo\Mate;

use Pogo\Data\Manual\Settings;
use Pogo\Lists;
use Pogo\Pokemon;

class Strings
{
    protected const ALOLAN = 'alola';
    protected const GALARIAN = 'galar';
    protected const SHADOW = 'shadow';
    protected const FLAG_ENUM = [
        self::ALOLAN,
        self::GALARIAN,
        self::SHADOW
    ];

    /** @var Pokemon[] */
    protected array $pokemon = [];
    /** @var array[] */
    protected array $reasons = [];
    /** @var int|null */
    protected int|null $maxCP = null;

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

                if (is_null($this->maxCP)) {
                    $this->maxCP = $list[Lists::ENT_MAXCP] ?? 0;
                } elseif (!isset($list[Lists::ENT_MAXCP])) {
                    $this->maxCP = 0;
                } elseif ($this->maxCP && $this->maxCP < $list[Lists::ENT_MAXCP]) {
                    $this->maxCP = $list[Lists::ENT_MAXCP];
                }
            }
        }
    }

    public function getReasons(Pokemon $pokemon)
    {
        return $this->reasons[$pokemon->getCode()] ?? null;
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
                $result[] = '!' . $id . ',!' . implode(',!', $sortedBits);
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

        if ($this->maxCP) {
            $result[] = 'cp-' . $this->maxCP;
        }
        return implode(',', $includes) . (!empty($result) ? '&' . implode('&', $result) : '');
    }
}
