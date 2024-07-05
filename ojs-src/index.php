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
$sql = "CREATE TABLE mensaje (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
mensaje VARCHAR(60) NOT NULL
) ";

if ($conn->query($sql) === TRUE) {
    echo "Table mensaje created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "INSERT INTO mensaje (mensaje)
VALUES ('cu cu pumas'), ('csm el américa'), ('fuera morena'), ('este hogar es clasista')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM mensaje";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Mensaje: " . $row["mensaje"]. " <br>";
  }
} else {
  echo "0 results";
}


$conn->close();

?> 