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


    function insertsports($conn,$tablename,$fname,$lname,$phonenumber,$birthday,$email,$SPORTS,$TYPE,$GAME)
    {
        
        $sqlstr="INSERT INTO $tablename(fname,lname,phonenumber,birthday,email) values('$fname','$lname','$phonenumber','$birthday','$email','$SPORTS','$TYPE','GAME')";
        if($conn->query($sqlstr))
        {
            echo "data inserted";

        }
        else
        {
            echo "error" .$conn->error;
        }
    }


    function closeconn()
    {
        $conn->close();
    }
}
?>