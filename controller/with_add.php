<?php
include 'model/connect.php';
$manager = new BankManager($db);
var_dump($_POST);
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
}

if(isset($_POST['sendtransfer'])) {
  $list = $manager->getList();
    $get=$manager->get($value['id']);
    var_dump($get);
  if(isset($_POST['debit'])){

  $get=$manager->get($value['id']);
  var_dump($get);
  $account = new Bank ($get);
  $account->adding($_POST['amounttrans']);
  }

  if(isset($_POST['withdraw'])){
  $get=$manager->get($value['id']);
  $account = new Bank ($get);
  $account->withdrawal($_POST['amounttrans']);
  }
  $manager->update($account);
  include 'view/index.php';
}

// withdraw/adding
if(isset($_POST['sendadding']) || isset($_POST['sendwithdraw'])) {
  $get=$manager->get($_POST['id']);
  $account = new Bank ($get);

  if(isset($_POST['adding'])){
  $account->adding($_POST['adding']);
  }

  if(isset($_POST['withdraw'])){
  $account->withdrawal($_POST['withdraw']);
  }

  $manager->update($account);
  include 'view/index.php';
}

if(isset($_GET['trans'])){
  include 'view/transfer.php';
}

if(isset($_GET['id'])) {
  $account = new Bank ($_GET);

  include 'view/with_add.php';
}



 ?>
