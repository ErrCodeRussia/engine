<?php

namespace app\controllers;

use base\controllers\Controller;
use base\Page;
use base\View\View;

class SiteController extends Controller
{
    private $pageComponent;
    private $component;
    private $model;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }
}