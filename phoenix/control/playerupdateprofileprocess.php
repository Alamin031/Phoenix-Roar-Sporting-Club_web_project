<?php
session_start();
include("../model/db.php");

        $radio1=$radio2=$radio3="";

        $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->fetchuser($conobj,"player",$_SESSION["email"]);
        if($results->num_rows >0)
        {
           while($myrows=$results->fetch_assoc())
           {
            $fname=$myrows["fname"];
            $lname= $myrows["lname"];
            $uname= $myrows["uname"];
            $nationality= $myrows["nationality"];
            $Division= $myrows["Division"];
            $Zila= $myrows["zila"];
            $university= $myrows["university"];
            $college= $myrows["college"];
            $school= $myrows["school"];
            $number= $myrows["number"];
            $birthday=$myrows["birthday"];
            $GENDER=$myrows["GENDER"];
            // $Relationship=$myrows["Relationship"];
            // $PL=$myrows["FSports"];
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



          //  if($Relationship=="Single")
          //  {
          //   $radio1="checked";

          //  }
          //  else
          //  {
          //   $radio2="checked";
          //  }
         //   elseif
         //   {
         //   $radio3="checked";
         //   }

      

         // if($PL=="cricket")
         // {
         //    $cricket=="checked";
         // }

         // if($PL=="football")
         // {
         //    $football=="checked";
         // }
         // if($PL=="basketbal")
         // {
         //    $basketbal=="checked";
         // }
         // if($PL=="tennis")
         // {
         //    $tennis=="checked";
         // }
         // if($PL=="hockey")
         // {
         //    $hockey=="checked";
         // }
         // if($PL=="volleyball")
         // {
         //    $volleyball=="checked";
         // }

          
           if(isset($_POST["Update"]))
           {
          //  echo $_POST["fname"];
           $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->updateplayer( $conobj,"player",$_POST["fname"],$_POST["lname"],$_POST["uname"],$_POST["nationality"],$_POST["Division"],$_POST["Zila"]
        ,$_POST["university"],$_POST["college"],$_POST["school"],$_POST["birthday"],$_POST["GENDER"],$_POST["email"],$_POST["password"],$_POST["number"]);
        if($results===true)

        {
         echo"updated";
        }
        else
        {
         echo"not update".$conoj->error;
        }
        }





        if (isset($_POST["DELETE"]))
        {
         $mydb= new mydb();
         $conobj =$mydb->openCon(); 
         $results =$mydb->deleteplayer("player", $conobj,$_POST["email"]);
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


<!-- if(isset($_POST["Update"]))
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


      } -->