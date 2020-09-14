<?php

class MainController
{
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:?controller=main&action=login');
        } else {
            require_once('views/templates/header.php');
            require_once('views/pages/home.php');
            require_once('views/templates/footer.php');
        }
    }

    public function login()
    {
        if (isset($_SESSION['login']))
            header('Location:?controller=main&action=index');
        require_once('views/users/login.php');
    }

    public function logout()
    {
        session_destroy();
        header('Location:?controller=main&action=login');
    }
    
    public function listClient()
    {
        if (!isset($_SESSION['login'])) 
            header('Location:?controller=main&action=login');

        require 'models/ClientModel.php';
        $clients = (new ClientModel())->index();
        require_once('views/templates/header.php');
        require_once('views/pages/list.php');
        require_once('views/templates/footer.php');
    }
}
