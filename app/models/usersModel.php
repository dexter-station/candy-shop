<?php

class UserModel {

    function showAll() {
        require_once APP_DIR . getPath('classes/dbAdapter.php');

        $connection = new dbAdapter();
        $usersArray = $connection->query("SELECT * FROM `ps_users` ")->fetch(2);
        $connection = NULL;
    }

}
