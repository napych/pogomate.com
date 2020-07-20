<?php

require(dirname(__FILE__) . '/vendor/autoload.php');

try {
    ini_set('display_errors', 'on');
    $lists = \Pogo\Data\Lists::getAll();
    $all = new \Pogo\Strings();
    $all->addLists($lists);

    echo('<h2>Strings</h2>');

    echo('<h3>Cleanup candidates</h3>');
    echo('<p>!4*&cp0-1999&!shiny&!lucky&!legendary&!mythical&!@special&' . $all->getExcludeString() . '</p>');

    foreach ($lists as $name => $list) {
        echo("<h3>$name</h3>");
        $single = new \Pogo\Strings();
        $single->addList($list);
        echo($single->getIncludeString());
    }

    echo('<h2>Explanation</h2>');
    $all->showReasons();

} catch (\Exception $e) {
    echo('Exception: ' . $e->getMessage());
}
