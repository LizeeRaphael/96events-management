<?php
$servername = "localhost";
$message = "root";
$email = "";
$dbname = "mydab";

// Create connection
$conn = new mysqli($servername, $message, $email, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>