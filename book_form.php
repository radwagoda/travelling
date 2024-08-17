
<?php
session_start();
require "settings.php"; 
if (!isset($_SESSION['user_id'])) {
    header('Location: login_pro.php');
    exit();
}

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $user_id = $_SESSION['user_id']; 

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($request);
    $stmt->bind_param("ssssssssi", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving, $user_id);

    if ($stmt->execute()) {
      $_SESSION['success_message'] = "Booking successful!";
      header('Location: book.php');
      exit();
  } else {
      echo 'Error: ' . $conn->error;
  }
}

$conn->close();


?>
