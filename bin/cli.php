#!/usr/bin/env php
<?php
declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

use Symfony\Component\Console\Output\ConsoleOutput;
use Pogo\Misc\Commands;

ini_set('display_errors', 'on');
ini_set('error_reporting', (string)E_ALL);

$app = new \Symfony\Component\Console\Application();
$app->addCommands([
    new Commands\Data\GameMaster(),
    new Commands\Data\GamePress(),
    new Commands\Sitemap(),
    new Commands\Ranks()
]);
$output = new ConsoleOutput();
$app->run(null, $output);
