<?php


use base\routing\Routing;

$routing = new Routing();

$routing->add('GET', '/', 'common',SiteController::class, 'index');