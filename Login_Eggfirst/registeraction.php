<?php
session_start();
include "db.php"; // Include your database file

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $location = $_POST['location'];

    // Insert data into the database
    $sql = "INSERT INTO users (username, password, location) VALUES ('$username', '$password', '$location')";
    if(mysqli_query($connect, $sql)) {
        // Registration successful
        $_SESSION['registration_success'] = true;
        header("Location: login.php");
        exit();
    } else {
        // Registration failed
        $_SESSION['registration_error'] = "Registration failed. Please try again.";
        header("Location: register.php");
        exit();
    }
} else {
    // Redirect if the form is not submitted
    header("Location: register.php");
    exit();
}
?>
