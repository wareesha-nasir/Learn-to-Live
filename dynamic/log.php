<?php
include_once('conn.php')
?>
<!DOCTYPE html>
<head>
    <title>
        Learn to live
    </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link href="login.php">
    <style>
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        
body{
    padding: 0%;
    margin: 0%;
    font-family: 'Roboto', sans-serif ;
    overflow: hidden;
background-color: whitesmoke;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
}
#login{
    position:absolute;
    top: 50%;
    left: 75%;
    width: 25%;
    transform: translate(-50%,-50%);
    color:rgb(7, 61, 25);
}
h2{
    float: left;
    text-align: center;
    font-size: 40px;
   
}
.textbox{
    font-size: 20px;
    padding:8px 0;
    margin: 8px 0;
    width:100%;
    overflow: hidden;
}
.textbox i{
    text-align: center;
    width:26px;
    
}
.textbox input{
    
    color:rgb(17, 17, 17);
    font-size: 17px;
    width: 150%;
    height: 20%;
}
.containersignin{
    position: absolute;
    left: 65%;
    bottom: 10%;
} 

    </style>
    </head>
    <body>
        <img style="height: 100vh; width: 120vh;" src="./word.png">
        <form action="login.php" method="POST" autocomplete="on">
        <div id="login">
            <h2>LOGIN</h2>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="username"  name="username" value="" required style=" height: 6vh; ; " >
            </div>  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="password" name="password" value="" required style="height: 6vh;">
            </div> 
            <div id="sign"  >
        <input type="submit" name="signin" value="Sign In" style="width: 100%; height: 10vh; background-color:rgb(7, 61,25 ); color: white; cursor: pointer;">
        
     </div>    
        </div></form>
        <div class="containersignin">
            <p>Create an account? <a href="registeration.php" >Sign Up</a>.</p>
          </div>
         
    </body>