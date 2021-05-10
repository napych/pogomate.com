<?php

namespace Pogo\Misc\Commands\Data;

use Pogo\Data\GamePress\ParseDefenders;
use Pogo\Data\GamePress\ParseGL;
use Pogo\Data\GamePress\ParsePVE;
use Pogo\Data\GamePress\ParseTop;
use Pogo\Data\GamePress\ParseUL;
use Pogo\Data\GamePress\ParseML;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Ban
 * @package Drafton\Commands\Tools
 */
class GamePress extends Command
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
            ->setName('data:gamepress')
            ->setDescription('Load and process GamePress lists');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sleep = 5;
        echo 'Parsing GL', PHP_EOL;
        ParseGL::run();
        echo 'Sleeping for ', $sleep, 's', PHP_EOL;
        sleep($sleep);
        echo 'Parsing UL', PHP_EOL;
        ParseUL::run();
        echo 'Sleeping for ', $sleep, 's', PHP_EOL;
        sleep($sleep);
        echo 'Parsing ML', PHP_EOL;
        ParseML::run();
        echo 'Sleeping for ', $sleep, 's', PHP_EOL;
        sleep($sleep);
        echo 'Parsing Attackers', PHP_EOL;
        ParsePVE::run();
        echo 'Sleeping for ', $sleep, 's', PHP_EOL;
        sleep($sleep);
        echo 'Parsing Top By Type', PHP_EOL;
        ParseTop::run();
        echo 'Sleeping for ', $sleep, 's', PHP_EOL;
        sleep($sleep);
        echo 'Parsing Defenders', PHP_EOL;
        ParseDefenders::run();
        return 0;
    }
}
