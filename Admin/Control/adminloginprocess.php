<!-- $msg=""; -->
<?php
include('../model/db.php');
// $msg="";
session_start();
if(!empty( $_SESSION['adminname'])){
	header("Location:../view/AdminDashboard.php"); 
}
$firstname_error = "";
 $msg="";
 $er=0;
 $err="";
if (isset($_POST['submit'])){
    	// $data = file_get_contents('../data/data.json');
        // $data_array = json_decode($data, true);
		
        // if (empty($_POST["fname"]))
    
        

    
    
        // if (isset($_POST['submit'])) {
        // 	$email=$_POST['adminname'];
        // 	$pass=$_POST['adpass'];
        // 	foreach ($data_array as $key => $value) {
        // 		if(($value['UserName']==$email) && ($value['password']==$pass))
        // 		{
		// 			$firstname_error = $email; //
		// 			$_SESSION['firstname_error']=$firstname_error;//
					
	    // 				 $_SESSION['adminname']=$value['adminname'];
		// 				 $_SESSION['adpass']=$value['adpass'];
	    // 				 setcookie('mycokie', $value['adminname'], time() + (86400 * 5), "/");
	    //            	 header("Location:../view/AdminDashboard.php"); 
        			
        // 		}
		// 		else{
                    
		// 			//$_SESSION['mal']="error message";
		// 			//$msg="UserName or pass is wrong ";
		// 			$firstname_error = " your login system UserName & Password is Wrong";
		// 			$_SESSION['firstname_error']=$firstname_error;
		// 			//	break;
		// 		  header("Location:../view/admin.php"); 
				  
		// 		   //break;
		// 		}
        // 	}
			
        	
        // }
	 
	if(empty($_POST["adminname"]) && empty($_POST["adpass"]))
    {
         $err="enter  valid userName && password";
        //  echo $err;
        //  header("Location:../admin.php");
        header("Location:../view/admin.php"); 
        //  echo $err;
    }
    else
    {
		$email=$_POST['adminname'];
        $pass=$_POST['adpass'];
//$connection = new mydb();
//$conobj=$connection->opencon();

    $mydb = new mydb();
    $conobj=$mydb->opencon();

   $userQuery=$mydb->check($conobj,"adminreg",$email,$pass);

if ($userQuery->num_rows > 0) {
    $_SESSION["adminname"] = $email;
    $_SESSION["password"] = $pass;
    header("Location:../view/AdminDashboard.php"); 

}

else{
   
    // $err = "Username or Password is invalid";
                // $_SESSION['mal']="error message";
					// $msg="UserName or pass is wrong ";
                    if($_SESSION["adminname"]==null ){
					$firstname_error = " your login system UserName or password is invalid";
					$_SESSION['firstname_error']=$firstname_error;
					//	break;
                    // echo"error";
				  header("Location:../view/admin.php"); 
                //   echo"error";
                    }
                    else if($_SESSION["password"]==null){

                        $lastname_error = " your login system UserName or password is invalid";
					$_SESSION['lastname_error']=$lastname_error;
					//	break;
                    // echo"error";
				  header("Location:../view/admin.php"); 
                    }

                    else if($_SESSION["password"]==null && $_SESSION["adminname"]==null ){

                        $lastname_error = " your login system UserName or password is invalid";
					$_SESSION['lastname_error']=$lastname_error;
					//	break;
                    // echo"error";
				  header("Location:../view/admin.php"); 
                    }	  
				   //break;
}
        $connection->conClose($conobj);
}
		
}

?>