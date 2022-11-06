

<?php
include "../Control/userforgotcheck.php";
setcookie("mycokie","hello");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Forgot</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">  
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 </head>

<body>



<div class="header">
        <h1>Phoenix Roar Sporting  Club </h1>
        <h3> We create Future Player </h3>
    </div>
 
    <div class="container22">
    <div class="title"> User Forgot password</div>
    <div class="content22">
            <form action="" method="post" enctype="multipart/form-data">



            <div class="user-details">
          <div class="input-box6">
            <span class="details">Email:</span>
            <input type = "text" name= "email"> 

            <!-- <input type="text" name="fname"> -->
         </div>





          <div class="input-box6">
            <span class="details">New Password</span>
            <input type = "password" name= "password"  placeholder="Password must be 6 characters">
          </div>

          <div class="input-box6">
            <span class="details"> Confirm New Password</span>
            <input type = "password" name= "confirmpassword"  placeholder="Please re-enter password">
          </div>

       


        
        <div class="button14">
            <input type="submit" name="Submit" value="Submit">
        </div>





     
      </form>
    </div>
  </div>





</body>
</html>
