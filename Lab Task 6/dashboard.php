<?php
session_start();

$s=$_SESSION['username'];

?>
<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
		<?php 
	        include "nav.php";
	     ?>
      <h3 align= "right">
			  
				
		      Logged in as <?php echo $s; ?>|
		      <a href="logout.php">Logout</a> 
              <hr>			  
		      </h3> 
		      <h1 align="center" > Welcome <?php echo $s; ?>  <h1/>
           
		    <hr>
		
	     <div align="center">
		
		    <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> <span/> </h5> 
			
		</div>   
		
	 </body>
	 
</html>	 