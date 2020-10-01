<?php

class clientsModel
{
    public $result;
    public $conn;

    public function __construct()
    {
        require_once 'bd/ConnectClass.php';
        $Oconn = new connectClass();
        $Oconn->openConnect();
        $this->conn = $Oconn->getConn();
    }

    public function getClients()
    {
        $sql = 'SELECT * FROM clients';

        $this->result = $this->conn->query($sql);
    }

    public function insertClient($arrayClient) //inserir dados no array pro banco
    {
        $sql = "
                INSERT INTO clients
                    (name, phone, email, address)
                VALUES(
                    '{$arrayClient['name']}',
                    '{$arrayClient['phone']}',
                    '{$arrayClient['email']}',
                    '{$arrayClient['address']}'
                )
            ";

        $this->conn->query($sql);

        return $this->conn->insert_id;
    }

    public function getClient($idClient)
    {
        $sql = "
            SELECT * FROM clients 
            WHERE idClient = {$idClient} 
           ";
        $this->result = $this->conn->query($sql);
    }

    public function updateClient($client)
    {
        $sql = "UPDATE `clients` SET `name` = '{$client["name"]}', `phone` = '{$client["phone"]}', `email` = '{$client["email"]}', `address` = '{$client["address"]}' WHERE `clients`.`idClient` = {$client["idClient"]}";
        $this->conn->query($sql);
        return $this -> conn -> insert_id;
    }

    public function deleteClient($idClient)
    {
        $sql = "
       DELETE FROM clients 
          where 
          idClient = {$idClient}
         
    ";
        $this->conn->query($sql);
    }

    public function getConsult()
    {
        return $this->result;
    }
}
