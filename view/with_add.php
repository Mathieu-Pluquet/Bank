<?php
include 'view/header.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="with_add.php" method="post">
<input type="text" name="adding" value="" placeholder="Adding">
<input type="hidden" name="id" value="<?php echo $account->getId()?>">
<input type="submit" name="sendadding" value="adding">
</form>

<form class="" action="with_add.php" method="post">
  <input type="text" name="withdraw" value="" placeholder="withdraw">
  <input type="hidden" name="id" value="<?php echo $account->getId()?>">
  <input type="submit" name="sendwithdraw" value="withdraw">
</form>
  </body>
</html>
