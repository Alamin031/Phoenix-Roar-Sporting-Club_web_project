
<?php
include("../control/managementregprocess.php");
// .error {color: #FF0000;}
// error.
?>


<html>
    <head>
        <title>my home</title>
        <link rel="stylesheet"type="text/css" href="../CSS/home.css">
        
    </head>

    <body>
        <h1>Management Registration</h1>
        <br></br>
        <div  style=text-align:center><h2>Phoenix Roar Sporting Club</h2></div>
        <br></br>
        <hr></hr>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
            <!-- <tr><td align='center'></td></tr> -->
           <tr><td> First Name</td><td> <input type="text" id="fname" onkeyup="fname_check()" name="fname" placeholder="First Name"><p id="errorfname"></p>
           
            
          
           <?php
           echo"".$name2;
           ?>
         </td></tr>
           <td>
          
           </td>
           
           <tr><td> Last Name </td><td> <input type="text" id="lname" onkeyup="lname_check()" name="lname" placeholder="Last Name"><p id="lerror"></p>
           <?php
           echo"".$name3;
           ?>
          
          </td></tr>
           <tr><td> Age </td><td> <input type="text"  id ="age" onkeyup="age_check()" name="age" placeholder="Age" ><p id="ageerror"></p>
           <?php
           echo"".$erage;
           ?>
          
          </td></tr>
           <tr><td> AdminUserName </td><td> <input type="text" id="username" onkeyup="username_check()" name="adusername" placeholder="UserName"> <p id=usererror></p>
           <?php
           echo"".$eruser;
           ?>
          
          </td></tr>
           <tr><td> password</td><td> <input type="password" id="pass" onkeyup="passcheck()" name="password"placeholder="Password" ><p id="passerror"></p>
           <?php
           echo"".$erpass;
           ?>
          
          
          </td></tr>
           <tr><td> Confrim password</td><td> <input type="password" id="conpassword" onekeyup="conpasscheck()"  name="conpassword"placeholder="ConfrimPassword" ><p id="conerror"></p>
           <?php
           echo"".$erconpass;
           ?>
          
          </td></tr>
           <tr><td> Contact Number </td><td> <input type="text" id="number" onkeyup="num_check()" name="number" placeholder="Number"> <p id=numerror></p>
           <?php
           echo"".$ernum;
           ?>
          
          </td></tr>
           <tr><td> E-mail </td><td> <input type="email" id="email" onkeyup="email_check()" name="email" placeholder="Email"><p id="emailerror"></p>
           <?php
           echo"".$eremail;
           ?>
          
          </td></tr>
           <tr><td>
           Gender :
           </td><td>
           <input type="radio" name="radio1" value="male" id="male" onclick="getradiovalue()">Male
           <input type="radio" name="radio1" value="female" id="female" onclick="getradiovalue()">Female
           <input type="radio" name="radio1" value="other" id="other" onclick="getradiovalue()">Other
           <?php
           echo"".$ergender;
           ?>

           </td></tr>
           <tr><td> DateOfBirth </td><td> <input type="date" name="dob"> 
          
           <?php
           echo"".$erdate;
           ?>
          
          </td></tr>
           <!-- <tr><td>
           Divison(Zone):
           </td><td>
           <input type="checkbox" name="dhaka" value="ch1">Dhaka
           <input type="checkbox" name="khulna" value="ch2">Khulna
           <input type="checkbox" name="chattagram" value="ch3">Chattagram
           <input type="checkbox" name="sylhet" value="ch4">Sylhet
           <input type="checkbox" name="rahsjahi" value="ch5">Rajshahi
           </td></tr> -->
           <tr><td>
           Marital Status:
           </td><td>
           <input type="radio" name="radio1" value="single">Single
           <input type="radio" name="radio1" value="Marriad">Marriad
           <input type="radio" name="radio1" value="others">Others
           <?php
           echo"".$erstatas;
           ?>
           </td></tr>
             <tr><td>
                Blood Group :
                <tr><td>                
             <td> <select name="select">
             <option value="null">null</option>
           <option value="A+">A+</option>
            <option value="AB+" selected>AB+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>
            </select>
</td>
           <?php
           echo"".$erblood;
           ?>
          <!-- </td></tr>
            <tr><td>Please Select Your Photo : </td>   -->
            
         <!-- <td><input type="file" id="myfile" name="myfile"> </td></tr> -->
            <tr><td> <input type="Submit"name="Submit" onclick="form_check()" value="Submit" >
            <input type="Reset"  ></td></tr>

             <tr><td></td></tr>
            <tr><td>
         <?php
           echo"".$aller;
           ?>
           </td></tr>
            <td>
            <a href="Home.php">
							go to Home
             </a></td>		
            </table>
        </form>

        <script src ="../js/myscript2.js"></script>

    </body>
</html> 
