<?php
include 'model/connect.php';
$manager = new BankManager($db);


// withdraw/adding

// choice between adding or withdraw
if(isset($_POST['sendadding']) || isset($_POST['sendwithdraw'])) {
  if(isset($_POST['adding']) && $_POST['adding']<0 || isset($_POST['withdraw']) && $_POST['withdraw']<0) {
    // send a error in HTML and a rediction in add page
    $_SESSION['error']['addwith']=true;
    header('Location:with_add.php?id='.$_POST['id']);
  }
  else {
    // delete $_SESSION['error']['addwith']
    unset($_SESSION['error']['addwith']);
  }
  // recover id with $_POST
  $get=$manager->get($_POST['id']);
  // create new object Bank with ($get)
  $account = new Bank ($get);

  // click add
  if(isset($_POST['adding'])){
  $account->adding($_POST['adding']);
  }

  // click withdraw
  if(isset($_POST['withdraw'])){
  $account->withdrawal($_POST['withdraw']);
  }
  // activate the function update in $manager
  $manager->update($account);
}

// display getList
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Bank($value);
}

// display transfer view page
if(isset($_GET['trans'])){
  include 'view/transfer.php';
}
// display add view page
else if(isset($_GET['id'])) {
  $account = new Bank ($_GET);
  include 'view/with_add.php';
}
else {
  include 'view/index.php';
}

 ?>
