<?php
session_start();
include_once('includes/db.php');
if(isset($_POST['submit']))
 {
   $email_patient=$_POST['email'];
   $fullname=$_POST['fullname'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $country=$_POST['country'];
   $county=$_POST['county'];
   $keen=$_POST['keen'];
   $keentel=$_POST['keentel'];
   $tel=$_POST['tel'];


   
   $sql="INSERT INTO patients_details(email,names,dob,gender,country,county,keen,keentel,tel,stage) VALUES('$email_patient','$fullname','$dob','$gender','$country','$county','$keen','$keentel','$tel',8)";
   $res=mysqli_query($conn,$sql);
   if($res){
    die('user Successfuly added');
   }
   else{
    die('user failed to add');
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

include_once('includes/navbar.php'); 
include_once('includes/sidebar.php')
?>
<div class="content">
<h3 class="text-center">Add new Patient</h3>
<div class="card p-5 m-3">
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address(optional)</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      </div>
  <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control"placeholder="Enter your Fullname" name="fullname" id="fullname" required>
  </div>
  <div class="mb-3">
    <label for="pob" class="form-label">place of birth</label>
    <input type="text" class="form-control"placeholder="Place of birth" name="pob" id="pob" required>
  </div>

  <label for="date">Date of Birth</label>
  <input type="date" class="form-control appointment_date" placeholder="Date" name="dob" required="true" max="<?= date('Y-m-d'); ?>"><br> 

  <select class="form-select" name="gender" aria-label="Default select example">
  <option value="male" selected>Male</option>
  <option value="female">Female</option>
</select>
<div class="mb-3">
    <label for="Country" class="form-label">Country</label>
    <input type="text" class="form-control"placeholder="Country" name="country" id="Country" required>
  </div>
  <div class="mb-3">
    <label for="County" class="form-label">County</label>
    <input type="text" class="form-control"placeholder="County" name="county" id="County" required>
  </div>
  <div class="mb-3">
    <label for="keen" class="form-label">Next of keen</label>
    <input type="text" class="form-control"placeholder="keen" name="keen" id="keen" required>
  </div>
  <div class="mb-3">
    <label for="keen" class="form-label">Next of keen tele</label>
    <input type="text" class="form-control"placeholder="next of keen tel" name="keentel" id="keen" required>
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">tel</label>
    <input type="tel" class="form-control"placeholder="Your tel no" name="tel" id="tel" required>
  </div>
<br>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>
</body>
</html>