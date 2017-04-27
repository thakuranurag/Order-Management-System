<?php

$con = mysqli_connect("localhost","anuragt0007","qwerty12345","anuragt");
$use = $_REQUEST['user'];
$pas = $_REQUEST['pass'];



if(isset($_POST['submit']))
{
if (empty ($use) || empty ($_REQUEST['pass']))
{
    header('location:http://localhost/MyFirstProject/login.php');
}
else
{
 
//$query=$conn->query("SELECT * FROM log WHERE username= '$use' AND password='$pas'");
$sql = "SELECT * FROM log WHERE username= '$use' AND password='$pas'";
$res = mysqli_query($con,$sql);
			if(mysqli_num_rows($res)==1){  
			
			session_start();
			
				$_SESSION['abcd']= $use;
			header('location:http://localhost/MyFirstProject/first.php');
			}

			else{				
				echo 'invalid username or password';
				}
}
}
?>