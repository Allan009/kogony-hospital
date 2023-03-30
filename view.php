<?php
session_start();
include_once('includes/db.php');
if(isset($_POST['submit'])){
$user=$_POST['id'];
$update="UPDATE `patients_details` SET `stage` = 7 WHERE `patients_details`.`patient_id` = '$user'; ";;
$res=mysqli_query($conn,$update);
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
    <h5 class="text-center pt-3">Patients details</h5>
<table class="table table-bordered"> <thead> <tr>  <th>Reg_No</th>  <th>Name</th><th>Tel</th> <th>DOB</th><th>gender</th>
						
<?php 
 $sql="SELECT * FROM patients_details p JOIN cate c ON p.stage=c.cate_id  WHERE c.name='Registrar' ";
 $ret=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_array($ret)) {

    ?>
   
							<tr>
                            <td><?php  echo $row['patient_id'];?></td>
    <td><?php  echo $row['names'];?></td>
    <td><?php  echo $row['tel'];?></td>
    <td><?php  echo $row['dob'];?></td>
    <td><?php  echo $row['gender'];?></td>
    <td > 
    <form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row['patient_id'];?>">
    <input type="submit" name="submit"value="Forward"class="btn btn-primary">
</form>  </td>
</tr><?php }?>

						</table>

  </div>
</body>
</html>