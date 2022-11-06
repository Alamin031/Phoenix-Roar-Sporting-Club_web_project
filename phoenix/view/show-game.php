
<?php  

include "../model/dbconnect.php";
session_start();
if(empty($_SESSION["email"]))

{
    header("Location:../view/PlayerLogin.php");

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style3.css">  
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 </head>
<body>
    
<?php $conn=connect();
    $sql =$conn->prepare("SELECT * FROM tournamentd");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="apartment-details">
	<thead>
		<tr>
            <th>TOURNAMENT NAME</th>
			<th>TOURNAMENT TYPE</th>
			<th>SPORTS NAME</th>
			<th>FACLITATOR NAME</th>
			<th>TOURNAMENT VENUE</th>
            <th>TOURNAMENT DATE</th>
			<th>START TIME</th>
            <th>END TIME</th>
            <th>TOURNAMENT STATUS</th>
            

		</tr>
	</thead>
	<tbody>
  <!-- <form action="../control/gamecontrol.php" onsubmit="myFunction()"> -->
		<?php    foreach($result as $value):?>
			<tr>
            <td><?php echo $value['tname'] ?></td>
            <td><?php echo $value['ttype'] ?></td>
				
			<td><?php echo $value['sname']?></td>
			<td><?php echo $value['faname'] ?></td>
            <td><?php echo $value["tvanue"] ?></td>
            <td><?php echo $value["tdate"] ?></td>
            <td><?php echo $value["tstime"] ?></td>
            <td><?php echo $value["tetime"]?></td>
            <td><?php echo $value["tstatus"]?></td>
            <td><a href="../view/applygame.php?tname=<?php echo $value['tname'] ?>" 
            onclick="return confirm('Are you sure want to Apply this ?')">Apply</a></td>
            </tr> 

			<?php endforeach ?>
      </form>
	
		

	</tbody>
	
</table>

</body>
</html>