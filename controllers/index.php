<?php

namespace Controller;

use Difra\Envi;
use Difra\View;

class Index extends \Difra\Controller
{
    protected function indexAction()
    {
        if (self::hasUnusedParameters()) {
            throw new View\HttpError(404);
        }
        View::redirect('/cleanup');
    }
}