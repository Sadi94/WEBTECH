<?php

session_start();
require_once '../controller/tinkerinfocontroller.php';
$data = fetchTinker($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $tinker):

       $name= $tinker['Name'] ;
       $email=$tinker['Email'];
       $birth=$tinker['Birthday'];
       $gender= $tinker['Gender'] ;
       $designation= $tinker['Designation'] ;
 
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
       <link rel="stylesheet" href="../CSS/all.css">
<?php
  include "nav.php"; 
 ?>
	<title></title>
</head>
<body>

 <form action="../controller/updatecontroller.php" method="POST" enctype="multipart/form-data">
  <br>
  <label for="name">Name:</label>
  <input value="<?php echo $name ?>" type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input value="<?php echo $email ?>" type="text" id="email" name="email"><br><br>
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear ?>"> <br><br>
  <input type="submit" name = "updateTinker" value="Update">
  <input type="reset">
</form><br><br><br><br><br><br><br><br><br><br><br><br>
<div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
</body>
</html>