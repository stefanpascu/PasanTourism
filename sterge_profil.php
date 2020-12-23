<?php

session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'ptdb');  
$email = $_SESSION['email'];

$sql = "DELETE FROM user WHERE EMAIL='$email'";
if(mysqli_query($con,$sql)) {
    header("refresh:0; url=index.php");
} else
    echo "Not Deleted";
?>

