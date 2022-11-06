<?php
	// session_start();
    include("../control/adminloginprocess.php");
	
	setcookie("mycokie","hello user1",time()+3600);
	if($_COOKIE["mycokie"]=="hello user1"){
		echo "you have visited us before";
	}else{
		echo"you have never visited";
	}
	session_destroy();
?>
    

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
		
        <link rel="stylesheet"type="text/css" href="../CSS/homestyle.css">
		
		
		
	</head>
	<body>
		<!-- <h2>Phoenix Roar Sporting Club</h2> -->
	<h2 >Admin Login Form</h2>   
	<!-- <script defer src="../js/mysript.js"> </script> -->
	 <hr></hr>

		<!-- <form   action="../control/adminloginprocess.php"  method="post"> -->
		<form  action=""   method="post" enctype="multipart/form-data" onsubmit="return form_check()">
			<div class="login">	
					 <!-- <br><br> -->
					 <label>AdminUserName   :
						<input type="text"   id="adminname"   onkeyup="fname_check()" name="adminname" placeholder = "Enter Your UserName" ><p id="errorfname"></p>
					
					
					</label> 
					
					 <br><br>
					 
				AdminPassword :

					<input type="password"   id="mypass"   onkeyup="passcheck()" name="adpass" placeholder="Enter your Password" >
					<p id="errorpass"></p>
								
				
					<br><br>
					
										
					
					
					<div style= text-align:center> <input type="submit" name="submit" onclick="form_check()"  value="Login"><p id="errorform"><br><br></p></div>
   
					 <br><br>
					 
					 <?php 
					
					
					 if(!empty($_SESSION['firstname_error']))

							{
								echo $_SESSION['firstname_error'];

							}

							else if(!empty($_SESSION['lastname_error']))
							{
								echo $_SESSION['lastname_error'];

							}
							
							
							?>
							<br></br>
					   <!-- <?php
						// {
						// 	if($_SESSION['adminname']==null &&$_SESSION['adpass']==null )
						// 	{
						// 		echo $msg;
						// 	}
						// }
						?>
						 -->
					
					Don't have an account yet?
						<a href="adminreg.php">
							Create an account
						</a>
						<br><br>								
				
					
					do you want to go home page?
						<a href="../../PHOENIX/view/Home.php">
							Go to Home
						</a>								
					
					 
						
						</div>		
		</form>
        <!-- header() -->
		

		<!-- Enter your name: <input type="text" id="fname" onkeyup="myFunction()"> -->



		<!-- <script defer src ="../js/mysript.js"></script> -->
		<script src ="../js/mysript.js"></script>


	</body>

</html>