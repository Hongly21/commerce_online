<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: "Libertinus Sans", sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(90deg, #78a2e0ff 60%, #fff 100%);
            color: #fff;
            padding: 60px 0 40px 0;

            /* border-radius: 0 0 2rem 2rem; */
            margin-bottom: 2rem;
        }

        .hero-section h1 {
            font-weight: 700;
        }

        .card {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
            border-radius: 1rem;
        }

        .about-section,
        .contact-section {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .footer {
            background: #212529;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            border-radius: 1rem 1rem 0 0;
            margin-top: 2rem;
        }
    </style>
</head>

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



    <!-- Hero Section  search -->

    <section class="hero-section text-center">
        <div class="container">
            <h1>Welcome to Hongly's Shop</h1>
            <p class="lead">Your one-stop shop for all your needs! find what you need, fast and easy.</p>
        </div>
    </section>
    <!-- menu of category -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Product Categories</h2>
        <div class="col-md-11 d-flex row mx-auto">
            <?php
            $sql = "SELECT * FROM categories";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()):
            ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">

                            <a style="text-decoration: none;" href="product_cate.php?cid=<?php echo $row['id'] ?>">
                                <h5 class="card-title"><?php echo $row['category_name'] ?></h5>
                            </a>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>


    <!-- Product Catalog -->
    <div class="container mt-4">

        <h2 style="text-align: center;" class="mb-4 text-primary">All Product Catalog</h2>
        <div class="search-results" style="width: 500px; margin: auto">
            <form method="get" class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search products..."
                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="index.php" class="btn btn-secondary">Refresh</a>
                </div>
            </form>
        </div>
        <div class="row">
            <?php
            $search = isset($_GET['search']) ? $con->real_escape_string($_GET['search']) : '';
            $query = "SELECT * FROM products";
            if ($search) {
                $query .= " WHERE name LIKE '%$search%' OR description LIKE '%$search%'";
            }
            $result = $con->query($query);
            while ($row = $result->fetch_assoc()):
            ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img style="object-fit: contain;" src="admin_system/admin/img/<?php echo $row['image'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text text-success">$<?php echo $row['price'], 2; ?></p>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <a href="product.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section container my-5" id="about">
        <h3 class="mb-3 text-primary">About Us</h3>
        <p>
            MyShop is dedicated to providing you with the best online shopping experience. We offer a wide range of products at competitive prices, fast shipping, and excellent customer service. Whether you're looking for electronics, fashion, or home goods, we've got you covered!
        </p>
    </section>

    <!-- Contact Section -->
    <section class="contact-section container mb-5" id="contact">
        <h3 class="mb-3 text-primary">Contact Us</h3>
        <form>
            <div class="mb-3">
                <label for="contactName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="contactName" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="contactEmail" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="contactEmail" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="contactMsg" class="form-label">Message</label>
                <textarea class="form-control" id="contactMsg" rows="3" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>

    <div class="footer">
        &copy; <?= date('Y') ?> MyShop. All rights reserved.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>