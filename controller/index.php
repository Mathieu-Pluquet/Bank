<?php
include 'model/connect.php';
$manager = new BankManager($db);

// add
if(isset($_POST['addaccount']) && isset($_POST['name']) && isset($_POST['amount']) ){
  if($_POST['amount']<0) {
    $_SESSION['error']['amount']=true;
    header('Location:index.php?add ');
  }
  else {
    unset($_SESSION['error']['amount']);
  }
  foreach ($_POST as $key => $value) {
  $data[$key]=strip_tags($value);
}
    $account = new Bank($data);
    $manager->add($account);
}

// delete
if(isset($_GET['delete'])){
  $get = $manager->get($_GET['delete']);
  $account = new Bank($get);
  $manager->delete($account);
}


// transfer
if(isset($_POST['sendtransfer'])) {

  if($_POST['amounttrans']<0) {
    $_SESSION['error']['amounttrans']=true;
    header('Location:with_add.php?trans');
  }
  else {
    unset($_SESSION['error']['amounttrans']);
  }

  if(isset($_POST['debit'])){
  $get=$manager->get($_POST['debit']);
  $account = new Bank ($get);
  $account->withdrawal($_POST['amounttrans']);
  $manager->update($account);
  }

  if(isset($_POST['credit'])){
  $get=$manager->get($_POST['credit']);
  $account = new Bank ($get);
  $account->adding($_POST['amounttrans']);
  $manager->update($account);
  }
}

// return add page or index page
if(isset($_GET['add'])){
  include 'view/add.php';
}
else
{
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
}
include 'view/index.php';
}




 ?>
