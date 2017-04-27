<?php

$con = mysqli_connect("localhost","anuragt0007","qwerty12345","anuragt");

$sql = "SELECT * FROM vegknock_new_order";
$res = mysqli_query($con,$sql);


while ($cry= mysqli_fetch_array($res)) {
	echo "<br/>";
    echo $cry[0]." / ";
    echo $cry[6]." / ";
	echo $cry[8]." / ";
	echo $cry[9]." / ";
	echo $cry[11]." / ";
	echo $cry[31]." / ";
	echo $cry[61]." / ";
	echo $cry[62]." / ";
	echo $cry[63]." / ";
	echo $cry[63]." / ";
    echo '</tr>';
}

?>