<?php
include("../control/UserProfileControl.php");

if (empty($_SESSION["email"]))

{
    header("Location: ../view/UserLogin.php");
}
?>
<html>
    hii there, <h4><?php echo $email; ?></h4>
    <form action ="" method="post" enctype="multipart/form-data">
        <input type="submit" name="show" value="show my profile">
      <input type="submit" name="logout" value="logout">
</form>
 <a href="../control/userlogout.php"> log out </a>

 <a href="../view/UserUpdateProfile.php"> profile </a>

 <a href="../view/update.php"> update </a>
 

</html>