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

  // add account
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

  // recover id
  public function get($id){
  $q=$this->db->prepare("SELECT * from account where id=:id");
  $q->bindValue(":id",$id);
  $q->execute();
  return $q->fetch(PDO::FETCH_ASSOC);
}

  // delete account
  public function delete($account) {
    $q=$this->db->prepare("DELETE from account WHERE id = :id");
    $q->bindValue(":id", $account->getId());
    $q->execute();
  }

  // update withdrawal and adding account
  public function update($account){
    $q=$this->db->prepare("UPDATE account set amount=:amount where id=:id");
    $q->bindValue(':id',$account->getId());
    $q->bindValue(':amount',$account->getAmount());
    $q->execute();
  }

}
 ?>
