<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('SITE_PATH',realpath(dirname(__FILE__)).'/');

define('APP_PATH',realpath(dirname(__FILE__)).'/application/');

define('LIB_PATH', SITE_PATH.'application/libraries/');

require_once 'system/core/App.php';