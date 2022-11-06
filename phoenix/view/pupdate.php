
<?php
include("../control/playerupdateprofileprocess.php");
setcookie("mycokie","hello");

// session_start();
if(empty($_SESSION["email"]))

{
    header("Location: ../view/PlayerLogin.php");

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Player Profile</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/d.css">  
 
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




                
                    <a href="../view/playerupdateprofile.php" class="active">
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
                    <!-- <a href="../view/show-game1.php"> -->
                    <a href="#">

                    <span class="icon"> <i class="fa fa-trophy"></i></span>
                  <span class="item">Tournament Details</span>
                    </a>
                </li>
                <li>
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






    <div class="container">
    <div class="title">Profile Information</div>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
      <!-- <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()"> -->

        <div class="user-details">
        



          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" value="<?php echo $fname;?>">
            <p id="nameError"></p> 

          </div>

          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" value="<?php echo $lname;?>">
          </div>

          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" name="uname" value="<?php echo $uname;?>">
          </div>

          <div class="input-box">
            <span class="details">Nationality</span>
            <input type="text" name="nationality" value="<?php echo $nationality;?>">
          </div>

         

          <div class="input-box">
            <span class="details"> Division</span>
            <select name ="Division" id="Division">

            <option value="Dhaka"  <?php
            if($Division == 'Dhaka')
            {
                echo"selected";
            }
            ?>>Dhaka</option>

            <option value="Cittagong" <?php
            if($Division== 'Cittagong')
            {
                echo"selected";
            }
            ?>>Cittagong</option>

            <option value="Sylhet"             
            <?php
            if($Division== 'Sylhet')
            {
                echo"selected";
            }
            ?>
            >Sylhet</option>
   
           </select>
          </div>
          

          

          <div class="input-box">
            <span class="details">Zila</span>
            <select name ="Zila" id="Zila">
            
            <option value="Dhaka"  <?php
            if($Zila == 'Dhaka')
            {
                echo"selected";
            }
            ?>>Dhaka</option>

           <option value="Cittagong" <?php
            if($Zila== 'Cittagong')
            {
                echo"selected";
            }
            ?>>Cittagong</option>

            <option value="Sylhet"             
            <?php
            if($Zila== 'Sylhet')
            {
                echo"selected";
            }
            ?>
            >Sylhet</option>
   
           </select>
          </div>
          

          

          <div class="input-box">
            <span class="details">University</span>
            <input type="text" name="university" value="<?php echo $university;?>">
          </div>






          <div class="input-box">
            <span class="details">College</span>
            <input type="text" name="college" value="<?php echo $college;?>">
          </div>


          <div class="input-box">
            <span class="details">School</span>
            <input type="text" name="school" value="<?php echo $school;?>">
          </div>

          

          <!-- <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber"  placeholder="Enter your Phone Number" required>
          </div> -->

          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" name="birthday" value="<?php echo $birthday;?>">
          </div>


          <div class="input-box5">
          <span class="details1">GENDER</span>
          <input type="radio" name="GENDER" value="MEN" <?php echo $radio1; ?>>MEN
          <input type="radio" name="GENDER" value="WOMEN" <?php echo $radio2; ?>>WOMEN
          </div>



  

<!-- 
        <div class="input-box5">
          <span class="details1">Relationship</span>
          <input type="radio" name="Relationship" value="Single" <?php echo $radio1; ?>>Single
          <input type="radio" name="Relationship" value="Married" <?php echo $radio2; ?>>Married
          <input type="radio" name="Relationship" value="Divorced" <?php echo $radio3; ?>>Divorced
          </div> -->






          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" name="email" value="<?php echo $email;?>">
          </div>
          <div class="input-box">
            <span class="details">password</span>
            <input type="password" name="password" value="<?php echo $password;?>">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="number" value="<?php echo $number;?>">
          </div>
          <!-- <div class="input-box">
            <span class="details">Please Choose Your Image :</span>
            YOUR PREVIOUS FILE WAS <a href=<?php echo $fullfile; ?> > <?php echo $file; ?> </a>
    
           
          
        </div> -->

        <div class="button2">
               <input type="submit" name="Update" value="Update">
          
        </div>

        <div class="button3">
        <input type="submit" name="DELETE" value="DELETE">
          
        </div>
        <script src="../JS/pr.js"></script>
      </form>
    </div>
  </div>













  <script>
       var drop_down = document.querySelector(".drop_down");
       drop_down.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>

</body>
</html>