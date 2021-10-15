<!DOCTYPE HTML>  
<html>
<fieldset>
  
  <head> <title> LOGIN </title>
    <style>
     .error {color: #FF0000;}
    </style>
    </head>
    <body>  
	     <br>
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
        $usernameErr = $passwordErr = "" ;
        $username = $password = ""  ; 
		

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if (empty($_POST["username"])) 
		    {
               $usernameErr = "UserName is required!";
            } 
		  
		    else 
		    {
               $username = test_input($_POST["username"]);
		
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-_ ]*$/",$username)) 
		        {
                 $usernameErr = " User Name can contain alpha numeric characters, period, dash or underscore only!";
                }
				
				// contains minimum char
					
		        if(strlen($_REQUEST["username"]) < 2)   				   
		         {
                   $usernameErr = "UserName contains at least 2 char!";
                 }
            }
			


            if(empty($_POST["password"])) 
		    {
                $passwordErr = "Password is required!";
            } 
			else 
			    {    
		           $password = test_input($_POST["password"]);
				   
					
                    if(strlen($password)<= '8')
		            {
                       $passwordErr = "Password must not be less than 8 char ";
                    }

					
					if(!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["password"])) 
					{
                       $passwordErr .= "Password must contain at least 1 special char!"."<br>";
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
	       <br>
	       
	       <fieldset>

          <legend > <h2> LOGIN </h2> </legend>
		  
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		     <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" value="<?php echo $username;?>">
			   <span class="error"> * <?php echo $usernameErr; ?> </span>
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="<?php echo $password;?>">
                <span class="error"> * <?php echo $passwordErr;?></span>
                <br><br>
				
		     <div>
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>

                <input type="submit" name="submit" value="Submit" echo $Login Successful;  > <a href="http://">Forgot Password?</a><br>

             
                    
             </div>
 		
         </form> <br>

          <hr>
	      </div>
		   
		   <div align="center">
		   
		   <h4 > <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h4>
		   </legend>
		   </div>

         </fieldset>
	 
    </body>
  </fieldset>
</html>