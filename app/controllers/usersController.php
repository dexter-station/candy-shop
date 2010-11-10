<?php

class UsersController {

    public function index() {
        $title = 'Welcome';
        $contentPartial = VIEWS_DIR . 'products/showall.phtml';
        require TPL_DIR . 'default.phtml';
    }

    public function login() {
        if (!isset($_POST['login'])) {
            $title = 'Welcome';
            $contentPartial = VIEWS_DIR . 'products/showall.phtml';
            require TPL_DIR . 'default.phtml';
            return;
        } else {
            $identifier = $_POST['identifier'];
            $password = $_POST['password'];

            require MOD_DIR . 'usersModel.php';
            $usersModel = new UsersModel();

            if (!$userDetails = $usersModel->isUser($identifier, $password)) {
                $GLOBALS['errors'][] = 'XML ERROR 1 Username';

                $title = 'Welcome';
                $contentPartial = VIEWS_DIR . 'products/showall.phtml';
                require TPL_DIR . 'default.phtml';
                return;
            } else {
                require MOD_DIR . 'userTypesModel.php';
                $userTypesModel = new userTypesModel();
                $userRights = $userTypesModel->show($userDetails['user_type_id']);
                $usersModel->setSession($userDetails, $userRights);

                $title = 'Welcome';
                $contentPartial = VIEWS_DIR . 'products/showall.phtml';
                require TPL_DIR . 'default.phtml';
                return;
            }
        }
    }

    public function logout() {
        session_destroy();
        unset($_SESSION);

        $title = 'Welcome';
        $contentPartial = VIEWS_DIR . 'products/showall.phtml';
        require TPL_DIR . 'default.phtml';
        return;
    }

}