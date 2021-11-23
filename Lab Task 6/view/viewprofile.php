
<?php
session_start();

if(isset($_SESSION['username']))
{
  include "nav.php"; 
require_once '../controller/tinkerinfocontroller.php';

if(isset($_SESSION['username']))
{
$data = fetchtinker($_SESSION['username']);

  if($data!=NULL)
  {
    foreach ($data as $i => $warden):

         $name= $warden['Name'] ;
         $email=$warden['Email'];
         $username= $warden['Username'] ;
         $birth=$warden['Birthday'];
         $gender= $warden['Gender'] ;
         $designation= $warden['Designation'] ;
        endforeach;

    echo "<br/> Name:$name";
    echo "<br/>Email:$email";
    echo "<br/>User Name:$username";
    echo "<br/>Date of Birth : $birth";
    echo "<br/> Gender :$gender";
    echo "<br/> Designation : $designation";

}
}

else {
  echo "You cannot access this page!!";
}  
}
else {
  echo "You can not access the page.";
}
 ?>

 <html>
 <body>
  <br><br><br><br><br><br>
    <div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
  </body>
    
</html>