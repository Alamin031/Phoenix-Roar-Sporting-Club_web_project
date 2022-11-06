<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="secf";

    function execute($querry)   //insert,update,delete
    {
        global $db_server,$db_user,$db_pass,$db_name;
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        if($conn)
        {
            if(mysqli_query($conn,$querry))
            {
                return true;
            }
            else{
                return mysqli_errno($conn);
            }
        }
    }

    function get($querry)       //Fetch data
    {
        global $db_server,$db_user,$db_pass,$db_name;
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        if($conn)
        {
            $data=[];
            $result=mysqli_query($conn,$querry);
            while($row=mysqli_fetch_assoc($result))
            {
                $data[]=$row;
            }
            return $data;
        }
    }
?>