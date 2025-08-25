<?php
$host = "127.0.0.1";   // "localhost"
$user = "root";
$password = "";
$database = "users_db";
$port = 3307; // porta que você que modifiquei 

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
