<?php

session_start();

if ($_SERVER['REQUEST_METHOD']==="GET") {

    setcookie("logtime","", time() - 3600, "/");
    setcookie("status", "true", time()-3600, "/");

    header("Location: ../view/index.php");
    
    exit();
}

?>