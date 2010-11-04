<?php

class Initializator {

    function __construct() {
        self::loadPathFunctions();
        self::stripSlashesForUserInputs();
        self::setErrorReporting();
        self::startSession();
        self::startDispatcher();
    }

    static private function loadPathFunctions() {
        /*
         * * Loads paths functions[replacing '/' with '\' for windows for example]
         */
        require APP_DIR
                . 'libs'
                . DIRECTORY_SEPARATOR
                . 'pathFunctions.php';
    }

    private function stripSlashesForUserInputs() {
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

    static private function setErrorReporting() {
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

    static private function startSession() {
        /*
         * * Sends headers for setting session
         */
        session_start();
    }

    static private function startDispatcher() {
        /*
         * * Starts dispatcher
         */
        require_once APP_DIR . getPath('classes/dispatcherClass.php');
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $dispatcher = new Dispatcher($_GET['controller'], $_GET['action']);
        } else {
            $dispatcher = new Dispatcher('index', 'index');
        }
    }

}