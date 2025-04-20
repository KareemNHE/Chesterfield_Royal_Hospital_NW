<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: StaffHomePage.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>