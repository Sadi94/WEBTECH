<?php 

session_start();

require_once '../model/model.php';


if(isset($_POST['submit'])) 
{
	$data['password'] = $_POST['password'];
	$s= $_SESSION['username'];
	
  if (updatePass($s,$data))
  {
  	header('Location: ../viewProfile.php');
  }
} 


else 
{
	echo '<br><b> <h2> You are not allowed to access this page. </b></h2>';
}

?>