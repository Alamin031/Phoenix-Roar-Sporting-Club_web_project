
<?php
session_start();
include("../model/db.php");

$email = $_SESSION["email"];

if (empty($_SESSION["email"]))
{
    header("Location: ../view/UserLogin.php");
}

$mydb= new mydb();
$conobj =$mydb->openCon(); 
$results =$mydb->fetchuser($conobj,"user",$_SESSION["email"]);
if($results->num_rows >0)
{
   while($myrows=$results->fetch_assoc())
   {
    $file= $myrows["FILES"];
    $fname= $myrows["fname"];
    $lname= $myrows["lname"];


   }
$fullfile="../uploads/".$file;

}



?>



