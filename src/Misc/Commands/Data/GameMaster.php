<?php

namespace Pogo\Misc\Commands\Data;

use Pogo\Data\Parser\Generator\ResultPokemon;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Ban
 * @package Drafton\Commands\Tools
 */
class GameMaster extends Command
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
            ->setName('data:master')
            ->setDescription('Process Game Master files');
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
//        if ($input->getOption('user')) {
//            $user = User::getByLogin($input->getOption('user'));
//            \Drafton\Security\Ban::singleUser($user);
//        }
        $parser =  new \Pogo\Data\Parser\GameMasterJSON();
        $parser->parse();
        ResultPokemon::writePHP();
        $result = $parser->getResult();
        $result->writePHP();
        return 0;
    }
}
