<?php
class mydb{



    function opencon(){
        $dbservername="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="secf";
        $conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
        if($conn->connect_error)
        {
            echo "con obj failed";
        }
        return $conn;
    }

    
  

function insertreg($conn,$tablename,$Firstname,$Lastname,$Age,$Adminusername,$password,$confrimpassword,$Number,$email,$Gender,$Dateofbirth,$maritalstatus,$Bloodgroup)
{   
    //$tablename="adminreg";
    $sqlstr="INSERT INTO $tablename(Firstname,Lastname,Age,Adminusername,password,confrimpassword,Number,email,Gender,Dateofbirth,maritalstatus,Bloodgroup) values('$Firstname','$Lastname','$Age','$Adminusername','$password','$confrimpassword','$Number','$email','$Gender','$Dateofbirth','$maritalstatus','$Bloodgroup')";
    if($conn->query($sqlstr))
    {
        echo "data inserted";

    }
    else
    {
        echo "error" .$conn->error;
    }
}

function check($conn,$table,$mail,$password)
{
    //$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
    $re = $conn->query("SELECT * FROM ".$table." WHERE Adminusername='".$mail."' AND password='".$password."'");
    
    return $re;
}
function show($conn,$table)
{
    $sh=$conn->query("SELECT * FROM ".$table."");
    return $sh;
}

  

 function fetchuser($conn, $tablename, $email)

 {

     $sqlstr="SELECT * FROM $tablename WHERE email='$email'";

     return $conn->query($sqlstr);

 }

 function updateplayer($conn,$tablename,$fname,$lname,$uname,$nationality,$Division,$zila,$university,$college,$school,$number,$birthday,$email)
    {
        $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname', uname='$uname',nationality='$nationality',Division='$Division',zila='$zila',university='$university', college='$college', school='$school', number='$number', birthday='$birthday' where email='$email' ";
        // if ($conn->query($sqlstr) === TRUE) {
        //     $result= TRUE;
        // } else {
        //     $result= FALSE ;
        // }
        return $conn->query($sqlstr);
    }

// function update(){
   
//   $sqlstr="SELECT FROM $tablename WHERE name='$name'";
// }
 

   
  function GetUserByUname($conn,$table, $uname)
  {
 $result = $conn->query("SELECT * FROM  $table WHERE uname='$uname'");
  return $result;
  }
 
 
 
 
 function del($conn,$table,$nid)
  {
      //$sql = "UPDATE $table SET lname='$lname', mail='$mail' WHERE nid='$username'";
      $d="DELETE FROM $table WHERE number='$nid'";
     
     return  $d;
  }


  function conClose($conn){
    $conn->close(); //connection closed
  }




};




?>