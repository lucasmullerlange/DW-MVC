<?php
session_start();
require_once("controllers/MainController.php");
$Main = new MainController();
if (!isset($_GET['controller'])) {
    $Main->index();
} else {
    switch ($_REQUEST['controller']) {
        case 'main':
            if (!isset($_GET['action'])) {
                $Main->index();
            } else {
                switch ($_REQUEST['action']) {
                    case 'index':
                        $Main->index();
                        break;
                    case 'login':
                        $Main->login();
                        break;
                    case 'list':
                        $Main->listClient();
                        break;
                    case 'logout':
                        $Main->logout();
                        break;
                }
            }
            break;
        case 'user':
            require_once("controllers/UsersController.php");
            $User = new UsersController();

            if (!isset($_GET['action'])) {
                $Main->index();
            } else {
                switch ($_REQUEST['action']) {
                    case 'validateLogin':
                        $User->validateLogin();
                        break;
                }
            }
            break;
    }
}
