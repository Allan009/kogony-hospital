<?php
session_start();
include_once('includes/db.php');
$email= $_SESSION['email'];
$fullname=$_SESSION['fullname'];
$role=$_SESSION['role'];
$dob=$_SESSION['dob'];
  $country=$_SESSION['country'];
  $county=$_SESSION['county'];
  $tel=$_SESSION['tel'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    </head>
    <body>
    <?php

include_once('includes/navbar.php'); 
include_once('includes/sidebar.php')
?>
<div class="content">
    <div class="m-3 p-3">
        <h4 class="text-center">Profile</h4>
        
        <table class="table table-lg table-striped ">
  
  <tbody>
    <tr>
      <td>FullName</td>
      <td><?php echo $fullname?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email?></td>
      
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><?php echo $dob?></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><?php echo $country?></td>
    </tr>
    <tr>
      <td>County</td>
      <td><?php echo $county?></td>
    </tr>
    <tr>
      <td>Tel</td>
      <td><?php echo $tel?></td>
    </tr>
  </tbody>
</table>
    </div>
    <div>
    </body>
</html>