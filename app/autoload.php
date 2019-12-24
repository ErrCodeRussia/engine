<?php

use base\connector\Connector;

define('HOME', $_SERVER['DOCUMENT_ROOT'] . '/');
define('ROOT', HOME . '../');
define('VENDOR', ROOT . 'vendor/');
define('APP', ROOT . 'app/');
define('CONFIG', ROOT . 'config/');
define('LOGS', ROOT . 'logs/');
define('VIEWS', ROOT . 'views/');
define('LAYOUTS', VIEWS . 'layouts/');

require_once VENDOR . 'autoload.php';

Connector::requireFolder(APP . "components");
Connector::requireFolder(APP . "controllers");
Connector::requireFolder(APP . "database");
Connector::requireFolder(APP . "model");

require_once CONFIG . "routing.php";