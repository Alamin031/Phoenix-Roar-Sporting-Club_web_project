<html>
  <body>
  <link rel="stylesheet"type="text/css" href="../CSS/home.css">

  <h1>Player Info-Update</h1>
  <div  style=text-align:center><h2>Phoenix Roar Sporting Club</h2></div>
  <style>
table

{

border-style:solid;

border-width:2px;

border-color:pink;
margin-left:auto ;
margin-right: auto;

}
table, td, th {  
  border: 2px solid #ddd;
  text-align: center;
}

table {
  border-collapse: collapse;
  border-color:pink;
  margin-left:auto ;
  margin-right: auto;
  width: 70%;
}

th, td {
  padding: 10px;
}
</style>
</body>
</html>


<?php
include('../model/db.php');


//$user = $_POST['uname'];


 
   date_default_timezone_set('Asia/Dhaka');
   $date = date('d-m-y h:i');
   echo "<div style=text-align:right>$date</div>";
   echo"<br></br>";

	

echo"<br></br>";

$connection = new mydb();
$conobj=$connection->opencon();
// echo"<br></br>";
// echo"<br></br>";
echo"<hr></hr>";
echo"<br></br>";
// echo"<br></br>";
echo"<h3><div style=text-aign=center> All Player List :</h3>";
echo"<br></br>";

$MyQuery=$connection-> show($conobj,"player" );
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
 
  
    // echo "<table><tr><th>fname</th><th>lname</th><th>uname</th><th>naitonality</th>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      // echo "<tr>
      
      // echo"<td>".$row["lname"]."</td><td>";
      // echo"<td>".$row["uname"]."</td><td>";
      // echo"<td>".$row["nationality"]."</td><td>";
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
      
    }
    
    echo "</table>";
    
  } else {
    echo "0 results";
  }


?>