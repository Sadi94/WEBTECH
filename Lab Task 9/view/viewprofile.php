<link rel="stylesheet" href="../css/viewprofile.css">
<script type="text/javascript">

  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.send();
}

</script>
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
    foreach ($data as $i => $tinker):

         $name= $tinker['Name'] ;
         $email=$tinker['Email'];
         $username= $tinker['Username'] ;
         $birth=$tinker['Birthday'];
         $gender= $tinker['Gender'] ;
         $designation= $tinker['Designation'] ;
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
 <meta charset="utf-8">
       <link rel="stylesheet" href="../CSS/all.css">

 <body>
  <br><br><br><br><br><br>
    <div align="center">
      <hr>
       
       <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>
         
       </div>
  </body>
    
</html>