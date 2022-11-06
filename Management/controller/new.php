<?php
include("../model/db.php");
session_start();
$hrerror=0;
$tname=$ttype=$sname=$faname=$tvanue=$tdate=$tstime=$tetime=$tstatus= "";


if(isset($_REQUEST["submit"]))
{
    // $mydb = new mydb();
    // $conobj=$mydb->opencon();
    // $mydb->inserttournamentd($conobj,"tournamentd",$_POST["tname"],$_POST["ttype"],$_POST["sname"],$_POST["faname"],$_POST["tvanue"],
    // $_POST["tdate"],$_POST["tstime"],$_POST["tetime"],$_POST["tstatus"]);

    // header("Location: ../view/TournamentDetails.php");
    // exit(); 

if(empty($tname))
{
    $name2="You haven't entered your first name!";
    $hrerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$tname))
    {
        echo "Please remove numeric numbers from your first name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["tname"]=$tname;
        echo "<br>";
    }
}

$ttype="";
if (isset( $_POST["radio"]) )
{
    $ttype = $_POST["radio"];
    $_SESSION["ttype"]=$ttype;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    $hrerror=1;
    echo "<br>";
}



$sname = $_POST["sname"];
if(empty($sname))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$sname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["sname"]=$sname;
        echo "<br>";
    }
}

$faname = $_POST["faname"];
if(empty($faname))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$faname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["faname"]=$faname;
        echo "<br>";
    }
}

$tvanue = $_POST["tvanue"];
if(empty($tvanue))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$tvanue))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["tvanue"]=$tvanue;
        echo "<br>";
    }
}




$tdate = $_POST["tdate"];
$_SESSION["tdate"]=$tdate;

echo "<br>";



$tstime = $_POST["tstime"];
if(empty($tstime))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$tstime))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["tstime"]=$tstime;
        echo "<br>";
    }
}

$tetime = $_POST["tetime"];
if(empty($tetime))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$tetime))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["tetime"]=$tetime;
        echo "<br>";
    }
}

$tstatus = $_POST["tstatus"];
if(empty($tstatus))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else                                                                                               
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$tstatus))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["tstatus"]=$tstatus;
        echo "<br>";
    }
}
  
  
  //creat array 

  $mydata =array(
    'tname'=>$_REQUEST["tname"],
    'sname'=>$_REQUEST["sname"],
    'faname'=>$_REQUEST["faname"],
    'tvanue'=>$_REQUEST["tvanue"],

      'tdate'=>$_REQUEST["tdate"],
      'tstime'=>$_REQUEST["tstime"],
      'tetime'=>$_REQUEST["tetime"],
      'tstatus'=>$_REQUEST["tstatus"],
      'radio'=>$ttype
     
  );

  $mydb = new mydb();
  $conobj=$mydb->opencon();
  $mydb->inserttournamentd($conobj,"tournamentd",$_POST["tname"],$_POST["ttype"],$_POST["sname"],$_POST["faname"],$_POST["tvanue"],
  $_POST["tdate"],$_POST["tstime"],$_POST["tetime"],$_POST["tstatus"]);

  header("Location: ../view/TournamentDetails.php");
  exit();

  


 // $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);


// $existingdata = file_get_contents('../data/data.json');
// $tempJSONdata = json_decode($existingdata, true);
// $tempJSONdata[] =$mydata;
// $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



// if(file_put_contents ("../data/data.json",$jsondata)){
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