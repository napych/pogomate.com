<?php

namespace Pogo\Data\Parser;

use Pogo\Data\Result;
use Pogo\General\Types;

class GameMasterJSON
{
    const FILE = __DIR__ . '/../blobs/master/1595879989869.json';

    /** @var Result */
    protected $result = null;

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
        $data = json_decode(file_get_contents(self::FILE), true);
        foreach ($data as $k => $v) {
            switch ($k) {
                case 'template':
                    $this->parseTemplates($v);
                    break;
                case 'batchId': // timestamp
                case 'experimentId': // strange int[]
                    break;
                default:
                    throw new \Exception("Unknown level 1 entry: " . $k);
            }
        }
    }

    public function parseTemplates($templates)
    {
        foreach ($templates as $template) {
            $this->parseTemplate($template);
        }
    }

    /**
     * @param $template
     * @throws \Exception
     */
    public function parseTemplate($template)
    {
        if (empty($template['templateId'])) {
            throw new \Exception('Missing templateId');
        }
        if (empty($template['data'])) {
            throw new \Exception('Empty template data');
        }
        $templateId = $template['templateId'];
        foreach ($template['data'] as $k => $v) {
            // todo: sort data by $k first
            // todo: process blocks one by one
            switch ($k) {
                case 'combatMove':
                    $this->parseCombatMove($templateId, $v);
                    break;
                case 'weatherAffinities':
                    $this->parseWeatherAffinity($templateId, $v);
                    break;
                case 'typeEffective':
                    $this->parseType($templateId, $v);
                    break;
                case 'pokemon':
                    $this->parsePokemon($templateId, $v);
                    break;
                case 'move':
                    $this->parseMove($templateId, $v);
                    break;
                case 'templateId':
                case 'avatarGroupOrderSettings':
                case 'avatarCustomization':
                case 'backgroundModeSettings':
                case 'badge':
                case 'battleHubBadgeSettings':
                case 'battleHubOrderSettings':
                case 'battleSettings':
                case 'belugaPokemonWhitelist':
                case 'buddyActivitySettings':
                case 'buddyActivityCategorySettings':
                case 'buddyEmotionLevelSettings':
                case 'buddyEncounterCameoSettings':
                case 'buddyHungerSettings':
                case 'buddyInteractionSettings':
                case 'buddyLevelSettings':
                case 'buddySwapSettings':
                case 'buddyWalkSettings':
                case 'invasionNpcDisplaySettings':
                case 'combatCompetitiveSeasonSettings':
                case 'combatLeague':
                case 'combatLeagueSettings':
                case 'combatType':
                case 'combatRankingProtoSettings':
                case 'combatSettings':
                case 'combatStatStageSettings':
                case 'encounterSettings':
                case 'gymBadgeSettings':
                case 'gymLevel':
                case 'iapSettings':
                case 'item':
                case 'luckyPokemonSettings':
                case 'pokemonScaleSettings':
                case 'questSettings':
                case 'weatherBonusSettings': // weather bonuses, multipliers, etc.
                case 'iapItemDisplay':
                case 'camera':
                case 'moveSequence':
                case 'crossGameSocialSettings':
                case 'exRaidSettings':
                case 'formSettings':
                case 'friendshipMilestoneSettings':
                case 'iapCategoryDisplay':
                case 'pokestopInvasionAvailabilitySettings':
                case 'limitedPurchaseSkuSettings':
                case 'mapDisplaySettings':
                case 'monodepthSettings':
                case 'onboardingV2Settings':
                case 'partyRecommendationSettings':
                case 'platypusRolloutSettings':
                case 'playerLevel':
                case 'pokecoinPurchaseDisplayGmt':
                case 'pokemonUpgrades': // cost to lvl up
                case 'raidSettingsProto':
                case 'smeargleMovesSettings':
                case 'genderSettings': // male to female ratio
                case 'sponsoredGeofenceGiftSettings':
                case 'stickerMetadata':
                case 'combatNpcTrainer':
                case 'combatNpcPersonality':
                case 'vsSeekerClientSettings':
                case 'vsSeekerLootProto':
                case 'vsSeekerPokemonRewards':
                case 'adventureSyncV2Gmt':
                    break;
                default:
                    throw new \Exception("Unknown template key: " . $k);
            }
        }
    }

    public function parseCombatMove(string $template, array $data)
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
        // todo
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

    protected $move2id = [];

    public function parseMove(string $template, array $move)
    {
        if (empty($move['movementId'])) {
            throw new \Exception('Missing movementId');
        }
        $chunks = explode('_', $template);
        $id = (int)substr($chunks[0], 1);
        $this->move2id[$move['movementId']] = $id;
        if (empty($move['animationId'])) {
            throw new \Exception('Missing animationId');
        }
        if (!isset(static::MOVE_TYPE_TRANSLATE[$move['animationId']])) {
            throw new \Exception('Unknown animationId: ' . $move['animationId']);
        }
        if (!isset(static::TYPE_TRANSLATE[$move['pokemonType']])) {
            throw new \Exception('Unknown pokemonType: ' . $move['pokemonType']);
        }
        $this->result->moves->add(
            $id,
            [
                Result\Moves::FIELD_CONST => 'MOVE_' . $move['movementId'],
                Result\Moves::FIELD_CLASS => static::MOVE_TYPE_TRANSLATE[$move['animationId']],
                Result\Moves::FIELD_TYPE => static::TYPE_TRANSLATE[$move['pokemonType']],
                Result\Moves::FIELD_POWER => $move['power'],
                Result\Moves::FIELD_ACCURACY => $move['accuracyChance'],
                Result\Moves::FIELD_CRIT => $move['criticalChance'],
                Result\Moves::FIELD_ENERGY => $data['energyDelta'],
//                'staminaLossScalar' => 0.06
//                'trainerLevelMin' => 1,
//                'trainerLevelMax' => 100,
//                'vfxName' => 'wrap',
//                'durationMs' => 2900,
//                'damageWindowStartMs' => 2050,
//                'damageWindowEndMs' => 2700,
            ]
        );
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

    public function parseType(string $template, array $data)
    {
        /*
        $data = [
          'templateId' => 'POKEMON_TYPE_BUG',
          'typeEffective' => [
            'attackScalar' => [1.0, 0.625, 0.625, 0.625, 1.0, 1.0, 1.0, 0.625, 0.625, 0.625, 1.0, 1.6, 1.0, 1.6, 1.0, 1.0, 1.6, 0.625],
            'attackType' => 'POKEMON_TYPE_BUG',
          ]
        ];
         */
        // todo
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