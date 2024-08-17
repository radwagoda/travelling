<?php
// Include this line at the beginning to ensure the backend logic is included
include 'update_booking.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="css/edit_booking.css">
</head>
<body>
    <div class="container">
        <h1>Edit Booking</h1>
        <form action="update_booking.php?id=<?php echo htmlspecialchars($booking_id); ?>" method="post">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" name="name" value="<?php echo isset($booking['name']) ? htmlspecialchars($booking['name']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" name="email" value="<?php echo isset($booking['email']) ? htmlspecialchars($booking['email']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="text" name="phone" value="<?php echo isset($booking['phone']) ? htmlspecialchars($booking['phone']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" name="address" value="<?php echo isset($booking['address']) ? htmlspecialchars($booking['address']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Location:</span>
                <input type="text" name="location" value="<?php echo isset($booking['location']) ? htmlspecialchars($booking['location']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Guests:</span>
                <input type="number" name="guests" value="<?php echo isset($booking['guests']) ? htmlspecialchars($booking['guests']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date" name="arrivals" value="<?php echo isset($booking['arrivals']) ? htmlspecialchars($booking['arrivals']) : ''; ?>" required>
            </div>
            <div class="inputBox">
                <span>Leaving:</span>
                <input type="date" name="leaving" value="<?php echo isset($booking['leaving']) ? htmlspecialchars($booking['leaving']) : ''; ?>" required>
            </div>
            <input type="submit" value="Update Booking" class="btn">
        </form>
        <a href="user_profile.php" class="back-link">Back to Profile</a>
    </div>
</body>
</html>
