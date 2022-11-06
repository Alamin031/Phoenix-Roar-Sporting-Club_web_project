<?php

session_start();

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';

$newPass=$confirmPass=$oldTakenPass=$oldBoxPass=$profileId="";
$upError = [];
$profileId = $_SESSION['profileId'];
$oldTakenPass = getOldPass($profileId);

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $oldBoxPass = cleanData($_POST['oldp']);
    $newPass = cleanData($_POST['newp']);      
    $confirmPass =  cleanData($_POST['cnewp']);

    $upError = updatePassCheck($newPass, $confirmPass, $oldTakenPass, $oldBoxPass);
if($upError === null) {
    updatePass($profileId, $newPass);
    $_SESSION['setProfile'] = getProfileByID($profileId);
    header("Location: ../view/Profile.php");
    exit();
}

else {
    $_SESSION['updatePassErrors'] = $upError;
             $data = array (
                    'oldp' => $oldBoxPass,
                    'newp' => $newPass,
                    'cnewp' => $confirmPass,
                );
        $_SESSION['updatePassdata'] = $data;
         header("Location: ../view/UpdatePass.php");
         exit();
}

}

?>