<?php
$stage=$_SESSION['stage'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="includes/sidebar.css">
</head>
<body>
<div class="sidebar">
  <a class="active" href="welcome.php">Home</a>
  <?php if($stage=="Registrar")echo '<a href="new.php">Add Patient</a>';?>
  <?php if($stage=="HR Manager")echo '<a href="add_staff.php">Add Staff</a>';?>
  <?php if($stage=="Registrar")echo '<a href="view.php">View Patient</a>';?>
  
  <?php if($stage=="Doctor")echo '<a href="Doctor.php">View Patient</a>';?>
  <?php if($stage=="HR Manager")echo '<a href="View_staff.php">View Staffs</a>';?>
  <?php if($stage=="Lab")echo '<a href="lablist.php">Lab list</a>';?>
  <?php if($stage=="pharmacy")echo '<a href="pharm.php">pharmacy list</a>';?>
  <?php if($stage=="Doctor")echo '<a href="icu.php">Icu patients</a>';?>
  <a href="Acc.php">My Account</a>
</div>

</body>
</html>