<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $products = showAllproducts();
}
?>
<html>

<body>
  <?php 
        include "nav.php";

     ?>
<style>
table,td,th{
border:2px solid black;
    }
</style>

<fieldset style="width:30%;">
<legend> <h1>Display All Products</h1></legend>
<table align="center"; >
<thead>
<tr>
<th width="45%">Name</th>
<th width="40%">Profit</th>
<th colspan="2">Action</th>
</tr>
</thead>
<body>
<?php 
foreach ($products as $i => $product): 
if ($product['Display'] == "YES" || isset($_POST['name'])):
?>
<tr>

<td><?php echo $product['Name'] ?></td>
<td><?php echo $product['Selling Price'] - $product['Buying Price'] ?></td>
<td width="10%"><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a></td>
<td width="20%"><a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
</tr>
 <?php endif; endforeach; ?>
</body>
</table>
</fieldset>
</body>
</html>