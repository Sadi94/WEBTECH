<?php
session_start();

if(isset($_SESSION['username']))
{
require_once '../controller/tinkerinfocontroller.php';

if(isset($_SESSION['username']))
{
$data = fetchtinker($_SESSION['username']);

}

else {
  echo "You cannot access this page!!";
}  
}
else {
  echo "You can not access the page.";
}
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
       <link rel="stylesheet" href="../CSS/signup.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
   <?php 
        include "nav.php";
      ?>
<!-------------------><br>
           <div align="center";>
           <fieldset style="width:25%;"> 

          <legend align='center'> <h2> New User Sign Up Form </h2> </legend>
          <form method="post" action="../controller/signupcontroller.php">
             
             <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Name<span style="color: rgb(255, 255, 255);">****************</span>: </label> </b><input type="text" name="username">
            <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span><br>

            <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>User Name<span style="color: rgb(255, 255, 255);">*********</span>: </label> </b><input type="text" name="username">
           <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span><br>
           
           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>E-mail<span style="color: rgb(255, 255, 255);">***************</span>: </label> </b><input type="text" name="email">
           <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Password<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b><input type="text" name="password">
           <span class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Confirm Password<span style="color: rgb(255, 255, 255);"></span>: </label> </b><input type="text" name="confirmpassword">
           <span class="error" id="confirmpasswordErr"><?php if(!empty($_GET['confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Date of Birth<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b><input style="color: rgb(0,0,0);" type="date"  size="30"  name="birth" id="birth"  >
           <span class="error" id="birthErr"><?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Gender<span style="color: rgb(255, 255, 255);">*******</span> </label> </b><input type="radio" name="gender"  value="female">Female<input type="radio" name="gender"  value="male">Male<input type="radio" name="gender"  value="other">Other<br><br>
           <span class="error" id="genderErr"><?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Designation<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b><input type="text" name="designation"><span class="error" id="designationErr"><?php if(!empty($_GET['designationErr'])){echo $_GET['designationErr'];} ?></span><br><br>
              <input type="submit" name="submit" value="Submit">
              </fieldset>
             </div>
         </form>
         <div align="center"><hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
</body>
</html>