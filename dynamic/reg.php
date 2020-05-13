<?php
require_once('conn.php');
//session_start();   
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cp=$_POST['confirmpassword'];
$insert_post="insert into users(username, email, password) 
values(?,?,?)";
    $stmtinsert= $conn->prepare($insert_post);
    if($password==$cp)
    //if($result)
    {
        $result=$stmtinsert->execute([$username, $email, $password]);
        $_SESSION['username']=$username;
header('location:log.php');
    }
    
else{
    echo "<script>alert('password do not match')</script>";

}

}

?>



