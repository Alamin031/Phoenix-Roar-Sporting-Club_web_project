<?php

//include('../control/log.php');


?>


<!DOCTYPE html>
<html>
  <head>

  <link rel="stylesheet" type="text/css" href="../CSS/homestyle.css">

  <body>

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


 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../Control/s.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>



<h3>find the first name which one you want delete<h3><br>

Uname : <input type="text" id="uname" onkeyup="showmyuser()"></div>
  <p id="mytext"></p>


    
</form>


</body>
</html>

<?php


?>   
