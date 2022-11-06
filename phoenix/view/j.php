<?php
//include("../control/process.php");
setcookie("mycokie","hello")
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style6.css">  
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
 </head>


<body>
    <nav id="nav">
        <div id="user">
            
            <div id="username">
                <p>Md Al Amin CHOWDHURY</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="#">
                    <div id="icon"><i class="bi bi-house"></i></div>
                    <div id="name"><p>Profile</p></div>
                </a>
            </li>



            <li>
                <a href="#">
                    <div id="icon"><i class="bi bi-chat-left-dots"></i></div>
                    <div id="name"><p>Sports</p>
                
                </div>
                </a>
            </li>



            <li>
                <a href="#">
                    <div id="icon"><i class="bi bi-people"></i></div>
                    <div id="name"><p>Tournament</p></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div id="icon"><i class="bi bi-folder"></i></div>
                    <div id="name"><p>Login</p></div>
                </a>
            </li>
           
            <li>
                <a href="#">
                    <div id="icon"><i class="bi bi-question-circle"></i></div>
                    <div id="name"><p>help</p></div>
                </a>
            </li>
            
        </ul>
        <div onclick="hideFunc()" class="btn">
            <i id="btnIcon"  class="bi bi-chevron-compact-left"></i>
        </div>
    </nav>
    
    <script src="ja.js"></script>
</body>
</html>