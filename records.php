<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
include_once('includes/db.php');
include_once('includes/navbar.php'); 
include_once('includes/sidebar.php');
$user_id=$_GET['id'];
if(isset($_POST['submit'])){
    $medical=$_POST['medical'];
    $sql="UPDATE `patients_details` SET `medical_records` = '$medical' WHERE `patients_details`.`patient_id` = '$user_id'; ";
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

$sql="SELECT * from patients_details where patient_id='$user_id' ";
$check=mysqli_query($conn,$sql);
$query=mysqli_fetch_array($check);

if($query > 0){
?>
<div class="content">
    <h4 class="text-center pt-4">Patient records</h4>
    <div class="card m-5 p-3">
        <h5 class="">
           Name:<?php echo $query['names']?>
        </h5>
        <p>DOB:&nbsp;&nbsp;&nbsp;&nbsp;<?php 
       $d1 = new DateTime($query['dob']);
       $d2 = new DateTime('now');
       
       $diff = $d2->diff($d1);
       
       echo $diff->y;?> </p>
       <form action="" method="post">
       <textarea rows="10" cols="100" name="medical"><?php echo $query['medical_records']?></textarea><br>
       <button class="btn btn-primary mt-2 mb-3" type="submit"  name="submit">Update</button>
       <div>
           <?php 
       if($_SESSION['stage']==='Doctor'){?><a href="event.php?id=<?php echo $user_id?>&ev=1" class="btn btn-success">Send to lab</a>
       <?php
    }
    ?> 
    <?php 
       if($_SESSION['stage']==='Lab'||$_SESSION['stage']==='pharmacy'){?><a href="event.php?id=<?php echo $user_id?>&ev=7" class="btn btn-success">Send to Doctor</a>
       <?php
    }
    ?>  
     <?php 
       if($_SESSION['stage']==='Doctor'){?><a href="event.php?id=<?php echo $user_id?>&ev=3"class="btn btn-warning">Send to pharmacy</a>
       <?php
    }
    ?>
         <?php 
       if($_SESSION['stage']==='Doctor'){?><a href="event.php?id=<?php echo $user_id?>&ev=4"class="btn btn-warning">Admit</a>
       <?php
    }
    ?>
     <?php 
       if($_SESSION['stage']==='Doctor'){?><a href="event.php?id=<?php echo $user_id?>&ev=8" class="btn btn-secondary">Release</a>
       <?php
    }
    ?>
       
    </div>
       </form>
    </div>
</div>
</body>
<?php } ?>
</html>