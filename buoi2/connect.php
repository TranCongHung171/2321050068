<?php
$servername = "localhost";
$username = "root";
$password = "";
//$port = 3306;
$database = "film_fptplay";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>