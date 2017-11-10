<?php
include 'view/header.php';
 ?>

 <table class="table-fill">
 <thead>
 <tr>
 <th class="test">New Account</th>
 <tbody class="table-hover">
 <tr>
<td class="test">
<form class="" action="index.php" method="post">
  <input class="my-4" type="text" name="name" value="" placeholder="name" maxlength="15"> 
  <div class="test center">
    <input class="test mini" type="number" name="amount" value="" placeholder="Amount">
    <div class="input-group-addon">€</div>
        </div>
        <br>
        <p><?php if(isset($_SESSION['error']["amount"])) {
            echo 'erreur de connexion';
          }?></p>
  <input type="submit" name="addaccount" value="Create Account">
</form>
</td>
</tr>
</tbody>
</table>
