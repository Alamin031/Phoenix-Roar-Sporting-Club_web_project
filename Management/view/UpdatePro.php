<?php
require("../controller/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <script src="js/UpdatePro.js"></script>
    <link rel="stylesheet" href="css/OverAll.css">
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['updateProData'])) {
    header("Location: ../controller/UpdateProfileWork.php");
    exit();
}

$data = $_SESSION['updateProData'];

if ($data['gender'] === "Male") {
             
    $maleGender = "checked";
    $femaleGender = "unchecked";
}

else if ($data['gender'] === "Female") {
        $maleGender = "unchecked";
        $femaleGender = "checked";
}

?>

<h3 class="titlecontent" >UPDATE PROFILE</h3>

<form id="updateform" name="updateform" action="../controller/UpdateProfileWork.php" method="post" 
        onsubmit="isValid(this); return false;">

		
        <label for="fname">First Name:</label>
        <input type="text" name="firstname" id="firstname" value = <?php  echo $data['firstname'] ?? '' ?> >
        <br> <span class="error" id="fnameErr"> </span>
        <br><br>
        
        <label for="lname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" value = <?php  echo $data['lastname'] ?? '' ?> >
        <br> <span class="error" id="lnameErr"></span>
        <br><br>

			<label>Select Gender:</label>
		      <input type="radio" name="gender" value ="Male" id="gender" <?php  echo $maleGender ?> ><label for="male">Male</label>
              <input type="radio" name="gender" value ="Female" id="gender"  <?php  echo $femaleGender ?>><label for="female">Female</label>
            <br> <span class="error" id="genderErr"></span>
			<br><br>

            <label for="dob">DOB:</label>
			<input type="date" name="dob" id="dob" value = <?php  echo $data['dob'] ?? '' ?> >
            <br> <span class="error" id="dobErr"></span>
            <br><br>

            <label for="address">Address:</label><br>
			<textarea name="address" id="address" rows="1" cols="40"> <?php  echo $data['address'] ?? '' ?> </textarea>
            <br> <span class="error" id="addressErr"></span>
			<br><br>

            <label for="email">Email:</label>
			<input type="email" name="email" id="email" value = <?php  echo $data['email'] ?? '' ?> >
            <br> <span class="error" id="emailErr"></span>
            <br><br>

		<br><br>

		<input type="submit" name="submit" value="Submit">

	</form>
    

    <a class="linktag" href="Profile.php">Go Back</a>



</body>
</html>