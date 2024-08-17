<?php
session_start();
require "settings.php"; 

if (!isset($_SESSION['user_id'])) {
    header('Location: login_pro.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$booking_id = $_GET['id'];


$sql = "DELETE FROM book_form WHERE id = ? AND user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $booking_id, $user_id);

if ($stmt->execute()) {
    header('Location: user_profile.php');
} else {
    echo 'Error: ' . $conn->error;
}
?>
