<?php
include 'view/header.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">

    <title></title>
  </head>
  <body>

    <table class="table-fill hidden-md-down">
    <thead>
    <tr>
    <th class="test">Adding</th>
    <th class="test">Withdraw</th>
    <tbody class="table-hover">
    <tr>
   <td class="" >
<form class="test" action="with_add.php" method="post">
<div class="test center">
  <input class="mini test" type="number" name="adding" value="" placeholder="Amount">
       <div class="input-group-addon">€</div>
     </div>
<input type="hidden" name="id" value="<?php echo $account->getId()?>"> <p></p>
<input type="submit" name="sendadding" value="send adding">
</form>
</td>

<td class="" >
<form class="test" action="with_add.php" method="post">
  <div class="test center">
    <input class="mini test" type="number" name="withdraw" value="" placeholder="Amount">
         <div class="input-group-addon">€</div>
       </div>
  <input type="hidden" name="id" value="<?php echo $account->getId()?>"> <p></p>
  <input type="submit" name="sendwithdraw" value="send withdraw">
</form>
  </body>
</td>
</tr>
</tbody>
</table>



<!-- version mobile  -->


<table class="table-fill hidden-lg-up">
<thead>
<tr class="d-flex flex-column">
<th class="test">Adding</th>
<td class="" >
<form class="test" action="with_add.php" method="post">
<div class="test center">
<input class="mini test" type="number" name="adding" value="" placeholder="Amount">
   <div class="input-group-addon">€</div>
 </div>
<input type="hidden" name="id" value="<?php echo $account->getId()?>"> <p></p>
<input type="submit" name="sendadding" value="send adding">
</form>
</td>
</tr>
<tr>
<th class="test">Withdraw</th>
<tbody class="table-hover">


<td class="" >
<form class="test" action="with_add.php" method="post">
<div class="test center">
<input class="mini test" type="number" name="withdraw" value="" placeholder="Amount">
     <div class="input-group-addon">€</div>
   </div>
<input type="hidden" name="id" value="<?php echo $account->getId()?>"> <p></p>
<input type="submit" name="sendwithdraw" value="send withdraw">
</form>
</body>
</td>

</tr>
</tbody>
</table>
</html>
