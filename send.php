<?php
session_start();

include_once('includes/db.php');
if(isset($_GET['submit'])){
$user_id=$_GET['id'];
$update="UPDATE `patients_details` SET `cate_id` = 1 WHERE `patients_details`.`patient_id` = '$user_id'; ";;

$check=mysqli_query($conn,$update);
// $query=mysqli_fetch_array($check);
if($check){
 echo 'done';
}
else{
    echo 'failed';
}}
?>
