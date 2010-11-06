<?php

class Application {

    static $dbConnection;

    function __construct() {
        self::setErrorReporting();
        self::stripSlashesForUserInputs();
        self::startSession();
        self::databaseConnect();
        self::autoStartDispatcher();
    }

    private static function stripSlashesForUserInputs() {
        /*
         * * Strips slashes if the methods are secure
         */
        if (!get_magic_quotes_gpc()) {
            return;
        }
        foreach ($_POST as $key => $value) {
            $_POST[$key] = stripslashes($value);
        }
        foreach ($_GET as $key => $value) {
            $_GET[$key] = stripslashes($value);
        }
        foreach ($_COOKIE as $key => $value) {
            $_COOKIE[$key] = stripslashes($value);
        }
    }

    private static function setErrorReporting() {
        /*
         * * $level defines level of error reporting
         */
        $level;
        /*
         * * Sets error reporting according to the mode of aplication which is
         * * defined in a configuration constant(DEBUGGER)
         */
        if (DEBUGGER) {
            $level = "E_ALL";
        } else {
            $level = "E_ERROR";
        }

        error_reporting(constant($level));
    }

    private static function startSession() {
        /*
         * * Sends headers for setting session
         */
        session_start();
    }

    private static function databaseConnect() {
        require_once APP_DIR . 'classes/dbAdapter.php';
        self::$dbConnection = new dbAdapter();
    }

    private static function autoStartDispatcher() {
        /*
         * * Starts dispatcher
         */
        require_once APP_DIR . 'classes/dispatcherClass.php';
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $dispatcher = new Dispatcher($_GET['controller'], $_GET['action']);
        } else {
            $dispatcher = new Dispatcher('index', 'index');
        }
    }

}