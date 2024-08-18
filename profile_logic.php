<?php
session_start();
require "settings.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

$sql_user = "SELECT * FROM users WHERE id = ?";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bind_param("i", $user_id);
$stmt_user->execute();
$result_user = $stmt_user->get_result();
$user = $result_user->fetch_assoc();

if (!$user) {
    echo "User not found.";
    exit();
}

$sql_tickets = "SELECT * FROM book_form WHERE user_id = ?";
$stmt_tickets = $conn->prepare($sql_tickets);
$stmt_tickets->bind_param("i", $user_id);
$stmt_tickets->execute();
$result_tickets = $stmt_tickets->get_result();
$tickets = $result_tickets->fetch_all(MYSQLI_ASSOC);
?>
