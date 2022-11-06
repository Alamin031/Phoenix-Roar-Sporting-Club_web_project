<?php

session_start();

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';


$firstname=$lastname=$gender=$dob=$address=$phone=$email=$uname=$password=$cpassword="";
$validated = false;

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $firstname = cleanData($_POST['firstname']);
    $lastname = cleanData($_POST['lastname']);
    $gender = cleanData($_POST['gender']);
    $dob= cleanData($_POST['dob']);                
    $address = cleanData($_POST['address']);        
    $email = cleanData($_POST['email']);
    $uname= cleanData($_POST['uname']);              
    $password= cleanData($_POST['password']);
    $cpassword= cleanData($_POST['cpassword']);   
}

$validated = authorizedValidation($firstname, $lastname, $gender, $dob, $address, $email, $uname, $password, $cpassword);
var_dump($validated);

if($validated === true) {
    $data = array (
        'firstname' => $firstname,
        'lastname' => $lastname,
        'gender' => $gender,
        'dob' => $dob,
        'address' => $address,
        'email' => $email,
        'uname' => $uname,
        'password' => $password
    );
    

    setUser($data);
    header("Location: ../view/index.php");
    exit();

}

 else {
        var_dump("Unauthorized Access");
    }

    

?>

