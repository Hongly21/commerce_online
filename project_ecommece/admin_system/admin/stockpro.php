<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Libertinus Sans", sans-serif;
        }
        .container {
            margin-top: 50px;
            margin: auto;
            width: 96%;
            padding: 20px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            box-sizing: border-box;
        }
    </style>


</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Stock all Products</h1>
        <table border="1" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>Cate ID</th>
                    <th>Pro Name</th>
                    <th>Pro Price</th>
                    <th>Pro Description</th>
                    <th>Pro Image</th>
                    <th>Cate Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config.php';
                $sql = "SELECT * FROM products JOIN categories ON category_id = categories.id";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><img src="img/<?php echo $row['image']; ?>" alt="" style="width: 60px; height: 60px;"></td>
                        <td><?php echo $row['category_name']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>




    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



</body>

</html>