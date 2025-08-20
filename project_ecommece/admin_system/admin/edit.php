<?php
include '../../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $con->query("SELECT * FROM products WHERE id = $id");
    $product = $result->fetch_assoc();
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $category_id = $row['category_id'];
        $image = $row['image'];
    }
}
?>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;
    }
    .container-edit {
        width: 35%;
        margin: auto;
        padding: 10px 10px 10px 10px;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-sizing: border-box;
        margin-top: 20px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-edit">
        <div class="container mt-5">
            <h2 style="text-align: center;">Edit Product</h2>
            <form method="post" action="action.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="hidden" name="idpro" value="<?php echo $id ?>">
                    <input type="text" name="name" value="<?php echo $product['name'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Price ($)</label>
                    <input type="number" step="0.01" name="price" value="<?php echo $product['price'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"><?php echo $product['description'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Category</label>
                    <select name="category" class="form-select">
                        <?php
                        $cats = $con->query("SELECT * FROM categories");
                        while ($c = $cats->fetch_assoc()):
                        ?>
                            <option value="<?php echo $c['id'] ?>" <?php echo ($c['id'] == $product['category_id']) ? 'selected' : '' ?>>
                                <?php echo $c['category_name'] ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Current Image</label><br>
                    <img src="img/<?php echo $product['image'] ?>" width="100">
                </div>
                <div class="mb-3">
                    <label>New Image (Optional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <button type="submit" name="btn_update" class="btn btn-primary">Update Product</button>
                <a href="full_admin.php" class="btn btn-secondary">Back</a>
            </form>
        </div>

    </div>


</body>

</html>