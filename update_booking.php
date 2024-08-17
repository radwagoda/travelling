<?php
session_start();
require "settings.php"; // Import settings file for connection

if (!isset($_SESSION['user_id'])) {
    header('Location: login_pro.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$booking_id = $_GET['id'];

// Initialize $booking as null
$booking = null;

// Query to retrieve booking details
$sql = "SELECT * FROM book_form WHERE id = ? AND user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $booking_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$booking = $result->fetch_assoc();

if (!$booking) {
    echo "Booking not found.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $guests = mysqli_real_escape_string($conn, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($conn, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($conn, $_POST['leaving']);

    // Query to update booking
    $sql_update = "UPDATE book_form SET name = '$name', email = '$email', phone = '$phone', address = '$address', location = '$location', guests = '$guests', arrivals = '$arrivals', leaving = '$leaving' WHERE id = $booking_id AND user_id = $user_id";
    
    if (mysqli_query($conn, $sql_update)) {
        header('Location: user_profile.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>
