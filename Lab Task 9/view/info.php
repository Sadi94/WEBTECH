<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		


  </head>
  <body style="background-color:Platinum">

<table style="width:100%; border:1px solid  #b3b3b3">
        <tr  style="background-color:#ffffff;">
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href="../view/home.php">Home</a></th>
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href=" ">About</a></th>
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href=" ">Contact</a></th>
        
    </tr>
    </table>
    <div class="w3-sidebar w3-bar-block w3-grey" style="width:25%">
   <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-amazon">Dashboard</a><br>
  <a href="info.php" class="w3-bar-item w3-button w3-hover-amazon">Information</a><br>
  <a href="search.php" class="w3-bar-item w3-button w3-hover-amazon">Search</a><br>
  <a href="viewprofile.php" class="w3-bar-item w3-button w3-hover-amazon">View Profile</a><br>
  <a href="editprofile.php" class="w3-bar-item w3-button w3-hover-amazon">Edit Profile</a><br>
  <a href="changepropic.php" class="w3-bar-item w3-button w3-hover-amazon">Change Profile Picture</a><br>
  <a href="changepass.php" class="w3-bar-item w3-button w3-hover-amazon">Change Password</a><br>
  <a href="../controller/logoutcontroller.php" class="w3-bar-item w3-button w3-hover-amazon">Logout</a><br>
</div>

<div style="margin-left:24%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <div class="container">
  <br />
  <br />
  <br />
  <h2 align="center"></h2><br />
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">Search</span>
      <input type="text" name="search_text" id="search_text" placeholder=" " class="form-control" />
    </div>
  </div>
  <br />
  <div id="result"></div>
</div>
<div style="clear:both"></div>
<br />

<br />
<br />
<br />
</div>


</div>


  </body>
</html>


<?php

}
else {
header("location:../view/adlogin.php");
}
 ?>

 <script>
 $(document).ready(function(){
 	load_data();
 	function load_data(query)
 	{
 		$.ajax({
 			url:"../model/liveSearch.php",
 			method:"post",
 			data:{query:query},
 			success:function(data)
 			{
 				$('#result').html(data);
 			}
 		});
 	}

 	$('#search_text').keyup(function(){
 		var search = $(this).val();
 		if(search != '')
 		{
 			load_data(search);
 		}
 		else
 		{
 			load_data();
 		}
 	});
 });
 </script>