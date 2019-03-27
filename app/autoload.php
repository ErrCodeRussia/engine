<?php

require_once "../config/constants.php";
require_once VENDOR . "autoload.php";

Connector::requireFolder(APP . "components");
Connector::requireFolder(APP . "database");
Connector::requireFolder(APP . "functions");
Connector::requireFolder(APP . "model");