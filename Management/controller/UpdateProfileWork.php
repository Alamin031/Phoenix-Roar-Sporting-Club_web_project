<?php

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';

session_start();
$fname=$lname=$gender=$dob=$address=$email="";
$profileId="";

if(!isset($_SESSION['updateProData'])) {
    $profileId = $_SESSION['profileId'];
    $_SESSION['updateProData'] = getProfileByID($profileId);
    header("Location: ../view/UpdatePro.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === "POST") {

            $fname = cleanData($_POST['firstname']);
            $lname = cleanData($_POST['lastname']);
            $gender = cleanData($_POST['gender']);
            $dob= cleanData($_POST['dob']);                 
            $address = cleanData($_POST['address']);    
            $email = cleanData($_POST['email']);

            $upErrors = checkUpdateErrors($fname, $lname, $gender, $dob, $address, $email);

            if($upErrors) {
                
                $profileId = $_SESSION['profileId'];
                updateProfile($profileId, $fname, $lname, $gender, $dob, $address, $email);
                $_SESSION['setProfile'] = getProfileByID($profileId);
                unset($_SESSION['updateProData']);
                echo "Record Updated Sucessfully";

            }
            
            else {
                
                var_dump("Unauthorized Access!");
            }
}


    


?>