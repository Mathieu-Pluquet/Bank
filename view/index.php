<html lang="en">
<head>
<meta charset="utf-8" />
<title>Table Style</title>
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div class="table-title">
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">N°Account</th>
<th class="text-left">Name</th>
<th class="text-left">Amount</th>
<th class="text-left">Action</th>
</tr>
</thead>


<?php
include 'view/header.php';
foreach ($object as $value) {?>
  <tbody class="table-hover">
  <tr>
<td class="text-left"><?php echo(rand(100000,299999)); echo $value->getId(); ?></td>
<td class="text-left"><?php echo $value->getName(); ?></td>
<td class="text-left"><?php echo $value->getAmount(); ?> €</td>
<td class="text-left">
  <a  href="with_add.php?id=<?php echo $value->getId();?>">Withdraw/Adding</a> <p></p>

  <a href="?delete=<?php echo $value->getId();?>">Delete Account</a> <br> <p></p>
</td>
</tr>
</tbody>





<?php
}?>


</table>
  </body>
