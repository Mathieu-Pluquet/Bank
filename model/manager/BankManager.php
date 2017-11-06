<?php

Class BankManager {

  private $db; // Instance de PDO
  public function __construct($db)
  {
      $this->setDb($db);
  }
  // setter //
  public function setDb(PDO $db)
  {
      $this->db = $db;
  }

  // add
  public function add ($account) {
    $q=$this->db->prepare("INSERT INTO account SET name=:name, amount=:amount");
    $q->bindValue(":name", $account->getName());
    $q->bindValue(":amount", $account->getAmount());
    $q->execute();
  }

  // display list
  public function getList() {
  $q=$this->db->query("SELECT * FROM account");
  return $q->fetchAll(PDO::FETCH_ASSOC);
}
}
 ?>
