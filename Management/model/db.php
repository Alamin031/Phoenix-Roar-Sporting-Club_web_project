
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

    

    function inserttournamentd($conn,$tablename,$tname,$ttype,$sname,$faname,$tvanue,$tdate,$tstime,$tetime,$tstatus)
    {
        
        $sqlstr="INSERT INTO $tablename(tname,ttype,sname,faname,tvanue,tdate,tstime,tetime,tstatus) 
        values('$tname','$ttype','$sname','$faname','$tvanue','$tdate','$tstime','$tetime','$tstatus')";

        
        if($conn->query($sqlstr))
        {
            echo "data inserted";

        }
        else
        {
            echo "error" .$conn->error;
        }
    }

    function show($conn,$table)
{
    $sh=$conn->query("SELECT * FROM ".$table."");
    return $sh;
}










    function closeconn()
    {
        $conn->close();
    }
}
?>