<?php
include("../control/Process1.php");
setcookie("mycokie","hello")
?>


<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>Player Registration From</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           <tr><td> First Name</td><td> <input type="text" name="fname"> </td></tr>
           <td>
          <?php
         // echo $name2;
          ?>
           </td>

           <tr><td> Last Name </td><td> <input type="text" name="lname"> </td></tr>
           <tr><td> User Name </td><td> <input type="text" name="uname"> </td></tr>

           <tr><td> Nationality </td><td> <input type="text" name="nationality"> </td></tr>

           <tr><td> <label for="player">Player Address: </label> </td>
           <tr><td>
            <label for="player">Division </label></td>
            </td><td>
           <select name ="Division" id="Division">
            <option value="Dhaka"   >Dhaka</option>
            <option value="Cittagong">Cittagong</option>
            <option value="Sylhet">Sylhet</option>
           </select>
           </td></tr>

           <tr><td>
            <label for="player">Zila </label></td>
            </td><td>
           <select name ="Zila" id="Zila">
            <option value="Dhaka">Dhaka</option>
            <option value="Cittagong">Cittagong</option>
            <option value="Sylhet">Sylhet</option>
           </select>
           </td></tr>

           <tr><td> <label for="education">Education: </label> </td>

           <tr><td> University </td><td> <input type="text" name="university"> </td></tr>
           <tr><td> College </td><td> <input type="text" name="college"> </td></tr>
           <tr><td> School </td><td> <input type="text" name="school"> </td></tr>

           <tr><td> Phone Number </td><td> <input type="text" name="number" > </td></tr>
        
           <tr><td> <label for="birthday">Birthday: </label> </td><td> <input type="date" id="birthday" name="birthday"> </td></tr>

     


           <tr><td>
           GENDER:
           </td><td>
           <input type="radio" name="radio1" value="MEN"> MEN
           <input type="radio" name="radio1" value="WOMEN">WOMEN
           </td></tr>
           <tr><td>


           <tr><td>
           Relationship:
           </td><td>
           <input type="radio" name="radio3" value="Single"> Single
           <input type="radio" name="radio3" value="Married">Married
           <input type="radio" name="radio3" value="Divorced">Divorced
           </td></tr>
           <tr><td>

           <!-- Favorite Sports:
           </td><td>
           <input type="checkbox" name="cricket" value="cricket">Cricket
           <input type="checkbox" name="football" value="football">Football
           <input type="checkbox" name="basketball" value="basketball">Basketbal
           <input type="checkbox" name="tennis" value="tennis">Tennis
           <input type="checkbox" name="hockey" value="hockey">Hockey
           <input type="checkbox" name="volleyball" value="volleyball">Volleyball
           </td></tr> -->
           
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td>Please Choose Your Image :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>
            <tr><td> <input type="Submit"name="Submit" value="Submit"  > 
            <input type="Reset"  ></td></tr>

            
            <!-- <tr><td> <a href="../view/pinpormation.php"><input type="button" value="player Registration" ></a> -->
            <tr><td> <a href="../view/Account.php"><input type="button" value="Back" ></a>
            </table>
        </form>
    </body>
    
</html>