<?php
include("../model/db.php");
session_start();


$tname= $_GET["tname"];

$mydb= new mydb();
$conobj =$mydb->openCon(); 
$results =$mydb->fetchuser1($conobj,"tournamentd",$_GET["tname"]);
if($results->num_rows >0)
{
   while($myrows=$results->fetch_assoc())
   {
    $tname= $myrows["tname"];
    $ttype= $myrows["ttype"];
    $sname= $myrows["sname"];
    $faname= $myrows["faname"];
    $tvanue= $myrows["tvanue"];
    $tdate= $myrows["tdate"];
    $tstime= $myrows["tstime"];
    $tetime= $myrows["tetime"];
    $tstatus= $myrows["tstatus"];
   }

}


$mydb= new mydb();
$conobj =$mydb->openCon(); 
$results =$mydb->fetchuser($conobj,"player",$_SESSION["email"]);
if($results->num_rows >0)
{
   while($myrows=$results->fetch_assoc())
   {
    $email= $myrows["email"];
    $file= $myrows["FILES"];
    $fname= $myrows["fname"];
    $lname= $myrows["lname"];

   }
   $fullfile="../uploads/".$file;


}

if(isset($_REQUEST["Submit"]))
{


  
    $mydb = new mydb();
    $conobj=$mydb->opencon();
    $mydb->insertapplytournamentd($conobj,"applytournamentd",$_POST["tname"],$_POST["email"]);


//     $fname = $_POST["fname"];
//     $name=$_REQUEST["fname"];
//     $name3=$_REQUEST["lname"];
//     $name6=$_REQUEST["SPORTS"];
//     $name7=$_REQUEST["TYPE"];
//     $name8=$_REQUEST["GAME"];
//     $name11=$_REQUEST["phonenumber"];

//   //creat array 

//   $mydata =array(
//     'firstname'=>$name,
//     'LastName'=>$name3,
//     'SPORTS'=>$name6,
//     'TYPE'=>$name7,
//     'GAME'=>$name8,
//     'phonenumber'=>$name11,
//     'birthday'=>$_REQUEST["birthday"],
//     'email'=>$_REQUEST["email"],
     
//   );

  


 // $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);


// $existingdata = file_get_contents('../data/data1.json');
// $tempJSONdata = json_decode($existingdata, true);
// $tempJSONdata[] =$mydata;
// $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



// if(file_put_contents ("../data/data1.json",$jsondata)){
//     echo"Save data";
//    // header("Location:../control/userinpormation.php");
    
//     echo"<br>";
// }
// else{
//     $hrerror=1;
//     echo"<br>data not uploaded";
//   }
  

}
?>