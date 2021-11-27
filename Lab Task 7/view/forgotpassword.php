</html><!DOCTYPE html>
<html lang="en">
<head>
     <?php 
        include "lognav.php";
      ?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .fp {
        margin-top: 2rem;
        padding: 2rem;
        margin-right: 30%;
        margin-left: 30%
    }
    </style>
</head>
<body>
    <div class="fp">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend align="center" style="width:30%;">Forget Password</legend>

                Enter Email: <input type="text" name="Email">

                <hr>
                <input type="submit" name="submit" value="Submit">
                <?php        
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                ?>
            </fieldset>
        </form>
    </div>
    <div align="center">     
           <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h5>    
    </div>
</body>
</html>