<?php

/*
 * *      /)
 * *  _  (/   _____
 * * /_)_/ )_(_) /_)_
 * *          .-/
 * *         (_/
 */

/*
 * * Loading configuration
 */

require_once 'configuration.php';

/*
 * * Loading initializator
 */

require_once APP_DIR
        . 'classes'
        . DIRECTORY_SEPARATOR
        . 'initializatorClass.php';

$initializator = new Initializator;