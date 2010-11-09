<?php

class userTypesModel {

    protected $table;

    public function __construct() {
        $this->table = DB_PREFIX . 'user_types';
    }

    public function show($userTypeId) {
        $query = "SELECT * FROM `$this->table` WHERE
                `user_type_id`=$userTypeId LIMIT 1";
        return Application::$dbConnection->query($query)->fetch(2);
    }

}