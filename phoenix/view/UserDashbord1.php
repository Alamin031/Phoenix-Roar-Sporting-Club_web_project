
<?php
include("../control/UserProfileControl.php");
setcookie("mycokie","hello");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dashbord</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/user.css">  
 
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
                    <a href="#" class="active">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>


                <li>




                
                <a href="../view/update.php">
                        <span class="icon"><i class="fa fa-user"></i></i></span>
                        

                        <span class="item">My Profile</span>
                    </a>
                </li>
                <li>
                
                    <a href="../control/userlogout.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                       
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>


<div class="ticket">
<img src="../image/t1.jpg">
<a href="../view/pupdate.php"> <span class="item">Ticket</span> </a>
</div>

<div class="jersey">
<img src="../image/j1.jpeg">
<a href="../view/pupdate.php"> <span class="item">Jersey</span> </a>
</div>





   
  <script>
       var drop_down = document.querySelector(".drop_down");
       drop_down.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>

</body>
</html>