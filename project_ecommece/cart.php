<?php
session_start();
include 'config.php';

//  Handle Remove Item
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
    header("Location: cart.php");
    exit;
}

// Handle Add to Cart (keep original code)
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $qty;
    } else {
        $_SESSION['cart'][$product_id] = $qty;
    }

    header("Location: cart.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


</head>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <i class="fa fa-store" style="font-size: 30px; color: white; margin: 0px 30px 5px 10px"></i>
            <a class="navbar-brand" href="#">Hongly's Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i style="margin-left: 20px; font-size: 20px" class="fa-solid fa-house-user"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><i style="margin-left: 20px; font-size: 20px" class="fa-solid fa-circle-info"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i style="margin-left: 20px; font-size: 20px" class="fa-solid fa-phone"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php"><i style="font-size: 20px; margin-left: 20px" class="fa-solid fa-cart-shopping "></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Cart Content -->
    <div class="container mt-5">
        <h2 class="mb-4">🛒 My Cart</h2>

        <?php
        $total = 0;
        if (!empty($_SESSION['cart'])) {
            echo "<table class='table table-bordered'>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Subtotal</th>
                   <th>Action</th> 
                </tr>
              </thead>
              <tbody>";

            foreach ($_SESSION['cart'] as $id => $qty) {
                $res = $con->query("SELECT * FROM products WHERE id = $id");
                $row = $res->fetch_assoc();
                $subtotal = $row['price'] * $qty;
                $total += $subtotal;

                echo "<tr>
                  <td>{$row['name']}</td>
                  <td>$" . number_format($row['price'], 2) . "</td>
                  <td>$qty</td>
                  <td>$" . number_format($subtotal, 2) . "</td>
                     <td>
              <a href='cart.php?remove=$id' class='btn btn-danger btn-sm' onclick=\"return confirm('Remove this item?');\">🗑️ Remove</a>
            </td>
                </tr>";
            }

            echo "<tr>
              <td colspan='3' class='text-end'><strong>Total</strong></td>
              <td><strong>$" . number_format($total, 2) . "</strong></td>
              
            </tr>
            </tbody>
            </table>";

            echo "<a href='checkout.php' class='btn btn-success'>Proceed to Checkout</a>";
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>

</body>

</html>