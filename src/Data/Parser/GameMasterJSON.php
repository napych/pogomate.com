<?php

namespace Pogo\Data\Parser;

use Pogo\Data\Result;
use Pogo\General\Types;

class GameMasterJSON
{
    const FILE = __DIR__ . '/../blobs/master/1595879989869.json';
    const IGNORE_KEYS = [
        'templateId',
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
        'formSettings',
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

    /** @var Result */
    protected $result = null;
    /** @var int */
    protected $batch = null;

    public function __construct()
    {
        $this->result = new Result();
    }

    public function getResult()
    {
        return $this->result;
    }

    public function parse($file = self::FILE)
    {
        $data = $this->prepare($file);

        $this->parseTypeEffectives($data['typeEffective']);
        unset($data['typeEffective']);

        $this->parseCombatMoves($data['combatMove']);
        $this->parseMoves($data['move']);
        unset($data['combatMove']);
        unset($data['move']);

        if (!empty($data)) {
            echo '*** WARNING *** parse data has keys left: ' . implode(', ', array_keys($data)), PHP_EOL;
        }
    }

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
                default:
                    throw new \Exception("Unknown level 1 entry: " . $k);
            }
        }
        return $templates;
    }

    /**
     * @param array[] $templates
     * @return array[]
     * @throws \Exception
     */
    protected function prepareTemplates(array $templates)
    {
        $stackedData = [];
        foreach ($templates as $template) {
            if (empty($template['templateId'])) {
                throw new \Exception('Missing templateId');
            }
            if (empty($template['data'])) {
                throw new \Exception('Empty template data');
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
        return $stackedData;
    }

    public $moves = [];
    const MOVE_TYPE_TRANSLATE = [
        'ATTACK_01' => Result\Moves::MOVES_TYPE_FAST,
        'ATTACK_02' => Result\Moves::MOVES_TYPE_CHARGE
    ];
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

//    protected $move2id = [];

    public function parseMoves(array $data)
    {
        foreach ($data as $template => $move) {
            $chunks = explode('_', $template);
            $id = (int)substr($chunks[0], 1);
//            $this->move2id[$move['movementId']] = $id;

            $movementId = $move['movementId'];
            if (!isset($this->pvpMoves[$movementId])) {
                echo 'WARNING: missing combatMove data for ', $movementId, PHP_EOL;
            }

            $this->result->moves->add(
                $id,
                [
                    Result\Moves::FIELD_CONST => 'MOVE_' . $movementId,
                    Result\Moves::FIELD_CLASS => static::MOVE_TYPE_TRANSLATE[$move['animationId']],
                    Result\Moves::FIELD_TYPE => static::TYPE_TRANSLATE[$move['pokemonType']],
                    Result\Moves::FIELD_POWER => $move['power'],
                    Result\Moves::FIELD_ACCURACY => $move['accuracyChance'],
                    Result\Moves::FIELD_CRIT => $move['criticalChance'],
                    Result\Moves::FIELD_ENERGY => $move['energyDelta'],
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
        /*
        $data = {
            "uniqueId" => "WRAP",
            "type" => "POKEMON_TYPE_NORMAL",
            "power" => 60.0,
            "vfxName" => "wrap",
            "energyDelta" => -45
        }
         */
        foreach ($data as $move) {
            $this->pvpMoves[$move['uniqueId']] = [
                'power' => $move['power'],
                'energy' => $move['energy']
            ];
        }
    }

    public function parsePokemon(string $template, array $data)
    {
        /*
        $data = [
          'templateId' => 'V0001_POKEMON_BULBASAUR',
          'pokemon' => [
            'uniqueId' => 'BULBASAUR',
            'modelScale' => 1.09,
            'type1' => 'POKEMON_TYPE_GRASS',
            'type2' => 'POKEMON_TYPE_POISON',
            'camera' => [
              'diskRadiusM' => 0.5723,
              'cylinderRadiusM' => 0.5,
              'cylinderHeightM' => 0.763,
              'shoulderModeScale' => 0.5,
            ],
            'encounter' => [
              'baseCaptureRate' => 0.2,
              'baseFleeRate' => 0.1,
              'collisionRadiusM' => 0.3815,
              'collisionHeightM' => 0.654,
              'collisionHeadRadiusM' => 0.2725,
              'movementType' => 'MOVEMENT_JUMP',
              'movementTimerS' => 10.0,
              'jumpTimeS' => 1.15,
              'attackTimerS' => 29.0,
              'attackProbability' => 0.1,
              'dodgeProbability' => 0.15,
              'dodgeDurationS' => 1.0,
              'dodgeDistance' => 1.0,
              'cameraDistance' => 3.75,
              'minPokemonActionFrequencyS' => 0.2,
              'maxPokemonActionFrequencyS' => 1.6,
            ],
            'stats' => [
              'baseStamina' => 128,
              'baseAttack' => 118,
              'baseDefense' => 111,
            ],
            'quickMoves' => [
              'VINE_WHIP_FAST',
              'TACKLE_FAST',
            ],
            'cinematicMoves' => [
              'SLUDGE_BOMB',
              'SEED_BOMB',
              'POWER_WHIP',
            ],
            'animTime' => [1.6667, 0.6667, 1.6667, 1.8333, 0.0, 2.1667, 1.4, 1.466667],
            'evolution' => ['IVYSAUR'],
            'evolutionPips' => 1,
            'pokedexHeightM' => 0.7,
            'pokedexWeightKg' => 6.9,
            'heightStdDev' => 0.0875,
            'weightStdDev' => 0.8625,
            'familyId' => 'FAMILY_BULBASAUR',
            'candyToEvolve' => 25,
            'kmBuddyDistance' => 3.0,
            'modelHeight' => 0.7,
            'evolutionBranch' => [
              [
                'evolution' => 'IVYSAUR',
                'candyCost' => 25,
                'form' => 'IVYSAUR_NORMAL',
              ],
            ],
            'modelScaleV2' => 0.89,
            'buddyOffsetMale' => [0.0, 0.0, 0.0],
            'buddyOffsetFemale' => [0.0, 0.0, 0.0],
            'buddyScale' => 19.0,
            'thirdMove' => [
              'stardustToUnlock' => 10000,
              'candyToUnlock' => 25,
            ],
            'isTransferable' => true,
            'isDeployable' => true,
            'buddyGroupNumber' => 2,
          ],
        ]
         */
        // todo
    }

    public function parsePokemonForms(string $template, array $data)
    {
        /*
        $data = [
          'templateId' => 'FORMS_V0001_POKEMON_BULBASAUR',
          'formSettings' => [
            'pokemon' => 'BULBASAUR',
            'forms' => [
                ['form' => 'BULBASAUR_NORMAL'],
                ['form' => 'BULBASAUR_SHADOW'],
                ['form' => 'BULBASAUR_PURIFIED'],
                [
                    'form' => 'BULBASAUR_FALL_2019'
                    'assetBundleSuffix' => 'pm0001_00_pgo_fall2019',
                ],
            ]
        ];
         */
        // todo
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
        /*
        $data = [
            'attackScalar' => [1.0, 0.625, 0.625, 0.625, 1.0, 1.0, 1.0, 0.625, 0.625, 0.625, 1.0, 1.6, 1.0, 1.6, 1.0, 1.0, 1.6, 0.625],
            'attackType' => 'POKEMON_TYPE_BUG',
        ];
         */
        foreach ($data as $templateName => $effective) {
            foreach ($effective['attackScalar'] as $k => $v) {
                $this->result->types->setEffectiveness(self::TYPE_TRANSLATE[$effective['attackType']], self::TYPE_ORDER_TRANSLATE[$k], $v);
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
