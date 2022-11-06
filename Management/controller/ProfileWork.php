<?php
session_start();
require_once '../model/DataAccess.php';

$fname=$lname=$gender=$dob=$address=$email=$profileId="";
$profileId = $_SESSION['profileId'];
$_SESSION['setProfile'] = getProfileByID($profileId);
header("Location: ../view/Profile.php");
exit();
?>