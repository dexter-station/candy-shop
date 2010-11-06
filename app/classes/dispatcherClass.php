<?php

class Dispatcher {

    protected $controller;
    protected $action;
    protected $class;
    protected $file;

    public function __construct($controller = 'index', $action = 'index') {
        $this->setDirectives($controller, $action);
        $this->loadController();
    }

    public function setDirectives($controller, $action) {
        /*
         * * Sets directive for future controller loading
         */
        $this->controller = $controller;
        $this->action = $action;
        $this->file = APP_DIR . 'controllers/' . $this->controller . 'Controller.php';
        $this->class = ucfirst($this->controller) . 'Controller';
    }

    public function loadController() {
        /*
         * * Loads required controller
         */
        if (file_exists($this->file)) {
            require_once $this->file;
            if (class_exists($this->class)) {
                $controller = new $this->class;
                if (method_exists($controller, $this->action)) {
                    $action = $this->action;
                    $controller->$action();
                } else {
                    self::loadDefaults();
                }
            } else {
                self::loadDefaults();
            }
        } else {
            self::loadDefaults();
        }
    }

    static protected function loadDefaults() {
        /*
         * * Loads default controller
         */
        require_once APP_DIR . 'controllers/indexController.php';
        $controller = new IndexController();
        $controller->index();
    }
    
}