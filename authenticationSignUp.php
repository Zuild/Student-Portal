<?php
session_start();

// Include database connection
require 'db.con.php'; // Adjust this path according to your setup

// Check if all required fields are filled
if (!isset($_POST['institute'], $_POST['mem_type'], $_POST['stud_id'], $_POST['pass'])) {
    exit('Please fill all the required fields!');
}

// Validate and sanitize inputs
$Institute = filter_input(INPUT_POST, 'institute', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'mem_type', FILTER_SANITIZE_STRING);
$stud_id = filter_input(INPUT_POST, 'stud_id', FILTER_SANITIZE_STRING);
$password = $_POST['pass'];

// Example validation for student ID (if needed)
if (!ctype_alnum($stud_id)) {
    exit('Invalid student ID format!');
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Prepare SQL statement to insert user data into the database
$sql = "INSERT INTO account (institute, mem_type, stud_id, pass) VALUES (?, ?, ?, ?)";
if ($stmt = $con->prepare($sql)) {
    // Bind parameters to the SQL query
    $stmt->bind_param('ssss', $Institute, $type, $stud_id, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the login page after successful signup
        header('Location: HOME.php');
        exit();
    } else {
        // If execution fails, display an error message
        echo 'Signup failed. Please try again later.';
    }
    // Close statement
    $stmt->close();
} else {
    // If preparation of SQL statement fails, display an error message
    echo 'Could not prepare statement!';
}

// Close connection
$con->close();
