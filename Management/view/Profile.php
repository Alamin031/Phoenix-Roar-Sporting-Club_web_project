<?php
require("../controller/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/OverAll.css">
    <link rel="stylesheet" href="../CSS/extra.css">

</head>
<body>
    <div class="sticky">
           <p> Upcoming Events...Please check the link..http:www.sport/events<p>
       </div>

    <?php
    session_start();
    if(!isset($_SESSION['setProfile'])) {
        header("Location: ../controller/ProfileWork.php");
        exit();
    }
    $data = $_SESSION['setProfile'];
    ?>

    <h3 class="titlecontent" >PROFILE</h3>
        <div style="padding-bottom: 200px;" class="showbar">

        <label for="firstname">First Name :</label>
        <label for="firstnameplace"> <?php echo $data['firstname']; ?> </label> <br><br>

        <label for="lastname">Last Name :</label>
        <label for="lastnameplace"> <?php echo $data['lastname']; ?> </label> <br><br>

        <label for="gender">Gender :</label>
        <label for="genderplace"> <?php echo $data['gender']; ?> </label> <br><br>

        <label for="dob">DOB :</label>
        <label for="dobplace"> <?php echo $data['dob']; ?> </label> <br><br>

        <label for="address">Address :</label>
        <label for="addressplace"> <?php echo $data['address']; ?> </label> <br><br>

        <label for="email">Email :</label>
        <label for="emailplace"> <?php echo $data['email']; ?> </label> <br><br>

    </div>

    <a class="linktag" href="UpdatePro.php">Update Profile</a>
    
    <a class="linktag" href="UpdatePass.php">Change Password</a>

    <a class="linktag" href="Managment.php">Go Back</a>
    


    <?php
    if(isset($_SESSION['setProfile'])) {
        unset($_SESSION['setProfile']);
    }
    ?>



    
</body>
</html>