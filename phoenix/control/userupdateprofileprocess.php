<?php
session_start();
include("../model/db.php");

        $radio1=$radio2="";

        $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->fetchuser($conobj,"user",$_SESSION["email"]);
        if($results->num_rows >0)
        {
           while($myrows=$results->fetch_assoc())
           {
            $fname=$myrows["fname"];
            $lname= $myrows["lname"];
            $phonenumber= $myrows["phonenumber"];
            $birthday=$myrows["birthday"];
            $GENDER=$myrows["GENDER"];
            $email= $myrows["email"];
            $password= $myrows["password"];
            $file= $myrows["FILES"];
           }
           $fullfile="../uploads/".$file;

           if($GENDER=="MEN")
           {
            $radio1="checked";

           }
           else
           {
            $radio2="checked";
           }

           

          
           if(isset($_POST["Update"]))
           {
           echo $_FILES["myfile"]["name"];
           echo $_POST["email"];
           $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->updateuser( $conobj,"user",$_POST["fname"],$_POST["lname"],
        $_POST["phonenumber"], $_POST["birthday"], $_POST["GENDER"], $_POST["email"],
       $_POST["password"], $_FILES["myfile"]["name"]);
        if($results===true)

        {
         echo"updated";
         header("Location: ../control/userlogout.php");
        }
        else
        {
         echo"not update".$conobj->error;
        }
        }

        if (isset($_POST["DELETE"]))
        {
         $mydb= new mydb();
         $conobj =$mydb->openCon(); 
         $results =$mydb->deleteuser("user", $conobj,$_POST["email"]);
         if($results===true)
         {
            header("Location: ../control/userlogout.php");
         }
         else
         {
            echo"no delete".$conobj->error;
         }
        }


      }

        ?>