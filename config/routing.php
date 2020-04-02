<?php


use app\controllers\SiteController;
use base\routing\Routing;

$routing = new Routing();

$routing->add('GET', '/', SiteController::class, 'index');