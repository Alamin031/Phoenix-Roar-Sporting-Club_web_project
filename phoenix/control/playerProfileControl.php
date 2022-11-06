<?php
session_start();
include("../model/db.php");
if (empty($_SESSION["email"]))
{
    header("Location: ../view/PlayerLogin.php");
}
$email = $_SESSION["email"];



$mydb= new mydb();
$conobj =$mydb->openCon(); 
$results =$mydb->fetchuser($conobj,"player",$_SESSION["email"]);
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

