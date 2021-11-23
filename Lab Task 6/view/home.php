<?php
session_start(); 
if(empty($_SESSION["username"])) 

?>

<html>
  <head>
      <?php 
        include "homeNav.php";
      ?>      
  </head>
 
 <body>

<br>
        <h1 align='center' style="font-family:Poor Richard">"Find All in a Single Site "</h1>
        
        <h3 align='center' style="font-family:Poor Richard">STAY HOME , STAY SAFE</h3>   
       <div style="background-color: white;">
    <center><font size="3" face="arial" >
        <br><br>
        <a href="aboutUs.php" class='about'>About Us</a><br>
        <br>
        <a href="contactUs.php" class='contact'>Contact </a><br>.
        <br>
       
        </font></center>
    </div> 
    <div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
  </body>
    
</html>

<?php

?>   