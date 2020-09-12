#!/usr/bin/env php
<?php

require(__DIR__ . '/../vendor/autoload.php');

use Symfony\Component\Console\Output\ConsoleOutput;
use Pogo\Misc\Commands;

//\Difra\Envi\Roots::setData('/home/vhost/drafton.com/data');

$app = new \Symfony\Component\Console\Application();
$app->addCommands([
    new Commands\Data\GameMaster(),
//    new Commands\API\Live(),
//    new Commands\API\Long(),
//    new Commands\API\Injuries(),
//    new Commands\API\MediaNews(),
//    new Commands\API\Refresh(),
//    new Commands\Queue\Enable(),
//    new Commands\Queue\Disable(),
//    new Commands\Queue\Restart(),
//    new Commands\Queue\Run(),
//    new Commands\Queue\Clear(),
//    new Commands\Tools\Maintenance(),
//    new Commands\Tools\Price(),
//    new Commands\Tools\Set(),
//    new Commands\Tools\Premium(),
//    new Commands\Tools\Mailing(),
//    new Commands\Tools\MailingCustomHtml(),
//    new Commands\Tools\Results(),
//    new Commands\Tools\Ban(),
//    new Commands\Edit\Contest(),
//
//    // TODO: refactor / remove following:
//    new Commands\API\Import\StreamCommand()
]);
$output = new ConsoleOutput();
$app->run(null, $output);
