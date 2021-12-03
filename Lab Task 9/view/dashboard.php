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


  </head>
  <body style="background-color:Platinum">
    
    <table style="width:100%; border:1px solid  #b3b3b3">
        <tr  style="background-color:#ffffff;">
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href="../view/home.php">Home</a></th>
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href=" ">About</a></th>
        <th style="border: 5px solid #FFE4B5;"><a style="text-decoration:none; color:#000000;" href=" ">Contact</a></th>
        
    </tr>
    </table>

    <!-- <?php include("viewprofile.php") ?> -->
 

   <div class="w3-sidebar w3-bar-block w3-grey" style="width:25%">
   <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-amazon">Dashboard</a><br>
  <a href="info.php" class="w3-bar-item w3-button w3-hover-amazon">Information</a><br>
  <a href="search.php" class="w3-bar-item w3-button w3-hover-amazon">Search </a><br>
  <a href="viewprofile.php" class="w3-bar-item w3-button w3-hover-amazon">View Profile</a><br>
  <a href="editprofile.php" class="w3-bar-item w3-button w3-hover-amazon">Edit Profile</a><br>
  <a href="changepropic.php" class="w3-bar-item w3-button w3-hover-amazon">Change Profile Picture</a><br>
  <a href="changepass.php" class="w3-bar-item w3-button w3-hover-amazon">Change Password</a><br>
  <a href="../controller/logoutcontroller.php" class="w3-bar-item w3-button w3-hover-amazon">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-black" style="margin-top:250px">
  <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
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