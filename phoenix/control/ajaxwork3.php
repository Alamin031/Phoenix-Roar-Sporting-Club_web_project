<?php
include('../model/db.php');

//$user = $_POST['uname'];



  $error="";

  
$connection = new mydb();
$conobj=$connection->opencon();

$MyQuery=$connection->GetUserByUname($conobj,"player",$_POST['uname'] );
echo "<table border='2'>

<tr>

<th>Fast name</th>

<th>Last name</th>

<th>User name</th>

<th>Nationality</th>
<th>Division</th>
<th>Zila</th>
<th>University</th>
<th>Collage</th>
<th>School</th>
<th>Gender</th>
<th>Email</th>

</tr>";


if ($MyQuery->num_rows > 0) {
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr >";
      echo "<td >" . $row['fname'] . "</td>";
      echo "<td>" . $row['lname'] . "</td>";
      echo "<td>" . $row['uname'] . "</td>";
      echo "<td>" . $row['nationality'] . "</td>";
      echo "<td>" . $row['Division'] . "</td>";
      echo "<td>" . $row['zila'] . "</td>";
      echo "<td>" . $row['university'] . "</td>";
      echo "<td>" . $row['college'] . "</td>";
      echo "<td>" . $row['school'] . "</td>";
      // echo "<td>" . $row['number'] . "</td>";
      // echo "<td>" . $row['birthday'] . "</td>";
      echo "<td>" . $row['GENDER'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      
      echo "</tr>";
      echo "</table>";

    }
  } 
  else
  {
    echo "0 results";
  }





?>