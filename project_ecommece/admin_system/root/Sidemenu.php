<!DOCTYPE html>
<html>

<head>
    <?php
    include("header.php");
    ?>
    <!-- Google Fonts - Professional font combination -->
    <!-- Custom CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/sidemenu.css">
</head>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;

    }
</style>

<body>
    <div class="menu">
        <!-- <div class="brand-logo">
            <img src="../assets/images/yrm-logo.png" alt="YRM">
        </div> -->
        <div class="menu-search">
            <input type="text" placeholder="Search menu..." class="form-control">
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="../admin//full_admin.php" target="content">
                    <i class="fa fa-home"></i><span lang="km" style="font-family: 'Libertinus Sans', sans-serif; font-size: 21px">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#Report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-book"></i><span lang="km" style="font-family: 'Libertinus Sans', sans-serif; font-size: 21px" >Report</span>
                </a>
                <ul class="collapse list-unstyled" id="Report">
                    <li>
                        <a href="../admin/order_list.php" target="content" style="font-family: 'Libertinus Sans', sans-serif; font-size: 18px">Customer Order</a>
                    </li>
                    <li>
                        <a href="../admin/stockpro.php" target="content" style="font-family: 'Libertinus Sans', sans-serif; font-size: 18px">Stock Product</a>
                    </li>
                </ul>
            </li>

            <!-- for userpage -->
            <li>
                <a href="#Report1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-user"></i><span lang="km" style="font-family: 'Libertinus Sans', sans-serif; font-size: 21px">UserPage</span>
                </a>
                <ul class="collapse list-unstyled" id="Report1">
                    <li>
                        <a href="../../index.php" target="content" style="font-family: 'Libertinus Sans', sans-serif; font-size: 18px">Home</a>
                    </li>



                </ul>
            </li>


            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-cog"></i><span lang="km" style="font-family: 'Libertinus Sans', sans-serif; font-size: 21px" >Setting</span>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="../admin/changepwd.php" target="content" style="font-family: 'Libertinus Sans', sans-serif; font-size: 18px">Admin</a>
                    </li>
                </ul>
            </li>

            <!-- <li>
                <a href="#Order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-users"></i><span lang="km">ព័ត៏មានបុគ្កលិក</span>
                </a>
                <ul class="collapse list-unstyled" id="Order">
                    <li>
                        <a href="../Cart/index.php" target="content">News Category</a>
                    </li>
                    <li>
                        <a href="../Cart/index.php" target="content">News Homepage</a>
                    </li>
                    <li>
                        <a href="../Cart/index.php" target="content">News Details</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-money-bill"></i><span lang="km">គ្រប់គ្រងប្រាក់ខែ</span>
                </a>
                <ul class="collapse list-unstyled" id="User">
                    <li>
                        <a href="../AddUserAdmin/index.php" target="content">User Admin</a>
                    </li>
                    <li>
                        <a href="../AddNormalUser/index.php" target="content">User</a>
                    </li>
                </ul>
            </li> -->


        </ul>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>