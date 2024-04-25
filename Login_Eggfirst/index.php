<?php
session_start();
include "db.php";

// Check if user is logged in
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== "1") {
    header("location: login.php");
    exit; // Stop further execution
}

// Retrieve user data from the database
$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$location = $row['location'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eggfirst_project</title>
</head>
<body>
    <h1>Hello <?php echo $username; ?></h1><button onclick="window.location.href='logout.php'">Logout</button>
    <p>Your location: <b><?php echo $location; ?></p></b>
    <p>If you want to update location please click here</p>
    <button onclick="window.location.href='updateloc.php'">Update location</button>
    
</body>
</html>
