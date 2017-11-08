<?php
include 'model/connect.php';
$manager = new BankManager($db);

// add
if(isset($_POST['addaccount']) && isset($_POST['name']) && isset($_POST['amount']) ){
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
