<?php
include("../control/gamecontrol.php");
setcookie("mycokie","hello");

if(empty($_SESSION["email"]))

{
    header("Location: ../view/PlayerLogin.php");

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Apply Game</title>

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
                <a href="../view/PlayerDashbord1.php">
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
                <a href="../view/show-game.php" class="active">
                        <span class="icon"> <i class="fa fa-trophy"></i></span>
                        <span class="item">Apply Tournament</span>
                    </a>
                </li>
                <li>
                <a href="../view/playershow1.php">
                    <span class="icon"> <i class="fa fa-trophy"></i></span>
                  <span class="item">Tournament Details</span>
                    </a>
                </li>
                <li>
                   <a href="../view/ps.php">
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
                    <a href="../view/playershow.php">
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


 
    <div class="container22">
    <div class="title">Turnament Registration</div>
    <div class="content22">
            <form action="" method="post" enctype="multipart/form-data">



            <div class="user-details">
          <div class="input-box6">
            <span class="details">TOURNAMENT NAME</span>
            
            <input type="text" name="tname" value="<?php echo $tname;?>" readonly> 
            <!-- <input type="text" name="fname"> -->
         </div>





          <div class="input-box6">
            <span class="details">E-mail</span>
            <input type="email" name="email" value="<?php echo $email;?>"readonly>
          </div>

       


        
        <div class="button1">
          <input type="Submit"name="Submit" value="Submit">
        </div>





        <script src="../JS/ja.js"></script>
      </form>
    </div>
  </div>


<script src="../JS/ja.js"></script>


  <script>
       var drop_down = document.querySelector(".drop_down");
       drop_down.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>

</body>
</html>