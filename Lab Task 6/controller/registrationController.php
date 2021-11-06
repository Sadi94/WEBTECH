<?php  


require_once '../model/model.php';


if (isset($_POST['submit'])) 
{
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['contactno'] = $_POST['contactno'];
	$data['password'] = $_POST['password'];

	
  if (admin($data)) 
  {
  	header("location:../adminLogin.php");
  }	
   
} 

else 
{
	echo '<br><b><h2>You are not allowed to access this page.</b></h2>';
}

?>