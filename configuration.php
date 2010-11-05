<?php

/*
 * * Paths configuration
 */

define('APP_DIR', realpath(dirname(__FILE__))
        . DIRECTORY_SEPARATOR
        . 'app'
        . DIRECTORY_SEPARATOR
);
define('TMP_DIR', realpath(dirname(__FILE__))
        . DIRECTORY_SEPARATOR
        . 'tmp'
        . DIRECTORY_SEPARATOR
);
define('WEB_DIR', realpath(dirname(__FILE__))
        . DIRECTORY_SEPARATOR
        . 'web'
        . DIRECTORY_SEPARATOR
);

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
define('APP_STYLESHEET', WEB_DIR . 'styles/default/style.css');
define('APP_JAVASCRIPT', WEB_DIR . 'js/script.js');

/*
 * * Developement configuration
 */

define('DEBUGGER', TRUE);