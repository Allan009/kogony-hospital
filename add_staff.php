<?php
session_start();
include_once('includes/db.php');

if(isset($_POST['submit']))
 {
   $email_staff=$_POST['email'];
   $fullname=$_POST['fullname'];
   $cate=$_POST['category'];
   $country=$_POST['country'];
   $county=$_POST['county'];
   $tel=$_POST['tel'];
   $dob=$_POST['dob'];

   $check="SELECT email FROM staff WHERE email='$email_staff'";
   $checked=mysqli_query($conn,$check);
   if(mysqli_num_rows($checked) > 0){
    die('user already exist');
  }
  else{
   $sql="INSERT INTO staff(email,fullname,cate_id,dob,country,county,tel) VALUES('$email_staff','$fullname','$cate','$dob','$country','$county','$tel')";
   $res=mysqli_query($conn,$sql);
   if($res){

      ?> <div class="alert alert-success alert-dismissible" role="alert">
      Records updated successful
    </div><?php 
     }
     else{
      ?> <div class="alert alert-warning alert-dismissible" role="alert">
      Failed to update
    </div><?php
     }
   }
 }
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
    <div class="card p-5 m-3">
        <h5 class="text-center">Add new Staff</h5>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control"placeholder="Enter your Fullname" name="fullname" id="fullname" required>
  </div>
  <div class="mb-3">
    <label for="Country" class="form-label">Country</label>
    <input type="text" class="form-control"placeholder="Country" name="country" id="country" required>
  </div>
  <div class="mb-3">
    <label for="County" class="form-label">County</label>
    <input type="text" class="form-control"placeholder="County" name="county" id="county" required>
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">tel</label>
    <input type="tel" class="form-control"placeholder="tel" name="tel" id="tel" required>
  </div>
  <label for="date">Date of Birth</label>
  <input type="date" class="form-control appointment_date" placeholder="Date" name="dob" required="true" max="<?= date('Y-m-d'); ?>"><br> 

  <label for="category">Category</label>
  <select class="form-select" name="category" aria-label="Default select example">
  <?php
		  $res=mysqli_query($conn,"SELECT * FROM `cate`");
		  while($row1=mysqli_fetch_array($res))
		  {  
		  ?>
		  <option value = <?php echo $row1['cate_id'];?> required>	  <?php echo $row1['name']; ?></option>
		  <?php
		  }
		  ?>
</select>
<br>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>
</body>
</html>