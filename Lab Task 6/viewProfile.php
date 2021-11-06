<!DOCTYPE html>
<?php
session_start();

require_once 'controller/viewProfileController.php';

$student = fetchProfile($_SESSION['username']);

?>
<html> 
	 <head>
	 <title> PROFILE </title>
	 </head>  
	 <body>
	      
		<?php 
        include "nav.php";
      ?>
		      <h3 align= "right">
		
		      Logged in as <?php echo  $_SESSION['username']?>|
		      <a href="logout.php">Logout</a>  
			  <hr>
		   </h3>    
			 
		    <h2 align="center"> PROFILE </h2><br>
			
			<h3 align="center">
			
		      Name<span style="color: rgb(255, 255, 255);"> ******* </span>:
			  <?php echo $student['Name']; ?> 
			  <br><br>
			  
	          Email <span style="color: rgb(255, 255, 255);">**** </span>:
			  <?php echo $student['Email']; ?> 
			  <br><br>
			  
		      ContactNo<span style="color: rgb(255, 255, 255);"> ******** </span>:
			  <?php echo $student['ContactNo']; ?> 
			  <br><br>
			  
		      Username <span style="color: rgb(255, 255, 255);"> ****** </span>:
			  <?php echo $student['Username']; ?> 
			  <br><br>
			
			</h3>
		  
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright © <?php echo date(2021);?> </span> </h4>
		   
		   </div>
		   
	 </body>
	 
</html>