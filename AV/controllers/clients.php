<?php
require_once("models/Client.php");



class clientsController{
     private $clientdb; 
   function __construct ()
        
     {
        $this->clientdb = new Client();
     }
    public function register()
   {
      
      require_once('views/templates/header.php');
      require_once('views/clients/register.php');
      require_once('views/templates/footer.php');

   }

   public function registerView()
      
   {
     $clients = $this -> clientdb -> index();
      /*
      $clients = array (
            
            ['email' =>  $_POST ['email'],
            'password' => $_POST['password'],   
            'avenue' => $_POST['avenue'],
            'state' =>  $_POST['state'],
            'city' => $_POST['city']]
        );  */
        require_once('views/templates/header.php');
        require_once('views/clients/registerView.php');
        require_once('views/templates/footer.php');
      
      }
    public function listClient()
    
    {
       
    }
      
    } 
?>