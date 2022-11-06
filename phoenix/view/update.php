<?php
include("../control/userupdateprofileprocess.php");
setcookie("mycokie","hello");
if(empty($_SESSION["email"]))

{
    header("Location: ../view/UserLogin.php");

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>User Profile</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/update.css">   
 </head>
 <body>

 <div class="header">
        <h1>Phoenix Roar Sporting  Club </h1>
        <h3> We create Future Player </h3>
    </div>


<div class="regform1">
<h1>User Registration Form </h1>
<hr>
</div>


<!-- <form action ="" method="post" enctype="multipart/form-data"> -->

  <div class="container">
    <div class="title">Update</div>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" value="<?php echo $fname;?>">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" value="<?php echo $lname;?>">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" value="<?php echo $phonenumber;?>">
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" name="birthday" value="<?php echo $birthday;?>">
          </div>


          <div class="input-box5">
          <span class="details1">GENDER</span>
          <input type="radio" name="GENDER" value="MEN" <?php echo $radio1; ?>>MEN
          <input type="radio" name="GENDER" value="WOMEN" <?php echo $radio2; ?>>WOMEN
          </div>
  


          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" name="email" value="<?php echo $email;?>">
          </div>




          <div class="input-box">
            <span class="details">password</span>
            <input type="password" name="password" value="<?php echo $password;?>">
          </div>


          <div class="input-box">
            <span class="details">Please Choose Your Image :</span>
            YOUR PREVIOUS FILE WAS <a href=<?php echo $fullfile; ?> > <?php echo $file; ?> </a>
            <img src='$file' width="300px">

            <!-- <input type="file" id="myfile" name="myfile"> -->
            <input type="file" name="myfile">

          </div>


   
        </div>
       


        
        <div class="button2">
               <input type="submit" name="Update" value="Update">
          
        </div>

        <div class="button3">
        <input type="submit" name="DELETE" value="DELETE">
          
        </div>
      </form>




  </div>




  </body>
</html>