<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: "Libertinus Sans", sans-serif;
        }
        .success-icon {
            font-size: 60px;
            color: green;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">MyShop</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5 text-center">
        <div class="success-icon mb-3"><i class="fas fa-check-circle"></i></div>
        <h2 class="text-success">Thank you for your order!</h2>
        <p>Your order has been placed successfully.</p>
        <a href="index.php" class="btn btn-primary mt-3">Back to Shop</a>
    </div>

</body>

</html>