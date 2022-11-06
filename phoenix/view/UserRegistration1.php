<?php
include("../control/Process.php");
setcookie("mycokie","hello")
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">   
 </head>
    <body>
    <div class="header">
        <h1>Phoenix Roar Club </h1>
        <h3> We create Future Player </h3>
    </div>
<div class="topnav">
  <a href="../view/Home.php">Home</a>
  <a href="#">About US</a>
  <a href="#">Login</a>
  

</div>
<div class="regform">
<h1>User Registration Form </h1>
<hr>
</div>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           <tr><td> First Name</td><td> <input type="text" name="fname"> </td></tr>
           <td>
          <?php
         // echo $name2;
          ?>
           </td>

           <tr><td> Last Name </td><td> <input type="text" name="lname"> </td></tr>
           <tr><td> Phone Number </td><td> <input type="text" name="phonenumber" > </td></tr>
        

           <tr><td> <label for="birthday">Birthday: </label> </td><td> <input type="date" id="birthday" name="birthday"> </td></tr>

     
           <tr><td>
           GENDER:
           </td><td>
           <input type="radio" name="radio" value="MEN"> MEN
           <input type="radio" name="radio" value="WOMEN">WOMEN
           </td></tr>
           <tr><td>
           
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td>Please Choose Your Image :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>
            <tr><td> <a href="../view/userinpormation.php"><input type="Submit"name="Submit" value="Submit"> 
            <input type="Reset"  ></td></tr>

            <tr><td> <a href="../view/Account.php"><input type="button" value="Back" ></a>
            </table>
        </form>
    </body>
</html>