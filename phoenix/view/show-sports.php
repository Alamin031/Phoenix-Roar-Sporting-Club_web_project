<?php
session_start();

if(empty($_SESSION["email"]))

{
    header("Location: ../view/PlayerLogin.php");

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Show Sports</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sports.css">   
 </head>
 <body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#1").click(function(){
    $("#c1").toggle(2000);
  });
});
</script>



  <div class="header" id="c1">
        <h1>Phoenix Roar Sporting  Club </h1>
        <h3> We create Future Player </h3>
    </div>

    <div class="button3">
        <input type="button" id="1" name="show" value="show">
          
 </div>


<?php
include('../model/db.php');




   date_default_timezone_set('Asia/Dhaka');
   $date = date('d-m-y h:i');
   echo "<div style=text-align:right>$date</div>";
  
   echo"<br></br>";
   


	

echo"<br></br>";

$connection = new mydb();
$conobj=$connection->opencon();

echo"<br></br>";
echo"<h3><div style=text-aign=center> Show Your Sports :</h3>";
echo"<br></br>";

$MyQuery=$connection-> show($conobj,"sports", "player");
echo "<table border='2' >

<tr>

<th>Fast name</th>
<th>Last name</th>
<th>Number</th>
<th>Email</th>
<th>Sports Name</th>
<th>Sports Type</th>
<th>Game Type</th>
</tr>";

if ($MyQuery->num_rows > 0) {
  
    while($row = $MyQuery->fetch_assoc()) {
     
      echo "<tr>";

      echo "<td>" . $row['fname'] . "</td>";
    
      echo "<td>" . $row['lname'] . "</td>";
    
      echo "<td>" . $row['number'] . "</td>";
    
      // echo "<td>" . $row['birthday'] . "</td>";
      
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
      echo "<td>" . $row['stype'] . "</td>";
      echo "<td>" . $row['gtype'] . "</td>";
      
      echo "</tr>";
      
    }
    
    echo "</table>";
    
  } else {
    echo "0 results";
  }
 

?>
</form>
</body>
</html>