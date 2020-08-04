<?php

require(dirname(__FILE__) . '/../vendor/autoload.php');
\Difra\Events\Event::getInstance(\Difra\Tools\Sitemap::EVENT_NAME)->registerHandler([\Pogo\Sitemap::class, 'fill']);
\Difra::main();