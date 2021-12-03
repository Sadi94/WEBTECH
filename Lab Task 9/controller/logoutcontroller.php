<?php
session_start();
if(isset($_SESSION['username']))
{
  session_destroy();
  header('Location:../view/adlogin.php');
}
{
  echo "You can not access this page.";
}
 ?>