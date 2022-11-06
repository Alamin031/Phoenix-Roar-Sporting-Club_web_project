<?php
//include("../control/process.php");
setcookie("mycokie","hello")
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contact</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">  
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 </head>
    <body>
    <div class="header">
        <h1>Phoenix Roar Sporting  Club </h1>
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


 <li class="active"> <a href="../view/contact.php">Contact</a></li>
</ul>



<ul>
 <li> <a href="../view/index.php">Company</a></li>
</ul>



  </div>



  <section>
<div class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.900859444374!2d90.4274063!3d23.822124199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c711d13bbec7%3A0xc47f7c3e8e2263f2!2sAmerican%20International%20University%20-%20Bangladesh%20(AIUB)!5e0!3m2!1sen!2sbd!4v1659172302717!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>



<section class="contact-us">
<div class="row">

<div class="contact-col">
    <div>
    <i class="fa fa-home"></i>
<span>
<h21> KURIL ROAD, AIUB BUILDING</h21>
<p> DHAKA, BANGLADESH </P>
</span>
</div>

<div>
<span>
<h21> <i class="fa fa-phone"></i> +01788788256 </h21>
<p> Monday To Staurday, 8AM To 10PM </P>
</span>
</div>

<div>
<span>
<h21> <i class="fa fa-envelope"></i> mridoy031@gmail.com</h21>
<p> Email Us Your Query </P>
</span>
</div>

</div>



<div class="contact-col">
<form action ="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="text" name="email" placeholder="Enter Email Address" required>

    <input type="text" name="subject" placeholder="Enter Your Subject" required>
    <textarea rows="8" name="message" placeholder="Message" required></textarea>

    <button type="submit" class="hero-btn red-btn">Send Massage</button>







</div>


    </div>
</section>

<section class="About1">
<h9>About Us</h9>

<p>If you have anything to know r say about our club,<br> you can contact us.</p>
<div class="icons">
<a href="https://www.facebook.com/Al.Amin.Chowdhury09" target="-blank"><i class="fa fa-facebook"></i>
<a href="#"><i class="fa fa-twitter"></i>
<a href="https://www.instagram.com/alamin.chowdhury09/"><i class="fa fa-instagram"></i>
<a href="https://www.linkedin.com/in/md-alamin-chowdhury-2b5b55104" ><i class="fa fa-linkedin"></i>
</div>
<P>Made With <i class="fa fa-heart-o"></i> By MD AL AMIN CHOWDHURY</P>
</section>



  </table>
        </form>
    </body>
</html>