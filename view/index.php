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
<div class="table-title">
</div>
<table class="table-fill">
<thead>
<tr>
<th >N°Account</th>
<th >Name</th>
<th >Amount</th>
<th >Action</th>
</tr>
</thead>


<?php
foreach ($object as $value) {?>
  <tbody class="table-hover">
  <tr>
<td class="text-left"><?php echo(rand(100000,299999)); echo $value->getId(); ?></td>
<td class="text-left"><?php echo $value->getName(); ?></td>
<td class="text-left"><?php echo $value->getAmount(); ?> €</td>
<td class="text-left">
  <a class="ma" id="no" href="with_add.php?id=<?php echo $value->getId();?>">Withdraw/Adding</a>

  <a class="ma" href="?delete=<?php echo $value->getId();?>">Delete Account</a>
</td>
</tr>
</tbody>

<?php
}?>


</table>
  </body>
