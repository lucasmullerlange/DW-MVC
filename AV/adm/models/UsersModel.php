<?php
require 'bd/ConnectClass.php';

class UserModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = (new ConnectClass())->create();
    }

    public function getUser(string $user)
    {
        $sql = "SELECT * FROM users WHERE user=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $user);
        $stmt->execute();
        return $stmt->fetch();
    }
}
