<?php
include("../control/Player_Registration_Process.php");
setcookie("mycokie","hello")
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Player Registration</title>

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
    <li>  <a href="../view/b.php">Player Sign up</a> </li>
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



 <div class="regform2">
<h1>Player Registration Form </h1>
<hr>
</div>


<div class="container32">
    <div class="title">Registration</div>
    <div class="content32">
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">
        <div class="user-details32">
        



          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter your name" id="fname" onkeyup="fastnameval()">
            <p id="nameError"></p> 
          </div>

          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last Name" id="lname" onkeyup="lastnameval()">
            <p id="nameError1"></p>
          </div>

          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" name="uname" placeholder="Enter your User Name" id="uname" onkeyup="usernameval()">
            <p id="nameError9"></p>
           </div>

          <div class="input-box">
            <span class="details">Nationality</span>
            <input type="text" name="nationality" placeholder="Enter your nationality" id="nationality" onkeyup="nnameval()">
            <p id="nameError3"></p>
            </div>

         

          <div class="input-box">
            <span class="details"> Division</span>
            <select name ="Division" id="Division">
            <option value="Dhaka">Dhaka</option>
            <option value="Cittagong" selected>Cittagong</option>
            <option value="Sylhet">Sylhet</option>
            </select>
          </div>


          

          <div class="input-box">
            <span class="details">Zila</span>
            <select name ="Zila" id="Zila">
            <option value="Dhaka">Dhaka</option>
            <option value="Cittagong">Cittagong</option>
            <option value="Sylhet">Sylhet</option>
           </select>
          </div>

          

          <div class="input-box">
            <span class="details">University</span>
            <input type="text" name="university" placeholder="Enter your University name" id="university" onkeyup="universitynnameval()">
            <p id="nameError4"></p>
            </div>






          <div class="input-box">
            <span class="details">College</span>
            <input type="text" name="college" placeholder="Enter your College Name" id="college" onkeyup="collegennameval()">
            <p id="nameError5"></p>
           </div>


          <div class="input-box">
            <span class="details">School</span>
            <input type="text" name="school" placeholder="Enter your School Name" id="School" onkeyup="Schoolnnameval()">
            <p id="nameError6"></p>
             </div>

          

          <!-- <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber"  placeholder="Enter your Phone Number" required>
          </div> -->

          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" id="birthday" name="birthday">
          </div>


          <div class="input-box">
          <!-- <input type="radio" name="radio1" id="dot-1">
          <input type="radio" name="radio1" id="dot-2"> -->

          <input type="radio" name="radio1" value="MEN" id="dot-1" onclick="getradioval()">
           <input type="radio" name="radio1" value="WOMEN" id="dot-2" onclick="getradioval()">

          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="radio1">MEN</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="radio1">WOMEN</span>
          </label>
          </div>
          <p id="nameError7"></p>
        </div>



      



     
         
 <!-- <div class="input-box1">
<span class="Sports-title">Favorite Sports</span>
<div class="category2">

<label="">
 
 cricket<input type="checkbox" name="cricke" value="cricket" id="f-1">

</label>

<label="">
 <span class="f one"></span>
 <input type="checkbox" name="basketball" value="basketball" id="f-1">
 <span class="checkbox">basketball</span>
</label>

<label="">
 <span class="f one"></span>
 <input type="checkbox" name="tennis" value="tennis" id="f-1">
 <span class="checkbox">tennis</span>
</label>

<label="">
 <span class="f one"></span>
 <input type="checkbox" name="hockey" value="hockey" id="f-1">
 <span class="checkbox">hockey</span>
</label>

<label="">
 <span class="f one"></span>
 <input type="checkbox" name="volleyball" value="volleyball" id="f-1">
 <span class="checkbox">volleyball</span>
</label>


       </div>
</div> -->

<!-- <div class="input-box">
          <input type="radio" name="radio3" value="Single" id="do-1" onclick="getradioval1()">
          <input type="radio" name="radio3" value="Married" id="do-2" onclick="getradioval1()">
           <input type="radio" name="radio3" value="Divorced" id="do-3" onclick="getradioval1()">
          <span class="Relationship-title">Relationship</span>
          <div class="category1">
            <label for="do-1">
            <span class="do one"></span>
            <span class="radio3">Single</span>
          </label>
          <label for="do-2">
            <span class="do two"></span>
            <span class="radio3">Married</span>
          </label>
          <label for="do-3">
            <span class="do three"></span>
            <span class="radio3">Divorced</span>
            </label>
          </div>
          <p id="nameError8"></p>
        </div> -->


        <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" name="email" placeholder="Enter your email" id="email" onkeyup="emailcheck()" >
            <p id="nameError2"></p> 
            <div class="e">
            <p id="nameExists2"></p>
            </div>
          </div>
          <div class="input-box">
            <span class="details">password</span>
            <input type="password" name="password"  placeholder="Enter your password" id="password" onkeyup="passval()">
            <p id="nameError10"></p>
           </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="number"  placeholder="Enter your Phone Number" id="number" onkeyup="numberval()" >
            <p id="nameError11"></p>
          </div>
          <div class="input-box">
            <span class="details">Please Choose Your Image :</span>
            <input type="file" id="myfile" name="myfile">
          </div>

          
        </div>


        <div class="button">
        <p id="submit"></p>
          <input type="Submit"name="Submit" value="Submit">
        </div>

        <script src="../JS/player_reg.js"></script>
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



<!-- ################ End ################### -->

</body>



</html>
