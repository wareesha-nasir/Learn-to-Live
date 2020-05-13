<?php
require_once('conn.php');

session_start();

if(isset($_POST['signin'])){
$username=$_POST['username'];
$password=$_POST['password'];
/*if(empty($_POST['username']) || empty($_POST['password'])){
    echo "<label>all fields are required </label>";
}*/

    $query="select * from users where username='$username' AND password= '$password' ";
    $stmt=$conn->prepare($query);
    
    $stmt->execute(
    array(
        $username=$_POST['username'],
        $password=$_POST['password']
    ));
    $count=$stmt->rowCount();
    if($count>0)
    {
        $_SESSION["username"]=$username;
        echo "<script>window.open('index.php?logged=You have Successfully Logged In!','_self')</script>";

    }
    else{
        echo "<script>alert('User Name or Password is incorrect')</script>";
        header("location:log.php");
    }

}
?>