<?php
session_start();

require("../controller/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Managment</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/OverAll.css">
    <link rel="stylesheet" href="../CSS/extra.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 



    <div class="header">
        <h1>Phoenix Roar Sporting Club </h1>
        <h3> We create Future Player </h3>
    </div>
    <h1>Management Dashboard</h1>
<b>
<?php
 
   date_default_timezone_set('Asia/Dhaka');
   $date = date('d-m-y h:i');
   echo "<div style=text-align:right>$date</div>";
   echo"<br></br>";

   date_default_timezone_set('Asia/Dhaka');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
$msg="";
if ( $Hour >= 5 && $Hour <= 11 ) {
    $msg="Good Moring";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
	$msg="Good AfterNoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    $msg="Good Evening";
}
	if(!empty($_SESSION['uname']))
	{
	 echo$msg ." "."!! : ". $_SESSION['uname'];
	}
	
	?>
	</b>

</head>



<body>


     <div class="sticky">Welcome to Our Website!</div>


    <a class="linktag" href="Profile.php">Profile</a><br>
    <a class="linktag" href="Tournament.php">Tournament</a><br>
    <a class="linktag" href="TournamentDetails.php">Tourenament Details</a><br>
    <a class="linktag" href="Results.php">Results</a><br>
    <a class="linktag" href="player.php">Player</a><br>

    <a class="linktag" href="../controller/LogOut.php">LogOut</a>



    <section class="About">
<h9>Developer</h9>
<div class="icons">
<a href="https://www.facebook.com/Al.Amin.Chowdhury09" target="-blank"><i class="fa fa-facebook"></i>
<a href="#"><i class="fa fa-twitter"></i>
<a href="https://www.instagram.com/alamin.chowdhury09/"><i class="fa fa-instagram"></i>
<a href="https://www.linkedin.com/in/md-alamin-chowdhury-2b5b55104" ><i class="fa fa-linkedin"></i>


                    


</div>
<P>Made With <i class="fa fa-heart-o"></i> By MD AL AMIN CHOWDHURY</P>
</section>



</body>

</html>