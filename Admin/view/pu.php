
<?php  

include ("../model/dbconnect.php");
session_start();
// if(!empty($_SESSION["email"]))

// {
//     header("Location: ../view/admin.php");

// }

	

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <h1>Player Update</h1>
    <!-- <hr></hr>
    <br></br> -->
    <link rel="stylesheet"type="text/css" href="../CSS/up.css">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <b>
<?php
 
   date_default_timezone_set('Asia/Dhaka');
   $date = date('d-m-y h:i');
   echo "<div style=text-align:right>$date</div>";
   echo"<br></br>";

   date_default_timezone_set('Asia/Dhaka');
//    echo"<hr></hr>";
// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
$msg="";
if ( $Hour >= 5 && $Hour <= 11 ) {
    $msg="Good Moring";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
	$msg="Good AfterNoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    $msg="Good Evening";
}
	if(!empty($_SESSION['adminname']))
	{
	 echo$msg ." "."!! : ". $_SESSION['adminname'];
	}
	 echo"<br></br>";
     echo"<hr></hr>";
     echo"<br></br>";
	?>
</b>






 </head>
<body>
    
<?php $conn=connect();
    $sql =$conn->prepare("SELECT * FROM player");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="apartment-details">
	<thead>
		<tr>
            <th>Fname</th>
			<th>Lname</th>
			<th>Uname</th>
			<th>Nationality</th>
			<th>Divison</th>
            <th>Zila</th>
			<th>University</th>
            <th>College</th>
            <th>School</th>
            <th>Number</th>
            <th>Email</th>
            

		</tr>
	</thead>
	<tbody>
  <!-- <form action="../control/gamecontrol.php" onsubmit="myFunction()"> -->
		<?php    foreach($result as $value):?>
			<tr>
            <td><?php echo $value['fname'] ?></td>
            <td><?php echo $value['lname'] ?></td>
				
			<td><?php echo $value['uname']?></td>
			<td><?php echo $value['nationality'] ?></td>
            <td><?php echo $value["Division"] ?></td>
            <td><?php echo $value["zila"] ?></td>
            <td><?php echo $value["university"] ?></td>
            <td><?php echo $value["college"]?></td>
            <td><?php echo $value["school"]?></td>
            <td><?php echo $value["number"]?></td>
            <td><?php echo $value["email"]?></td>
        
            <td><a href="../view/playerupdate22.php?email=<?php echo $value['email'] ?>" 
            onclick="return confirm('Are you sure want to Apply this ?')">Apply</a></td>
            </tr> 

			<?php endforeach ?>
      </form>
	
		

	</tbody>
	
</table>

</body>
</html>