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

    
    function insertplayer($conn,$tablename,$fname,$lname,$uname,$nationality,$Division,$Zila,$university,$college,$school,$number,$birthday,$GENDER,$email,$password,$FILES)
    {
        
        $sqlstr="INSERT INTO $tablename(fname,lname,uname,nationality,Division,zila,university,college,school,number,birthday,GENDER,email,password,FILES) values('$fname','$lname','$uname','$nationality','$Division','$Zila','$university','$college','$school',
        '$number','$birthday','$GENDER','$email','$password','$FILES')";
        if($conn->query($sqlstr))
        {
            echo "data inserted";

        }
        else
        {
            echo "error" .$conn->error;
        }
    }  


    function insertuser($conn,$tablename,$fname,$lname,$phonenumber,$birthday,$GENDER,$email,$password,$FILES)
    {
        if($fname !="" && $lname !="" && $phonenumber !="" && $birthday !="" && $GENDER !="" && $email!="" && $password !="" && $FILES !="")
        {
        $sqlstr="INSERT INTO $tablename(fname,lname,phonenumber,birthday,GENDER,email,password,FILES) values('$fname','$lname','$phonenumber','$birthday','$GENDER','$email','$password','$FILES')";
        if($conn->query($sqlstr))
        {
            echo "data inserted";

        }
        else
        {
            echo "error";
            echo "error" .$conn->error;
        }
    }
    }


    function insertsports($conn,$tablename,$fname,$lname,$phonenumber,$birthday,$email,$SPORTS,$TYPE,$GAME)
    {
        
        $sqlstr="INSERT INTO $tablename(fname,lname,phonenumber,birthday,email,sname,stype,gtype) values('$fname','$lname','$phonenumber','$birthday','$email','$SPORTS','$TYPE','$GAME')";
        if($conn->query($sqlstr))
        {
            echo "data inserted";

        }
        else
        {
            echo "error" .$conn->error;
        }
    }


    function insertapplytournamentd($conn,$tablename,$tname,$email)
    {
        
        $sqlstr="INSERT INTO $tablename(tname,email) values('$tname','$email')";
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
        $re = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        
        return $re;
    }



    function checkLogin($tablename, $email,$password,$conn)
    {
        $re = $conn->query("SELECT * FROM ".$tablename." WHERE email='".$email."' AND password='".$password."'");
        
        return $re;
    }



    function playercheckLogin($tablename, $email,$password,$conn)
    {
        $sqlstr="select * from $tablename where email='$email'";
        return $conn->query($sqlstr);
    }

    function showuser($tablename,$email,$conn)
    {
        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }


    function show($conn,$tablename)
   {
    $sh=$conn->query("SELECT player.fname,player.lname,sports.email,sname,stype,gtype,player.uname,player.Division,player.zila,player.university,player.college,player.number
     FROM sports,player WHERE sports.email = player.email");
    return $sh;
   }

// SELECT player.fname,player.lname,sports.email,sname,stype,uname,Division,zila,university,college,number
//  FROM sports,player WHERE sports.email = player.email;
    function showplayer($tablename,$email,$conn)
    {
        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }
    
    function fetchuser($conn, $tablename, $email)
    {
        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }


    function fetchplayer($conn, $tablename, $email)
    {
        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }


    function fetchuser1($conn, $tablename, $tname)
    {
        $sqlstr="SELECT * FROM $tablename WHERE tname='$tname'";
        return $conn->query($sqlstr);
    }





    function updateuser($conn,$tablename,$fname,$lname,$phonenumber,$birthday,$GENDER,$email,$password,$FILES)
    {
        $sqlstr="UPDATE $tablename SET fname='$fname',lname='$lname',phonenumber='$phonenumber',birthday='$birthday',GENDER='$GENDER',password='$password',FILES='$FILES' where email='$email' ";
        return $conn->query($sqlstr);
    }

    function GetUserByUname($conn,$table, $uname)
    {
   $result = $conn->query("SELECT * FROM  $table WHERE uname='$uname'");
    return $result;
    }




    function updateplayer($conn,$tablename,$fname,$lname,$uname,$nationality,$Division,$Zila,$university,$college,$school,$birthday,$GENDER,$email,$password,$number)
    {
        $sqlstr="UPDATE $tablename SET fname='$fname',lname='$lname',uname='$uname',nationality='$nationality',
        Division='$Division',zila='$Zila',university='$university',college='$college',school='$school',
        birthday='$birthday',GENDER='$GENDER',password='$password',number='$number' where email='$email' ";
        return $conn->query($sqlstr);
    }






    function deleteuser($tablename,$conn,$email)
    {
        $sqlstr="DELETE FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }


    function deleteplayer($tablename,$conn,$email)
    {
        $sqlstr="DELETE FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }


    function searchemail($conn, $tablename, $email)
    {
       $sqlstr="Select email From $tablename WHERE email='$email'";
       $result_email=$conn->query($sqlstr);
       return $result_email;
    }


    function updatepassword($tablename, $conn, $email, $password)
{
    $sqlstr="UPDATE $tablename SET password='$password' WHERE email = '$email'";
    if($conn->query($sqlstr)==TRUE)
    {
        echo "update success";
    }
    else
    {
        echo "cant update";
    }
}












    function closeconn()
    {
        $conn->close();
    }
}
?>