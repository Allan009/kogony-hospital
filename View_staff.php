<?php
session_start();
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
include_once('includes/db.php');
include_once('includes/navbar.php'); 
include_once('includes/sidebar.php')
?>
<div class="content">
    <h5 class="text-center pt-3">Staff details</h5>
<table class="table table-bordered"> <thead> <tr> <th>#</th>   <th>Name</th><th>Email</th> <th>Role</th>
						
<?php 
 $sql="SELECT s.cate_id as id ,fullname,email,c.name as Role FROM staff s JOIN cate c USING (cate_id) ";
 $ret=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_array($ret)) {

    ?>
							<tr>
    <th><?php  echo $row['id'];?></th>
    <td><?php  echo $row['fullname'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php echo $row['Role']; ?></td>
</tr><?php }?>
						</table>

  </div>
</body>
</html>