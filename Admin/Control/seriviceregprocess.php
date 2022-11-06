<?php
include('../model/db.php');
session_start();

$name2="";
$name3="";
$erage="";
$eruser="";
$erpass="";
$eremail="";
$ergender="";
$erconpass="";
$erstatas="";
$erdate="";
$ernum="";
$erblood="";
$allerror=0;
$aller="";
$stpass="";
// $cm="";
if(isset($_REQUEST["Submit"])){
$fname = $_POST["fname"];
//$name2="";
if(empty($fname))
{
    //echo "You haven't entered your first name!";
    $name2="* You haven't entered your first name!";
    $allerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
    {
        $name2="* Please remove numeric numbers from your first name!";
        $allerror=1;
        echo "<br>";
    }
    else
    {
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    $name3="* You haven't entered your last name!";
    $allerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        $name3= "* Please remove numeric numbers from your last name!";
        $allerror=1;
        echo "<br>";
    }
    else
    {
        echo"Your last name is: ".$lname;
        echo "<br>";
    }
}

$age = $_POST["age"];
// echo "Your Age is: ".$age;
// echo "<br>";

if(empty($age)){
    $erage="* Please Enter your age";
    $allerror=1;
}
else{

    echo"Your Age is  :".$age;
}

$uname = $_POST["adusername"];
if(empty($uname))
{
    $eruser= "* You haven't entered your Username!";
    $allerror=1;
    echo "<br>";
}
else
{
    if (preg_match("/^[a-zA-Z-' ]*$/",$uname))
    {
        $eruser="* Please Enter numeric numbers for userName!";
        $allerror=1;
        echo "<br>";
    }
    else
    {
        echo "Your username is: ".$uname;
        echo "<br>";
    }
}


$pass = $_POST['password'];
$conpass = $_POST['conpassword'];
if (strlen($pass) < 4)
{
    $erpass= "* Please Enter a valid password!";
    $allerror=1;
    echo "<br>";
}
else{
   
    
    if ( ($pass!=$conpass))
    {
        $erconpass="* Your Password does not matched !";
        $allerror=1;
        echo "<br>";
    }
    else
    {
        //echo "Your given confrim password is: ".$conpass;
        $stpass=$conpass;
        //  echo $stpass;
        echo"Passwoord Stored!";
        echo "<br>";
    }

}



$num = $_POST["number"];
if(empty($num))
{
    $ernum= "* You haven't Enter your Number!";
    $allerror=1;
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$num))
    {
        $eruser="* Please Enter Valid Number!";
        $allerror=1;
        echo "<br>";
    }
    else
    {
        echo "Your Number is: ".$num;
        echo "<br>";
    }
}
// $conpass = $_POST['conpassword'];

// if ( ($pass!=$conpass))
// {
//     echo "Your Password does not matched !";
//     echo "<br>";
// }
// else
// {
//     echo "Your given confrim password is: ".$conpass;
//     echo "<br>";
// }

$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    $eremail="* Invalid email";
    $allerror=1;
    echo "<br>";
}
else
{
    echo "Your email is ".$email;
    echo "<br>";
}

$gender="";

if (isset( $_POST["radio"]) )
{
    $gender= $_POST["radio"];
    $_SESSION["gender"]=$gender;
    echo "You have selected : " .$gender;
    echo "<br>";
}
else
{
    $ergender="    *  You must Select a gender!";
    $allerror=1;
    echo "<br>";
}

$date=$_POST["dob"];

if (!(empty($date)) && !preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/",$date)) {
   echo"Date of Birth :".$date;
   echo"<br>";
} 
else {
    $erdate=" * Enter valid Dob!";
    $allerror=1;
    echo"<br>";
}



$mstat="";

if (isset( $_POST["radio1"]))
{
    $mstat= $_POST["radio1"];
    $_SESSION["mstat"]=$mstat;
    echo "Your marital status : " .$mstat;
    echo "<br>";
}
else
{
    $erstatas="  * You must Select your marital status!";
    $allerror=1;
    echo "<br>";
}


$cm="null";
if(isset($_POST["select"])){

  $cm=$_POST["select"];
  
  if($cm!="null"){
  echo"Your blood group is :".$cm;
  echo"<br>";
  }
}
else{
    $erblood="Please select your blood group";
    $allerror=1;
    echo"<br>";
}

 //for files uploads code here
//   echo $_FILES["myfile"]["name"];//return file name
 
//   if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads".$_FILES["myfile"]["name"])){
//       echo "FILES UPLOADED";
//   }
//   else{
//       echo"File not uploaded";
//       $allerror=1;
//       echo"<br>";
//   }
 


//   $mydata =array(
    
//     'firstname'=>$fname,
//     'LastName'=>$lname,
//     'Age'=>$age,
//     'UserName'=>$_REQUEST["adusername"],
//     'password'=>$_REQUEST["password"],
//     'email'=>$_REQUEST["email"],
//     'Dob'=>$_REQUEST["dob"],
//     'file'=>$_FILES["myfile"]["name"],
//     'gender'=> $gender,
//     'BloodGroup'=>$cm,
    
   
// );


// // $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);


// $existingdata = file_get_contents('../data/data.json');
// $tempJSONdata = json_decode($existingdata, true);
// $tempJSONdata[] =$mydata;
// $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



// if(file_put_contents ("../data/data.json",$jsondata)){
//     echo"Save data";
   
//     echo"<br>";
// }

// else{
//     echo"<br>Not save<br>";
// }
  

//     $connection=new mydb();
//     $con=$connection-> openCon();


// $iner=$connection->insertreg($con,"adminreg", $_POST["fname"], $_POST["lname"],$_POST["age"],$_POST["adusername"],$_POST["password"],$_POST["conpassword"],$_POST["number"],$_POST["email"],$_POST["radio1"],$_POST["dob"],$_POST["radio1"],$cm);
// if($iner==true)
// {
//     echo "suceffful save";
// }
// else
// {
//     echo "unsuccessfull ";


// }

    $mydb = new mydb();
    $conobj=$mydb->opencon();
    $mydb->insertreg($conobj,"service",$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["adusername"],$_POST["password"],$_POST["conpassword"],$_POST["number"],$_POST["email"],$_POST["radio1"],$_POST["dob"],$_POST["radio1"],$cm);
    
    


}




?>



