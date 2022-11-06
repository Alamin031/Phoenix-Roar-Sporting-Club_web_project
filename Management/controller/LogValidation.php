<?php

session_start();

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';

$uname=$password=$remember="";

if($_SERVER['REQUEST_METHOD'] === "POST") {

$uname = cleanData($_POST['uname']);
$password = cleanData($_POST['password']);
if( isset($_POST['logon']) ) {$remember = cleanData($_POST['logon']);}

}

if(empty($uname)) {
    $_SESSION['unameErr'] = "[Username cannot be empty]";
}

if(empty($password)) {
    $_SESSION['passwordErr'] = "[Password cannot be empty]";
}

$profileId = loginValidate($uname, $password);

if(empty($uname) || empty($password)) {
    header("Location: ../view/index.php");
    exit();
}

else if($profileId === false) {
    $_SESSION['log_error'] = "There is no such account exist!";
    header("Location: ../view/index.php");
    exit();
}

else {
    $_SESSION['profileId'] = $profileId;

    if( $remember !== "") {
        $name = "logtime";
        $value = "on";
        setcookie($name,$value, time() + 3600, "/");
        $_SESSION['log'] = true;
    }
    
    setcookie("status", "true", time()+3600, "/");
    header("Location: ../view/Managment.php");
    exit();
}

?>