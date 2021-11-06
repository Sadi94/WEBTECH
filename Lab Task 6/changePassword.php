<?php
session_start();
?>

<!DOCTYPE html>
<html> <title> CHANGE PASSWORD </title>
      <body>
      <?php 
        include "nav.php";
      ?>
		  <h3 align= "right">
		      Logged in as<?php echo $_SESSION['username']?> | </a> <a href="logout.php">Logout</a>
          <hr>			   
		  </h3>  
		
      <h3 align="center"><legend> <h2> <b>CHANGE PASSWORD </h2> </b></legend></h3><br>
	  
	  
      <form  action="controller/changePasswordController.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data">
	  
	    <h3 align="center"> </p> 
			  
		  <label>Current Password <span style="color: rgb(255, 255, 255);"> ******* </span>:</lebel> 
		  <input type="password" name="cpassword"> <span class="error" style="color: red">*</span>       
          <br><br>
		  
          <label style="color: green">New Password <span style="color: rgb(255, 255, 255);"> ********** </span></span><span style="color:black">:</span></lebel>
          <input type="password" name="password" > <span class="error" style="color: red">*</span>         
          <br><br>
		  
          <label style="color:red">Retype New Password <span style="color:rgb(255, 255, 255);"> *** </span><span style="color:black">:</span></lebel>
          <input type="password" name="rnpassword" ><span class="error" style="color: red">*</span>       
          <br><br>
		  
          <input type="submit" name="submit" value="Submit">
          <hr><br>
		  
		  </h3>
		  
      </form>
      <div align="center">
		  
	  <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
		          	  
  </body>
</html>