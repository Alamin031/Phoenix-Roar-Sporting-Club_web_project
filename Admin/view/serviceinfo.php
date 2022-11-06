<html>
  <body>
  <link rel="stylesheet"type="text/css" href="../CSS/playerup.css">

  <h1>Player Update</h1>
  <div  style=text-align:center><h2>Phoenix Roar Sporting Club</h2></div>
  <!-- <style src="../CSS/playerup.css"></style> -->
  <style>
 table, td, th {  
    border: 2px solid #ddd;
    text-align: center;
  }
  
  table {
    border-collapse: collapse;
    border-color:pink;
    margin-left:right ;
    margin-right: right;
    width: 60%;
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

$MyQuery=$connection-> show($conobj,"service" );
echo "<table border='2'>

<tr>

<th>Id</th>

<th>FirstName</th>

<th>Lastname</th>

<th>Age</th>
<th>UserName</th>
<th>Password</th>
<th>Confrim Password</th>
<th>Number</th>
<th>Email</th>
<th>Gender</th>
<th>DateOfBirth</th>
<th>MaritalStatus</th>
<th>BloodGroup</th>


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

      echo "<td >" . $row['Id'] . "</td>";
    
      echo "<td>" . $row['Firstname'] . "</td>";
    
      echo "<td>" . $row['Lastname'] . "</td>";
    
      echo "<td>" . $row['Age'] . "</td>";
      echo "<td>" . $row['Adminusername'] . "</td>";
      echo "<td>" . $row['password'] . "</td>";
      echo "<td>" . $row['confrimpassword'] . "</td>";
      echo "<td>" . $row['Number'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['Gender'] . "</td>";
      echo "<td>" . $row['Dateofbirth'] . "</td>";
      echo "<td>" . $row['maritalstatus'] . "</td>";
      echo "<td>" . $row['Bloodgroup'] . "</td>";
    //   echo "<td>" . $row['email'] . "</td>";
      
      echo "</tr>";
      
    }
    
    echo "</table>";
    
  } else {
    echo "0 results";
  }


?>