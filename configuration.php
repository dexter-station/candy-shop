<?php

/*
 * * Paths configuration
 */

define('APP_DIR', realpath(dirname(__FILE__)) . '/app/');
define('TMP_DIR', realpath(dirname(dirname(__FILE__))) . '/tmp/');

/*
 * * Database configuration 
 */


define('DB_ADAPTER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'test');
define('DB_DATABASE', 'shop');
define('DB_DSN', DB_ADAPTER . ':' . 'host=' . DB_SERVER . ';' . 'dbname=' . DB_DATABASE);

/*
 * * Other configuration
 */

define('APP_NAME', 'shop');
define('APP_DESCRIPTION', 'A online shop for all kind of products');
define('APP_KEYWORDS', 'shop, platform, meta, products, other');
define('APP_AUTHOR', 'Shop Platform');
/*
 * * Developement configuration
 */

define('DEBUGGER', TRUE);