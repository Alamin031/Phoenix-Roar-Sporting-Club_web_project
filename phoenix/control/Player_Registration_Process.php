<?php
include("../model/db.php");
session_start();
$name2="";
// $PL="";
$GENDER ="";
$Relationship="";



if(isset($_REQUEST["Submit"]))
{



$fname = $_POST["fname"];
// $name2="";
$name=$_REQUEST["fname"];
$name3=$_REQUEST["lname"];
$name4=$_REQUEST["uname"];
$name5=$_REQUEST["nationality"];
$name6=$_REQUEST["Division"];
$name7=$_REQUEST["Zila"];
$name8=$_REQUEST["school"];
$name9=$_REQUEST["university"];
$name10=$_REQUEST["college"];
$name11=$_REQUEST["number"];


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
        $_SESSION["name"]=$name;
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    // echo "You haven't entered your last name!";
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

$uname = $_POST["uname"];
if(empty($uname))
{
    // echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["uname"]=$uname;
        // echo "Your last name is: ".$uname;
        echo "<br>";
    }
}

$nationality = $_POST["nationality"];
if(empty($nationality))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nationality))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["nationality"]=$nationality;
        // echo "Your last name is: ".$nationality;
        echo "<br>";
    }
}

$Division = $_POST["Division"];
if(empty($Division))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Division))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["Division"]=$Division;
        // echo "Your last name is: ".$Division;
        echo "<br>";
    }
}

$Zila = $_POST["Zila"];
if(empty($Zila))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Zila))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["Zila"]=$Zila;
        // echo "Your last name is: ".$Zila;
        echo "<br>";
    }
}


$university = $_POST["university"];
if(empty($university))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$university))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["university"]=$university;
        // echo "Your last name is: ".$university;
        echo "<br>";
    }
}

$school = $_POST["school"];
if(empty($school))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$school))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["school"]=$school;
        // echo "Your last name is: ".$school;
        echo "<br>";
    }
}

$number = $_POST["number"];
if(empty($number))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z0-9' ]*$/",$number))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["number"]=$number;
        // echo "Your last name is: ".$number;
        echo "<br>";
    }
}

$birthday = $_POST["birthday"];
$_SESSION["birthday"]=$birthday;
echo "Your Age is: ".$birthday;
echo "<br>";

$GENDER="";

if (isset( $_POST["radio1"]) )
{
    $GENDER = $_POST["radio1"];
    $_SESSION["GENDER"]=$GENDER;
    // echo "You have selected as: " .$GENDER;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}

$Relationship="";

if (isset( $_POST["radio3"]) )
{
    $Relationship = $_POST["radio3"];
    $_SESSION["Relationship"]=$Relationship;
    // echo "You have selected as: " .$Relationship;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}


        //    </td><td>
        //    <input type="checkbox" name="cricket" value="cricket">Cricket
        //    <input type="checkbox" name="football" value="football">Football
        //    <input type="checkbox" name="basketball" value="basketball">Basketbal
        //    <input type="checkbox" name="tennis" value="tennis">Tennis
        //    <input type="checkbox" name="hockey" value="hockey">Hockey
        //    <input type="checkbox" name="volleyball" value="volleyball">Volleyball
        //    </td></tr>


// $PL="";
// if (isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
// {
//     if (isset($_POST["cricket"]) && isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {

//         echo "You have selected: Cricket Football Basketbal Tennis Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
//         $_SESSION["PL"]=$PL;


//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) )
//     {
//         echo "You have selected: Cricket Football Basketbal Tennis Hockey ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
//         $_SESSION["PL"]=$PL;

//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) )
//     {
//         echo "You have selected: Cricket Football Basketbal Tennis ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"];
//     }
//     elseif (isset($_POST["cricket"]) && isset($_POST["football"]) && isset($_POST["basketball"]) )
//     {
//         echo "You have selected: Cricket Football Basketbal ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["football"]) )
//     {
//         echo "You have selected: Cricket Football ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["football"];
//     }
//     elseif (isset($_POST["cricket"]))
//     {
//         echo "You have selected: Cricket";
//         echo "<br>";
//         $PL=$_POST["cricket"];
//     }
//     elseif (isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected: Football Basketbal Tennis Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
//     }

//     elseif (isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]))
//     {
//         echo "You have selected: Football Basketbal Tennis Hockey  ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
//     }

//     elseif (isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]))
//     {
//         echo "You have selected: Football Basketbal Tennis ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"];
//     }

//     elseif (isset($_POST["football"]) && isset($_POST["basketball"]))
//     {
//         echo "You have selected: Football Basketbal ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["basketball"];
//     }

//     elseif (isset($_POST["football"]))
//     {
//         echo "You have selected: Football";
//         echo "<br>";
//         $PL=$_POST["football"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected: Cricket  Basketbal Tennis Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]))
//     {
//         echo "You have selected: Cricket  Basketbal Tennis Hockey ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
//     }


//     elseif (isset($_POST["cricket"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]))
//     {
//         echo "You have selected: Cricket Basketbal Tennis ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"];
//     }


//     elseif (isset($_POST["cricket"]) && isset($_POST["basketball"]))
//     {
//         echo "You have selected: Cricket Basketbal ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POSTT["basketball"];
//     }


//     elseif (isset($_POST["basketball"]))
//     {
//         echo "You have selected: Basketbal ";
//         echo "<br>";
//         $PL=$_POST["basketball"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected: Cricket  Tennis Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]))
//     {
//         echo "You have selected: Cricket  Tennis Hockey ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["tennis"].", ".$_POST["hockey"];
//     }

//     elseif (isset($_POST["cricket"]) && isset($_POST["tennis"]))
//     {
//         echo "You have selected: Cricket  Tennis ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["tennis"];
//     }

//     elseif (isset($_POST["basketball"]) && isset($_POST["tennis"]))
//     {
//         echo "You have selected:  Basketbal Tennis ";
//         echo "<br>";
//         $PL=$_POST["basketball"].", ".$_POST["tennis"];
//     }

//     elseif (isset($_POST["football"]) && isset($_POST["tennis"]))
//     {
//         echo "You have selected:  Football  Tennis ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["tennis"];
//     }

//     elseif ( isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected: Tennis Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
//     }

//     elseif ( isset($_POST["tennis"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected:  Tennis  Volleyball ";
//         echo "<br>";
//         $PL=$_POST["tennis"].", ".$_POST["volleyball"];
//     }

//     elseif ( isset($_POST["tennis"]) && isset($_POST["hockey"]))
//     {
//         echo "You have selected: Tennis Hockey ";
//         echo "<br>";
//         $PL=$_POST["tennis"].", ".$_POST["hockey"];
//     }

//     elseif ( isset($_POST["tennis"]))
//     {
//         echo "You have selected:  Tennis ";
//         echo "<br>";
//         $PL=$_POST["tennis"];
//     }

//     elseif ( isset($_POST["hockey"]) && isset($_POST["volleyball"]))
//     {
//         echo "You have selected:  Hockey Volleyball ";
//         echo "<br>";
//         $PL=$_POST["hockey"].", ".$_POST["volleyball"];
//     }
//     elseif ( isset($_POST["hockey"]) && isset($_POST["cricket"]))
//     {
//         echo "You have selected:  Hockey  ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["hockey"];
//     }

//     elseif ( isset($_POST["hockey"]) && isset($_POST["football"]))
//     {
//         echo "You have selected: Football  Hockey  ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["hockey"];
//     }

//     elseif ( isset($_POST["hockey"]) && isset($_POST["basketball"]))
//     {
//         echo "You have selected:  Basketbal  Hockey  ";
//         echo "<br>";
//         $PL=$_POST["basketball"].", ".$_POST["hockey"];
//     }

//     elseif ( isset($_POST["hockey"]))
//     {
//         echo "You have selected:  Hockey  ";
//         echo "<br>";
//         $PL=$_POST["hockey"];
//     }

//     elseif ( isset($_POST["volleyball"])  && isset($_POST["basketball"]))
//     {
//         echo "You have selected:  Basketbal  Volleyball ";
//         echo "<br>";
//         $PL=$_POST["basketball"].", ".$_POST["volleyball"];
//     }

//     elseif ( isset($_POST["volleyball"])  && isset($_POST["football"]))
//     {
//         echo "You have selected: Football  Volleyball ";
//         echo "<br>";
//         $PL=$_POST["football"].", ".$_POST["volleyball"];
//     }

//     elseif ( isset($_POST["volleyball"])  && isset($_POST["cricket"]))
//     {
//         echo "You have selected: Cricket  Volleyball ";
//         echo "<br>";
//         $PL=$_POST["cricket"].",".$_POST["volleyball"];
//     }
   
//     elseif ( isset($_POST["volleyball"]))
//     {
//         echo "You have selected:  Volleyball ";
//         echo "<br>";
//         $PL=$_POST["volleyball"];
//     }
// }

// else
// {
//     echo "Please select a checkbox!";
//     echo "<br>";
// }

$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    echo "Invalid email";
    echo "<br>";
}
else
{
    // echo "Your email is ".$email;
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
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
  {
    //   echo "FILES UPLOADED";
  }
  else{
      echo"<br>File not uploaded";
  }
  
  //creat array 

  $mydata =array(
    'firstname'=>$name,
    'LastName'=>$name3,
    'UserName'=>$name4,
    'Nationality'=>$name5,
    'Division'=>$name6,
    'Zila'=>$name7,
    'University'=>$name9,
    'School'=>$name10,
    'Number'=>$name11,
    'birthday'=>$_REQUEST["birthday"],
    'email'=>$_REQUEST["email"],
    //'Number'=>$_REQUEST["number"],
    'password'=>$_REQUEST["password"],
    'file'=>$_FILES["myfile"]["name"],
    // 'mycheckbox'=>$PL,
    'radio1'=>$GENDER,
    // 'radio3'=>$Relationship
   
);

$existingdata = file_get_contents('../data/data2.json');
$tempJSONdata = json_decode($existingdata, true);
$tempJSONdata[] =$mydata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);



if(file_put_contents ("../data/data2.json",$jsondata)){
    echo"Save data";
   // header("Location:../control/userinpormation.php");
    
    echo"<br>";
}
else{
    $hrerror=1;
    // echo"<br>data not uploaded";
  }


  $mydb = new mydb();
    $conobj=$mydb->opencon();
    $mydb->insertplayer($conobj,"player",$_POST["fname"],$_POST["lname"],$_POST["uname"],$_POST["nationality"],
    $_POST["Division"],$_POST["Zila"],$_POST["university"],$_POST["college"],$_POST["school"],
    $_POST["number"],$_POST["birthday"],$GENDER,
    $_POST["email"],$_POST["password"],$_FILES["myfile"]["name"]);

    header("Location: ../view/PlayerLogin.php");
    exit();

}

?>