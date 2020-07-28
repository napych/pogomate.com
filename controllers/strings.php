<?php

namespace Controller;

use Difra\View\HttpError;

class Strings extends \Difra\Controller
{
    protected function indexAction()
    {
        $node = $this->root->appendChild($this->xml->createElement('page-strings'));
        try {
            $lists = \Pogo\Data\Lists::getAll();
            $all = new \Pogo\Strings();
            $all->addLists($lists);

            $node->setAttribute('cleanup', '!4*&cp0-1999&!shiny&!lucky&!legendary&!mythical&!@special&' . $all->getExcludeString());

            foreach ($lists as $name => $list) {
                $single = new \Pogo\Strings();
                $single->addList($list);
                $listNode = $node->appendChild($this->xml->createElement('list'));
                $listNode->setAttribute('name', $name);
                $listNode->setAttribute('string', $single->getIncludeString());
            }

            $reasons = $all->getReasons();
            foreach ($reasons as $name => $reasonList) {
                $reasonNode = $node->appendChild($this->xml->createElement('reasons'));
                $reasonNode->setAttribute('name', $name);
                foreach ($reasonList as $reasonEntry) {
                    $entryNode = $reasonNode->appendChild($this->xml->createElement('reason'));
                    $entryNode->setAttribute('text', $reasonEntry);
                }
            }
        } catch (\Exception $e) {
            throw new HttpError(500);
        }
    }
}