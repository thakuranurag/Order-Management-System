<?php

$conn = mysqli_connect("localhost", "anuragt0007", "qwerty12345","anuragt");
$db = mysql_select_db("anuragt", $conn);
session_start();

$user_valid=$_SESSION['abcd'];
$sess="select * from log where username='$user_valid'";
$res = mysqli_query($conn , $sess);
$row = mysql_fetch_assoc($sess);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection);
header('Location: login.php');
}
?>