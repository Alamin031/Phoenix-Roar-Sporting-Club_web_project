<?php
session_start();
// include("../control/adminloginprocess.php");
// if(!empty($_SESSION['firstname_error']))
// 							{echo $_SESSION['firstname_error'];}
// if($_SESSION['adusername']!=null){
// 	//echo"".$_SESSION['username'];
//     header("Location:AdminDashboard.php");
// }
setcookie("mycokie","hello user1",time()+3600);
if($_COOKIE["mycokie"]!="hello user1"){
	// echo "you have visited us before";
	echo"<br>you have never visited</br>";
}else{
	echo "<br>you have visited us before</br>";
	// echo"you have never visited";
}

// if(!empty($_SESSION['adminname']))
// 							{echo $_SESSION['adminname'];}
?>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- 
<script>
$(document).ready(function(){
 $("#hide").click(function(){
  $("#pp").toggle();
 });

});
</script> -->





<link rel="stylesheet"type="text/css" href="../CSS/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Admin Dashboard</h1>
<div  style=text-align:center> <h2 id="pp">Phoenix Roar Sporting Club</h2></div>
<button id="hide">Hide</button>
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
	if(!empty($_SESSION['adminname']))
	{
	 echo$msg ." "."!! : ". $_SESSION['adminname'];
	}
	
	?>
	</b>
</head>

<hr></hr>
<div class="main">
        <div class="menu-bar1">
  <ul>
    <li><a href="../view/Home.php">Home</a></li>
    <li><a href="#">Update</a>

 <div class="sub-menu-2">
  <ul>
    <li>  <a href="../view/pu.php">Player-Update</a> </li>
    <li>  <a href="../view/user.php">Service-provider update</a> </li>
	<li>  <a href="../view/management.php">Management-Update</a> </li>
 </ul>
</div>
</li>

 <li> <a href="#">Delete</a>
 <div class="sub-menu-2">
    <ul>
    <li>  <a href="../view/playerdel.php">Player-Info Delete</a> </li>
    <li>  <a href="../view/PlayerRegistration.php">User-Info Delete</a> </li>
	<li>  <a href="../view/PlayerRegistration.php">Management-Info Delete</a> </li>
</ul>
<li> <a href="#">Information</a>
 <div class="sub-menu-2">
    <ul>
    <li>  <a href="../view/playerinfo.php">Player-Info</a> </li>
    <li>  <a href="../view/serviceinfo.php">Service-Provider list</a> </li>
	
</ul>
<li> <a href="#">Registration</a>
 <div class="sub-menu-2">
    <ul>
    <li>  <a href="../view/managementreg.php">Management Sign-Up</a> </li>
    <li>  <a href="../view/serviceprovider.php">Service-Provider Sign-Up</a> </li>
	
</ul>
<li><a href="../about.php">About</a></li>
<li><a href="../control/logout.php">LogOut</a></li>

 </div>




<body>


<br></br>
<h1 align='center' >" “Passion first and everything will fall into place.” —Holly Holm"</h1>
        <center><a href="AdminDashboard.php"><img src="../images/field.jpg" alt="" width="800" height="500"></a></center>
     
        <h2 align='center' >Persistence can change failure into extraordinary achievement.</h2>   

					<!-- <footer>
						<h>Contact us :</h>
						<br></br>
	<a href="https://www.facebook.com/syed.mrinmoy/" class="fa fa-facebook"></a>
	<a href="https://www.instagram.com/syed_mrinmoy/?hl=en" class="fa fa-instagram"></a>

	<a href="https://www.linkedin.com/in/syed-yasir-shahriar-049b23175/" class="fa fa-linkedin"></a>
 
</footer> -->



</body>
<script src="../jquery/myjquery.js"> </script>
</html>
<!-- <h1>Admin Dashboard</h1> -->


<section class="About">
<h9>Developer</h9>
<div class="icons">
<a href="https://www.facebook.com/Al.Amin.Chowdhury09" target="-blank"><i class="fa fa-facebook"></i>
<a href="#"><i class="fa fa-twitter"></i>
<a href="https://www.instagram.com/alamin.chowdhury09/"><i class="fa fa-instagram"></i>
<a href="www.linkedin.com/in/md-alamin-chowdhury-2b5b55104" ><i class="fa fa-linkedin"></i>


                    


</div>
<P>Made With <i class="fa fa-heart-o"></i> By MD AL AMIN CHOWDHURY</P>
</section>

