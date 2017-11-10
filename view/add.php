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
  <input type="text" name="name" value="" placeholder="name" maxlength="15"> <p></p>
  <div class="test center">
    <input class="test mini" type="number" name="amount" value="" placeholder="Amount">
    <div class="input-group-addon">€</div>
        </div>
       <p></p>
  <input type="submit" name="addaccount" value="Create Account">
</form>
</td>
</tr>
</tbody>
</table>
