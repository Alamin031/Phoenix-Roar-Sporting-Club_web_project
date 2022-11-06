<?php
session_start();

echo $_SESSION["name"];
echo $_SESSION["lname"];
echo $_SESSION["uname"];
echo $_SESSION["nationality"];
echo $_SESSION["Division"];
echo $_SESSION["Zila"];
echo $_SESSION["upazila"];
echo $_SESSION["university"];
echo $_SESSION["school"];
echo $_SESSION["number"];
echo $_SESSION["GENDER"];
echo $_SESSION["Relationship"];
echo $_SESSION["PL"];
?>


<tr><td> <a href="../control/login1.php"><input type="button" value="Log In" ></a>