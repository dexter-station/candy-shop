<?php

class UsersController {

    public function index() {
        $title = 'Welcome';
        require APP_DIR . 'views/layouts/default.phtml';
        //var_dump(Application::$dbConnection->query("SELECT * FROM `ps_users`")->fetch(2));
    }

    public function login() {
        
    }

}
