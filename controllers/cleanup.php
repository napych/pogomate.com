<?php

namespace Controller;

use Difra\Param\AjaxCheckbox;
use Difra\Param\AjaxData;
use Difra\Param\AjaxInt;

class Cleanup extends \Difra\Controller
{
    protected function indexAction(
        AjaxCheckbox $submit,
        AjaxCheckbox $perfect,
        AjaxCheckbox $shiny,
        AjaxCheckbox $lucky,
        AjaxCheckbox $legendary,
        AjaxCheckbox $mythical,
        AjaxCheckbox $special,
        AjaxData $list = null,
        AjaxInt $cp = null
    ) {
        $this->setTitle('Pokémon storage cleanup search strings');
        $this->setDescription('Use a search string to clean up your pokémon storage fast');
        $this->setKeywords('pokémon go, pogo tools, pokémon cleanup, storage cleanup, search strings');

        // get form values/defaults
        if ($submit->val()) {
            $cleanup = [
                'perfect' => $perfect->val(),
                'shiny' => $shiny->val(),
                'lucky' => $lucky->val(),
                'legendary' => $legendary->val(),
                'mythical' => $mythical->val(),
                'special' => $special->val(),
                'cp' => $cp->val(),
                'list' => []
            ];
            $listArr = $list ? $list->val() : '';
        } elseif (empty($_COOKIE['cleanup'])) {
            $cleanup = [
                'perfect' => 1,
                'shiny' => 1,
                'lucky' => 1,
                'legendary' => 1,
                'mythical' => 1,
                'special' => 1,
                'cp' => 2000,
                'list' => []
            ];
            $listArr = [];
        } else {
            $cleanup = json_decode(rawurldecode($_COOKIE['cleanup']), true);
            if (isset($cleanup['list'])) {
                $listArr = $cleanup['list'];
                $cleanup['list'] = [];
            }
        }
        foreach (\Pogo\Data\Lists::getAll() as $data) {
            $tag = $data[\Pogo\Data\Lists::ENT_TAG];
            $cleanup['list'][$tag] = (isset($listArr[$tag]) ? $listArr[$tag] : $data[\Pogo\Data\Lists::ENT_DEFAULT]) ? 1 : 0;
        }
        \Difra\Libs\Cookies::getInstance()->set('cleanup', $cleanup);

        // fill XML with form values/defaults
        $node = $this->root->appendChild($this->xml->createElement('page-cleanup'));
        $cleanupNode = $node->appendChild($node->ownerDocument->createElement('cleanup-defaults'));
        foreach ($cleanup as $name => $value) {
            if (!is_array($value)) {
                $cleanupNode->setAttribute($name, $value);
            } elseif ($name === 'list') {
                foreach ($value as $tag => $enabled) {
                    /** @var \DOMElement $subNode */
                    $subNode = $cleanupNode->appendChild($cleanupNode->ownerDocument->createElement('list'));
                    $subNode->setAttribute('tag', $tag);
                    $subNode->setAttribute('enabled', $enabled);
                }
            }
        }

        \Pogo\Data\Lists::getAllXML($node, true);

        $result = [];
        if ($cleanup['perfect']) {
            $result[] = '!4*';
        }
        if ($cleanup['shiny']) {
            $result[] = '!shiny';
        }
        if ($cleanup['lucky']) {
            $result[] = '!lucky';
        }
        if ($cleanup['legendary']) {
            $result[] = '!legendary';
        }
        if ($cleanup['mythical']) {
            $result[] = '!mythical';
        }
        if ($cleanup['special']) {
            $result[] = '!@special,@frustration,@return';
        }

        $lists = \Pogo\Data\Lists::getAll();
        $strings = new \Pogo\Strings();
        $enabledLists = [];
        foreach ($lists as $list) {
            if ($cleanup['list'][$list[\Pogo\Data\Lists::ENT_TAG]]) {
                $strings->addList($list);
            }
        }
        $result[] = $strings->getExcludeString();

        $node->setAttribute('cleanup', implode('&', $result));
    }
}