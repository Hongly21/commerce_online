<?php
session_start();
include '../../config.php';

// Redirect if not logged in
// if (!isset($_SESSION['admin_login'])) {
//     header('Location: login.php');
//     exit();
// }

$error = '';
$success = '';

// Handle form submission
if (isset($_POST['change_password'])) {
    $username = $_SESSION['username'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Fetch current password
    $sql = "SELECT password FROM tbl_admin WHERE username = '$username' LIMIT 1";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($old_password === $row['password']) {
            if ($new_password === $confirm_password) {
                // Update password
                $update = "UPDATE tbl_admin SET password = '$new_password' WHERE username = '$username'";
                if ($con->query($update)) {
                    $success = "Password changed successfully!";
                } else {
                    $error = "Failed to update password!";
                }
            } else {
                $error = "New password and confirm password do not match.";
            }
        } else {
            $error = "Old password is incorrect.";
        }
    } else {
        $error = "User not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;
    }
</style>

<body style="background: #f0f2f5;">
    <div class="container mt-5" style="max-width: 500px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Change Password</h4>

                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php elseif ($success): ?>
                    <div class="alert alert-success"><?= $success ?></div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" name="new_password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm New Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <button type="submit" name="change_password" class="btn btn-primary w-100">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>