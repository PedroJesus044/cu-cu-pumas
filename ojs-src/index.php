<?php
$servername = "mariadb";
$username = "mariadb";
$password = "mariadb";
$database = "mariadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 