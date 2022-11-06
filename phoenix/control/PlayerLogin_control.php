
<?php
include("../model/db.php");
session_start();
if(!empty( $_SESSION['email']))
{
    header("Location: ../view/PlayerDashbord1.php");
}
$email_error = "";
$password_error = "";
$err="";
if (isset($_POST['login']))
{ 
	if(empty($_POST["email"]) && empty($_POST["password"]))
    {
         $err="enter  valid userName && password";
         header("Location: ../view/PlayerLogin.php"); 
    }
    else
    {
		$email=$_POST['email'];
        $pass=$_POST['password'];

        $mydb= new mydb();
        $conobj =$mydb->openCon(); 
        $results =$mydb->checkLogin("player",$_POST["email"], $_POST["password"],$conobj);
        if($results->num_rows >0)
        {
            $_SESSION["email"]=$email;
            $_SESSION["password"]=$pass;
            header("Location: ../view/PlayerDashbord1.php");

        }



else
{
                   if($_SESSION["email"]==null )
                    {
					$email_error = " your login system email  is invalid";
					$_SESSION['email_error']=$email_error;
                    header("Location: ../view/PlayerLogin.php"); 
                    }
                    else if($_SESSION["password"]==null)
                    {

                        $password_error = " your login system password is invalid";
					    $_SESSION['password_error']=$password_error;
                        header("Location: ../view/PlayerLogin.php"); 
                    }

                    else if($_SESSION["password"]==null && $_SESSION["email"]==null )
                    {

                        $password_error = " your login system email or password is invalid";
					    $_SESSION['password_error']=$password_error;
                        header("Location: ../view/PlayerLogin.php"); 
                    }	  
}
        $connection->conClose($conobj);
}
}

?>

