<?php
session_start();
require 'db.con.php';

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'portal';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['stud_id'], $_POST['pass'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the email and password fields!');
}

$stud_id = $_POST['stud_id'];
$password = $_POST['pass'];

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stud_id != '' && $password != '') {

    $query = "SELECT institute, mem_type, pass FROM account WHERE stud_id = '$stud_id' LIMIT 1";
    $num_rows = mysqli_query($con, $query);

    if ($num_rows) {

        // Account exists, now we verify the password.
        if (mysqli_num_rows($num_rows) == 1) {

            $num_rows = mysqli_fetch_array($num_rows, MYSQLI_ASSOC);
            $hashed_password = $row['pass'];
            if (password_verify($password, $hashed_password)) {
            }

            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['intitute'] = $intitute;
            $_SESSION['mem_type'] = $mem_type;
            $_SESSION['stud_id'] = $stud_id;
            header('Location: ../../index.php');
        } else {
            // Incorrect password
            echo 'Incorrect password!';
        }
    } else {
        // Incorrect email
        echo 'Incorrect Student ID!';
    }

    $con->close();
} else {
    echo 'Could not prepare statement!';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stud_id = $_POST['stud_id'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM account WHERE stud_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $stud_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['pass'])) {
        // Set session variables
        $_SESSION['stud_id'] = $user['stud_id'];
        $_SESSION['user_image'] = $user['image'];
        header('Location: user.php');
        exit();
    } else {
        $error = 'Invalid email or password.';
    }
}
