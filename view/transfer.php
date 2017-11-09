<?php
include 'view/header.php';
?>
<p>debit account</p>
<form class="" action="with_add.php" method="post">
<select class="" name="debit">
<?php
foreach ($list as $value) {
?>
<option value="<?php echo $value ?>"> <?php echo $value['name'] ?></option>
<?php
} ?>
</select>

<p>credit account</p>
<select class="" name="credit">
  <?php
  foreach ($list as $value) {
  ?>
  <option value="<?php echo $value ?>"> <?php echo $value['name'] ?></option>
  <?php
  } ?>
</select>
<br>
<p></p>
<input type="text" name="" value="" placeholder="amount of money">
<input type="submit" name="" value="">
</form>
