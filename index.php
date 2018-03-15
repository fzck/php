<?php


?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body style"background-color:#7f8c8d">
  
    <div id="main-wrapper">
      <center>
        <h2>Login Form<h2>
        <img src="img/avatar.png" class="avatar"/>
      </center>  
 
        
  <form class="myform" action="index.php" method="POST">
    <label><b>Username:</b></label> <br>
    <input type="text" class="inputvalues" placeholder="Type your username"/>
    
    <label><b>Password:</b></label> <br>
    <input type="password" class="inputvalues" placeholder="Type your password"/>
    <input type="submit" id="login_btn" value="Login"/> 
    <input type="button" id="register_btn" value="Login"/> 
   </form>
    </div>
</body>
</html>
