<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php 
        include "lognav.php";
      ?> 
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
  </head>
  <body>
    <form method="post" action="../controller/adlogincontroller.php">

      </div> 

           <div align="center";>
           <fieldset style="width:20%;"> 

          <legend align='center'> <h2> ADMIN LOGIN </h2> </legend>
          <form name="myForm" action="" onsubmit="return validateForm()" method="post">
          
             <b> <label for="userename"> User Name  <span style="color: rgb(255, 255, 255);">*</span>: </label> </b> 
             <input type="text" name="username" placeholder="Enter your admin user name">
               <span class="error"> * </span>
               <br><br>
              
                <b> <label for="password"> Password <span style="color: rgb(255, 255, 255);">**</span>: </label> </b>
               <input type="text" name="password" placeholder="Enter your password">
                <span class="error"> * </span>
                <br><br>
                
             <div>
                <hr>
                <input type="checkbox"  name="remember" value="remembered"><label for="remember">Remember Me</label><br>
                <input type="submit" name="submit" value="Login" echo $Login Successful;> 
                <meta ><a href ="forgotpassword.php">Forgot Password? </a></meta>
   
             </div>

          
    </form>
  </body>
</html>