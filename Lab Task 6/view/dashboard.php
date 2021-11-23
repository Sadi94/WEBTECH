<?php
session_start();

if(isset($_SESSION['username']))
{
  include "nav.php"; 
  echo "<h3 align='center'> Welcome ".$_SESSION['username']."</h3>";  
}
else {
  echo "You can not access the page.";
}
 ?>

 <html>
 <body>
  <br><br><br><br><br><br><br><br><br><br><br><br>
    <div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
  </body>
    
</html>
