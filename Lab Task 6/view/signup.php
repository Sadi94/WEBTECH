<!DOCTYPE HTML>
<html>
<head>
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

<p><b>Sign Up Form</b></p>
<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" 
action="../controller/signupcontroller.php">

  <b> <label for="userename">Name<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b>
  <input type="text" name="name"><span class="error"> * </span><br><br>

  <b> <label for="userename">User Name<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b>
  <input type="text" name="username" > <span class="error"> * </span><br><br>
  
  <b> <label for="userename">E-mail<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b>
  <input type="text" name="email"> <span class="error"> * </span><br><br>

  <b> <label for="userename">Password<span style="color: rgb(255, 255, 255);">*********</span>: </label> </b>
  <input type="text" name="password" > <span class="error"> * </span><br><br>

  <b> <label for="userename">Comfirm Password<span style="color: rgb(255, 255, 255);">*</span>: </label> </b>
  <input type="text" name="confirmpassword" > <span class="error"> * </span><br><br>

  <b> <label for="userename">Date of Birth<span style="color: rgb(255, 255, 255);">******</span>: </label> </b>
  <input type="text" size="1" placeholder="dd" name="birthDate" > /
  <input type="text" size="1" placeholder="mm" name="birthMonth" > /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" > <span class="error"> * </span><br><br>

  <b> <label for="userename">Gender<span style="color: rgb(255, 255, 255);">***********</span>: </label> </b>
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other<br><br>

  <b> <label for="userename">Designation<span style="color: rgb(255, 255, 255);">*******</span>: </label> </b>
  <input type="text" name="designation" > <span class="error"> * </span><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
</body>
</html>