<?php
error_reporting(0);
ini_set('display_startup_errors', 0);
ini_set('display_errors', 0);

error_reporting(E_ALL|E_STRICT);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

$base_dir = dirname(realpath(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
// chdir($base_dir . 'vendor');
// $loader = require_once $base_dir . 'vendor/autoload.php';
// if (!include_once($base_dir . 'vendor/autoload.php')) {
// 	throw new RuntimeException($base_dir .'vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
// }
$loader = require_once __DIR__ . '/../vendor/autoload.php';

$bootstrap = new Athari_Application_Bootstrap();
$application = $bootstrap->init($base_dir);
$application->run();