<?php
$servername = "localhost";
$username = "root";
$password = "";// Needs to be changed 
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "test Connected successfully";


?>