<?php

namespace app\controllers\errors;

use base\Page;
use base\view\View;

class ErrorController
{
    private $page;

    /**
     * ErrorController constructor.
     * @param $page Page
     */
    public function __construct(Page &$page)
    {
        $this->page = $page;
    }

    public function pageNotFound()
    {
        $view = new View('layouts/errors/404', $this->page);
    }
}