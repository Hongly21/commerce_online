<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;
    }
    .container{
        margin: auto;
        width: 80%;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-sizing: border-box;
        padding: 10px;
        box-sizing: border-box;
    }
</style>


<body>

    <div class="container">
        <form method="post" action="action.php">
            <div>
                <label for="category_name">Category Name:</label>
                <input type="text" id="category_name" name="category_name" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="btnadd" class="btn btn-primary">Add</button>
            </div>
            <!-- <button type="submit" name="btn_add" class="btn btn-primary">Add</button>
        <button name="btnadd" type="submit">Add Category</button> -->
        </form>

    </div>



</body>

</html>