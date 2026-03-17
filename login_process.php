<?php
session_start();
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: login.php");
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Check if query failed
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Check login
if (mysqli_num_rows($result) > 0) {
    $_SESSION['admin'] = $username;
    header("Location: admin.php");
    exit();
} else {
    echo "Invalid username or password";
}
?>