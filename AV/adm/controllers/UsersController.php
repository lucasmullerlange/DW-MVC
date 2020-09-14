<?php
class UsersController {
    public function validateLogin()
    {
        var_dump($_POST);
        $login = $_POST['login'];
        $password = $_POST['password'];
        require_once('models/UsersModel.php');
        $UserModel = new UserModel();
        $result = $UserModel -> getUser($login);
 
        if($result){
            if($password == $result['password']){
                $_SESSION['login'] = $result['user'];
               header('Location:index.php?controller=main&action=index');
            }else {
                
                print('Senha inválida');
            }
        } else {
            print('usuario não existe');
        }
    }
}
?>
