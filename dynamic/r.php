<?php
require('conn.php');
?>
<!DOCTYPE html>
<head>
    <title>
        Register Your Self
    </title>
    <link rel="stylesheet" href="form.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="reg.php">
</head>
<body style="background-color: whitesmoke">
  <img style="height: 100vh; width: 120vh;" src="./word.png">
<div class="container" >
<form action="reg.php" method="post" autocomplete="off">
  
    <h1 style="color: rgb(7, 61,25 );">Register Your Self</h1>
    <hr>
    <label for="name"><b>Name</b></label>
    <div id="name"><input type="text" placeholder="username" name="username" required style="height: 6vh; width: 70%;"></div>

    <label for="email"><b>Email</b></label>
    <div id="name"><input type="text" placeholder="Enter Email" name="email" required style="height: 6vh; width: 70%;"></div>

    <label for="psw"><b>Password</b></label>
    <div id="name"><input type="password" placeholder="Enter Password" name="password" required style="height: 6vh; width: 70%;"></div>

    <label for="cpsw"><b>Confirm Password</b></label>
    <div id="name"><input type="password" placeholder="Repeat Password" name="confirmpassword" required style="height: 6vh; width: 70%;"></div>

<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="submit" style="border-radius: 20%; width: 7%; background-color:rgb(7, 61,25 ); color: white; cursor: pointer;">Register</button>
  <div class="containersignin">
    <p>Already have an account? <a href="log.php" >Sign in</a>.</p>
  </div>
</form><br><br>
</div>
</body>
</html>
