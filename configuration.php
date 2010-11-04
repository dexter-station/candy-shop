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
 * * Developement configuration
 */

define('DEBUGGER', TRUE);