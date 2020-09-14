<?php

namespace Controller;

use Difra\Ajaxer;
use Difra\Libs\Cookies;
use Difra\Param\AjaxCheckbox;
use Difra\Param\AjaxData;

class Cleanup extends \Difra\Controller
{
    protected function indexAction()
    {
        $this->setTitle('Pokémon storage cleanup search strings');
        $this->setDescription('Use a search string to clean up your pokémon storage fast');
        $this->setKeywords('pokémon go, pogo tools, pokémon cleanup, storage cleanup, search strings');

        // get form values/defaults
        if (empty($_COOKIE['cleanup'])) {
            $cleanup = [
                'perfect' => 1,
                'shiny' => 1,
                'lucky' => 1,
                'legendary' => 1,
                'mythical' => 1,
                'special' => 1,
//                'cp' => 2000,
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
        foreach (\Pogo\Lists::getAll() as $data) {
            if (empty($data[\Pogo\Lists::ENT_CLEANUP])) {
                continue;
            }
            $tag = $data[\Pogo\Lists::ENT_TAG];
            $cleanup['list'][$tag] = (isset($listArr[$tag]) ? $listArr[$tag] : $data[\Pogo\Lists::ENT_DEFAULT]) ? 1 : 0;
        }

        // fill XML with form values/defaults
        $node = $this->root->appendChild($this->xml->createElement('page-cleanup'));
        /** @var \DOMElement $cleanupNode */
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

        \Pogo\Lists::getAllXML($node, true);

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
//        if ($cleanup['cp']) {
//            $result[] = 'cp-' . ($cleanup['cp'] - 1);
//        }

        $lists = \Pogo\Lists::getAll();
        $strings = new \Pogo\Mate\Strings();
        foreach ($lists as $list) {
            if ($list[\Pogo\Lists::ENT_CLEANUP] && $cleanup['list'][$list[\Pogo\Lists::ENT_TAG]]) {
                $strings->addList($list);
            }
        }
        $result[] = $strings->getExcludeString();

        $node->setAttribute('cleanup', implode('&', $result));
    }

    protected function indexAjaxAction(
        AjaxCheckbox $perfect,
        AjaxCheckbox $shiny,
        AjaxCheckbox $lucky,
        AjaxCheckbox $legendary,
        AjaxCheckbox $mythical,
        AjaxCheckbox $special,
//        AjaxInt $cp = null,
        AjaxData $list = null
    ) {
//        if ($cp && $cp->val() < 100) {
//            Ajaxer::invalid('cp');
//            return;
//        }
        $cleanup = [
            'perfect' => $perfect->val(),
            'shiny' => $shiny->val(),
            'lucky' => $lucky->val(),
            'legendary' => $legendary->val(),
            'mythical' => $mythical->val(),
            'special' => $special->val(),
//            'cp' => $cp ? $cp->val() : 0,
            'list' => []
        ];
        $listArr = $list ? $list->val() : '';
        foreach (\Pogo\Lists::getAll() as $data) {
            $tag = $data[\Pogo\Lists::ENT_TAG];
            $cleanup['list'][$tag] = (isset($listArr[$tag]) ? $listArr[$tag] : $data[\Pogo\Lists::ENT_DEFAULT]) ? 1 : 0;
        }
        $cookies = Cookies::getInstance();
        $cookies->setExpire(time() + 60 * 60 * 24 * 365 * 10);
        $cookies->set('cleanup', $cleanup);
        Ajaxer::reload();
    }
}
