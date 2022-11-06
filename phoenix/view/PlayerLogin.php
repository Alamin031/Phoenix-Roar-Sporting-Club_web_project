<?php
include("../control/PlayerLogin_control.php");
// setcookie("mycokie","hello");
session_destroy();
setcookie("user_detect","visited", time()+86400*30,"/");

if(isset($_COOKIE["user_detect"]))

{
    echo "</p>  You have visited me before </p> ";
  }
  else{
    echo "<p>  You are visiting me for the first time <p> ";
  }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Player Login</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
         </head>
  
 <body>



    <div class="header1">
        <h14>Phoenix Roar</h14>
    </div>

    <div class="header12">
        <h1>Phoenix Roar Sporting Club </h1>
        <h3> We create Future Player </h3>
    </div>

 <div class="main">
 <div class="menu-bar">
  <ul>
    <li><a href="../view/Home.php"><i class="fa fa-home"></i>Home</a></li>
    <li> <a href="#"><i class="fa fa-address-book-o"></i>About US</a></li>


    <li class="active"><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
 <div class="sub-menu-1">
  <ul>
    <li>  <a href="../view/UserLogin.php">User Login</a> </li>
    <li>  <a href="../view/PlayerLogin.php">Player Login</a> </li>
 </ul>
</div>
</li>



 <li> <a href="#">Sign Up</a>
 <div class="sub-menu-1">
    <ul>
    <li>  <a href="../view/UserRegistration.php">User Sign up</a> </li>
    <!-- <li>  <a href="../view/PlayerRegistration.php">Player Sign up</a> </li> -->
    <li>  <a href="../view/PlayerRegistration.php">Player Sign up</a> </li>
</ul>
 </div>
</li>

<ul>
 <li> <a href="../view/sports.php">Sports</a></li>
</ul>

<ul>
 <li> <a href="../view/FACILITIES.php">Facilites</a></li>
</ul>

<ul>
 <li> <a href="../view/contact.php">Contact</a></li>
</ul>



<ul>
 <li> <a href="../view/index.php">Company</a></li>
</ul>
 </div>


  </div>

        <form action ="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="SForm">
        <form>
                <div class="form">
                    <h2> Player Login Here</h2>
                     <input type="email" name="email" placeholder="Enter Email Here">
                     <input type="password" name="password"placeholder="Enter Password Here">
                     
                     <input type="Submit"name="login" value="login" class="btnn">



                     <div class="v">
                    <?php 
                      if(!empty($_SESSION['email_error']))

							{
								echo $_SESSION['email_error'];

							}

							else if(!empty($_SESSION['password_error']))
							{
								echo $_SESSION['password_error'];

							}
							
							
							?> 
                    </div>

                     
                    <p class="link">Don't have an account<br>
                    <a href="../view/PlayerRegistration.php">Sign up </a> here</a></p>
                    <a href= "playerforgot.php"> Forgot password? </a>

                    <p class="liw">Log in</p>



                    <div class="line"></div>
    


    

                    <div class="iconss">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    </div>



                </div>
                    </div>
                </div>

                <script src="../JS/ja.js"></script>

        </div>
    </div>


<!-- ######################## All Footer ################ -->



<div class="footerlinksPan">
<!-- <img src="../image/c3.jpg"> -->
    	<div class="footerlinks">
        
    		<div class="footerlinkDiv" id="footerCCI">
            	<h3><a href="../view/Home.php">The PRC</a></h3>
            	<ul>
            	   	<li><a href="#">About</a></li>
                   	<li><a href="#">History</a></li>
                   	<li><a href="#">Founders</a></li>
                    <li><a href="#">Heritage</a></li>
                    <li><a href="#">Legends</a></li>
                    <li><a href="#">Committees</a></li>
                    <li><a href="#">Terms&amp;Condition</a></li>

            	</ul>
           	</div>
            <div class="footerlinkDiv" id="footerSports">
            	<h3><a href="#">Sports</a></h3>
           	</div>
            <div class="footerlinkDiv" id="footerFacility">
            	<h3><a href="#">Facilities</a></h3>
            	<ul>
                    <!--<li><a href="#">Dining</a></li>-->
                    <li><a href="#">Accommodation</a></li>
                    <!--<li><a href="#">Sports</a></li>-->
                    <li><a href="#">Libraries</a></li>
                    <li><a href="#">Banquets</a></li>
                    <!--<li><a href="#">Reading Room</a></li>-->
                    <li><a href="#">Children's Play Area</a></li>
                    <li><a href="#">Senior Citizen's Club</a></li>
                    <li><a href="#">Siesta Room</a></li>                   
                    <li><a href="#">Shop At CCI</a></li>
                    <li><a href="#">Grooming</a></li> 
                    <li><a href="#">In House Doctor</a></li>
                    <li><a href="#">Card Room</a></li>
                    <li><a href="#">Museum</a></li>
            	</ul>
           	</div>
            <div class="footerlinkDiv" id="footerDining">
            	<h3><a href="">Dining &amp; Bar</a></h3>
           	</div>
            <div class="footerlinkDiv" id="footerEvents">
            	<h3><a href="#">Events</a></h3>
           	</div>
            <div class="footerlinkDiv" id="footerClub">
            	<h3><a href="#">Club Affiliations</a></h3>
           	</div>
                        <div class="footerlinkDiv" id="footerAddress">
            	<h3><a href="../view/contact.php">Contact Us</a></h3>
            	<p>The Phoenix Roar Club Ltd<br>
            	    Address: KURIL ROAD, AIUB BUILDING, <br>
            	    DHAKA, BANGLADESH, <br>  
           	    Dhaka 4735958s</p>
            	<p>Phone: +88-01-788788256 <br>
            	    Timing: Monday to Friday <br>
            	    from 10:00am to 6:00pm, <br>
            	    Saturday <br>
            	    from 10:00am to 1:30pm <br>
E-mail: <a href="mailto:mridoy031@gmail.com">mridoy031@gmail.com</a></p>


            </div>

            <div class="clear"></div>
    	</div>
    </div>



<!-- ################ End ################### -->



    
    </form>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>