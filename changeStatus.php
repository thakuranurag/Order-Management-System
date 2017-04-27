

<?php

$conn = mysqli_connect("localhost","anuragt0007","qwerty12345","anuragt");
error_reporting(E_ALL ^ E_NOTICE);

if(isset($_POST['confirmed']))
{
$order_id= $_POST["order_id"];
$sql="UPDATE vegknock_new_order SET status='Confirmed' WHERE order_id= $order_id ";

if ($conn->query($sql) === TRUE) {
$seconds=5;
echo "<script>alert('Confirmed')</script>";
sleep ( $seconds );
header('location:http://localhost/MyFirstProject/first.php');

$to = 'anuragt0007@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'Your order is confirmed and will be delivered shortlys';
$headers = "From: anuragt0007@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";


$_SESSION['abcd']=0;
exit;
}
else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else if(isset($_POST['dispatched'])){
$order_id=$_POST["order_id"];
$sql="UPDATE vegknock_new_order SET status='Dispatched' WHERE order_id=$order_id";




if ($conn->query($sql) === TRUE) {
$seconds=5;
echo "<script>alert('Dispatched')</script>";
sleep ( $seconds );
header('location:http://localhost/MyFirstProject/first.php');
$_SESSION['abcd']=0;
exit;
}
else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else if(isset($_POST['delivered'])){
$order_id=$_POST["order_id"];

$sql="UPDATE vegknock_new_order SET status='Delivered' WHERE order_id=$order_id";



if ($conn->query($sql) === TRUE) {

echo "<script>alert('Delivered')</script>";
sleep ( $seconds );
header('location: http://localhost/MyFirstProject/first.php');
$_SESSION['abcd']=0;
exit;
}
else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else if(isset($_POST['cancel'])){
$order_id=$_POST["order_id"];

$sql="UPDATE vegknock_new_order SET status='Cancelled' WHERE order_id=$order_id";

if ($conn->query($sql) === TRUE) {
$seconds=5;
echo "<script>alert('Cancelled')</script>";
sleep ( $seconds );
header('location:http://localhost/MyFirstProject/first.php');
$_SESSION['abcd']=0;
exit;
}
else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

						 }			 
?>