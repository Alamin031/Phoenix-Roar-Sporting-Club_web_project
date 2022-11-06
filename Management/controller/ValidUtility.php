<?php

function cleanData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function authorizedValidation($firstname, $lastname, $gender, $dob, $address, $email, $uname, $password, $cpassword) {


    if(!isset($firstname) or !isset($lastname) or !isset($gender) or !isset($dob) or 
                !isset($address) or !isset($email) or !isset($uname) or !isset($password) or !isset($cpassword)){
        return false;
    }
    return true;
}

function authorizedValidationT($tname,  $ttype, $sname,   $tdate, $ttime, $tplace) {


    if(!isset($tname) or !isset($ttype) or !isset( $sname) or !isset($tdate) or 
                !isset($ttime) or !isset($tplace)){
        return false;
    }
    return true;
}


function checkUpdateErrors ($fname, $lname, $gender, $dob, $address, $email) {


    if(!isset($fname) or !isset($lname) or !isset($gender) or !isset($dob) or 
                !isset($address) or !isset($email)){
        return false;
        }
    return true;
}

function updatePassCheck ($newPass, $confirmPass, $oldTakenPass, $oldBoxPass) {

    global $upErrors;

    if(empty($oldBoxPass)){
        $upErrors['oldPassErr'] = "[This field cannot be empty]";
    }
    else if(($oldBoxPass !== $oldTakenPass)){
        $upErrors['oldPassErr'] = "[This is not the old password]";
    }
    if(empty($newPass)){
        $upErrors['newPassErr'] = "[This field cannot be empty]";
    }
    if(empty($confirmPass)){
        $upErrors['confirmPassErr'] = "[This field cannot be empty]";
    }
    else if(($newPass !== $confirmPass)){
        $upErrors['confirmPassErr'] = "[Password was not confirmed]";
    }
    
    return $GLOBALS['upErrors'];
}

?>



    
    
  
    
    
    
    
    
    
