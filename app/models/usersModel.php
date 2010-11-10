<?php

class UsersModel {

    protected $table;

    public function __construct() {
        $this->table = DB_PREFIX . 'users';
    }

    public function isUser($identifier, $password) {
        if ((preg_match(USER_NICK_NAME, $identifier)
                || preg_match(USER_EMAL, $identifier)
                ) && preg_match(USER_PASSWORD, $password)
        ) {
            $identifier = Application::$dbConnection->quote(trim($identifier));
            $password = Application::$dbConnection->quote(trim($password));
            $query = "SELECT * FROM `$this->table` WHERE
                (`nick_name`=$identifier AND `password`=$password) OR
                (`email`=$identifier AND `password`=$password)
                LIMIT 1";

            return Application::$dbConnection->query($query)->fetch(2);
        } else {
            return false;
        }
    }

    public function setSession($userDetails, $userRights) {
        $_SESSION['user_id'] = $userDetails['user_id'];
        $_SESSION['nick_name'] = $userDetails['nick_name'];
        $_SESSION['rights'] = $userRights;
    }

}
