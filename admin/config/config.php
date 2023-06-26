 <?php

//Note: This file should be included first in every php page.
error_reporting(E_ALL);
ini_set('display_errors', 'On');
define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER', 'admin');
define('CURRENT_PAGE', basename($_SERVER['REQUEST_URI']));
date_default_timezone_set('Asia/Kolkata');

require_once BASE_PATH . '/lib/MysqliDb/MysqliDb.php';
require_once BASE_PATH . '/helpers/helpers.php';

/*
|--------------------------------------------------------------------------
| DATABASE CONFIGURATION
|--------------------------------------------------------------------------
 */

define('DB_HOST', "localhost");
//define('DB_USER', "mtctin_admin");
//define('DB_PASSWORD', "MTct519#");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "mtctin_mtct");

/**
 * Get instance of DB object
 */
function getDbInstance() {
	return new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}

function filter_string_polyfill(string $string)
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}
