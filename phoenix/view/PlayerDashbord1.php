
<?php
include("../control/playerProfileControl.php");
setcookie("mycokie","hello");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dashbord</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style1.css">  
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 </head>

<body>



<div class="header">
        <h1>Phoenix Roar Sporting Club </h1>
        <h3> We create Future Player </h3>
    </div>
    <div class="manubar13">
        <div class="section">
            <div class="sec_navbar">
                <div class="drop_down">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src=<?php echo $fullfile; ?> >
                <div class="f">
                <?php echo $fname;?> <?php echo $lname;?>

                </div> 

                
            </div>


            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>


                <li>




                
                <a href="../view/pupdate.php">
                        <span class="icon"><i class="fa fa-user"></i></i></span>
                        

                        <span class="item">My Profile</span>
                    </a>
                </li>
                <li>
                <a href="../view/show-game.php">
                        <span class="icon"> <i class="fa fa-trophy"></i></span>
                        <span class="item">Apply Tournament</span>
                    </a>
                </li>
                <li>


                <a href="#">

                <!-- <a href="../view/playershow1.php"> -->
                    <span class="icon"> <i class="fa fa-trophy"></i></span>
                  <span class="item">Tournament Details</span>
                    </a>
                </li>
                <li>
                   <!-- <a href="../view/ps.php"> -->
                   <a href="#">

                    <span class="icon"> <i class="fa fa-trophy"></i></span>
                   <span class="item">Show Result</span>
                    </a>
                </li>
                <li>
                    <a href="../view/ApplySports.php">
                    <span class="icon"> <i class="fa fa-trophy"></i></span>
                        <span class="item">Add Sports</span>
                    </a>
                </li>
                <li>
                    <a href="../view/playershow1.php">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="item">Player</span>
                    </a>
                </li>
                <li>
                    <a href="../view/show-sports.php">
                        <span class="icon"><i class="fa fa-eye-slash"></i></span>
                        <span class="item">Show Sports</span>
                    </a>
                </li>

                <li>
                    <a href="../control/playerlogout.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                       
                        <span class="item">Log Out</span>
                    </a>
                </li>

                <li>
                    <a href="../view/pupdate.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                       
                        <span class="item">Update</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>

    <div class="user-dashbord-slide">
    <div class="image-box11">
      <div class="image11">
        <img class="img1" src="../image/s1.jpg" alt="">
      </div>
      <div class="image11">
        <img class="img2" src="../image/s2.jpg" alt="">
      </div>
      <div class="image11">
        <img class="img3" src="../image/s3.jpg" alt="">
      </div>
      <div class="image11">
        <img class="img4" src="../image/s4.jpg" alt="">
      </div>
    </div>
  </div>
  <script>
       var drop_down = document.querySelector(".drop_down");
       drop_down.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>

  <!-- <script src="../JS/pd.js"></script> -->


</body>
</html>