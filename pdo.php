<?php
//Creating the constants.
$servername = "localhost:3307";
$username = "root";
$password = "Hospital19419.";
$dbname="api_d";

try {
  // Create the connection
  // DSN parts: 1. DB driver : mysqli 2. host = localhost
  // 3. db schema /name = api_d 
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);// The DSN 
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
