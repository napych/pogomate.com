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
        $templateName = $template['templateId'];
        $data = $template['data'];

        // full match
        switch ($templateName) {
            case 'BACKGROUND_MODE_SETTINGS':
            case 'BELUGA_POKEMON_WHITELIST':
            case 'COMBAT_COMPETITIVE_SEASON_SETTINGS':
            case 'COMBAT_RANKING_SETTINGS':
            case 'COMBAT_SETTINGS':
            case 'COMBAT_STAT_STAGE_SETTINGS':
            case 'CROSS_GAME_SOCIAL_SETTING':
            case 'ENCOUNTER_SETTINGS':
            case 'EX_RAID_SETTINGS':
            case 'GYM_BADGE_SETTINGS':
            case 'GYM_LEVEL_SETTINGS':
            case 'LUCKY_POKEMON_SETTINGS':
            case 'MAP_DISPLAY_SETTINGS':
            case 'MONODEPTH_SETTINGS':
            case 'ONBOARDING_V2_SETTINGS':
            case 'PARTY_RECOMMENDATION_SETTINGS':
            case 'PLATYPUS_ROLLOUT_SETTINGS':
            case 'PLAYER_LEVEL_SETTINGS':
            case 'POKECOIN_PURCHASE_DISPLAY_GMT':
            case 'POKEMON_UPGRADE_SETTINGS':
            case 'QUEST_FIRST_CATCH_OF_THE_DAY':
            case 'QUEST_FIRST_POKESTOP_OF_THE_DAY':
            case 'RAID_CLIENT_SETTINGS':
            case 'SMEARGLE_MOVES_SETTINGS':
            case 'SPONSORED_GEOFENCE_GIFT_SETTINGS':
            case 'WEATHER_BONUS_SETTINGS':
            case 'adventure_sync_v2_gmt':
                return;
        }

        $chunks = explode('_', $templateName);
        if (sizeof($chunks) == 1) {
            $chunks = explode('.', $templateName);
        }

        // first word match
        switch ($chunks[0]) {
            case 'AVATAR':
            case 'AWARDS':
            case 'BADGE':
            case 'BATTLE':
            case 'BUDDY':
            case 'CHARACTER':
            case 'IAP':
            case 'INVASION':
            case 'ITEM':
            case 'LPSKU':
            case 'STICKER':
            case 'TRAINER': // trainer battles pokemon teams
            case 'bundle':
            case 'camera':
            case 'general1':
            case 'incenseordinary':
            case 'itemleadermap':
            case 'sequence':
                return;
        }

        // first two words match
        switch ($chunks[0] . '_' . $chunks[1]) {
            case 'COMBAT_LEAGUE':
            case 'FRIENDSHIP_LEVEL':
            case 'VS_SEEKER': // Battle league combat rewards
                return;
            case 'POKEMON_TYPE':
                $this->parseType($chunks, $data);
                return;
            case 'WEATHER_AFFINITY':
                $this->parseWeatherAffinity($chunks, $data);
                return;
        }

        // first and third words match
        switch ($chunks[0] . '_' . $chunks[2]) {
            case 'COMBAT_MOVE':
                $this->parseCombatMove($chunks, $data);
                return;
            case 'FORMS_POKEMON':
                $this->parsePokemonForms($chunks, $data);
                return;
            case 'SPAWN_POKEMON': // male / female ratio
                return;
        }

        // three words match
        switch ($chunks[0] . '_' . $chunks[1] . '_' . $chunks[2]) {
            case 'COMBAT_POKEMON_TYPE':
            case 'POKEMON_SCALE_SETTINGS':
                return;
        }

        // first word is an ID and second word match
        if ($chunks[0]{0} === 'V' && ctype_digit(substr($chunks[0], 1))) {
            switch ($chunks[1]) {
                case 'POKEMON':
                    $this->parsePokemon($chunks, $data);
                    return;
                case 'MOVE':
                    $this->parseMove($chunks, $data);
                    return;
            }
        }

        throw new \Exception("Unknown templateId: " . $templateName);
    }

    /**
     * @param string[] $chunks
     * @param array $data
     */
    public function parseCombatMove(array $chunks, array $data)
    {
        /*
        $data = {
            "templateId" => "COMBAT_V0013_MOVE_WRAP",
            "combatMove" => {
                "uniqueId" => "WRAP",
                "type" => "POKEMON_TYPE_NORMAL",
                "power" => 60.0,
                "vfxName" => "wrap",
                "energyDelta" => -45
            }
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

    public function parseMove(array $chunks, array $data)
    {
        /*
        $data = {
            "templateId" => "V0013_MOVE_WRAP",
            "move" => {
                'movementId' => 'WRAP',
                'animationId' => 'ATTACK_02',
                'pokemonType' => 'POKEMON_TYPE_NORMAL',
                'power' => 60.0,
                'accuracyChance' => 1.0,
                'criticalChance' => 0.05,
                'staminaLossScalar' => 0.06,
                'trainerLevelMin' => 1,
                'trainerLevelMax' => 100,
                'vfxName' => 'wrap',
                'durationMs' => 2900,
                'damageWindowStartMs' => 2050,
                'damageWindowEndMs' => 2700,
                'energyDelta' => -33
            }
        }
         */
        $id = (int)substr($chunks[0], 1);
        if (empty($data['move']['movementId'])) {
            throw new \Exception('Missing movementId');
        }
        $this->move2id[$data['move']['movementId']] = $id;
        if (empty($data['move']['animationId'])) {
            throw new \Exception('Missing animationId');
        }
        if (!isset(static::MOVE_TYPE_TRANSLATE[$data['move']['animationId']])) {
            throw new \Exception('Unknown animationId: ' . $data['move']['animationId']);
        }
        if (!isset(static::TYPE_TRANSLATE[$data['move']['pokemonType']])) {
            throw new \Exception('Unknown pokemonType: ' . $data['move']['pokemonType']);
        }
        $this->result->moves->add(
            $id,
            [
                Result\Moves::FIELD_CONST => 'MOVE_' . $data['move']['movementId'],
                Result\Moves::FIELD_CLASS => static::MOVE_TYPE_TRANSLATE[$data['move']['animationId']],
                Result\Moves::FIELD_TYPE => static::TYPE_TRANSLATE[$data['move']['pokemonType']],
                Result\Moves::FIELD_POWER => $data['move']['power'],
                Result\Moves::FIELD_ACCURACY => $data['move']['accuracyChance'],
                Result\Moves::FIELD_CRIT => $data['move']['criticalChance'],
            ]
        );
    }

    public function parsePokemon(array $chunks, array $data)
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

    public function parsePokemonForms(array $chunks, array $data)
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

    public function parseType(array $chunks, array $data)
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

    public function parseWeatherAffinity(array $chunks, $data)
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