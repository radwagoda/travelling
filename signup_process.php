<?php
require "settings.php"; // استيراد ملف الإعدادات للاتصال بقاعدة البيانات

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع قيم حقول الإدخال من النموذج المرسل
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is empty";
    } elseif (strlen($username) > 20) {
        $errors[] = "Username is too long";
    }

    if (empty($email)) {
        $errors[] = "Email is empty";
    } else {
        // التحقق من صحة البريد الإلكتروني باستخدام تعبير نمطي
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if (!preg_match($pattern, $email)) {
            $errors[] = "Email is not valid";
        }
    }

    if (empty($password)) {
        $errors[] = "Password is empty";
    }

    if (empty($confirm_password)) {
        $errors[] = "Confirm password is empty";
    }

    if ($password != $confirm_password) {
        $errors[] = "Passwords do not match";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    }

    if (empty($errors)) {
        // إدراج بيانات المستخدم في قاعدة البيانات
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql); // إعداد بيان SQL للتنفيذ

        if ($stmt) {
            // ربط المعلمات بأنواع البيانات الخاصة بها
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // تنفيذ البيان المحضر لإدراج بيانات المستخدم في قاعدة البيانات
                header("Location: login_pro.php");
                exit();
            } else {
                $errors[] = "Error: " . $stmt->error;
            }

            $stmt->close(); // إغلاق البيان المحضر
        } else {
            $errors[] = "Error: " . $conn->error;
        }

        $conn->close(); // إغلاق الاتصال بقاعدة البيانات
    }

    if (!empty($errors)) {
        // تخزين الأخطاء في الجلسة أو إرسالها إلى الواجهة الأمامية
        session_start();
        $_SESSION['errors'] = $errors;
        header("Location: signup_pro.php");
        exit();
    }
}
?>
