<!DOCTYPE HTML>  
<html>
  <head >
  <title>REGISTRATION</title>
    </head >
    <body> 
		  <?php 
        include "homeNav.php";
      ?>
		      <h3 align= "right">

		      <a href="home.php">Home | </a> 
		      <a href="adminLogin.php">Login </a>
			  <hr>
	          </h3> 	 
 <!DOCTYPE html>  
 <html>   
      <body>  
          
          <form action="controller/registrationController.php" method="POST" enctype="multipart/form-data">

           		<fieldset align="center" style="width:40%;"> 

					 <legend><h2 >REGISTRTION </h2></legend>					                    
               <br><br> 			 
                   <label>Name <span style="color: rgb(255, 255, 255);"> *********** </span> :</label>  
                   <input type="text" name="name">  
					 <br><br>
                   <label>Email <span style="color: rgb(255, 255, 255);"> *********** </span>:</label>  
                   <input type="text" name="email">
				    <br><br>
                   <label>Username <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                   <input type="text" name="username"> 
					 <br><br> 
					 
					 <label>Password <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                     <input type="password" name="password"> 
                     <br><br>					 
					 
					 <label>Confirm Password <span style="color: rgb(255, 255, 255);"> * </span>:</label>  
                     <input type="password" name="cpassword"> 
					 <br><br>
					 
					 <label>Contact Number<span style="color: rgb(255, 255, 255);"> *** </span>:</label>  
                     <input type="text" name="contactno" > 
					 <hr>
					 
					  <input type="submit" name="submit" value="Submit" class="btn btn-info"/>   
					  <input type="reset" value="Reset">
					  <hr></fieldset>
					 	
						
		             <div align="center">
		             
		             <p> <span style="color: rgb(140, 140, 140);"> Copyrightn © <?php echo date(2021);?> <span/> </p>
		     
		             </div>
					   
					  </fieldset>
                </form>  
            
           <br />  
      </body>  
 </html>  