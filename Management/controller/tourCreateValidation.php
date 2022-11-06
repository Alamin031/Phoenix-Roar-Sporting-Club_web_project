<?php
  
  session_start();

require_once 'ValidUtility.php';
require_once '../model/DataAccess.php';
$tname=$ttype=$sname=$faname=$tvanue=$tdate=$tstime=$tetime=$tstatus= "";
 
if($_SERVER['REQUEST_METHOD'] === "POST"){

    $tname = cleanData($_POST['tname']);
    $ttype = cleanData($_POST['ttype']);
     $sname = cleanData($_POST['sname']);
     $faname= cleanData($_POST['faname']);                
     $tvanue = cleanData($_POST['tvanue']);        
     $tdate= cleanData($_POST['tdate']);
     $tstime= cleanData($_POST['tstime']);
     $tetime= cleanData($_POST['tetime']);
     $tstatus= cleanData($_POST['tstatus']);

      
 }



//  var_dump($tname, $ttype, $sname);

 $validated = authorizedValidationT( $tname, $ttype, $sname, $faname, $tvanue, $tdate, $tstime, $tetime, $tstatus);

// var_dump($validated);

if($validated === true) {
    $data = array (
        'tname' =>  $tname,
        'ttype' => $ttype,
        'sname' => $sname,
        'faname' => $faname,
        'tvanue' => $tvanue,
        'tdate' => $tdate,
        'tstime' => $tstime,
        'tetime' => $tetime,
        'tstatus' => $tstatus,

        
    );

    // var_dump($data);

    setTour($data);
    header("Location: ../view/TournamentDetails.php");
    exit();

}
else {
    var_dump("Unauthorized Access");
}



?>
