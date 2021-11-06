<?php  

session_start();

require_once '../model/model.php';


if (isset($_POST['submit']))
{
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];
	
  if (login($data)) 
  {
  	echo '<b>Logged in successfully!</b><br>';
	
	$_SESSION['username']= $_POST['username'];
    $_SESSION['password']=$_POST['password'];

	header("location:../dashboard.php");
  }
 }

	
else 
{
	echo '<br><b><h2>You are not allowed to access this page.</b></h2>';
}

?>