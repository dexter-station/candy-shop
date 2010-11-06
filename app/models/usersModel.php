<?php

class UserModel {

    function showAll() {
        $usersArray = $connection->query("SELECT * FROM `ps_users` ")->fetch(2);
        $connection = NULL;
    }

}
