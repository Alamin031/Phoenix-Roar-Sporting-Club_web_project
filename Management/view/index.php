<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/OverAll.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

    <?php
    session_start();
    
    if(isset($_COOKIE['logtime'])) {
        
        header("Location: ../view/Managment.php");
        exit();
    }

    ?>
    <div class="header">
        <h1>Phoenix Roar Sporting Club </h1>
        <h3> We create Future Player </h3>
    </div>

<div class="menu-bar" id="c1">
  <ul>
    <li><a href="../../PHOENIX/view/Home.php"><i class="fa fa-home"></i>Home</a></li>
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

<ul>
 <li> <a href="../view/contact.php">Contact</a></li>
</ul>



<ul>
 <li> <a href="../view/index.php">Company</a></li>
</ul>


<ul>
 <li> <a href="../../LabTask3/view/admin.php">Admin</a></li>
</ul>

<ul>
 <li class="active"> <a href="../../Management/view/index.php">Management</a></li>
</ul>

 </div>
<!-- 
 <div class="button3">
        <input type="button" id="1" name="Show menu-bar " value="Show menu-bar ">
          
 </div> -->


<h1 class="titlecontent">LOGIN FORM</h1>

    <form id="loginform" name="loginform" action="../controller/LogValidation.php" method="post" novalidate
	enctype="application/x-www-form-urlencoded">

		
			<label for="uname">User Name:</label>
			<input type="text" name="uname" id="uname">
            <span class="error"> <?php  echo $_SESSION['unameErr'] ?? '' ?> </span> 
			
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
            <input type="checkbox" onclick="myFunction()">Show Password
            <script>
               function myFunction() {
              var x = document.getElementById("password");
                    if (x.type === "password") {
                          x.type = "text";
                              } else {
                             x.type = "password";
                                           }
                         }                        
             </script>
            
            <span class="error"> <?php  echo $_SESSION['passwordErr'] ?? '' ?> </span>
            <span class="error"> <?php  echo $_SESSION['log_error'] ?? '' ?> </span>

            <input type="checkbox" id="logon" name="logon" value="remember">
            <label for="remember"> Remember this ID?</label>
        <span class="error"></span>

        

            <input type="submit" name="submit" value="Submit">

        </form>
        <!-- <a class="linktag" href="RegForm.php">Register here!</a> -->

        <?php

            session_unset();
    

        ?>
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