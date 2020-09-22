#!/usr/bin/env php
<?php

require(__DIR__ . '/../vendor/autoload.php');

use Symfony\Component\Console\Output\ConsoleOutput;
use Pogo\Misc\Commands;

//\Difra\Envi\Roots::setData('/home/vhost/drafton.com/data');

$app = new \Symfony\Component\Console\Application();
$app->addCommands([
    new Commands\Data\GameMaster(),
    new Commands\Sitemap()
]);
$output = new ConsoleOutput();
$app->run(null, $output);
