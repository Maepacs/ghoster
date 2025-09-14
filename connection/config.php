<?php
// connection/config.php

$host = "localhost";   // Database host
$user = "root";        // Database username (default XAMPP = root)
$pass = "";            // Database password (default XAMPP = "")
$dbname = "barangay_connect";   // Your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
