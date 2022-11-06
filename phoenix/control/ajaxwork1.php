<?php
include("../model/db.php");


// $mydb= new mydb();
// $conobj =$mydb->openCon();  
// $results=$mydb->showUser("user",$_SESSION["email"],$conobj);
// if($results->num_rows > 0)
// {
//     echo "<table>";
//     while($myrows= $results ->fetch_assoc())
//     {
//         echo "<tr>";
//         echo "<td>".$myrows["fname"]."</td>";
//         echo "<td>".$myrows["lname"]."</td>";
//         echo "<td>".$myrows["phonenumber"]."</td>";
//         echo "<td>".$myrows["birthday"]."</td>";
//         echo "<td>".$myrows["GENDER"]."</td>";
//         echo "<td>".$myrows["email"]."</td>";
//         echo "<td>".$myrows["password"]."</td>";
//         echo "<td>".$myrows["FILES"]."</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }
// else
// {
//     echo "user does not exit";
// }


$email=$_POST["email"];
$mydb= new mydb();
$conobj =$mydb->openCon();  
$results=$mydb->showUser("player",$email,$conobj);
if($results->num_rows > 0)
{
   
    echo "But Account has been opened at this email address";
}
else
{
    
    // echo "no";
}
?>