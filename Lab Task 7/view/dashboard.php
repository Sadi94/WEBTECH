<?php
session_start();

if(isset($_SESSION['username']))
{
  include "dnav.php"; 
  echo "<h2 align='center'> Welcome ".$_SESSION['username']."</h2>";  
}
else {
  echo "You can not access the page.";
}
 ?>

 <html>
 <link rel="stylesheet" href="../css/home.css">
 <body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div align="center"style="background-color: #FFE4B5 ;">
      <hr>
       
       <h3> <span style="color: rgb(0, 0, 0);"> Copyright ©  <?php echo date(2021);?> </span> </h3>
         
       </div>
  </body>
    
</html>
