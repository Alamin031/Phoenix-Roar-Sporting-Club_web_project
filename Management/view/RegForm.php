<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- <link rel="stylesheet" href="css/external.css"> -->
	<script src="js/RegForm.js"></script>
	<link rel="stylesheet" href="css/OverAll.css">
</head>
<body>

<h1 class="titlecontent">REGISTRATION FORM</h1>

<form id="regform" name="regform" action="../controller/RegValidation.php" method="post" onsubmit="return isValid(this)">
    			
			<label for="firstname">First Name:</label>
			<input type="text" name="firstname" id="firstname" required>
           	<span class="error" id="fnameErr"> </span>
            
			
			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" id="lastname" required>
            <span class="error" id="lnameErr"></span>
            

			<label>Select Gender:</label>
			<input type="radio" name="gender" value="Male" id="gender" required>
			<label for="male">Male</label>
			<input type="radio" name="gender" value="Female" id="gender">
			<label for="female">Female</label>
            <span class="error" id="genderErr"></span>
			

			<label for="dob">DOB:</label>
			<input type="date" name="dob" id="dob" required>
            <span class="error" id="dobErr"></span>
            

            <label for="address">Address:</label><br>
			<textarea name="address" id="address" rows="1" cols="40"></textarea>
            <span class="error" id="addressErr"></span>
			

            <label for="email">Email:</label>
			<input type="email" name="email" id="email" required>
            <span class="error" id="emailErr"></span>
            

            <label for="uname">User Name:</label>
			<input type="text" name="uname" id="uname" required>
            <span class="error" id="unameErr"></span>
            

			<label for="Password">Password:</label>
			<input type="password" name="password" id="password" required>
            <span class="error" id="passErr"></span>
            

			<label for="cpassword">Confirm Password:</label>
			<input type="password" name="cpassword" id="cpassword" required>
            <span class="error" id="cpassErr"></span>

		<input type="submit" name="submit" value="Submit">

	</form>

    <a class="linktag" href="index.php">Go Back</a>


</body>
</html>