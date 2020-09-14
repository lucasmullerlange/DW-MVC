<?php

require_once('bd/ConnectClass.php');

class ClientModel
{
  private static $conn;

  function __construct()
  {
    self::$conn = (new ConnectClass())->create();
  }

  public function  index()
  {
    try {
      $sql = "SELECT * FROM clients";

      $stmt = self::$conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $err) {
      return ['error' => $err];
      return array('error' => false, 'message' => 'Ocorreu um erro ao listar o cliente.');
    }
  }
}
