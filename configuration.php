<?php

/*
 * * Paths configuration
 */

define('APP_DIR', realpath(dirname(__FILE__)) . '/app/');
define('TMP_DIR', realpath(dirname(dirname(__FILE__))) . '/tmp/');
define('CLS_DIR', APP_DIR . 'classes/');
define('MOD_DIR', APP_DIR . 'models/');
define('CTRL_DIR', APP_DIR . 'controllers/');
define('VIEWS_DIR', APP_DIR . 'views/');
define('TPL_DIR', APP_DIR . 'views/templates/');

/*
 * * Database configuration 
 */

define('DB_ADAPTER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'test');
define('DB_DATABASE', 'shop');
define('DB_PREFIX', 'ps_');
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

/*
 * * Regex configuration
 */

define('USER_EMAL', '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/');
define('USER_NICK_NAME', '/^[a-zA-Z0-9._]{1,255}$/');
define('USER_PASSWORD', '/^[a-zA-Z0-9,.?;:\[\]\{\}|=+-_)(*&^%$#@!`~]{6,255}$/');