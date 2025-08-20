<?php
session_start();
include 'config.php';


if (isset($_POST['checkout'])) {
    $name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $total = 0;

    // សរុបតម្លៃសរុប
    foreach ($_SESSION['cart'] as $id => $qty) {
        $res = $con->query("SELECT price FROM products WHERE id = $id");
        $row = $res->fetch_assoc();
        $total += $row['price'] * $qty;
    }

    // 1. បញ្ចូលទៅ Table orders
    $con->query("INSERT INTO orders (customer_name, phone, total_price) VALUES ('$name', '$phone', '$total')");
    $order_id = $con->insert_id;

    // 2. បញ្ចូលទៅ order_items
    foreach ($_SESSION['cart'] as $id => $qty) {
        $res = $con->query("SELECT price FROM products WHERE id = $id");
        $row = $res->fetch_assoc();
        $subtotal = $row['price'] * $qty;

        $con->query("INSERT INTO order_items (order_id, product_id, quantity, subtotal)
                      VALUES ($order_id, $id, $qty, $subtotal)");
    }

    // 3. Clear Cart
    unset($_SESSION['cart']);

    // 4. Redirect to success page
    header("Location: order_success.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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

<body>

    <div class="container mt-5">
        <h2>Checkout</h2>
        <form method="post">
            <div class="mb-3">
                <label for="customer_name">Full Name:</label>
                <input type="text" name="customer_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <!-- Summary -->
            <h5>Order Summary</h5>
            <ul class="list-group mb-3">
                <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $id => $qty):
                    $res = $con->query("SELECT name, price FROM products WHERE id = $id");
                    $p = $res->fetch_assoc();
                    $subtotal = $p['price'] * $qty;
                    $total += $subtotal;
                ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $p['name'] ?> x <?= $qty ?>
                        <span>$<?= number_format($subtotal, 2) ?></span>
                    </li>
                <?php endforeach; ?>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total:</strong>
                    <strong>$<?= number_format($total, 2) ?></strong>
                </li>
            </ul>

            <button type="submit" name="checkout" class="btn btn-success">Place Order</button>
        </form>
    </div>

</body>

</html>