<?php
include("../control/playerupdateprofileprocess.php");
?>
<html>

<form action ="" method="post" enctype="multipart/form-data">
Fast Name:
<input type="text" name="fname" value="<?php echo $fname;?>">
Last Name:
<input type="text" name="lname" value="<?php echo $lname;?>">
User Name:
<input type="text" name="uname" value="<?php echo $uname;?>">
Nationality:
<input type="text" name="nationality" value="<?php echo $nationality;?>">
Division:
<input type="text" name="Division" value="<?php echo $Division;?>">
Zila:
<input type="text" name="Zila" value="<?php echo $Zila;?>">
University:
<input type="text" name="university" value="<?php echo $university;?>">
College:
<input type="text" name="college" value="<?php echo $college;?>">
School:
<input type="text" name="school" value="<?php echo $school;?>">
Phone Number:
<input type="text" name="number" value="<?php echo $number;?>">
Birthday:
<input type="date" name="birthday" value="<?php echo $birthday;?>">
GENDER:
<input type="radio" name="GENDER" <?php echo $radio1; ?>>MEN
<input type="radio" name="GENDER" <?php echo $radio2; ?>>WOMEN


Relationship:
<input type="radio" name="Relationship" <?php echo $radio1; ?>>Single
<input type="radio" name="Relationship" <?php echo $radio2; ?>>Married
<input type="radio" name="Relationship" <?php echo $radio3; ?>>Divorced


Email:
<input type="email" name="email" value="<?php echo $email;?>">
Password:
<input type="password" name="password" value="<?php echo $password;?>">

<!-- Favorite Sports:
<?php echo $cricket; ?>
<input type="checkbox" name="cricket" <?php echo $cricket; ?>>cricket
<input type="checkbox" name="football" <?php echo $football; ?>>football
<input type="checkbox" name="basketball" <?php echo $basketball; ?>>basketball
<input type="checkbox" name="tennis" <?php echo $tennis; ?>>tennis
<input type="checkbox" name="hockey" <?php echo $hockey; ?>>hockey
<input type="checkbox" name="volleyball" <?php echo $volleyball; ?>>volleyball -->



file:
<input type="file" name="myfile">

<input type="submit" name="Update" value="Update">
<input type="submit" name="DELETE" value="DELETE">

<a href="../view/UserDashbord.php"><input type="button" value="Back" ></a>

</form>
</html>






