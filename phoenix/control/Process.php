<?php
include("../model/db.php");
session_start();
$name2="";
$hrerror=0;
$FILES="";
$myfile="";

if(isset($_REQUEST["submit1"]))
{
    $mydb = new mydb();
    $conobj=$mydb->opencon();
    $mydb->insertuser($conobj,"user",$_POST["fname"],$_POST["lname"],$_POST["phonenumber"],$_POST["birthday"],$_POST["radio"],
    $_POST["email"],$_POST["password"],$_FILES["myfile"]["name"]);

    
$fname = $_POST["fname"];
// $name2="";
$name=$_REQUEST["fname"];
$name3=$_REQUEST["lname"];
if(empty($fname))
{
    //echo "You haven't entered your first name!";
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

$GENDER="";

if (isset( $_POST["radio"]) )
{
    $GENDER = $_POST["radio"];
    $_SESSION["GENDER"]=$GENDER;
    echo "You have selected as: " .$GENDER;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    $hrerror=1;
    echo "<br>";
}



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

$password = $_POST['password'];
if (strlen($password) < 8)
{
    echo "Please Enter a valid password!";
    $hrerror=1;
    echo "<br>";
}
else
{
    $_SESSION["password"]=$password;
    echo "Your given password is: ".$password;
    echo "<br>";
}




 //for files uploads code here
  echo $_FILES["myfile"]["name"];//return file name
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
  {
    $_SESSION["FILES"]=$FILES;
      echo "FILES UPLOADED";
  }
  else{
      echo"<br>File not uploaded";
      $hrerror=1;
  }
  
  
  //creat array 

  $mydata =array(
      'firstname'=>$name,
      'LastName'=>$name3,
      'birthday'=>$_REQUEST["birthday"],
      'email'=>$_REQUEST["email"],
      'Number'=>$_REQUEST["phonenumber"],
      'password'=>$_REQUEST["password"],
      'file'=>$_FILES["myfile"]["name"],
      'radio'=>$GENDER
     
  );

  


 // $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);


$existingdata = file_get_contents('../data/data.json');
$tempJSONdata = json_decode($existingdata, true);
$tempJSONdata[] =$mydata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



if(file_put_contents ("../data/data.json",$jsondata)){
    echo"Save data";
   // header("Location:../control/userinpormation.php");
    
    echo"<br>";
}
else{
    $hrerror=1;
    echo"<br>data not uploaded";
  }
//   header("Location: ../view/UserLogin.php");
//   exit();

}
?>