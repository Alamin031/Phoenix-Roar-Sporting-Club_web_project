<?php
include('../model/db.php');

//$user = $_POST['uname'];



  $error="";

if (isset($_POST['delete'])) {


$connection = new mydb();
$conobj=$connection->opencon();
$nid=$_POST['nid'];

$userQuery=$connection->del($conobj,"player",$nid);
$error="bh";

if ($conobj->query($userQuery) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  


//$connection->CloseCon($conobj);


}
else
{
  
$connection = new mydb();
$conobj=$connection->opencon();

$MyQuery=$connection->GetUserByUname($conobj,"player",$_POST['uname'] );
echo "<table border='2'>

<tr>

<th>Fname</th>

<th>Lname</th>

<th>Uname</th>

<th>Nationality</th>
<th>Division</th>
<th>Zila</th>
<th>University</th>
<th>Collage</th>
<th>School</th>
<th>Number</th>
<th>Birthday</th>
<th>Gender</th>
<th>Email</th>

</tr>";


if ($MyQuery->num_rows > 0) {
    // echo "<table><tr><th>fname</th><th>lname</th><th>mail</th><th>companyname</th><th>nid</th><th>posi</th></tr>";
    // echo "<table><tr><th>fname</th><th>lname</th><th>nationality</th><th>Division</th><th>Zila</th><th>University</th><th>college</th><th>school</th><th>number</th><th>Birthday</th><th>Gender</th><th>Relationship</th><th>email</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      // echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["nationality"]."</td><td>".$row["Division"]."</td><td>".$row["zila"]."</td><td>".$row["university"]."</td></tr>".$row["college"]."</td></tr>".$row["school"]."</td></tr>".$row["number"]."</td></tr>".$row["birthday"]."</td></tr>".$row["GENDER"]."</td></tr>".$row["Relationship"]."</td></tr>".$row["email"]."</td></tr>";
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
      echo "<td>" . $row['number'] . "</td>";
      echo "<td>" . $row['birthday'] . "</td>";
      echo "<td>" . $row['GENDER'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      
      echo "</tr>";
      echo "</table>";

    }
    // echo "</table>";
  } else {
    echo "0 results";
  }

}



?>