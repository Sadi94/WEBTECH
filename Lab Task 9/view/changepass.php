<?php
session_start();

if(isset($_SESSION['username']))
{
  include "nav.php"; 
  
}
else {
  echo "You can not access the page.";
}
 ?>
<!DOCTYPE html>

<?php 
//include("../model/header.php");
require_once "../javascript/cpass.php";
?>
<html lang="en" dir="ltr">
  <head>
   <!-- <meta charset="utf-8">
       <link rel="stylesheet" href="../CSS/all.css">
     -->
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8"><title></title>
  </head>
  <body>
    <fieldset style="width:30%;">
    <legend align='center'><h3>Change Password</h3></legend>
    <form onclick="return validation()" method="post" action="../controller/cpasscontroller.php">
       <label>Current Password:</label><input type="text" name="currentPassword" id="currentPassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()">
       <span class="error" id="currentPasswordErr">* <?php if(!empty($_GET['currentPasswordErr'])){echo $_GET['currentPasswordErr'];} ?></span><br/><br/>
    
      <label style="color:green">New Password:</label><input type="text" name="newPassword" id="newPassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" >
      <span class="error" id="newPasswordErr">* <?php if(!empty($_GET['newPasswordErr'])){echo $_GET['newPasswordErr'];} ?></span> <br/><br/>
      
      <label style="color:Red">Retype New Password:</label><input type="text" name="retypeNewPassword" id="retypeNewPassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()">
      <span class="error" id="retypePasswordErr">* <?php if(!empty($_GET['retypePasswordErr'])){echo $_GET['retypePasswordErr'];} ?></span><br/><br/>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    </fieldset>
  </body>
</html>