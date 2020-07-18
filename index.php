<?php

require(dirname(__FILE__) . '/vendor/autoload.php');

try {
    \Pogo\Strings::run();
} catch (\Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}
