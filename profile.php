<?php
session_start(); // بدء الجلسة أو استئناف الجلسة الحالية
require "settings.php"; // استيراد ملف الإعدادات للاتصال

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // إعادة توجيه إلى صفحة تسجيل الدخول إذا لم يكن المستخدم مسجلاً
    exit();
}

$user_id = $_SESSION['user_id'];

// استعلام لاسترجاع بيانات المستخدم
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

// استعلام لاسترجاع التذاكر التي قام المستخدم بحجزها
$sql_tickets = "SELECT * FROM book_form WHERE user_id = ?";
$stmt_tickets = $conn->prepare($sql_tickets);
$stmt_tickets->bind_param("i", $user_id);
$stmt_tickets->execute();
$result_tickets = $stmt_tickets->get_result();
$tickets = $result_tickets->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <h1>Profile</h1>
    
    <h2>User Information</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>

    <h2>My Bookings</h2>
    <?php if (empty($tickets)): ?>
        <p>You have no bookings.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Guests</th>
                    <th>Arrivals</th>
                    <th>Leaving</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ticket['name']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['email']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['phone']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['address']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['location']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['guests']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['arrivals']); ?></td>
                        <td><?php echo htmlspecialchars($ticket['leaving']); ?></td>
                        <td>
                            <a href="edit_booking.php?id=<?php echo $ticket['id']; ?>" class="btn">Edit</a>
                            <a href="delete_booking.php?id=<?php echo $ticket['id']; ?>" class="btn">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="logout.php" class="btn">Logout</a>

</body>
</html>
