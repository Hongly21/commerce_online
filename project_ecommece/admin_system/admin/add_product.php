<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
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
    <!-- <?php include '../config.php'; ?> -->
    <form action="action.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="category">Category:</label>
            <select name="category_id" class="form-select" required>
                <option value="">Select Category</option>
                <?php
                $sql = "SELECT * FROM categories";
                $run = $con->query($sql);
                while ($row = $run->fetch_assoc()) {
                ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></option>

                <?php

                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="btn_add" class="btn btn-primary">Add</button>
        </div>
    </form>


</body>

</html>