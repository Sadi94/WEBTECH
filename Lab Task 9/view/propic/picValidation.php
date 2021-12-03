<!DOCTYPE html>
<html>

<head>
    <?php
        include "../propic/picupnav.php";
    ?>
    <title>Uploded Profile Picture</title>
    <style>
    .photo img {
        height: 300px;
    }

    .photo {
        width: 200px;
    }
    </style>
</head>

<body>
    <div class="photo">
        <fieldset align='center' width=300%>
            <legend><B>PROFILE PICTURE</B></legend> <br>
            <br><img src="pic/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture">
        </fieldset>

    </div>
    <?php
$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$flag = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $flag  = 1;
}
   else 
  {
    echo "File is not an image<br>";
    $flag = 0;
  }
if ($_FILES["fileToUpload"]["size"] > 4000000) 
{
  echo "Picture size should not be more than 4MB<br>";
  $flag  = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
{ 
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $flag  = 0;
}

if ($flag  == 0) 
{
  echo "Sorry, your file was not uploaded<br>"; 
} 
else 
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
  {
    echo "Profile Picture Uploaded Succesfully..<a href='http://localhost/WebTech/Lab%20Task%208/view/dashboard.php'>Back to Dashboard</a>";
    
  } else 
  {
    echo "Sorry, there was a problem uploading your file<br>";
  }
}
?>

</body>

</html>