<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
    header("Location:../view/admin.php"); // Redirecting To Home Page
}
?>