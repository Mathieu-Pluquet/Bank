<?php
include 'view/header.php';
?>
<table class="table-fill">
    <thead>
        <th class="test">Transfer money</th>
        <tbody class="table-hover">
            <tr id="hov">
                <td class="test hov">
                    <p>debit account</p>
                    <form action="index.php" method="post">
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

              <div class="test center top">
                <input class="mini test" type="number" name="amounttrans" value="" placeholder="Amount" required>
                <div class="input-group-addon">€</div>
              </div>
                    <br>
              <p class="bgc">
                <?php if(isset($_SESSION['error']["amounttrans"])) {
                  echo ' Add a positive amount';
                }?>
              </p>
          <input type="submit" name="sendtransfer" value="Send transfer">
        </form>
      </td>
    </tr>
  </tbody>
</table>
