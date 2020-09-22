<?php

namespace Pogo\Misc\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Sitemap extends Command
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
            ->setName('sitemap')
            ->setDescription('Generate sitemaps');
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
        \Pogo\Mate\Sitemap::writeAll();
        return 0;
    }
}
