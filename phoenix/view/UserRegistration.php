<?php
include("../control/Process.php");
setcookie("mycokie","hello")
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>user</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">   
 </head>
 <body>

 <div class="header">
        <h1>Phoenix Roar Sporting Club </h1>
        <h3> We create Future Player </h3>
    </div>

    <div class="menu-bar">
  <ul>
    <li><a href="../view/Home.php"><i class="fa fa-home"></i>Home</a></li>
    <li> <a href="#"><i class="fa fa-address-book-o"></i>About US</a></li>


    <li><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
 <div class="sub-menu-1">
  <ul>
    <li>  <a href="../view/UserLogin.php">User Login</a> </li>
    <li>  <a href="../view/PlayerLogin.php">Player Login</a> </li>
 </ul>
</div>
</li>



 <li class="active"> <a href="#">Sign Up</a>
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


<div class="regform1">
<h1>User Registration Form </h1>
<hr>
</div>


<!-- <form action ="" method="post" enctype="multipart/form-data"> -->

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">


        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter your name" id="fname" onkeyup="fastnameval()">
           <p id="nameError"></p> 
           <!-- <p id="nameExists"></p> -->
          </div>


          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last Name"  id="lname" onkeyup="lastnameval()">
            <p id="lnameError"></p> 
            <p id="lnameExists"></p>
          </div>


          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber"  placeholder="Enter your Phone Number" id="phonenumber" onkeyup="numberval()" >
            <p id="nameError1"></p> 
           <p id="nameExists1"></p>
          </div>


          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" id="birthday" name="birthday">
          </div>



          <div class="gender-details">
          <input type="radio" name="radio" value="MEN" id="dot-1" onclick="getradioval()">
           <input type="radio" name="radio" value="WOMEN" id="dot-2" onclick="getradioval()">
          <span class="gender-title">Gender</span>
          <div class="category1">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="radio">MEN</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="radio">WOMEN</span>
          </label>
          </div>
          <p id="nameError4"></p> 
           <p id="nameExists4"></p>
        </div>







          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" name="email" placeholder="Enter your email" id="email" onkeyup="emailcheck()" >
            <p id="nameError2"></p> 
            <div class="e">
            <p id="nameExists2"></p>
            </div>
          </div>

          <!-- <p21 id="nameExists2"></p21> -->


          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  placeholder="Enter your password"  id="password" onkeyup="passval()">
            <p id="nameError3"></p> 
           <p id="nameExists3"></p>
          </div>

          <div class="input-box">
            <span class="details">Please Choose Your Image :</span>
            <input type="file" id="myfile" name="myfile" onclick="fileval()">
            <p id="nameError5"></p> 
          </div>
        </div>
       


        <!-- search:
        <input type="text" id="searchdata" onkeyyup="search()">
        <p id="showdata"></p> -->
        
        
        <div class="button11">
        <p id="submit"></p>
        <input type="submit" name="submit1" class="button11" value="Submit">
         
        </div>
        <script src="../JS/user.js"></script>
      </form>
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

<!-- <script src="../JS/ja.js"></script> -->

<!-- ################ End ################### -->
</body>
</html>
