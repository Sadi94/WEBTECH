<!DOCTYPE HTML>
<?php require_once "../javascript/signup.php";
//include("../model/header.php"); 
?>
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
        include "homeNav.php";
      ?>
          <h3 align= "right">

          <a href="home.php">Home | </a> 
          <a href="adlogin.php">Login </a>
        <hr>
            </h3> 
            </div> 
<!------------------->
           <div align="center";>
           <fieldset style="width:25%;"> 

          <legend align='center'> <h2> New User Sign Up Form </h2> </legend>
          <form onclick="return validation()" method="post" action="../controller/signupcontroller.php">
             
             <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Name<span style="color: rgb(255, 255, 255);">****************</span>: </label> </b><input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">

            <span class="error" id="nameErr"> <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span><br>

            <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>User Name<span style="color: rgb(255, 255, 255);">*********</span>: </label> </b><input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username">
           <span class="error" id="usernameErr"> <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span><br>
           
           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>E-mail<span style="color: rgb(255, 255, 255);">***************</span>: </label> </b><input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
           <span class="error" id="emailErr"> <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Password<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b><input type="text"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" >
           <span class="error" id="passwordErr"> <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Confirm Password<span style="color: rgb(255, 255, 255);"></span>: </label> </b><input type="text" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()" name="confirmpassword" id="confirmpassword" placeholder="Enter Password">
           <span class="error" id="confirmpasswordErr"> <?php if(!empty($_GET['$confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Designation<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b><input type="text" onkeypress="checkDesignation()" onblur="checkDesignation()" name="designation" id="designation" placeholder="Enter designation"><br><br>
           <span class="error" id="designationErr"><?php if(!empty($_GET['designationErr'])){echo $_GET['designationErr'];} ?></span><br>

           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Date of Birth<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b><input style="color: rgb(0,0,0);" type="date"  size="1" onkeyup="checkBirth()"  onkeypress="checkBirth()" onblur="checkBirth()"  name="birth" id="birth"  >
           <span class="error" id="birthErr"><?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span><br>


           <b> <label for="userename"><span style="color: rgb(255,0,0);">*</span>Gender<span style="color: rgb(255, 255, 255);">**************</span> </label> </b><input type="radio" name="gender"  value="female">Female<input type="radio" name="gender"  value="male">Male<input type="radio" name="gender"  value="other">Other<br><br>
           <span class="error" id="genderErr"><?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span><br>

              <input type="submit" name="submit" value="Submit">
              </fieldset>
             </div>
         </form>
         <div align="center"><hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
</body>
</html>