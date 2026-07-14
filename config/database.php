<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "hydromedical";
$port = "3307"; // Change to 3306 or 3307 based on your XAMPP

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to UTF-8
mysqli_set_charset($conn, "utf8mb4");

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>