<?php 
  $con=mysqli_connect("localhost","root","","project_ecommerce");
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>