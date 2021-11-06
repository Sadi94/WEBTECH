<!DOCTYPE HTML>  
<html>
  <head >
  <title></title>
    </head >
    <body> 
		   <?php 
        include "homeNav.php";
      ?>
		      <h3 align= "right">
			 
			  
		      <a href="home.php">Home |  </a> 
		      <a href="registration.php">Registration </a>
			  <hr>
		      </h3>  	
    <?php       
  
 
    ?>        
		  <h3 align="center">
		  <legend> <h2> <b>ADMIN LOGIN</b></h2></legend><br>
          <form action="controller/adminLoginController.php" method="POST" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> User Name : </label> </b>
			   <input type="text" name="username" ><br><br>
			   
			  
			    <b> <label for="password"> Password <span style="color:rgb(255, 255, 255);"> * </span>:</label> </b>
                <input type="password" name="password" ><br><br>
                <hr>
				
				
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
				<a href="forgotPassword.php">Forgot Password?</a>
                
			</h3>	
				
							    
		   <div align="center">
		   <hr>
		   
		   
		   <p> <span style="color: rgb(140, 140, 140);"> Copyright ©   <?php echo date(2021);?> <span/> </p>
		    
			
		   </div>
 		
         </form> <br><br>

 </body>
</html>