<?php
// connection with bdd
include 'model/connect.php';
$manager = new BankManager($db);

// add (create new account)

// if isset $_POST['addaccount'], $_POST['name'], $_POST['amount'] exist then condition = true
if(isset($_POST['addaccount']) && isset($_POST['name']) && isset($_POST['amount']) ){

// $_POST['amount'] = user value for starting account
  if($_POST['amount']<0) {
  // send a error in HTML and a rediction in add page
    $_SESSION['error']['amount']=true;
    header('Location:index.php?add');
  }
  else {
  // delete $_SESSION['error']['amount']
    unset($_SESSION['error']['amount']);

  // removes HTML and PHP tags
  foreach ($_POST as $key => $value) {
  $data[$key]=strip_tags($value);
}
    // create new object Bank
    $account = new Bank($data);
    $manager->add($account);
  }
}

// delete account

// if isset ($_GET['delete']) then condition = true
if(isset($_GET['delete'])){
  // recover id with $_GET & create new object
  $get = $manager->get($_GET['delete']);
  $account = new Bank($get);
  $manager->delete($account);
}


// transfer account

// if isset($_POST['sendtransfer']) then condition = true
if(isset($_POST['sendtransfer']) && isset($_POST['amounttrans'])) {

  // $_POST['amounttrans'] = user value for transfer
  if($_POST['amounttrans']<0) {
    // send a error in HTML and a rediction in with_add page
    $_SESSION['error']['amounttrans']=true;
    header('Location:with_add.php?trans');
  }
  else {
    // delete $_SESSION['error']['amounttrans']
    unset($_SESSION['error']['amounttrans']);
  }
  // ($_POST['debit']) = dropdown debit
  if(isset($_POST['debit'])){
  // recover id with $_POST & create new object & use method for update
  $get=$manager->get($_POST['debit']);
  $account = new Bank ($get);
  $account->withdrawal($_POST['amounttrans']);
  $manager->update($account);
  }

  // ($_POST['debit']) = dropdown credit
  if(isset($_POST['credit'])){
  // recover id with $_POST & create new object & use method for update
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
// display getList
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
}
include 'view/index.php';
}

 ?>
