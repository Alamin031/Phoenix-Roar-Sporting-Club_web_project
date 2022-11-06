<?php

require("../controller/header.php");

include("../controller/TournamentList.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Details</title>
    <link rel="stylesheet" href="../CSS/color.css">
</head>
<body>
<h1>Tournament Details</h1>

<table id="TournamentDetails">
  <tr>
    <th>Tournament Name</th>
    <th>Tournament Type</th>
    <th>Sports Name</th>
    <th>FACLITATOR NAME</th>
		<th>TOURNAMENT VENUE</th>
    <th>TOURNAMENT DATE</th>
		<th>START TIME</th>
    <th>END TIME</th>
    <th>TOURNAMENT STATUS</th>
  </tr>
  <!-- <?php
  foreach($results as $r)
  {
    echo "<tr>";
    echo "<td>",$r['tname'],"</td>";
    echo "<td>",$r['ttype'],"</td>";
    echo "<td>",$r['sname'],"</td>";
    echo "<td>",$r['faname'],"</td>";
    echo "<td>",$r['tvanue'],"</td>";
    echo "<td>",$r['tdate'],"</td>";
    echo "<td>",$r['tstime'],"</td>";
    echo "<td>",$r['tetime'],"</td>";
    echo "<td>",$r['tstatus'],"</td>";
    echo "</tr>";
  }
  ?> -->
  <?php    foreach($results as $r):?>
			<tr>
            <td><?php echo $r['tname'] ?></td>
            <td><?php echo $r['ttype'] ?></td>
				
			<td><?php echo $r['sname']?></td>
			<td><?php echo $r['faname'] ?></td>
            <td><?php echo $r["tvanue"] ?></td>
            <td><?php echo $r["tdate"] ?></td>
            <td><?php echo $r["tstime"] ?></td>
            <td><?php echo $r["tetime"]?></td>
            <td><?php echo $r["tstatus"]?></td>
            <td><a href="../view/applygame.php?tname=<?php echo $r['tname'] ?>" 
            onclick="return confirm('Are you sure want to Delete this ?')">DELETE</a></td>
            </tr>

			<?php endforeach ?>
    <a class="linktag" href="Managment.php">Go Back</a>
</body>
</html>


