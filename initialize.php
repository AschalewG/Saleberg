<?php
ob_start();
// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)C:\Softwares\xampp\htdocs\Project\Wazema\includes\initialize.php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
///Applications/XAMPP/xamppfiles/htdocs
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'Applications' . DS . 'XAMPP' . DS. 'xamppfiles' . DS . 'htdocs' . DS . 'saleberg');
//define('SITE_ROOT', DS.'home'.DS.'aschalg24'.DS.'public_html');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'includes');

// load config file first
require_once (LIB_PATH . DS . 'config.php');

// load basic functions next so that everything after can use them
require_once (LIB_PATH . DS . 'functions.php');

// load core objects
require_once (LIB_PATH . DS . 'session.php');
require_once (LIB_PATH . DS . 'database.php');
//require_once(LIB_PATH.DS.'database_object.php');
//require_once(LIB_PATH.DS."phpMailer".DS."class.phpmailer.php");
//require_once(LIB_PATH.DS."phpMailer".DS."class.smtp.php");
//require_once(LIB_PATH.DS."phpMailer".DS."language".DS."phpmailer.lang-en.php");

// load database-related classes
require_once (LIB_PATH . DS . 'user.php');
require_once (LIB_PATH . DS . 'offer.php');
require_once (LIB_PATH . DS . 'shop.php');
