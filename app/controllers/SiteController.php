<?php

namespace app\controllers;

use app\base\BaseController;
use base\Page;
use base\View\View;

class SiteController extends BaseController
{

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }
}