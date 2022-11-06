<?php
include("../model/db.php");
session_start();
$name2="";
$hrerror=0;
$FILES="";
$myfile="";
$name7="";
$name6="";
$name8="";




$mydb= new mydb();
$conobj =$mydb->openCon(); 
$results =$mydb->fetchuser($conobj,"player",$_SESSION["email"]);
if($results->num_rows >0)
{
   while($myrows=$results->fetch_assoc())
   {
    $fname=$myrows["fname"];
    $lname= $myrows["lname"]; 
    $number= $myrows["number"];
    $birthday=$myrows["birthday"];

    // $PL=$myrows["FSports"];
    $email= $myrows["email"];
    $file= $myrows["FILES"];

   }
   $fullfile="../uploads/".$file;


}




if(isset($_REQUEST["Submit"]))
{


  
    $mydb = new mydb();
    $conobj=$mydb->opencon();
    $mydb->insertsports($conobj,"sports",$_POST["fname"],$_POST["lname"],$_POST["phonenumber"],$_POST["birthday"],
    $_POST["email"],$_POST["SPORTS"],$_POST["TYPE"],$_POST["GAME"]);


    $fname = $_POST["fname"];
    // $name2="";
    $name=$_REQUEST["fname"];
    $name3=$_REQUEST["lname"];
    $name6=$_REQUEST["SPORTS"];
    $name7=$_REQUEST["TYPE"];
    $name8=$_REQUEST["GAME"];
    $name11=$_REQUEST["phonenumber"];


if(empty($fname))
{

    $name2="You haven't entered your first name!";
    $hrerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
    {
        echo "Please remove numeric numbers from your first name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["fname"]=$fname;
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    echo "You haven't entered your last name!";
    $hrerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["lname"]=$lname;
        echo "Your last name is: ".$lname;
        echo "<br>";
    }
}

$phonenumber = $_POST["phonenumber"];
if(empty($phonenumber))
{
    echo "You haven't entered your Phone Number!";
    $hrerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[0-9A-Z-' ]*$/",$phonenumber))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["phonenumber"]=$phonenumber;
        echo "Your Phone Number is: ".$phonenumber;
        echo "<br>";
    }
}


$birthday = $_POST["birthday"];
$_SESSION["birthday"]=$birthday;
echo "Your Age is: ".$birthday;
echo "<br>";



$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    echo "Invalid email";
    $hrerror=1;
    echo "<br>";
}
else
{
    $_SESSION["email"]=$email;
    echo "Your email is ".$email;
    echo "<br>";
}


$SPORTS = $_POST["SPORTS"];
if(empty($SPORTS))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$SPORTS))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["SPORTS"]=$SPORTS;
        echo "Your last name is: ".$SPORTS;
        echo "<br>";
    }
}

$TYPE = $_POST["TYPE"];
if(empty($TYPE))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$TYPE))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["TYPE"]=$TYPE;
        echo "Your last name is: ".$TYPE;
        echo "<br>";
    }
}

$GAME = $_POST["GAME"];
if(empty($GAME))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$GAME))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["GAME"]=$GAME;
        echo "Your last name is: ".$GAME;
        echo "<br>";
    }
}

  
  
  //creat array 

  $mydata =array(
    // $fname=$_REQUEST["fname"];
// $name2="";



    'firstname'=>$name,
    'LastName'=>$name3,
    'SPORTS'=>$name6,
    'TYPE'=>$name7,
    'GAME'=>$name8,
    'phonenumber'=>$name11,
    'birthday'=>$_REQUEST["birthday"],
    'email'=>$_REQUEST["email"],
     
  );

  


 // $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);


$existingdata = file_get_contents('../data/data1.json');
$tempJSONdata = json_decode($existingdata, true);
$tempJSONdata[] =$mydata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



if(file_put_contents ("../data/data1.json",$jsondata)){
    echo"Save data";
   // header("Location:../control/userinpormation.php");
    
    echo"<br>";
}
else{
    $hrerror=1;
    echo"<br>data not uploaded";
  }
  

}
?>