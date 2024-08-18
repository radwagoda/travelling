<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up Page</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const errorMessages = <?php echo json_encode($_SESSION['errors'] ?? []); ?>;
            if (errorMessages.length > 0) {
                const errorContainer = document.getElementById('error-container');
                errorMessages.forEach(error => {
                    const p = document.createElement('p');
                    p.style.color = 'red';
                    p.textContent = error;
                    errorContainer.appendChild(p);
                });
                <?php unset($_SESSION['errors']); ?>
            }
        });
    </script>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="signup_process.php">
                    <h2>Sign Up</h2>

                    <!-- Display error messages -->
                    <div id="error-container"></div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="confirm_password" required>
                        <label>Confirm Password</label>
                    </div>

                    <button type="submit">Sign Up</button>

                    <div class="register">
                        <p>Already have an account? <a href="login_pro.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
