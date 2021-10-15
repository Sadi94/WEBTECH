<!DOCTYPE HTML>  
<html>
<fieldset>
  <head>
     <style>
     .error {color: #FF0000;}
    </style>

    </head>
    <body>  
	    
		   <div> 
		   
		      <p> <h1 style="color: green">  X  <sub style="color:black">Company </sub> </h1> </p>
		
		       <h3 align= "right">
		 
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Public%20Home.php">  Home |  </a> 
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">  Login |  </a>  
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/store.php">  Registration </a> 
		 
		   </h3>
		   
		  <hr>
		  
		</div> 
	   

    <?php
           // define variables and set to empty values
        $emailErr =  " ";
        $email =  " "; 
		

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
		  
		    <fieldset>
			 
			<legend><h2 align="left"> FORGOT PASSWORD  </h2></legend>
			  
			    <p align="left">
				
			    <b> <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span>
                <br><br>
                <hr>
				
                 <input type="submit" name="submit" value="Submit">  
				 
				</p>
				 
				 

				</fieldset>
         </form> <br>
         <b><br><hr>
				 
		    <div align="center">
		   
		   <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h5>
		     
		   </div>
	     
    </body>
</fieldset>
</html>