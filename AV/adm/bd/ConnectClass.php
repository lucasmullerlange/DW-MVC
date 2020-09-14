<?php

class ConnectClass
{
    public static $conn;

    public function create()
    {
        try {
            self::$conn = new PDO('mysql:host=localhost;dbname=pw_exemple','root');
        } catch (PDOException $err) {
            die("Erro: <code>" . $err->getMessage() . "<code>");
        }
        return self::$conn;
    }

}
?>