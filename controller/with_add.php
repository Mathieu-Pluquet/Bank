<?php
include 'model/connect.php';
$manager = new BankManager($db);

$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
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
