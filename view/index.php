<?php
include 'view/header.php';
 ?>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Table Style</title>
        <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    </head>

    <body>
        <div class="table-title tab hidden-md-down">
            <table class="table-fill">
                <thead>
                    <tr>
                        <th class="text-center">N°Account</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <!-- display board -->
                  <?php
                    foreach ($object as $value) {?>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left text-center">
                                <?php echo(rand(100000,299999)); echo $value->getId(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getName(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getAmount(); ?> €</td>
                            <td class="text-left text-center">
                                <a class="ma" id="no" href="with_add.php?id=<?php echo $value->getId();?>">Withdraw/Adding</a>
                                <a class="ma" href="?delete=<?php echo $value->getId();?>">Delete Account</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }?>
            </table>
        </div>


        <!-- responsive mobile -->
        <div class="table-title mob hidden-lg-up">
            <table class="table-fill">
                <thead>
                    <tr>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <?php
                    foreach ($object as $value) {?>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left text-center">
                                <?php echo $value->getName() . " " . $value->getAmount(); ?> €</td>
                            <td class="text-left text-center">
                                <a class="ma" id="no" href="with_add.php?id=<?php echo $value->getId();?>">With/Add</a>
                                <a class="ma" href="?delete=<?php echo $value->getId();?>">Delete</a>
                            </td>
                        </tr>
                    </tbody>

                    <?php
                    }?>
            </table>
        </div>
    </body>
