<?php

class dbAdapter extends PDO {

    function  __construct($dsn = DB_DSN, $username = DB_USERNAME, $password = DB_PASSWORD) {
        parent::__construct($dsn, $username, $password);
    }

}
