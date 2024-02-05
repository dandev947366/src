<?php
$servername = "localhost";
$username = "dan23001";
$password = "QIvuOcvX";
$dbname = "wp_dan23001";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>