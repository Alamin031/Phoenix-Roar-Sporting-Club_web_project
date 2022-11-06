<?php
include("../control/playerupdate22process.php");


?>
<html>
    <head>
    <h1>player Update</h1>

    
<?php
   date_default_timezone_set('Asia/Dhaka');
   $date = date('d-m-y h:i');
   echo "<div style=text-align:right>$date</div>";
   echo"<br></br>";

   date_default_timezone_set('Asia/Dhaka');
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
    <br></br>
    <hr></hr>
    <br></br>
    <link rel="stylesheet"type="text/css" href="../CSS/home.css">
</head>

    <body>

<div class="container22">
    <!-- <div class="title">Turnament Registration</div> -->
    <div class="content22">
            <form action="" method="post" enctype="multipart/form-data">



            <div class="user-details">
          <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
           Fname : 
            <input type="text" name="fname" value="<?php echo $fname;?>" 
           
         
         </div>
         
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
           Lname : 
            <input type="text" name="lname" value="<?php echo $lname;?>" 
           
         
         </div>

         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
           Uname : 
            <input type="text" name="uname" value="<?php echo $uname;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            Nationality :   <input type="text" name="nationality" value="<?php echo $nationality;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            Division :   <input type="text" name="Division" value="<?php echo $Division;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            Zila :   <input type="text" name="zila" value="<?php echo $zila;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            University :   <input type="text" name="university" value="<?php echo $university;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            College :   <input type="text" name="college" value="<?php echo $college;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            School :  <input type="text" name="school" value="<?php echo $school;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            Number:  <input type="text" name="number" value="<?php echo $number;?>" 
           
         
         </div>
         <div class="input-box6">
            <!-- <span class="details">TOURNAMENT NAME</span> -->
          
            Birthday:  <input type="text" name="birthday" value="<?php echo $birthday;?>" 
           
         
         </div>
        

          <div class="input-box6">
            <span class="details">E-mail</span>
            <input type="email" name="email" value="<?php echo $email;?>"
          </div>

       


        
        <div class="button1">
          <input type="Submit"name="Submit" value="Submit">
          <button type="button"><a href="pu.php">Show</a></button>
        </div>





        <!-- <script src="../JS/ja.js"></script> -->
      </form>
    </div>
  </div>

</body>
</html>