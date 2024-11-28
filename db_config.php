<?php
// Database configuration
$host = "localhost"; // Change if using a remote database
$dbname = "ara_database"; // Replace with your database name
$username = "ara0"; // Replace with your database username
$password = "araara0"; // Replace with your database password

// Create a connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment for testing
    // echo "Database connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
