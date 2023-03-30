<?php
session_start();
$fullname=$_SESSION['fullname'];
$role=$_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <?php

include_once('includes/navbar.php'); 
include_once('includes/sidebar.php')
?>
<div class="content">
<div class="row pt-5">
  <h3><?php echo "$fullname - $role"?></h3>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Total Patient</h3>
        <h1 class="text-info">456</h1>
        <a href="view.php" class="btn btn-primary">View patients</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Total Staff</h3>
        <h1 class="text-info">13</h1>
        <a href="View_staff.php" class="btn btn-primary">View Staffs</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Total Rooms</h3>
        <h1 class="text-info">45</h1>
        <a href="#" class="btn btn-primary">View Room lists</a>
      </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>