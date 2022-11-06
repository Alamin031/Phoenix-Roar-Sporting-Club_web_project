<?php
$password="";
include ("../model/db.php");

if(isset($_POST["Submit"]))

{




     
     $_SESSION["email"]=$_POST["email"];
     $mydb= new mydb();
     $conobj =$mydb->openCon();
     $results=$mydb->searchemail($conobj, "user", $_POST['email']);
     if($results->num_rows>0)
     {
          $password= $_REQUEST["password"]; 
          $confirmpassword=$_REQUEST["confirmpassword"];
          
                  if(empty($password) || strlen($password)<6)
                  {
                      $password=  "Please enter a valid password";
                  }
                  else if($password != $confirmpassword)
                  {
                      $password= "Password didn't match";
                  }
                  else
                  {
                    $mydb= new mydb();
                    $conobj =$mydb->openCon();
                    $results=$mydb->updatepassword("user", $conobj, $_POST['email'], $password);
                      Header("location: ../View/UserLogin.php");  
                  }  
          }

     else{
           echo "<h1> Email not Found </h1>" ;
     }

}

?>
