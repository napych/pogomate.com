<?php

namespace Pogo\Data\Parser;

use Exception;
use Pogo\Data\Parser\Generator\ResultEvolution;
use Pogo\Data\Parser\Result\All;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon\Types;
use Pogo\Data\Manual\Forms;
use Pogo\Pokemon;
use Pogo\Data\Parser\Generator\ResultPokemon as RP;

class GameMasterJSON
{
    const FILE = __DIR__ . '/../blobs/master/1619227212704.json';
    const IGNORE_KEYS = [
        'templateId',
        'arTelemetrySettings',
        'avatarGroupOrderSettings',
        'avatarCustomization',
        'backgroundModeSettings',
        'badge',
        'battleHubBadgeSettings',
        'battleHubOrderSettings',
        'battleSettings',
        'belugaPokemonWhitelist',
        'buddyActivitySettings',
        'buddyActivityCategorySettings',
        'buddyEmotionLevelSettings',
        'buddyEncounterCameoSettings',
        'buddyHungerSettings',
        'buddyInteractionSettings',
        'buddyLevelSettings',
        'buddySwapSettings',
        'buddyWalkSettings',
        'invasionNpcDisplaySettings',
        'combatCompetitiveSeasonSettings',
        'combatLeague',
        'combatLeagueSettings',
        'combatType',
        'combatRankingProtoSettings',
        'combatSettings',
        'combatStatStageSettings',
        'encounterSettings',
        'gymBadgeSettings',
        'gymLevel',
        'iapSettings',
        'item',
        'luckyPokemonSettings',
        'pokemonScaleSettings',
        'questSettings',
        'weatherBonusSettings', // weather bonuses, multipliers, etc.
        'iapItemDisplay',
        'camera',
        'moveSequence',
        'crossGameSocialSettings',
        'exRaidSettings',
        'friendshipMilestoneSettings',
        'iapCategoryDisplay',
        'pokestopInvasionAvailabilitySettings',
        'limitedPurchaseSkuSettings',
        'mapDisplaySettings',
        'monodepthSettings',
        'onboardingV2Settings',
        'partyRecommendationSettings',
        'platypusRolloutSettings',
        'playerLevel',
        'pokecoinPurchaseDisplayGmt',
        'pokemonUpgrades', // cost to lvl up
        'raidSettingsProto',
        'smeargleMovesSettings',
        'genderSettings', // male to female ratio
        'sponsoredGeofenceGiftSettings',
        'stickerMetadata',
        'combatNpcTrainer',
        'combatNpcPersonality',
        'vsSeekerClientSettings',
        'vsSeekerLootProto',
        'vsSeekerPokemonRewards',
        'adventureSyncV2Gmt',
    ];

    /** @var All */
    protected $result = null;
    /** @var int */
    protected $batch = null;

    protected $forms = [];

    public function __construct()
    {
        $this->result = new All();
    }

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
        $this->parseMoves($data['move']);
        unset($data['combatMove']);
        unset($data['move']);

        $this->parsePokemonForms($data['formSettings']);
        $this->parsePokemon($data['pokemon']);

        if (!empty($data)) {
            echo '*** WARNING *** parse data has keys left: ' . implode(', ', array_keys($data)), PHP_EOL;
        }
    }

    /**
     * @param string $file
     * @return array[]|null
     * @throws \Exception
     */
    protected function prepare(string $file)
    {
        $data = json_decode(file_get_contents($file), true);
        $templates = null;
        foreach ($data as $k => $v) {
            switch ($k) {
                case 'template':
                    $templates = $this->prepareTemplates($v);
                    break;
                case 'batchId': // timestamp
                    $this->batch = $v;
                    break;
                case 'experimentId': // strange int[]
                    break;
                case 'result': // "COMPLETE" string
                    break;
                default:
                    throw new Exception("Unknown level 1 entry: " . $k);
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
            if (empty($template['data'])) {
                throw new Exception('Empty template data');
            }
            $templateId = $template['templateId'];
            $templateData = $template['data'];
            foreach ($templateData as $key => $value) {
                if (in_array($key, self::IGNORE_KEYS)) {
                    continue;
                }
                switch ($key) {
                    case 'templateId':
                        break;
                    default:
                        $stackedData[$key][$templateId] = $value;
                }
            }
        }

        if ($smeargleMoves) {
            $stackedData['pokemon']['V0235_POKEMON_SMEARGLE']['quickMoves'] = $smeargleMoves['quickMoves'];
            $stackedData['pokemon']['V0235_POKEMON_SMEARGLE']['cinematicMoves'] = $smeargleMoves['cinematicMoves'];
        }

        return $stackedData;
    }

    public $moves = [];
//    const MOVE_TYPE_TRANSLATE = [
//        'ATTACK_01' => Result\Moves::MOVES_CLASS_FAST,
//        'ATTACK_02' => Result\Moves::MOVES_CLASS_CHARGE
//    ];
    const TYPE_TRANSLATE = [
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

    protected $move2id = [];

    public function parseMoves(array $data)
    {
        foreach ($data as $template => $move) {
            $chunks = explode('_', $template);
            $id = (int)substr($chunks[0], 1);
            $this->move2id[$move['uniqueId']] = $id;

            $movementId = $move['uniqueId'];
//            if (!isset($this->pvpMoves[$movementId])) {
//                echo 'WARNING: missing combatMove data for ', $movementId, PHP_EOL;
//            }

            if (!empty($move['energyDelta'])) {
                $class = $move['energyDelta'] < 0 ? Result\Moves::MOVES_CLASS_CHARGE : Result\Moves::MOVES_CLASS_FAST;
            } else {
                if (strpos($movementId, '_FAST') === strlen($movementId) - 5) {
                    echo 'WARNING: supposing that move "' . $movementId . '" is fast.', PHP_EOL;
                    $class = Result\Moves::MOVES_CLASS_FAST;
                } else {
                    echo 'WARNING: supposing that move "' . $movementId . '" is charged.', PHP_EOL;
                    $class = Result\Moves::MOVES_CLASS_CHARGE;
                }
            }
            $this->result->moves->add(
                $id,
                [
                    Result\Moves::FIELD_CONST => 'MOVE_' . $movementId,
                    //Result\Moves::FIELD_CLASS => static::MOVE_TYPE_TRANSLATE[$move['animationId']],
                    Result\Moves::FIELD_CLASS => $class,
                    Result\Moves::FIELD_TYPE => static::TYPE_TRANSLATE[$move['type']],
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

    protected $pvpMoves = [];

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
            } else {
                $chunks = explode('_', $template);
                $code = ((int)substr($chunks[0], 1));
            }

            // TODO: detect forms (upd: hmm?)
            // Result\Pokemon::FIELD_SHADOW => !empty($pokemon['shadow']),

            if (!$code) {
                die('Failed to get code for ' . $template . PHP_EOL);
            }

            $pid = Mods::getId($code);
            if (Mods::getForm($code) && in_array($pid, Forms::IGNORE_FORMS)) {
                continue;
            }

            $rp = RP::get($code)
                ->setTypes(
                    self::TYPE_TRANSLATE[$pokemon['type1']],
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

    protected function parseEvolutionBranch(string $template, array $branch): ResultEvolution
    {
        $this->checkBranch($branch);
        if (!empty($branch['form']) && !empty($this->forms[$branch['form']])) {
            $key = $branch['form'];
        } elseif (!empty($branch['form']) && !empty($this->forms[$branch['form'] . '_NORMAL'])) {
            $key = $branch['form'] . '_NORMAL';
        } elseif (!empty($this->forms[$branch['evolution']])) {
            $key = $branch['evolution'];
        } else {
            $key = $branch['evolution'] . '_NORMAL';
        }
        $evoId = $this->forms[$key];
        if (!$evoId) {
            var_dump($branch);
            echo 'Missing branch for form "', $branch['form'] ?? '', '", evolution "', $branch['evolution'], '"', PHP_EOL;
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
        $requires = ['uniqueId', 'type1', 'stats', 'quickMoves', 'cinematicMoves'];
        foreach ($requires as $require) {
            if (empty($pokemon[$require])) {
                echo 'WARNING: missing ', $require, ' field for ', $pokemon['uniqueId'], PHP_EOL;
            }
        }

        foreach ($pokemon as $k => $v) {
            if (!in_array($k, $this->pokemonKnownFields)) {
                echo 'WARNING: unknown field ', $k, ' for ', $pokemon['uniqueId'], PHP_EOL;
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
            $baseId = (int)substr($chunks[1], 1);
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
                                throw new Exception('Skip thrash pokemon');
                            default:

                                if (isset(self::FLAG2FORM[$baseId][$flags[$i]])) {
                                    $code |= self::FLAG2FORM[$baseId][$flags[$i]];
                                    break;
                                }
                                if (isset($flags[$i + 1])) {
                                    $tw = $flags[$i] . '_' . $flags[$i + 1];
                                    if (isset(self::FLAG2FORM[$baseId][$tw])) {
                                        $code |= self::FLAG2FORM[$baseId][$tw];
                                        ++$i;
                                        break;
                                    }
                                }
                                echo 'WARNING: unknown flag ', $flags[$i], ' (', $form, ')', PHP_EOL;
                                throw new Exception('Invalid flag');
                        }
                    }
                    $this->forms[$form] = $code;
                } catch (Exception $e) {
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

    protected $pokemonKnownFields = [
        'uniqueId',
        'form',
        'familyId',
        'type1',
        'type2',
        'cinematicMoves',
        'eliteCinematicMove',
        'quickMoves',
        'eliteQuickMove',
        'stats',
        'evolution',
        'evolutionBranch',
        'camera',
        'buddyGroupNumber',
        'buddyOffsetMale',
        'buddyOffsetFemale',
        'isTransferable',
        'isDeployable',
        'isTradable',
        'modelHeight',
        'modelScaleV2',
        'thirdMove',
        'pokedexHeightM',
        'pokedexWeightKg',
        'animTime',
        'heightStdDev',
        'weightStdDev',
        'modelScale',
        'buddyScale',
        'buddyPortraitOffset',
        'parentId',
        'kmBuddyDistance',
        'shadow',
        'encounter',
        'combatShoulderCameraAngle',
        'buddySize',
        'candyToEvolve',
        'evolutionPips',
        'pokemonClass',
        'combatDefaultCameraAngle',
        'combatPlayerFocusCameraAngle',
        'combatOpponentFocusCameraAngle',
        'combatPlayerPokemonPositionOffset',
        'buddyWalkedMegaEnergyAward',
        'tempEvoOverrides',
        'disableTransferToPokemonHome',
        'raidBossDistanceOffset'
    ];

    const FLAG2FORM = [
        Pokemon::MEWTWO => [
            'A' => Forms::MEWTWO_ARMORED
        ],
        Pokemon::CASTFORM => [
            'RAINY' => Forms::CASTFORM_RAINY,
            'SNOWY' => Forms::CASTFORM_SNOWY,
            'SUNNY' => Forms::CASTFORM_SUNNY
        ],
        Pokemon::DEOXYS => [
            'ATTACK' => Forms::DEOXYS_ATTACK,
            'DEFENSE' => Forms::DEOXYS_DEFENSE,
            'SPEED' => Forms::DEOXYS_SPEED
        ],
        Pokemon::BURMY => [
            'PLANT' => Forms::BURMY_PLANT,
            'TRASH' => Forms::BURMY_TRASH,
            'SANDY' => Forms::BURMY_SANDY
        ],
        Pokemon::WORMADAM => [
            'PLANT' => Forms::WORMADAM_PLANT,
            'TRASH' => Forms::WORMADAM_TRASH,
            'SANDY' => Forms::WORMADAM_SANDY
        ],
        Pokemon::CHERRIM => [
            'OVERCAST' => Forms::CHERRIM_OVERCAST,
            'SUNNY' => Forms::CHERRIM_SUNNY
        ],
        Pokemon::GIRATINA => [
            'ORIGIN' => Forms::GIRATINA_ORIGIN,
            'ALTERED' => Forms::GIRATINA_ALTERED
        ],
        Pokemon::ROTOM => [
            'FAN' => Forms::ROTOM_FAN,
            'FROST' => Forms::ROTOM_FROST,
            'HEAT' => Forms::ROTOM_HEAT,
            'MOW' => Forms::ROTOM_MOW,
            'WASH' => Forms::ROTOM_WASH
        ],
        Pokemon::SHELLOS => [
            'EAST_SEA' => Forms::SHELLOS_EAST_SEA,
            'WEST_SEA' => Forms::SHELLOS_WEST_SEA
        ],
        Pokemon::GASTRODON => [
            'EAST_SEA' => Forms::GASTRODON_EAST_SEA,
            'WEST_SEA' => Forms::GASTRODON_WEST_SEA
        ],
        Pokemon::SHAYMIN => [
            'LAND' => Forms::SHAYMIN_LAND,
            'SKY' => Forms::SHAYMIN_SKY
        ],
        Pokemon::ARCEUS => [
            'NORMAL' => Forms::ARCEUS_NORMAL,
            'BUG' => Forms::ARCEUS_BUG,
            'DARK' => Forms::ARCEUS_DARK,
            'DRAGON' => Forms::ARCEUS_DRAGON,
            'ELECTRIC' => Forms::ARCEUS_ELECTRIC,
            'FAIRY' => Forms::ARCEUS_FAIRY,
            'FIGHTING' => Forms::ARCEUS_FIGHTING,
            'FIRE' => Forms::ARCEUS_FIRE,
            'FLYING' => Forms::ARCEUS_FLYING,
            'GHOST' => Forms::ARCEUS_GHOST,
            'GRASS' => Forms::ARCEUS_GRASS,
            'GROUND' => Forms::ARCEUS_GROUND,
            'ICE' => Forms::ARCEUS_ICE,
            'POISON' => Forms::ARCEUS_POISON,
            'PSYCHIC' => Forms::ARCEUS_PSYCHIC,
            'ROCK' => Forms::ARCEUS_ROCK,
            'STEEL' => Forms::ARCEUS_STEEL,
            'WATER' => Forms::ARCEUS_WATER
        ],
        Pokemon::BASCULIN => [
            'BLUE_STRIPED' => Forms::BASCULIN_BLUE_STRIPED,
            'RED_STRIPED' => Forms::BASCULIN_RED_STRIPED
        ],
        Pokemon::DARMANITAN => [
            'STANDARD' => Forms::DARMANITAN_STANDARD,
            'ZEN' => Forms::DARMANITAN_ZEN
        ],
        Pokemon::KYUREM => [
            'BLACK' => Forms::KYUREM_BLACK,
            'WHITE' => Forms::KYUREM_WHITE
        ],
        Pokemon::DEERLING => [
            'SPRING' => Forms::DEERLING_SPRING,
            'SUMMER' => Forms::DEERLING_SUMMER,
            'AUTUMN' => Forms::DEERLING_AUTUMN,
            'WINTER' => Forms::DEERLING_WINTER
        ],
        Pokemon::SAWSBUCK => [
            'SPRING' => Forms::SAWSBUCK_SPRING,
            'SUMMER' => Forms::SAWSBUCK_SUMMER,
            'AUTUMN' => Forms::SAWSBUCK_AUTUMN,
            'WINTER' => Forms::SAWSBUCK_WINTER
        ],
        Pokemon::FRILLISH => [
            'NORMAL' => Forms::FRILLISH_MALE,
            'FEMALE' => Forms::FRILLISH_FEMALE
        ],
        Pokemon::JELLICENT => [
            'NORMAL' => Forms::JELLICENT_MALE,
            'FEMALE' => Forms::JELLICENT_FEMALE
        ],
        Pokemon::TORNADUS => [
            'INCARNATE' => Forms::TORNADUS_INCARNATE,
            'THERIAN' => Forms::TORNADUS_THERIAN
        ],
        Pokemon::THUNDURUS => [
            'INCARNATE' => Forms::THUNDURUS_INCARNATE,
            'THERIAN' => Forms::THUNDURUS_THERIAN
        ],
        Pokemon::LANDORUS => [
            'INCARNATE' => Forms::LANDORUS_INCARNATE,
            'THERIAN' => Forms::LANDORUS_THERIAN
        ],
        Pokemon::KELDEO => [
            'ORDINARY' => Forms::KELDEO_ORDINARY,
            'RESOLUTE' => Forms::KELDEO_RESOLUTE
        ],
        Pokemon::MELOETTA => [
            'ARIA' => Forms::MELOETTA_ARIA,
            'PIROUETTE' => Forms::MELOETTA_PIROUETTE
        ],
        Pokemon::GENESECT => [
            'BURN' => Forms::GENESECT_BURN,
            'CHILL' => Forms::GENESECT_CHILL,
            'DOUSE' => Forms::GENESECT_DOUSE,
            'SHOCK' => Forms::GENESECT_SHOCK
        ],
        Pokemon::PYROAR => [
            'NORMAL' => Forms::PYROAR_MALE,
            'FEMALE' => Forms::PYROAR_FEMALE
        ],
        Pokemon::MEOWSTIC => [
            'NORMAL' => Forms::MEOWSTIC_MALE,
            'FEMALE' => Forms::MEOWSTIC_FEMALE
        ]
    ];

}
