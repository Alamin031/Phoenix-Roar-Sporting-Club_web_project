<?php
//include("../control/process.php");
session_start();

echo $_SESSION["fname"];
echo $_SESSION["lname"];
echo $_SESSION["phonenumber"];
echo $_SESSION["birthday"];
echo $_SESSION["GENDER"];
echo $_SESSION["email"];
echo $_SESSION["password"];
echo $_SESSION["file"];
?>

<tr><td> <a href="../control/login.php"><input type="button" value="Log In" ></a>
