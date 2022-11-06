<?php

include("../model/db.php");
session_start();

        $radio1=$radio2="";
        // $val=$_POST["email"];
        $mydb= new  mydb();
        $conobj =$mydb-> opencon(); 
        // $results =$mydb->fetchuser($conobj,"player",$_SESSION["email"]);
        $results =$mydb->fetchuser($conobj,"player",$_GET["email"]);
        if($results->num_rows >0)
        {
           while($myrows=$results->fetch_assoc())
           {
            $fname=$myrows["fname"];
            $lname= $myrows["lname"];
            $uname=$myrows["uname"];
            $nationality=$myrows["nationality"];
            $Division=$myrows["Division"];
            $zila=$myrows["zila"];
            $university=$myrows["university"];
            $college=$myrows["college"];
            $school=$myrows["school"];
            $number=$myrows["number"];
            $birthday=$myrows["birthday"];
            // $GENDER=$myrows["GENDER"];
            // $Relationship=$myrows["Relationship"];
            // $phonenumber= $myrows["phonenumber"];
            // $birthday=$myrows["birthday"];
            // $GENDER=$myrows["GENDER"];
            $email= $myrows["email"];
            // $password= $myrows["password"];
            // $file= $myrows["FILES"];
           }
        //    $fullfile="../uploads/".$file;

        //    if($GENDER=="MEN")
        //    {
        //     $radio1="checked";

        //    }
        //    else
        //    {
        //     $radio2="checked";
        //    }

           

          
           if(isset($_POST["Submit"]))
           {
        //    echo $_FILES["myfile"]["name"];
           echo $_POST["email"];
           $mydb= new mydb();
        $conobj =$mydb->opencon(); 
    //     $results =$mydb-> updateplayer( $conobj,"player",$_POST["fname"],$_POST["lname"],
    //     $_POST["phonenumber"], $_POST["birthday"], $_POST["GENDER"], $_POST["email"],
    //    $_POST["password"], $_FILES["myfile"]["name"]);
    $results =$mydb-> updateplayer( $conobj,"player",$_POST["fname"],$_POST["lname"],$_POST["uname"],$_POST["nationality"],$_POST["Division"],$_POST["zila"],$_POST["university"],$_POST["college"],$_POST["school"],$_POST["number"],$_POST["birthday"],$_POST["email"]);
        if($results===true)

        {
         echo"updated";
         // header("Location: ../view/AdminDashboard.php");
        }
        else
        {
         echo"not update".$conobj->error;
        }
        }

        // if (isset($_POST["DELETE"]))
        // {
        //  $mydb= new mydb();
        //  $conobj =$mydb->openCon(); 
        //  $results =$mydb->deleteuser("user", $conobj,$_POST["email"]);
        //  if($results===true)
        //  {
        //     header("Location: ../control/userlogout.php");
        //  }
        //  else
        //  {
        //     echo"no delete".$conobj->error;
        //  }
        // }


      }

        ?>
