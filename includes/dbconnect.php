<?php
$servername = "localhost";
$username = "anuragt0007";
$password = "qwerty12345";
$db="anuragt";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
    echo "Error";
	}

?> 