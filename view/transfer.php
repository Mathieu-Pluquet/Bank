<?php
include 'view/header.php';
?>
<p>debit account</p>
<form class="" action="index.php" method="post">
<select class="" name="debit">
<?php
foreach ($list as $value) {
?>
<option value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?> <?php echo $value['amount'] ?>€</option>
<?php
} ?>
</select>

<p>credit account</p>
<select class="" name="credit">
  <?php
  foreach ($list as $value) {
  ?>
  <option value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?>  <?php echo $value['amount'] ?>€</option>
  <?php
  } ?>
</select>
<br>
<p></p>
<input type="text" name="amounttrans" value="" placeholder="amount of money">
<input type="submit" name="sendtransfer" value="">
</form>
