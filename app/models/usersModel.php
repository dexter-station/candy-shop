<?php

class UsersModel {

    protected $table;

    public function __construct() {
        $this->table = DB_PREFIX . 'users';
    }

    public function isUser() {
        $username = Application::$dbConnection->quote(trim($_POST['username']));
        $password = Application::$dbConnection->quote(trim($_POST['password']));
        $query = "SELECT * FROM `$this->table` WHERE
                (`nick_name`=$username AND `password`=$password) OR
                (`email`=$username AND `password`=$password)
                LIMIT 1";
        
        return Application::$dbConnection->query($query)->fetch(2);
    }

    public function setSession($userDetails, $userRights) {
        $_SESSION['user_id'] = $userDetails['user_id'];
        $_SESSION['nick_name'] = $userDetails['nick_name'];
        $_SESSION['rights'] = $userRights;
    }

}
