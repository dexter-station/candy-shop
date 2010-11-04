<?php

class IndexController {

    public function index() {
        $controller = new Dispatcher('users', 'index');
    }

}

