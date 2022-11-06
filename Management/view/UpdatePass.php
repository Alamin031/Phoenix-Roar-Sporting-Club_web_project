<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>
    <link rel="stylesheet" href="css/OverAll.css">
</head>
<body>

<?php

session_start();
$upassdata = $_SESSION['updatePassdata'] ?? [];
$upassError = $_SESSION['updatePassErrors'] ?? [];
?>


<h3 class="titlecontent">UPDATE PASSWORD</h3>  

<form id="updatepassform" name="updatepassform" action="../controller/UpdatePassWork.php" method="post" novalidate
	enctype="application/x-www-form-urlencoded">


			<label for="oldp">Old Password:</label>
			<input type="text" name="oldp" id="oldp" value = <?php echo $upassdata['oldp'] ?? '' ?>  >
            <br> <span class="error"> <?php echo $upassError['oldPassErr'] ?? '' ?> </span>
            <br><br>
			
			<label for="newp">New Password : </label>
			<input type="text" name="newp" id="newp" value = <?php echo $upassdata['newp'] ?? '' ?> >
            <br> <span class="error"> <?php echo $upassError['newPassErr'] ?? '' ?> </span>
            <br><br>

            <label for="cnewp">Confirm New Password : </label>
			<input type="text" name="cnewp" id="cnewp"  value = <?php echo $upassdata['cnewp'] ?? '' ?>>
            <br> <span class="error"> <?php echo $upassError['confirmPassErr'] ?? '' ?> </span>
            <br><br>
        

            <input type="submit" name="submit" value="Submit">

        </form>

        <a class="linktag" href="Profile.php">Go Back</a>

        <?php

                if (isset($_SESSION['updatePassErrors'])) {
                    unset($_SESSION['updatePassErrors']);
                    unset($_SESSION['updatePassdata']);
                }
        ?>


</body>
</html>