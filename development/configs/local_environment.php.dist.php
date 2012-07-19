<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

define('ATHARI_CONFIG_CACHING_DISABLED', true);
Athari_Application_Environment::getInstance()->setEnvironment(Athari_Application_Environment::DEVELOPMENT);

require_once ATHARI_BASEDIR . 'development/library/Kint/Kint.class.php';

