<?php


?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body style"background-color:#7f8c8d">
  
    <div id="main-wrapper">
      <center>
        <h2>Registration Form<h2>
        <img src="img/avatar.png" class="avatar"/>
      </center>  
 
        
  <form class="myform" action="index.php" method="POST">
    <label><b>Username:</b></label> <br>
    <input type="text" class="inputvalues" placeholder="Type your username"/>
    
    <label><b>Password:</b></label> <br>
    <input type="password" class="inputvalues" placeholder="Your password"/>
    
    <label><b>Confirm Password:</b></label> <br>
    <input type="password" class="inputvalues" placeholder="Confirm password"/>
    <input type="submit" id="signup_btn" value="Sign Up"/> 
    <input type="button" id="back_btn" value="Back"/> 
   </form>
    </div>
</body>
</html>
