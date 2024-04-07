<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "manage_clients";
$port = "3306";

$conn = new mysqli($servername, $username, $password, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
