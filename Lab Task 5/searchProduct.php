<!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>
<?php 
        include "nav.php";

     ?>
<fieldset style="width: 30%;">
<legend>Search Product</legend>
<form method="post">
<input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required> <hr>
<input type="submit" name="search" value="Search By Name">
</form>
</fieldset>
<?php
require 'Controller/search.php';
?>
</body>
</html>