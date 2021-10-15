<!DOCTYPE html>
<html> <title> Upload File </title>
<body>
		<fieldset>
		   <div> 
		   
		     <p> <h1 style="color: green">  X  <sub style="color:black"> Company </sub> <h1> </p>
		 
		   
		       <h2 align= "right">
		 
		 
		        Logged in as<a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> Bob | </a>
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php"> Logout </a>  
		       
		   </h2>
		   
		  <hr>
		  
		</div> 
			<fieldset>
			
	      <legend><h2> <u> Account </u> </h2> <style="color: "black";"></legend>
		    
		   
            <h2>
            <ul>
                <li> <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Dashboard.php">  Dashboard   </a></li> 
                <li> <a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> View Profile </a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Edit%20Profile.php"> Edit Profile <a> </li>
				<li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/profile%20picture.php">Change Profile Picture</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Change%20Password.php">Change Password</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">Logout</a> </li>
                 
		     </ul>  
		     </h1>
		     </fieldset><br>
		     <fieldset>

    <form action="upload.php" method="post" enctype="multipart/form-data"> <br>
   <fieldset>
        <legend><h1 align="left"> PROFILE PICTURE </h1> </legend>
		
		  <h3 align="left"> 
		  
             
             <img  src="1.png" height="200px" width="250px"  title="profile pic"> </img> <br>

        <label><style="color: rgb(255, 255, 255);"> </label>
        <input type="file" name="fileToUpload" id="fileToUpload"> <br> <br>
        <hr>
        <input type="submit" name="submit" value="Submit" >
        	</fieldset>
        <div>
    
			 <hr>
       </div>
	    </h3> 
		
		<div align="center">
		  
		           <h4> <span style="color: rgb(140, 140, 140);"> Copyright © <?php echo date(2017);?> </span> </h4>
		   
		        </div>
				</fieldset>
                 <br>
    </form>
  </fieldset>

   </body>
</html>