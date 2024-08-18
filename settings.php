<?php
$server = "localhost";
$user_Name = "root";
$password = "";
$dbName = "book_db";

$conn = new mysqli($server, $user_Name, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>