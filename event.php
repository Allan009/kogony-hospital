<?php
include_once('includes/db.php');
$user_id=$_GET['id'];
$event=$_GET['ev'];

$sql="UPDATE `patients_details` SET `stage` = '$event' WHERE `patients_details`.`patient_id` = '$user_id'; ";
$res=mysqli_query($conn,$sql);
if($res){ 
    $_SESSION['user_added']="user successfully recorded ";
    header('location:welcome.php');
   }
?>