<?php
$servername = "localhost:3307";
$username = "root";
$password = "Hospital19419.";
$db_name="api_d";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
