<?php
$name2="";
if(isset($_REQUEST["Submit"])){
$fname = $_POST["fname"];
//$name2="";
if(empty($fname))
{
    //echo "You haven't entered your first name!";
    $name2="You haven't entered your first name!";
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
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    echo "You haven't entered your last name!";
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
        echo "Your last name is: ".$lname;
        echo "<br>";
    }
}

$age = $_POST["age"];
echo "Your Age is: ".$age;
echo "<br>";



if (isset( $_POST["radio"]) )
{
    $designation = $_POST["radio"];
    echo "You have selected as: " .$designation;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}

if (isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["cpp"]))
{
    if (isset($_POST["java"]))
    {
        echo "You have selected: JAVA ";
        echo "<br>";
    }

    if (isset($_POST["php"]))
    {
        echo "You have selected: PHP";
        echo "<br>";
    }
    if (isset($_POST["cpp"]))
    {
        echo "You have selected: C++";
        echo "<br>";
    }
}
else
{
    echo "Please select a checkbox!";
    echo "<br>";
}

$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    echo "Invalid email";
    echo "<br>";
}
else
{
    echo "Your email is ".$email;
    echo "<br>";
}

$password = $_POST['password'];
if (strlen($password) < 8)
{
    echo "Please Enter a valid password!";
    echo "<br>";
}
else
{
    echo "Your given password is: ".$password;
    echo "<br>";
}


 //for files uploads code here
  echo $_FILES["myfile"]["name"];//return file name
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads".$_FILES["myfile"]["name"])){
      echo "FILES UPLOADED";
  }
  else{
      echo"File not uploaded";
  }


}
?>