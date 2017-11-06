<?php
include 'model/connect.php';
$manager = new BankManager($db);

if(isset($_POST['addaccount']) && isset($_POST['name'])){
  foreach ($_POST as $key => $value) {
  $data[$key]=strip_tags($value);
}
    $account = new Bank($data);
    $manager->add($account);
}


include 'view/header.php';
if(isset($_GET['add'])){
  include 'view/add.php';
}

 ?>
