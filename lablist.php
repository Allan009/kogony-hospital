<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
<?php
include_once('includes/db.php');
include_once('includes/navbar.php'); 
include_once('includes/sidebar.php')
?>
<div class="content">
<h5 class="text-center pt-3">Lab Lists</h5>
<table class="table table-bordered"> <thead> <tr>    <th>Name</th><th>Email</th> <th>DOB</th><th>gender</th><th>Action</th>
<?php 
 $sql="SELECT * FROM patients_details p JOIN Patient_Event e ON p.stage=e.id WHERE e.name='Lab'" ;
 $ret=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_array($ret)) {

    ?>
   
							<tr>
    <td><?php  echo $row['names'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['dob'];?></td>
    <td><?php  echo $row['gender'];?></td>
     <td> <a href="records.php?id=<?php echo $row['patient_id'];?>" class="btn btn-primary">view</a></td>
</tr><?php }?>
</div>
</body>
</html>