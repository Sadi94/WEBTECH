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
<html lang="en" dir="ltr">
  <head>
    
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
  </head>
  <body>
    <fieldset style="width:30%;">
    <legend align='center'><h3>Change Password</h3></legend>
    <form  method="post" action="../controller/cpasscontroller.php">
       <label>Current Password:</label><input><span class="error">*</span><br/><br/>
    
      <label style="color:green">New Password:</label><input><span class="error">*</span> <br/><br/>
      
      <label style="color:Red">Retype New Password:</label><input ><span class="error">*</span><br/><br/>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    </fieldset>
  </body>
</html>