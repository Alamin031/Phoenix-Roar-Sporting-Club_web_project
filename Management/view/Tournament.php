<?php
require("../controller/header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Create</title>
    <script src="js/Tournament.js"></script>
    <link rel="stylesheet" href="css/OverAll.css">
</head>

<body>
    <h1 class="titlecontent">Tournament Create</h1>

    <form id="tform" name="tform" action="../controller/new.php" method="post" onsubmit="return isValid(this)">

        <label for="tname">Tournament Name:</label>
        <input type="text" name="tname" id="tname">
        <span class="error" id="tnameErr"> </span>

        <label>Tournament Type:</label>
        <input type="radio" name="ttype" value="Single" id="ttype">
        <label for="ttype">Single</label>
        <input type="radio" name="ttype" value="Teams" id="ttype">
        <label for="Teams">Teams</label>
        <span class="error" id="typeErr"></span>
        <br><br>

        <label for="Sports">Sports Name:</label>
        <select name="sname" id="sname">
            <option value="Choose"> </option>
            <option value="Badminton">Badminton</option>
            <option value="Football">Football</option>
            <option value="Cricket">Cricket</option>
            <option value="Basketball">BasketBall</option>
            <option value="Tennis">Tennis</option>
            <option value="TableTennis">Table Tennis</option>
        </select>
        <span class="error" id="snameErr"></span>

        <label for="faname">Faclitator Name:</label> 
        <input type="text" name="faname" id="faname">
        <span class="error" id="fanameerr"></span>

        <label for="tvanue">Tournament Place:</label><br>
        <textarea name="tvanue" id="tvanue" rows="1" cols="40"></textarea>
        <span class="error" id="tvanueerr"></span>

        <label for="date">Date:</label>
        <input type="date" name="tdate" id="tdate">
        <span class="error" id="tdateerr"></span>

        <label for="tstime">Tournament Start Time:</label>
        <input type="text" name="tstime" id="tstime">
        <span class="error" id="tstimeerr"></span>

        <label for="tetime">Tournament End Time:</label>
        <input type="text" name="tetime" id="tetime">
        <span class="error" id="tetimeerr"></span>

        <label for="tstatus">Tournament Status:</label>
        <input type="text" name="tstatus" id="tstatus">
        <span class="error" id="tstatuserr"></span>



      


        <input type="submit" name="submit" value="Submit">

    </form>

    <a class="linktag" href="Managment.php">Go Back</a>
</body>

</html>