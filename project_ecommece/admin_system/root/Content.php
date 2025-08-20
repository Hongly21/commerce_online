<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<style>
  .bg-image {
    background-color: red;
    width: 100%;
    height: 700px;
    background-image: url('../admin/img/bg4.png');
    background-position: center;
    background-repeat: no-repeat;

  }

</style>

<body>
  <div class="bg-image">

  </div>


  <script>
    // Trigger SweetAlert2 popup on page load
    window.onload = function() {
      Swal.fire({
        icon: 'success',
        title: 'Login Successful',
        text: 'Welcome, Hongly Admin!',
        confirmButtonColor: '#3085d6',
        timer: 3000,
        timerProgressBar: true
      });
    };
  </script>

</body>

</html>