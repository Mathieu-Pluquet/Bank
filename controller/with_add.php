<?php
include 'model/connect.php';
$manager = new BankManager($db);

// withdraw/adding
if(isset($_POST['sendadding']) || isset($_POST['sendwithdraw'])) {
  $get=$manager->get($_POST['sendadding']);
  $account = new Bank ($get);
  $manager->adding($account);
  $manager->update($account);
  include 'view/index.php';
}


if(isset($_GET['id'])) {
  $account = new Bank ($_GET);

  include 'view/with_add.php';
}



 ?>
