<?php

class UsersController {

    public function index() {
//        require_once APP_DIR . getPath('classes/dbAdapter.php');
//        $connection = new dbAdapter();
//        var_dump($connection->query("SELECT * FROM `ps_users`")->fetch(2));
        $title = 'Welcome';
        require APP_DIR . 'views/layouts/default.phtml';
    }

    public function login() {
        echo 'users/login';
    }

}
