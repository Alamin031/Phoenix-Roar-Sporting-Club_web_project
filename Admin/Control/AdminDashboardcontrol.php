<?php

use LDAP\Result;

session_start();
include("../model/db.php");
$ts="";
$adminname="";
$firstname_error="";
if(!empty($_SESSION['adminname'])){
    header("Location:../view/AdminDashboard.php");
}
$adminname=$_SESSION[ 'adminname'];
// $firstname_error=$_SESSION[ 'adminname'];

  // if(isset($_POST["ShowAll"])){
     
    
  //   $mydb = new mydb();
  //   $conobj=$mydb->opencon();
  //   $result=$mydb->ShowAll("members",$conobj);
  //   if($result->num_rows>0){
  //        echo"<table>";
  //        while($myrows=$result->fetch_assoc()){
  //           echo"<tr>";
  //          echo"<td>".$myrows["Name"]."</td>";
  //        }
  //       $conobj->close();
  //   }

  // }
?>