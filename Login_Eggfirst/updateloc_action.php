<?php
session_start();
include "db.php";

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== "1") {
    header("location: login.php");
    exit; 
}

if(isset($_POST['new_location'])) {
    $new_location = $_POST['new_location'];
    
    $username = $_SESSION["username"];
    
    $sql = "UPDATE users SET location = '$new_location' WHERE username = '$username'";
    if(mysqli_query($connect, $sql)) {
       
        $_SESSION['location_update_success'] = true;
    } else {
       
        $_SESSION['location_update_error'] = "Location update failed. Please try again.";
    }

    header("Location: index.php");
    exit();
} else {

    header("Location: updateloc.php");
    exit();
}
?>
