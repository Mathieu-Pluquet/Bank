<?php
include 'model/connect.php';
$manager = new BankManager($db);


// withdraw/adding
if(isset($_POST['sendadding']) || isset($_POST['sendwithdraw'])) {
  if(isset($_POST['adding']) && $_POST['adding']<0 || isset($_POST['withdraw']) && $_POST['withdraw']<0) {
    $_SESSION['error']['addwith']=true;
    header('Location:with_add.php?id='.$_POST['id']);
  }
  else {
    unset($_SESSION['error']['addwith']);
  }
  $get=$manager->get($_POST['id']);
  $account = new Bank ($get);


  if(isset($_POST['adding'])){
  $account->adding($_POST['adding']);
  }

  if(isset($_POST['withdraw'])){
  $account->withdrawal($_POST['withdraw']);
  }

  $manager->update($account);
}

$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
}

if(isset($_GET['trans'])){
  include 'view/transfer.php';
}
else if(isset($_GET['id'])) {
  $account = new Bank ($_GET);
  include 'view/with_add.php';
}
else {
  include 'view/index.php';
}

 ?>
