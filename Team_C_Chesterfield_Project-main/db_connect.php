<?php
$servername = "127.0.0.1";  // Replace with your MySQL server name
$username = "root";
$password = "";
$database = "crh_database";  // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection when done
$conn->close();
?>
