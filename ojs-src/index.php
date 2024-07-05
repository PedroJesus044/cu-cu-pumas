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



// sql to create table
$sql = "CREATE TABLE messages(
bigint id not null primary key,
text mensaje
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
    
$conn->close();

?> 