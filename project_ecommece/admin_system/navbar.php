<?php
include("root/header.php");
?>
<style>
    body {
        font-family: "Libertinus Sans", sans-serif;
    }
    
    .navbar-custom {
        background-color: #14358fff;
        /* Bootstrap primary color */
        color: white;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: white;
    }

    .navbar-custom .nav-link:hover {
        color: #d4d4d4;
    }

    .content {
        text-align: center;
        color: white;
        font-size: 35px;
        font-weight: bold;
        text-transform: uppercase;
        animation: colorChange 6s infinite;
        text-shadow: 3px 3px 4px black;
        margin-top: 20px;
    }

    @keyframes colorChange {
        0% {
            color: blue;
        }

        50% {
            color: green;
        }

        100% {
            color: purple;
        }
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <i class="fa fa-store" style="font-size: 30px; color: white; margin: 0px 30px 5px 20px"></i>
        <a class="navbar-brand" href="#" style="font-weight: bold;">
            <h3>Admin Panel</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="./admin/logout.php" style="color: white; text-decoration: none; ">Logout<i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 25px; margin: 3px 30px 5px 20px"></i></a>


                </li>
                <li>
                    <a href="./admin/gohomepage.php" style="color: white; text-decoration: none;"><i style="font-size: 30px; margin: 0px 30px 5px 10px" class="fa-solid fa-house-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>