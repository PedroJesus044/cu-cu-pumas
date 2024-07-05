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
$sql = "CREATE TABLE IF NOT EXISTS mariadb.messages(
bigint id not null primary key,
text mensaje
)";

if ($conn->query($sql) === TRUE) {
    echo "Table messages created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "INSERT INTO mariadb.messages (id, mensaje)
VALUES (1 , 'cu cu pumas'), (2 , 'el américa csm'), (3 , 'fuera morena'), (4 , 'este hogar es clasista')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM mariadb.messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["mensaje"]. " <br>";
  }
} else {
  echo "0 results";
}


$conn->close();

?> 