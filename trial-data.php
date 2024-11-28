<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $data = "Name: $name\nAge: $age\nGender: $gender\n\n";
    
    // Save to file
    file_put_contents('submissions.txt', $data, FILE_APPEND);
    
    // Redirect back to the form with the new filename
    header("Location: trial.html");
    exit();
}
?>