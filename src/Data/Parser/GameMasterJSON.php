<?php

namespace Pogo\Data\Parser;

use Exception;
use Pogo\Data\Parser\GameMasterSettings\Flag2Form;
use Pogo\Data\Parser\GameMasterSettings\IgnoreKeys;
use Pogo\Data\Parser\GameMasterSettings\KnownFields;
use Pogo\Data\Parser\Generator\ResultEvolution;
use Pogo\Data\Parser\Result\All;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon\Types;
use Pogo\Data\Manual\Forms;
use Pogo\Pokemon;
use Pogo\Data\Parser\Generator\ResultPokemon as RP;

class GameMasterJSON
{
    public const FILE = __DIR__ . '/../blobs/master/1643454820515.json';

    /** @var All|null */
    protected ?All $result = null;
    /** @var int|null */
    protected ?int $batch = null;

    protected array $forms = [];

    public function __construct()
    {
        $this->result = new All();
    }

    /**
     * @return \Pogo\Data\Parser\Result\All
     */
    public function getResult(): All
    {
        return $this->result;
    }

    /**
     * @throws \Exception
     */
    public function parse($file = self::FILE)
    {
        $data = $this->prepare($file);

        $this->parseTypeEffectives($data['typeEffective']);
        unset($data['typeEffective']);

        $this->parseCombatMoves($data['combatMove']);
        $this->parseMoves($data['moveSettings']);
        unset($data['combatMove']);
        unset($data['moveSettings']);

        $this->parsePokemonForms($data['formSettings']);
        $this->parsePokemon($data['pokemonSettings']);
        unset($data['formSettings']);
        unset($data['pokemonSettings']);

        if (!empty($data)) {
            echo '*** WARNING *** parse data has keys left: ' . implode(', ', array_keys($data)), PHP_EOL;
        }
    }

    /**
     * @param string $file
     * @return array[]|null
     * @throws \Exception
     */
    protected function prepare(string $file): ?array
    {
        $data = json_decode(file_get_contents($file), true);
        $templates = null;
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'template':
                    $templates = $this->prepareTemplates($value);
                    break;
                case 'batchId': // timestamp
                    $this->batch = $value;
                    break;
                case 'experimentId': // strange int[]
                    break;
                case 'result': // "COMPLETE" string
                    break;
                default:
                    throw new Exception('Unknown level 1 entry: ' . $key);
            }
        }
        return $templates;
    }

    /**
     * @param array[] $templates
     * @return array[]
     * @throws \Exception
     */
    protected function prepareTemplates(array $templates): array
    {
        $stackedData = [];

        // move Smeargle moves to it's template
        $smeargleMoves = null;
        foreach ($templates as $template) {
            if ($template['templateId'] === 'SMEARGLE_MOVES_SETTINGS') {
                $smeargleMoves = $template['data']['smeargleMovesSettings'];
            }
        }
        if (!$smeargleMoves) {
            echo 'WARNING: smeargleMovesSettings are missing', PHP_EOL;
        }

        foreach ($templates as $template) {
            if (empty($template['templateId'])) {
                throw new Exception('Missing templateId');
            }
            if ($template['templateId'] === 'SMEARGLE_MOVES_SETTINGS') {
                continue;
            }
            if (empty($template['data'])) {
                throw new Exception('Empty template data');
            }
            $templateId = $template['templateId'];
            $templateData = $template['data'];
            foreach ($templateData as $key => $value) {
                if (in_array($key, IgnoreKeys::IGNORE_KEYS)) {
                    continue;
                }
                /*
                switch ($key) {
                    case 'combatMove':
                    case 'typeEffective':
                    case 'temporaryEvolutionSettings':
                    case 'pokemonSettings':
                    case 'moveSettings':
                    case 'weatherAffinities':
                    case 'formSettings':
                        break;
                    default:
                        die($key);
                }
                */
                switch ($key) {
                    case 'templateId':
                        break;
                    default:
                        $stackedData[$key][$templateId] = $value;
                        if (str_contains($templateId, 'POLTEA')) {
                            echo "[$key $templateId]", PHP_EOL;
                        }
                }
            }
        }

        if ($smeargleMoves) {
            $stackedData['pokemonSettings']['V0235_POKEMON_SMEARGLE']['quickMoves'] = $smeargleMoves['quickMoves'];
            $stackedData['pokemonSettings']['V0235_POKEMON_SMEARGLE']['cinematicMoves'] = $smeargleMoves['cinematicMoves'];
        }

        return $stackedData;
    }

    public $moves = [];
//    const MOVE_TYPE_TRANSLATE = [
//        'ATTACK_01' => Result\Moves::MOVES_CLASS_FAST,
//        'ATTACK_02' => Result\Moves::MOVES_CLASS_CHARGE
//    ];
    public const TYPE_TRANSLATE = [
        'POKEMON_TYPE_BUG' => Types::BUG,
        'POKEMON_TYPE_DARK' => Types::DARK,
        'POKEMON_TYPE_DRAGON' => Types::DRAGON,
        'POKEMON_TYPE_ELECTRIC' => Types::ELECTRIC,
        'POKEMON_TYPE_FIGHTING' => Types::FIGHTING,
        'POKEMON_TYPE_FIRE' => Types::FIRE,
        'POKEMON_TYPE_FLYING' => Types::FLYING,
        'POKEMON_TYPE_GHOST' => Types::GHOST,
        'POKEMON_TYPE_GRASS' => Types::GRASS,
        'POKEMON_TYPE_GROUND' => Types::GROUND,
        'POKEMON_TYPE_FAIRY' => Types::FAIRY,
        'POKEMON_TYPE_ICE' => Types::ICE,
        'POKEMON_TYPE_NORMAL' => Types::NORMAL,
        'POKEMON_TYPE_POISON' => Types::POISON,
        'POKEMON_TYPE_PSYCHIC' => Types::PSYCHIC,
        'POKEMON_TYPE_ROCK' => Types::ROCK,
        'POKEMON_TYPE_STEEL' => Types::STEEL,
        'POKEMON_TYPE_WATER' => Types::WATER
    ];

    protected array $move2id = [];

    public function parseMoves(array $data)
    {
        foreach ($data as $template => $move) {
            $chunks = explode('_', $template);
            $id = (int)substr($chunks[0], 1);
            $this->move2id[$move['movementId']] = $id;

            $movementId = $move['movementId'];
//            if (!isset($this->pvpMoves[$movementId])) {
//                echo 'WARNING: missing combatMove data for ', $movementId, PHP_EOL;
//            }

            if (!empty($move['energyDelta'])) {
                $class = $move['energyDelta'] < 0 ? Result\Moves::MOVES_CLASS_CHARGE : Result\Moves::MOVES_CLASS_FAST;
            } elseif (strpos($movementId, '_FAST') === strlen($movementId) - 5) {
                echo 'WARNING: supposing that move "' . $movementId . '" is fast.', PHP_EOL;
                $class = Result\Moves::MOVES_CLASS_FAST;
            } else {
                echo 'WARNING: supposing that move "' . $movementId . '" is charged.', PHP_EOL;
                $class = Result\Moves::MOVES_CLASS_CHARGE;
            }
            /*            if (!isset($move['type'])) {
                            echo $class, PHP_EOL;
                            print_r($move);
                            die();
                        }*/
            $this->result->moves->add(
                $id,
                [
                    Result\Moves::FIELD_CONST => 'MOVE_' . $movementId,
                    //Result\Moves::FIELD_CLASS => static::MOVE_TYPE_TRANSLATE[$move['animationId']],
                    Result\Moves::FIELD_CLASS => $class,
                    Result\Moves::FIELD_TYPE => static::TYPE_TRANSLATE[$move['pokemonType']],
                    Result\Moves::FIELD_POWER => $move['power'] ?? null,
                    Result\Moves::FIELD_ACCURACY => $move['accuracyChance'],
                    Result\Moves::FIELD_CRIT => $move['criticalChance'] ?? null,
                    Result\Moves::FIELD_ENERGY => $move['energyDelta'] ?? null,
                    Result\Moves::FIELD_DURATION => $move['durationMs'] / 1000,
                    Result\Moves::FIELD_DMG_WINDOW_START => $move['damageWindowStartMs'],
                    Result\Moves::FIELD_DMG_WINDOW_END => $move['damageWindowEndMs'],
                    Result\Moves::FIELD_COMBAT_POWER => $this->pvpMoves[$movementId]['power'] ?? null,
                    Result\Moves::FIELD_COMBAT_ENERGY => $this->pvpMoves[$movementId]['energy'] ?? null,
//                'staminaLossScalar' => 0.06
//                'trainerLevelMin' => 1,
//                'trainerLevelMax' => 100,
//                'vfxName' => 'wrap',
                ]
            );
        }
    }

    protected array $pvpMoves = [];

    /**
     * @param array $data
     */
    public function parseCombatMoves(array $data)
    {
        foreach ($data as $move) {
            $this->pvpMoves[$move['uniqueId']] = [
                'power' => $move['power'] ?? null,
                'energy' => $move['energyDelta'] ?? null
            ];
        }
    }

    public function parsePokemon(array $data)
    {
        foreach ($data as $template => $pokemon) {
            $this->checkPokemon($pokemon);
            if (isset($pokemon['form']) && isset($this->forms[$pokemon['form']])) {
                $code = $this->forms[$pokemon['form']];
            } elseif (isset($pokemon['pokemonId']) && isset($this->forms[$pokemon['pokemonId']])) {
                $code = $this->forms[$pokemon['pokemonId']];
            } else {
                $chunks = explode('_', $template);
                $code = (intval(substr($chunks[0], 1)));
            }

            if (!$code) {
                die('Failed to get code for ' . $template . PHP_EOL);
            }

            $pid = Mods::getId($code);
            if (Mods::getForm($code) && in_array($pid, Forms::IGNORE_FORMS)) {
                continue;
            }

            if (str_contains($template, 'THUND')) {
                echo "[$template $code {$pokemon['type']}]", PHP_EOL;
//                var_dump($pokemon);
            }
            $rp = RP::get($code)
                ->setTypes(
                    self::TYPE_TRANSLATE[$pokemon['type']],
                    isset($pokemon['type2']) ? self::TYPE_TRANSLATE[$pokemon['type2']] : null
                )
                ->setAttack($pokemon['stats']['baseAttack'] ?? null)
                ->setDefense($pokemon['stats']['baseDefense'] ?? null)
                ->setStamina($pokemon['stats']['baseStamina'] ?? null)
                ->setThirdMoveCandy($pokemon['thirdMove']['candyToUnlock'] ?? null)
                ->setThirdMoveDust($pokemon['thirdMove']['stardustToUnlock'] ?? null)
                ->setPurifyCandy($pokemon['shadow']['purificationCandyNeeded'] ?? null)
                ->setPurifyDust($pokemon['shadow']['purificationStardustNeeded'] ?? null)
                ->setBuddyDistance($pokemon['kmBuddyDistance'] ?? null)
                ->setTransferable(isset($pokemon['isTransferable']) ? (bool)$pokemon['isTransferable'] : null)
                ->setTradable(isset($pokemon['isTradable']) ? (bool)$pokemon['isTradable'] : null)
                ->setDeployable(isset($pokemon['isDeployable']) ? (bool)$pokemon['isDeployable'] : null)
                ->setLegendary(
                    isset($pokemon['pokemonClass']) && $pokemon['pokemonClass'] === 'POKEMON_CLASS_LEGENDARY'
                )
                ->setMythic(isset($pokemon['pokemonClass']) && $pokemon['pokemonClass'] === 'POKEMON_CLASS_MYTHIC')
                ->setUnreleased(false);

            // 'encounter' => ['baseCaptureRate' => 0.2, 'baseFleeRate' => 0.1, 'collisionRadiusM' => 0.3815, 'collisionHeightM' => 0.654,
            //                 'collisionHeadRadiusM' => 0.2725, 'movementType' => 'MOVEMENT_JUMP', 'movementTimerS' => 10.0, 'jumpTimeS' => 1.15,
            //                 'attackTimerS' => 29.0, 'attackProbability' => 0.1, 'dodgeProbability' => 0.15, 'dodgeDurationS' => 1.0,
            //                 'dodgeDistance' => 1.0, 'cameraDistance' => 3.75, 'minPokemonActionFrequencyS' => 0.2, 'maxPokemonActionFrequencyS' => 1.6],
            // 'evolution' => ['IVYSAUR'],
            // 'evolutionPips' => 1,
            // 'pokedexHeightM' => 0.7,
            // 'pokedexWeightKg' => 6.9,
            // 'heightStdDev' => 0.0875,
            // 'weightStdDev' => 0.8625,
            // 'familyId' => 'FAMILY_BULBASAUR',

            $rp->clearMoves();
            // fast moves
            if (empty($pokemon['quickMoves'])) {
                echo 'WARNING: no quickMoves for ', $template, PHP_EOL;
            } else {
                foreach ($pokemon['quickMoves'] as $quickMove) {
                    if (!isset($this->move2id[$quickMove])) {
                        echo 'WARNING: quickMove ID is missing: ', $quickMove, PHP_EOL;
                    }
                    $rp->addFastMove($this->move2id[$quickMove]);
                }
            }

            // moves
            if (!empty($pokemon['eliteQuickMove'])) {
                foreach ($pokemon['eliteQuickMove'] as $eliteQuickMove) {
                    if (!isset($this->move2id[$eliteQuickMove])) {
                        echo 'WARNING: quickMove ID is missing: ', $eliteQuickMove, PHP_EOL;
                    }
                    $rp->addFastMove($this->move2id[$eliteQuickMove], true);
                }
            }
            if (empty($pokemon['cinematicMoves'])) {
                echo 'WARNING: no cinematicMoves for ', $template, PHP_EOL;
            } else {
                foreach ($pokemon['cinematicMoves'] as $cinematicMove) {
                    if (!isset($this->move2id[$cinematicMove])) {
                        echo 'WARNING: cinematicMove ID is missing: ', $cinematicMove, PHP_EOL;
                    }
                    $rp->addChargeMove($this->move2id[$cinematicMove]);
                }
            }
            if (!empty($pokemon['eliteCinematicMove'])) {
                foreach ($pokemon['eliteCinematicMove'] as $eliteCinematicMove) {
                    if (!isset($this->move2id[$eliteCinematicMove])) {
                        echo 'WARNING: cinematicMove ID is missing: ', $eliteCinematicMove, PHP_EOL;
                    }
                    $rp->addChargeMove($this->move2id[$eliteCinematicMove], true);
                }
            }

            // shadow
            if (!empty($pokemon['shadow'])) {
                $rp->hasShadow();
            }

            // evolutions
            $tempBranches = [];
            if (!empty($pokemon['evolutionBranch'])) {
                foreach ($pokemon['evolutionBranch'] as $branch) {
                    if (!empty($branch['evolution'])) {
                        $rp->addEvolution($this->parseEvolutionBranch($template, $branch));
                    } elseif (!empty($branch['temporaryEvolution'])) {
                        $tempBranches[$branch['temporaryEvolution']] = $branch;
                    }
                }
            }

            // mega evolutions
            if (!empty($pokemon['tempEvoOverrides'])) {
                foreach ($pokemon['tempEvoOverrides'] as $tempEvo) {
                    if (empty($tempEvo['tempEvoId'])) {
                        echo 'WARNING: missing tempEvoId', PHP_EOL;
                        continue;
                    }

                    switch ($tempEvo['tempEvoId']) {
                        case 'TEMP_EVOLUTION_MEGA':
                            $megaMod = Mods::MEGA;
                            break;
                        case 'TEMP_EVOLUTION_MEGA_X':
                            $megaMod = Mods::MEGA_X;
                            break;
                        case 'TEMP_EVOLUTION_MEGA_Y':
                            $megaMod = Mods::MEGA_Y;
                            break;
                        default:
                            echo 'WARNING: invalid tempEvoId: ', $tempEvo['tempEvoId'], PHP_EOL;
                            continue 2;
                    }
                    $megaId = $rp->getCode() | $megaMod;
                    $mega = RP::clone($megaId, $rp->getCode());
                    $mega->setAttack($tempEvo['stats']['baseAttack'] ?? null);
                    $mega->setDefense($tempEvo['stats']['baseDefense'] ?? null);
                    $mega->setStamina($tempEvo['stats']['baseStamina'] ?? null);
                    $megaTypes = $mega->getTypes();
                    if (!empty($tempEvo['typeOverride1'])) {
                        $megaTypes[0] = self::TYPE_TRANSLATE[$tempEvo['typeOverride1']];
                    }
                    if (!empty($tempEvo['typeOverride2'])) {
                        $megaTypes[1] = self::TYPE_TRANSLATE[$tempEvo['typeOverride2']];
                    } else {
                        unset($megaTypes[1]);
                    }
                    $mega->setTypes($megaTypes[0], $megaTypes[1] ?? null);
                    $megaEvo = new ResultEvolution($megaId);
                    $megaEvo->setTemporary(true);
                    $megaEvo->setRequireEnergyFirst(
                        $tempBranches[$tempEvo['tempEvoId']]['temporaryEvolutionEnergyCost']
                    );
                    $megaEvo->setRequireEnergy(
                        $tempBranches[$tempEvo['tempEvoId']]['temporaryEvolutionEnergyCostSubsequent']
                    );
                    $rp->addEvolution($megaEvo);
                }
            }
        }
    }

    protected function findForm(array $branch): ?string
    {
        $variants = [];
        if (!empty($branch['form'])) {
            $variants[] = $branch['form'];
        }
        if (!empty($branch['evolution'])) {
            $variants[] = $branch['evolution'];
        }
        foreach ($variants as $variant) {
            if (isset($this->forms[$variant])) {
                return $variant;
            }
            if (isset($this->forms[$variant . '_NORMAL'])) {
                return $variant . '_NORMAL';
            }
        }
        return null;
    }

    protected function parseEvolutionBranch(string $template, array $branch): ?ResultEvolution
    {
        $this->checkBranch($branch);
        $key = $this->findForm($branch);
        if (empty($key)) {
            return null;
        }
        $evoId = $this->forms[$key];
        if (!$evoId) {
            echo 'WARNING: Missing branch for form "', $branch['form'] ?? '', '", evolution "', $branch['evolution'], '"', PHP_EOL;
            return null;
        }
        $evolution = new ResultEvolution($evoId);
        foreach ($branch as $k => $v) {
            switch ($k) {
                case 'evolution':
//                    $evolution[Result\Pokemon::FIELD_EVOLUTION_POKEMON] = $v;
                    break;
                case 'form':
//                    $evolution[Result\Pokemon::FIELD_EVOLUTION_FORM] = $v;
                    break;
                case 'candyCost':
                    $evolution->setCostCandy($v);
                    break;
                case 'evolutionIds':
                    break;
                case 'evolutionItemRequirement':
                    $evolution->setRequiredItem($v);
                    break;
                case 'noCandyCostViaTrade':
                    $evolution->setTradedNoCandy(true);
                    break;
                case 'lureItemRequirement':
                    $evolution->setRequiredLure($v);
                    break;
                case 'kmBuddyDistanceRequirement':
                    $evolution->setRequireWalk($v);
                    break;
                case 'mustBeBuddy':
                    $evolution->setRequireBuddy(true);
                    break;
                case 'onlyNighttime':
                    $evolution->setRequireNight(true);
                    break;
                case 'onlyDaytime':
                    $evolution->setRequireDay(true);
                    break;
                case 'priority':
                    $evolution->setPriority($v);
                    break;
                case 'genderRequirement':
                    if ($v === 'MALE') {
                        $evolution->setRequireGender(ResultEvolution::GENDER_MALE);
                    } elseif ($v === 'FEMALE') {
                        $evolution->setRequireGender(ResultEvolution::GENDER_FEMALE);
                    } else {
                        echo 'WARNING: Unknown genderRequirement: ', $v, PHP_EOL;
                    }
                    break;
                case 'purificationEvolutionCandyCost':
                case 'questDisplay':
                    // TODO
                    break;

                default:
                    echo 'WARNING: Unknown evolutionBranch property: ', $k, ' for ', $template, PHP_EOL;
            }
        }
        return $evolution;
    }

    protected function checkBranch(array $branch)
    {
        if (empty($branch['candyCost']) || empty($branch['evolution'])) {
            echo 'WARNING: strange evolutionBranch (check #1):', print_r($branch, true), PHP_EOL;
            return;
        }
        foreach ($branch as $k => $v) {
            switch ($k) {
                case 'evolution':
                case 'candyCost':
                case 'form':
                case 'noCandyCostViaTrade':
                case 'evolutionItemRequirement':
                case 'genderRequirement':
                case 'kmBuddyDistanceRequirement':
                case 'lureItemRequirement':
                case 'purificationEvolutionCandyCost':
                case 'questDisplay': // TODO
                case 'mustBeBuddy':
                case 'onlyDaytime':
                case 'onlyNighttime':
                case 'priority':
                    break;
                default:
                    echo 'WARNING: strange evolutionBranch (check #2):', print_r($branch, true), PHP_EOL;
                    return;
            }
        }
    }

    protected function checkPokemon(array $pokemon)
    {
        $requires = ['pokemonId', 'type', 'stats', 'quickMoves', 'cinematicMoves'];
        foreach ($requires as $require) {
            if (empty($pokemon[$require])) {
                echo 'WARNING: missing ', $require, ' field for ', $pokemon['pokemonId'], PHP_EOL;
            }
        }

        foreach ($pokemon as $k => $v) {
            if (!in_array($k, KnownFields::FIELDS)) {
                echo 'WARNING: unknown field ', $k, ' for ', $pokemon['pokemonId'], PHP_EOL;
            }
        }
    }

    public function parsePokemonForms(array $data)
    {
        $ignore = [
            'PIKACHU_ADVENTURE_HAT_2020',
            'PIKACHU_WINTER_2020',
            'DELIBIRD_WINTER_2020',
            'CUBCHOO_WINTER_2020',
            ''
        ];
        foreach ($data as $template => $formData) {
            $chunks = explode('_', $template);
            $baseId = intval(substr($chunks[1], 1));
            $baseName = $formData['pokemon'];
            if (empty($formData['forms']) || $baseName === 'UNOWN' || $baseName === 'SPINDA') {
                $this->forms[$baseName] = $baseId;
                continue;
            }
            foreach ($formData['forms'] as $formArray) {
                $form = $formArray['form'];
                if (in_array($form, $ignore)) {
                    continue;
                }
                $code = $baseId;
                try {
                    $flags = explode('_', str_replace($baseName, '', $form));
                    for ($i = 0; $i < sizeof($flags); $i++) {
                        switch ($flags[$i]) {
                            case '':
                            case 'NORMAL':
                            case 'NIDORAN':
                                break;
                            case 'PURIFIED':
                                $code |= Mods::PURIFIED;
                                break;
                            case 'SHADOW':
                                $code |= Mods::SHADOW;
                                break;
                            case 'GALARIAN':
                                $code |= Mods::GALARIAN;
                                break;
                            case 'ALOLA':
                                $code |= Mods::ALOLAN;
                                break;
                            case 'COSTUME':
                            case 'COPY':
                            case 'VS':
                            case 'FALL':
                            case '2020':
                            case '2021':
                            case '2022':
                                throw new Exception('Skip thrash pokemon');
                            default:

                                if (isset(Flag2Form::FLAG2FORM[$baseId][$flags[$i]])) {
                                    $code |= Flag2Form::FLAG2FORM[$baseId][$flags[$i]];
                                    break;
                                }
                                if (isset($flags[$i + 1])) {
                                    $tw = $flags[$i] . '_' . $flags[$i + 1];
                                    if (isset(Flag2Form::FLAG2FORM[$baseId][$tw])) {
                                        $code |= Flag2Form::FLAG2FORM[$baseId][$tw];
                                        ++$i;
                                        break;
                                    }
                                }
                                echo 'WARNING: unknown flag ', $flags[$i], ' (', $form, ')', PHP_EOL;
                                throw new Exception('Invalid flag');
                        }
                    }
                    $this->forms[$form] = $code;
                } catch (Exception) {
                }
            }
        }
    }

    const TYPE_ORDER_TRANSLATE = [
        0 => Types::NORMAL,
        1 => Types::FIGHTING,
        2 => Types::FLYING,
        3 => Types::POISON,
        4 => Types::GROUND,
        5 => Types::ROCK,
        6 => Types::BUG,
        7 => Types::GHOST,
        8 => Types::STEEL,
        9 => Types::FIRE,
        10 => Types::WATER,
        11 => Types::GRASS,
        12 => Types::ELECTRIC,
        13 => Types::PSYCHIC,
        14 => Types::ICE,
        15 => Types::DRAGON,
        16 => Types::DARK,
        17 => Types::FAIRY
    ];

    public function parseTypeEffectives(array $data)
    {
        foreach ($data as $effective) {
            foreach ($effective['attackScalar'] as $k => $v) {
                $this->result->types->setEffectiveness(
                    self::TYPE_TRANSLATE[$effective['attackType']],
                    self::TYPE_ORDER_TRANSLATE[$k],
                    $v
                );
            }
        }
    }

    public function parseWeatherAffinity(string $template, $data)
    {
        /*
        $chunks = ['WEATHER', 'AFFINITY', 'CLEAR'];
        $data = [
          'weatherAffinities' => [
            'weatherCondition' => 'CLEAR',
            'pokemonType' => [
              'POKEMON_TYPE_GRASS',
              'POKEMON_TYPE_GROUND',
              'POKEMON_TYPE_FIRE',
            ]
          ]
        ];
         */
        // todo
    }

}
