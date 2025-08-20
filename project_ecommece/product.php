<?php include 'config.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $con->query("SELECT * FROM products WHERE id = $id");
    $product = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name'] ?>MyShop</title>
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

    <!-- Navbar -->
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

    <!-- Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Image -->
            <div class="col-md-6">
                <img src="admin_system/admin/img/<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>" class="img-fluid">
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <h2><?php echo $product['name'] ?></h2>
                <p class="text-success h5">$<?php echo number_format($product['price'], 2) ?></p>
                <p><?php echo nl2br($product['description']) ?></p>

                <!-- Add to Cart -->
                <form action="cart.php" method="post" class="mt-4">
                    <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                    <div class="mb-3">
                        <label for="qty">Quantity:</label>
                        <input type="number" name="qty" value="1" min="1" class="form-control w-25">
                    </div>
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- relative product -->
    <div class="container mt-5">
        <h3>Related Products</h3>
        <div class="row">
            <?php
            $related = $con->query("SELECT * FROM products WHERE category_id = {$product['category_id']} AND id != {$product['id']} LIMIT 4");
            while ($rel = $related->fetch_assoc()):
            ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img style="object-fit: contain;" src="admin_system/admin/img/<?php echo $rel['image'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rel['name'] ?></h5>
                            <p class="card-text">$<?php echo number_format($rel['price'], 2) ?></p>
                            <a href="product.php?id=<?php echo $rel['id'] ?>" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

</body>

</html>