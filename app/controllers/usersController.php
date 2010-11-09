<?php

class UsersController {

    public function index() {
        $title = 'Welcome';
        $contentPartial = APP_DIR . 'views/products/showall.phtml';
        require APP_DIR . 'views/layouts/default.phtml';
    }

    public function login() {
        if (!isset($_POST['login'])) {
            $title = 'Welcome';
            $contentPartial = APP_DIR . 'views/products/showall.phtml';
            require APP_DIR . 'views/layouts/default.phtml';
            return;
        } else {
            require APP_DIR . 'models/usersModel.php';
            $usersModel = new UsersModel();
            if (!$userDetails = $usersModel->isUser()) {
                $GLOBALS['errors'][] = 'XML ERROR 1 Username';

                $title = 'Welcome';
                $contentPartial = APP_DIR . 'views/products/showall.phtml';
                require APP_DIR . 'views/layouts/default.phtml';
                return;
            } else {
                require APP_DIR . 'models/userTypesModel.php';
                $userTypesModel = new userTypesModel();
                $userRights = $userTypesModel->show($userDetails['user_type_id']);
                $usersModel->setSession($userDetails, $userRights);

                $title = 'Welcome';
                $contentPartial = APP_DIR . 'views/products/showall.phtml';
                require APP_DIR . 'views/layouts/default.phtml';
                return;
            }
        }
    }

    public function logout() {
        session_destroy();
        unset($_SESSION);

        $title = 'Welcome';
        $contentPartial = APP_DIR . 'views/products/showall.phtml';
        require APP_DIR . 'views/layouts/default.phtml';
        return;
    }

}
