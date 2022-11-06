<?php
session_start();
include("../model/db.php");

        $radio1=$radio2=$radio3="";

        $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->ShowAll($conobj,"player",);
        
        if($results->num_rows >0)
        {   
           echo"<table>";
           while($myrows=$results->fetch_assoc())
           {
            echo"<tr>";
            $fname=$myrows["fname"];
            echo"<td>".$fname; 
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
            $Relationship=$myrows["Relationship"];
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



           if($Relationship=="Single")
           {
            $radio1="checked";

           }
           else
           {
            $radio2="checked";
           }
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

          
        //    if(isset($_POST["Update"]))
        //    {
        //    echo $_POST["fname"];
        //    $mydb= new mydb();
        // $conobj =$mydb->opencon(); 
        // $results =$mydb->updateplayer( $conobj,"player",$_POST["fname"]);
        // if($results===true)

        // {
        //  echo"updated";
        // }
        // else
        // {
        //  echo"not update".$conoj->error;
        // }
        // }



      }

        ?>