<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:adminLogin.php");

}

else{
	header("location:adminLogin.php");
}

 ?>