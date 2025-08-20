<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<script>
    $(document).ready(function() {
        $('#example2').DataTable({
            responsive: true
        });
    });
</script>
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



<body>


    <div class="container">
        <h2 style="text-align: center;">Customer Order</h2>

        <table id="example2" class="table table-striped table-bordered" style="width:100%" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config.php';
                $sql = "SELECT * FROM orders";
                $result = $con->query($sql);
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td>$ <?php echo $row['total_price'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>





</body>


</html>