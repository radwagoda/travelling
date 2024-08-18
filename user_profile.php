<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="book.php">Book</a></li>
            <li><a href="user_profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

    <h1>User Profile</h1>
    
    <h2>User Information</h2>
    <?php include 'profile_logic.php'; ?>
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
                            <a href="edit_booking_form.php?id=<?php echo $ticket['id']; ?>" class="btn">Edit</a>
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
