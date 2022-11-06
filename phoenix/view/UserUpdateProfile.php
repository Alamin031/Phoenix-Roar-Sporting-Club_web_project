<?php
include("../control/userupdateprofileprocess.php");
?>
<html>
<form action ="" method="post" enctype="multipart/form-data">
Fast Name:
<input type="text" name="fname" value="<?php echo $fname;?>">
Last Name:
<input type="text" name="lname" value="<?php echo $lname;?>">
Phone Number:
<input type="text" name="phonenumber" value="<?php echo $phonenumber;?>">
Birthday:
<input type="date" name="birthday" value="<?php echo $birthday;?>">
GENDER:
<input type="radio" name="GENDER" <?php echo $radio1; ?>>MEN
<input type="radio" name="GENDER" <?php echo $radio2; ?>>WOMEN
Email:
<input type="email" name="email" value="<?php echo $email;?>">
Password:
<input type="password" name="password" value="<?php echo $password;?>">

<!-- hridoy
<input type="checkbox" name="cricket" <?php echo $cricket; ?>>cricket -->

YOUR PREVIOUS FILE WAS <a href=<?php echo $fullfile; ?> > <?php echo $file; ?> </a>

file:
<input type="file" name="myfile">

<input type="submit" name="Update" value="Update">
<input type="submit" name="DELETE" value="DELETE">

<a href="../view/UserDashbord.php"><input type="button" value="Back" ></a>

</form>
</html>






