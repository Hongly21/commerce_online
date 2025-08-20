<?php
include '../../config.php';



//add product
if (isset($_POST['btn_add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $image = $_FILES['image']['name'];
    $path = "img/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $path);


    $sql = "INSERT INTO `products` (`id`, `name`, `price`, `description`, `category_id`, `image`) VALUES (NULL, '$name', '$price', '$description', '$category_id', '$image');";
    $run = $con->query($sql);
    if ($run) {
        echo "Product added successfully";
    } else {
        echo "Failed to add product";
    }
    header("Location: full_admin.php");
}

//delete product
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";
    $run = $con->query($sql);
    if ($run) {
        echo "Deleted successfully";
    } else {
        echo " Can not delete this products";
    }
    header("Location: full_admin.php");
}


// update product
if (isset($_POST['btn_update'])) {
    $id = $_POST['idpro'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $image = $_FILES['image']['name'];

    if (!empty($image)) {
        move_uploaded_file($_FILES['image']['tmp_name'], "img/" . $image);
        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price', `description` = '$description', `category_id` = '$category_id', `image` = '$image' WHERE `products`.`id` = $id;";
    } else {
        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price', `description` = '$description', `category_id` = '$category_id' WHERE `products`.`id` = $id;";
    }
    $run = $con->query($sql);
    if ($run) {
        echo "Product updated successfully";
    } else {
        echo "Failed to update product";
    }
    header("Location: full_admin.php");
    exit;
}

//delete cateqgory
if (isset($_GET['cid'])) {
    $id = $_GET['cid'];
    $sql = "DELETE FROM categories WHERE id='$id'";
    $run = $con->query($sql);
    if ($run) {
        echo "Deleted successfully";
    } else {
        ?>
        <script>
            alert(
        "If you want to delete this category, you must delete all products in this category first")
        </script>
        <?php
    }
    header("Location: full_admin.php");
}

//update category
if (isset($_GET['btnupdate'])) {
    $id = $_GET['editid'];
    $category_name = $_GET['category_name'];
    $sql = "UPDATE `categories` SET `category_name` = '$category_name' WHERE `categories`.`id` = $id;";
    $run = $con->query($sql);
    if ($run) {
        echo "Category updated successfully";
    } else {
        echo "Failed to update category";
    }
    $reload = "Location: full_admin.php";
    header($reload);
}

//add category

if (isset($_POST['btnadd'])) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO `categories` (`id`, `category_name`) VALUES (NULL, '$category_name');";
    $run = $con->query($sql);
    if ($run) {
        echo "Category added successfully";
    } else {
        echo "Failed to add category";
    }
    header("Location: full_admin.php");
}
