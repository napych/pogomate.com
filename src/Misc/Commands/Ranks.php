<?php

declare(strict_types=1);

namespace Pogo\Misc\Commands;

use Pogo\Data\Generated\PokemonData;
use Pogo\Mate\Rank\RankList;
use Pogo\Pokemon;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Ranks extends Command
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
            ->setName('ranks')
            ->setDescription('Refill PVP ranks');
//            ->addOption('user', 'u', InputOption::VALUE_OPTIONAL, 'Ban user with login');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $total = sizeof(PokemonData::POKEMON);
        $current = 0;
        unlink('bin/ranks.sql');
        foreach (PokemonData::POKEMON as $code => $data) {
            if ($data[PokemonData::FIELD_ATTACK] && $data[PokemonData::FIELD_DEFENSE] && $data[PokemonData::FIELD_STAMINA]) {
                echo $code, ': ', $data[PokemonData::FIELD_NAME], ' (', round($current / $total * 100, 2), '%)';
                RankList::generate(Pokemon::get($code));
                echo PHP_EOL;
            }
            ++$current;
        }
        return 0;
    }
}
