<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "child_assessment_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'error' => "Connection failed: " . $e->getMessage()]);
    exit;
}
?> 