<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
        font-family: "Libertinus Sans", sans-serif;
        margin: 0;
        padding: 0;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        width: 100%;
        max-width: 500px;
        animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    label {
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #f0f0f0;
    }

    input[type="text"] {
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 10px;
        padding: 12px;
        width: 100%;
        color: #fff;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    input[type="text"]:focus {
        background-color: rgba(255, 255, 255, 0.2);
        outline: none;
    }

    button.btn-primary {
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        border: none;
        padding: 12px;
        width: 100%;
        border-radius: 10px;
        font-weight: bold;
        font-size: 16px;
        color: #fff;
        margin-top: 20px;
        transition: background 0.3s ease;
    }

    button.btn-primary:hover {
        background: linear-gradient(135deg, #ff4b2b, #ff416c);
        transform: scale(1.02);
    }
</style>

<body>
    <div class="container">
        <form action="action.php" method="get">
            <div class="mb-3">
                <label for="category_name">Category Name</label>
                <?php
                include '../../config.php';
                if (isset($_GET['cid'])) {
                    $id = $_GET['cid'];
                    $sql = "SELECT * FROM categories WHERE id = $id";
                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <input type="text" value="<?php echo $row['category_name'] ?>" name="category_name" id="category_name" class="form-control" required>
                        <input type="hidden" name="editid" value="<?php echo $id; ?>">


                <?php
                    }
                }

                ?>

            </div>
            <button name="btnupdate" type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>




</body>

</html>