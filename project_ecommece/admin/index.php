<?php
session_start();
include '../config.php';

$error = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username_input = $_POST['username'];  //get from input
    $password_input = $_POST['password'];

    $sql = "SELECT * FROM tbl_admin";
    $result = $con->query($sql);

    $login_success = false;    //boolean variable

    if ($result->fetch_assoc()) {
        foreach ($result as $row) {
            $db_username = $row['username'];
            $db_password = $row['password'];

            if ($username_input === $db_username && $password_input === $db_password) {  //compare with database
                $_SESSION['admin_login'] = true;
                $_SESSION['username'] = $db_username;
                $login_success = true;
                break;
            }
        }
    }

    if ($login_success) {
        header("Location: ../admin_system");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>
<style>
    body {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        font-family: "Libertinus Sans", sans-serif;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .container:hover {
        transform: scale(1.02);
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 600;
        color: #ffffff;
        text-shadow: 1px 1px 2px #000;
    }

    label {
        font-weight: 500;
        color: #f0f0f0;
    }

    input[type="text"],
    input[type="password"] {
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 8px;
        padding: 10px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        background-color: rgba(255, 255, 255, 0.2);
        outline: none;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        border: none;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #2575fc, #6a11cb);
    }

    .alert-danger {
        background-color: rgba(255, 0, 0, 0.2);
        border: none;
        color: #fff;
        font-weight: bold;
        text-align: center;
        border-radius: 8px;
    }
</style>

<body>
    <div class="container mt-5" style="max-width: 400px;">
        <h2>Admin Login</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn_login" name="btn_login">Login</button>

        </form>
    </div>




</body>

</html>