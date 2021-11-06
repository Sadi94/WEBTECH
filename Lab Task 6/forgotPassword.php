<!DOCTYPE HTML>  
<html>
<fieldset>
  <head>
     <style>
     .error {color: #FF0000;}
    </style>

    </head>
    <body>  
	    <?php 
        include "homeNav.php";
      
           // define variables and set to empty values
        $emailErr =  " ";
        $email =  " "; 
		$message = ''; 

      if ($_SERVER["REQUEST_METHOD"] == "POST")
       
       {
          
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
               else
                {  
                     $message = "<label class='text-success'> email sent Success fully </p>";  
                }
   

            }
            
        }


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		    <fieldset align="center" style="width:30%;">
			 
			<legend> <h2 align="center"> FORGOT PASSWORD  </h2></legend>
			  
			    <p align="center">
				
			    <b> <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span>
                <br><br>
                <hr>
				
                 <input type="submit" name="submit" value="Submit">  
                 <?php  
                          
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
				 
				</p>
	
				</fieldset>
         </form> <br>
         <b><br><hr>
				 
		    <div align="center">
		   
		   <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
		     
		   </div>
	     
    </body>
</fieldset>
</html>