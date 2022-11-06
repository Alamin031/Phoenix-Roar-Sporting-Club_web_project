<?php
include("../model/db.php");


$email=$_GET["search"];
$mydb= new mydb();
$conobj =$mydb->openCon();  
$results=$mydb->showplayer("player",$email,$conobj);
if($results->num_rows > 0)
{

    echo "<table>";
    while($myrows= $results ->fetch_assoc())
    {  
        // echo $myrows["fname"];
        // echo $myrows["lname"];

        echo "<tr>";
        echo "<td>".$myrows["fname"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["lname"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["uname"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["birthday"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["GENDER"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["email"]."</td>";
        echo "</tr>";
        echo "<td>".$myrows["FILES"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "user does not exit";
}
?>