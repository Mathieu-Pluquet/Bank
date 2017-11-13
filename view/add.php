<?php
include 'view/header.php';
 ?>

    <table class="table-fill">
            <tr>
                <th class="test">New Account</th>
                <tbody class="table-hover">
                    <td class="test">
                        <form class="" action="index.php" method="post">
                            <input class="my-4" type="text" name="name" value="" placeholder="Name" maxlength="15" required>
                            <div class="test center">
                                <input class="test mini" type="number" name="amount" value="" placeholder="Amount" required>
                                <div class="input-group-addon">€</div>
                            </div>
                            <br>
                            <p class="bgc">
                                <?php if(isset($_SESSION['error']["amount"])) {
                                  echo 'Add a positive amount';
                                }?>
                            </p>
                            <input type="submit" name="addaccount" value="Create Account">
                        </form>
                    </td>
            </tr>
            </tbody>
    </table>
