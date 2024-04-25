<?php
session_start();
include "db.php";

if(isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $rowcount = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if($rowcount > 0) {
        // Set session variables
        $_SESSION["login"] = "1";
        $_SESSION["username"] = $username; // Set the username in the session
        unset($_SESSION["login_error"]);
        header("location:index.php");
    } else {
        $_SESSION["login_error"] = "Please check login";
        header("location:login.php");
    }
}
?>
