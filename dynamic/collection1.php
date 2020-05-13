<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<head>
    <title>
        Get to Learn
</title>
    <link rel="stylesheet" href="./style.css">
    <style>
#back{
    max-width: 100%;
  
}
.search{
    margin-top: -19%;
    margin-left: 40%;
    
}

    </style>
</head>
<body>
    <nav>
        <div id="header">
            <h1 style="font-size: 50px;">LEARN TO LIVE</h1><br>
            <h4>Get your desired content from here .....</h4>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
    <div id="back">
        <img style="margin-top:-10% ; width: 100%; height: 50rem; "   src="./back.jpg">
    </div>
    <form class="search" method="POST" autocomplete="on">
        <input style="width: 30rem; height: 7vh; border-radius: 25px; outline: none;" type="text" placeholder="search here..." name="search" value="">
        <button type="submit" name="find"  style="width: 5rem; height: 7vh; border-radius: 20px; background-color: rgb(96, 110, 101); border: transparent; color: white; outline: none; cursor:pointer;" >search</button>
    </form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body></html>
<?php
if(isset($_POST["find"]))
    {
        header('Location:search.php');
    }
    ?>
