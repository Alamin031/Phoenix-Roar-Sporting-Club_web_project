<?php

function connect(){
    $conn = new mysqli("localhost","root","","secf");
if($conn->connect_errno){
    die("Failed To Connect");
   
}
return $conn;

}




?>