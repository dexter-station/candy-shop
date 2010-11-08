<?php

class UsersController {

    public function index() {
        $title = 'Welcome';
        $contentPartial = APP_DIR . 'views/products/showall.phtml';
        require APP_DIR . 'views/layouts/default.phtml';
        //var_dump(Application::$dbConnection->query("SELECT * FROM `ps_users`")->fetch(2));
    }

    public function login() {
        
    }

}
